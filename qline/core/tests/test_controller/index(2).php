<!-- ----------------------------------------------------------------------------------------- -->
<?php

$decodedContents = json_decode($contents, true);

    if (json_last_error() !== JSON_ERROR_NONE) {

      throw new RuntimeException(

        'Error trying to decode response: ' .

        json_last_error_msg()

      );

    }

    return $decodedContents;

?>
<!-- ----------------------------------------------------------------------------------------- -->
<!-- ----------------------------------------------------------------------------------------- -->

Function json_decode

string	$json	JSON data to parse
boolean	$assoc = false	When true, returned objects will be converted into associative arrays.
integer	$depth = 512	User specified recursion depth.
integer	$options = 0	Bitmask of JSON decode options.

<!-- ----------------------------------------------------------------------------------------- -->
<!-- ----------------------------------------------------------------------------------------- -->

echo $response->getStatusCode(); // 200
echo $response->getProtocolVersion(); // 1.1

<!-- ----------------------------------------------------------------------------------------- -->
<!-- ----------------------------------------------------------------------------------------- -->
<?php

$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'http://httpbin.org/get');

echo $response->getStatusCode(); // 200
echo $response->getReasonPhrase(); // OK
echo $response->getProtocolVersion(); // 1.1

?>
<!-- ----------------------------------------------------------------------------------------- -->
<!-- ----------------------------------------------------------------------------------------- -->

use GuzzleHttp\Psr7;

$resource = fopen('/path/to/file', 'r');
$stream = Psr7\stream_for($resource);
echo $stream->getMetadata('uri');
// /path/to/file
var_export($stream->isReadable());
// true
var_export($stream->isWritable());
// false
var_export($stream->isSeekable());
// true

<!-- ----------------------------------------------------------------------------------------- -->
<!-- ----------------------------------------------------------------------------------------- -->
<?php

$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => $this->app_url_api,
]);

$response = $client->request('GET', 'logins/do-login', [
    'debug' => false,
    'verify' => false,
    'config' => [],
    'curl' => [],
    'headers' => [],
    'query' => [
        'code' => '0admin',
        'password' => 'password'
    ],
    'form_params' => [],
    //'multipart' => []
]);

if($response->getStatusCode() == 200) {
    //$body = $response->json();
    $body = $response->getBody();
    $contents = $body->getContents();
    $contents = json_decode($contents, false);
    dd($contents);
}

?>
<!-- ----------------------------------------------------------------------------------------- -->