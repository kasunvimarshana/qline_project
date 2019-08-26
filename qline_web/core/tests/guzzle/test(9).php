<?php

//////////////////////////////////////////////////////////////////////
// You can check to see if a request or response has a body using the getBody() method:
$response = GuzzleHttp\get('http://httpbin.org/get');
if ($response->getBody()) {
    echo $response->getBody();
    // JSON string: { ... }
}
//////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////
// You can change the body used in a request or response using the setBody() method:
use GuzzleHttp\Stream\Stream;
$request = $client->createRequest('PUT', 'http://httpbin.org/put');
$request->setBody(Stream::factory('foo'));
//////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////
// The body of a request or response can be cast to a string or you can read and write bytes off of the stream as needed.
use GuzzleHttp\Stream\Stream;
$request = $client->createRequest('PUT', 'http://httpbin.org/put', ['body' => 'testing...']);
echo $request->getBody()->read(4);
// test
echo $request->getBody()->read(4);
// ing.
echo $request->getBody()->read(1024);
// ..
var_export($request->eof());
// true
//////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////
// Create a request but don't send it immediately
$request = $client->createRequest('GET', 'http://httpbin.org/get');
//////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////
// Create a request using a completely custom HTTP method
$request = $client->createRequest('MOVE', 'http://httpbin.org/move', ['exceptions' => false]);
echo $request->getMethod();
// MOVE
$response = $client->send($request);
echo $response->getStatusCode();
// 405
//////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////
GET:	$client->get('http://httpbin.org/get', [/** options **/])
POST:	$client->post('http://httpbin.org/post', [/** options **/])
HEAD:	$client->head('http://httpbin.org/get', [/** options **/])
PUT:	$client->put('http://httpbin.org/put', [/** options **/])
DELETE:	$client->delete('http://httpbin.org/delete', [/** options **/])
OPTIONS:	$client->options('http://httpbin.org/get', [/** options **/])
PATCH:	$client->patch('http://httpbin.org/put', [/** options **/])
//////////////////////////////////////////////////////////////////////
    
//////////////////////////////////////////////////////////////////////
$request = $client->createRequest('GET', 'http://httbin.org');

// You can change the path of the request using setPath():
$request->setPath('/get');
echo $request->getPath();
// /get
echo $request->getUrl();
// http://httpbin.com/get

// You can change the scheme of the request using the setScheme() method:
$request = $client->createRequest('GET', 'http://httbin.org');
$request->setScheme('https');
echo $request->getScheme();
// https
echo $request->getUrl();
// https://httpbin.com/get

$request = $client->createRequest('GET', 'http://httbin.org');
$request->setPort(8080);
echo $request->getPort();
// 8080
echo $request->getUrl();
// https://httpbin.com:8080/get

// Set the port back to the default value for the scheme
$request->setPort(443);
echo $request->getUrl();
// https://httpbin.com/get
//////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////
$request = $client->createRequest('GET', 'http://httbin.org');
$query = $request->getQuery();
$query['foo'] = 'bar';
$query['baz'] = 'bam';
$query['bam'] = ['test' => 'abc'];

echo $request->getQuery();
// foo=bar&baz=bam&bam%5Btest%5D=abc
echo $request->getQuery()['foo'];
// bar
echo $request->getQuery()->get('foo');
// bar
echo $request->getQuery()->get('foo');
// bar
var_export($request->getQuery()['bam']);
// array('test' => 'abc')

foreach ($query as $key => $value) {
    var_export($value);
}

echo $request->getUrl();
// https://httpbin.com/get?foo=bar&baz=bam&bam%5Btest%5D=abc
//////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////
$request->setHost('www.google.com');
echo $request->getHost();
// www.google.com
echo $request->getUrl();
// https://www.google.com/get?foo=bar&baz=bam
//////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////
$request = $client->createRequest('GET', 'http://httpbin.org/get?baz=bar');
echo $request->getResource();
// /get?baz=bar
//////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////
$request = $client->createRequest('GET', '/');
$config = $request->getConfig();
//////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////
$client->get('/', [
    'config' => [
        'curl' => [
            CURLOPT_HTTPAUTH => CURLAUTH_NTLM,
            CURLOPT_USERPWD  => 'username:password'
        ]
    ]
]);
//////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////
$json = $response->json();
$xml = $response->xml();
//////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////
$response = GuzzleHttp\get('http://httpbin.org/get');
echo $response->getEffectiveUrl();
// http://httpbin.org/get

$response = GuzzleHttp\get('http://httpbin.org/redirect-to?url=http://www.google.com');
echo $response->getEffectiveUrl();
// http://www.google.com
//////////////////////////////////////////////////////////////////////

?>