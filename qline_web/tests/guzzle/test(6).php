<?php

$client = new \GuzzleHttp\Client([
    'base_uri' => 'http://'.$ip,
    'debug' => true,
    'headers' => [
        'Host' => $host,
    ],
]);

?>

<?php

$client = new \GuzzleHttp\Client([
    'base_uri' => 'http://127.0.0.1',
    'headers' => [
        'Host' => 'mycoolsite.com'
    ]
]);
$response = $client->get('/test');

?>

<?php

$request = new \GuzzleHttp\Psr7\Request('GET', 'http:/127.0.0.1/', [
  'Host' => 'mycoolsite.com'
]);
$response = (new GuzzleHttp\Client())->send($request, ['debug' => true]);

?>

<?php

$ip = '127.0.0.1';
$host = 'mycoolhost.com';
$path = '/some/path/to/file.html';

$client = new \GuzzleHttp\Client([
    'base_uri' => 'http://'.$ip,
    'debug' => true,
    'headers' => [
        'Host' => $host,
    ],
]);

$responseWhichDoesWork = $client->get($path, ['headers' => ['Host'=>$host]]);
/**
 * seems that the 'moving' of the headers into '_conditional' options, creating the request (with the wrong host) 
 * and later checking if the (host)header is already set, which it is, 
 * causes the (correct) host header to be skipped. This then results in a wrong request
 * (or atleaast a request with the IP host header and not the name)
 */
$responseDoesNotWork = $client->get($path);

?>