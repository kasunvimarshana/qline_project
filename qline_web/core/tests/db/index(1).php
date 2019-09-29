<!-- ---------------------------------------------------------------------------------------- -->
<?php

class AddSlugToPostsTable extends Migration
{
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('slug')->unique()->after('title');
        });
    }

    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
}

?>
<!-- ---------------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------- -->
<?php

public function up()
{
    // Step 1: add the slug field without unique()
    Schema::table('posts', function (Blueprint $table) {
        $table->string('slug')->after('title');
    });

    // Step 2: Update each row to populate the slug field
    DB::table('posts')->get()->each(function ($post) {
        DB::table('posts')->where('id', $post->id)->update(['slug' => str_slug($post->title)]);
    });

    // Step 3: add the unique constraint to slugs
    Schema::table('posts', function (Blueprint $table) {
        $table->unique('slug');
    });
}

?>
<!-- ---------------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------- -->
<?php

public function up()
{
    // Step 1: add the slug field without unique()
    Schema::table('posts', function (Blueprint $table) {
        $table->string('slug')->after('title');
    });

    // Step 2: Update each row to populate the slug field
    DB::table('posts')->get()->each(function ($post) {
        DB::table('posts')->where('id', $post->id)->update(['slug' => str_slug($post->title)]);
    });

    // Step 3: add the unique constraint to slugs
    Schema::table('posts', function (Blueprint $table) {
        $table->unique('slug');
    });
}

?>
<!-- ---------------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------- -->
<?php

$table->enum('is_approved', array('0','1'))->default('0');
$table->timestamp('last_activity')->useCurrent();
$table->timestamp('something_at')->default(DB::raw('CURRENT_TIMESTAMP'));

?>
<!-- ---------------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------- -->
<?php

Schema::table('users', function(Blueprint $table) {
    $table->dateTime('last_activity');
});

\DB::statement('UPDATE users SET last_activity = updated_at');

?>
<!-- ---------------------------------------------------------------------------------------- -->