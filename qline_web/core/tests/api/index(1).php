///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
<?php

class WpApi
{
    protected $url = 'http://site.com/wp-json/wp/v2/';

    public function importPosts($page = 1)
    {
        $posts = collect($this->getJson($this->url . 'posts/?_embed&filter[orderby]=modified&page=' . $page));
        foreach ($posts as $post) {
            $this->syncPost($post);
        }
    }

    protected function getJson($url)
    {
        $response = file_get_contents($url, false);
        return json_decode( $response );
    }
}

?>
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
<?php

protected function syncPost($data)
{
    $found = Post::where('wp_id', $data->id)->first();

    if (! $found) {
        return $this->createPost($data);
    }

    if ($found and $found->updated_at->format("Y-m-d H:i:s") < $this->carbonDate($data->modified)->format("Y-m-d H:i:s")) {
        return $this->updatePost($found, $data);
    }
}

protected function carbonDate($date)
{
    return Carbon::parse($date);
}

?>
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Creating a Scheduled Command
/*
The final step to complete the import is to build a scheduled task to automatically pull posts down. I created a command named Importer through Artisan:
*/
php artisan make:console Importer

/*
Then in the handle method:
*/
$page = ($this->argument('page')) ? $this->argument('page') : 1;
$this->wpApi->importPosts($page);

/*
Finally, in Console/Kernel set this to run every minute:
*/
$schedule->command('import:wordpress')->everyMinute();
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////