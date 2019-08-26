<?php
require_once "vendor/autoload.php";
 
use GuzzleHttp\Client;
 
try {
 
    $client = new Client([
        // Base URI is used with relative requests
        'base_uri' => 'https://www.googleapis.com/youtube/v3/',
    ]);
 
    $response = $client->request('GET', 'videos', [
        'query' => [
            'part' => 'snippet',
            'id' => 'APaCwk77hCc', //YouTube video id
            'type' => 'video',
            'key' => 'YOUR_DEVELOPER_KEY',
        ],
        'verify' => false,
    ]);
 
    if($response->getStatusCode() == 200) {
        $body = $response->getBody();
        $arr_body = json_decode($body);
        $arr_tags = $arr_body->items[0]->snippet->tags;
        print_r($arr_tags);
    }
} catch(Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>