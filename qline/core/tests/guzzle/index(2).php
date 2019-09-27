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
<!-- ------------------------------------------------------------------------------------ -->
<?php

$request = new GuzzleHttp\Psr7\Request(
    'POST',
    $uri,
    [
       'Authorization' => 'Bearer ' . $token,
       'Content-Type' => 'application/x-www-form-urlencoded'

    ],
    http_build_query($form_params, null, '&')
);

?>
<!-- ------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------ -->
<?php

$post_data = array(
  'title' => 'My work',
  'description' => 'This is a request created using curl',
  'submit' => 'submit',
);
$response = $http_client->post('/create.php', array(), $post_data)->send();

?>
<!-- ------------------------------------------------------------------------------------ -->