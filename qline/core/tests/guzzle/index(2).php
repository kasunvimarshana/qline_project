<!-- ------------------------------------------------------------------------------------ -->
<?php

use GuzzleHttp\Client;

$client = new Client();
$response = $client->request(
    'POST', 
    'https://xyz.acme.dev/api/upload', 
    [
        'multipart' => [
            [
                'name' => 'upload_file',
                'contents' => fopen('path/to/file', 'r')
            ],
            // ... more fields
        ]
    ]
);

?>
<!-- ------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------ -->
<?php

use GuzzleHttp\Psr7\Request;

$payload = 'My payload';
$request = new Request(
    'POST', 
    'https://xyz.acme.dev/api/upload', 
    [], 
    $payload
);
$response = $client->send($request);

?>
<!-- ------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------ -->
<?php

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\MultipartStream;

$multipart = new MultipartStream([
    [
        'name' => 'upload_file',
        'contents' => fopen('path/to/file', 'r')
    ],
    // ... more fields
]);
$request = new Request(
    'POST', 
    'https://xyz.acme.dev/api/upload', 
    [], 
    $multipart
);
$response = $client->send($request);

?>
<!-- ------------------------------------------------------------------------------------ -->