<!-- ----------------------------------------------------------------------------------------------- -->
<?php

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;

$onRedirect = function(
    RequestInterface $request,
    ResponseInterface $response,
    UriInterface $uri
) {
    echo 'Redirecting! ' . $request->getUri() . ' to ' . $uri . "\n";
};

$res = $client->request('GET', '/redirect/3', [
    'allow_redirects' => [
        'max'             => 10,        // allow at most 10 redirects.
        'strict'          => true,      // use "strict" RFC compliant redirects.
        'referer'         => true,      // add a Referer header
        'protocols'       => ['https'], // only allow https URLs
        'on_redirect'     => $onRedirect,
        'track_redirects' => true
    ]
]);

echo $res->getStatusCode();
// 200

echo $res->getHeaderLine('X-Guzzle-Redirect-History');
// http://first-redirect, http://second-redirect, etc...

echo $res->getHeaderLine('X-Guzzle-Redirect-Status-History');
// 301, 302, etc...

?>
<!-- ----------------------------------------------------------------------------------------------- -->
<!-- ----------------------------------------------------------------------------------------------- -->
<?php

$client->request('POST', '/post', [
    'form_params' => [
        'foo' => 'bar',
        'baz' => ['hi', 'there!']
    ]
]);

?>
<!-- ----------------------------------------------------------------------------------------------- -->
<!-- ----------------------------------------------------------------------------------------------- -->
<?php

// Set various headers on a request
$client->request('GET', '/get', [
    'headers' => [
        'User-Agent' => 'testing/1.0',
        'Accept'     => 'application/json',
        'X-Foo'      => ['Bar', 'Baz']
    ]
]);

?>
<!-- ----------------------------------------------------------------------------------------------- -->
<!-- ----------------------------------------------------------------------------------------------- -->
<?php

$client = new GuzzleHttp\Client(['headers' => ['X-Foo' => 'Bar']]);

// Will send a request with the X-Foo header.
$client->request('GET', '/get');

// Sets the X-Foo header to "test", which prevents the default header
// from being applied.
$client->request('GET', '/get', ['headers' => ['X-Foo' => 'test']]);

// Will disable adding in default headers.
$client->request('GET', '/get', ['headers' => null]);

// Will not overwrite the X-Foo header because it is in the message.
use GuzzleHttp\Psr7\Request;
$request = new Request('GET', 'http://foo.com', ['X-Foo' => 'test']);
$client->send($request);

// Will overwrite the X-Foo header with the request option provided in the
// send method.
use GuzzleHttp\Psr7\Request;
$request = new Request('GET', 'http://foo.com', ['X-Foo' => 'test']);
$client->send($request, ['headers' => ['X-Foo' => 'overwrite']]);

?>
<!-- ----------------------------------------------------------------------------------------------- -->
<!-- ----------------------------------------------------------------------------------------------- -->
<?php

$client->request('POST', '/post', [
    'multipart' => [
        [
            'name'     => 'foo',
            'contents' => 'data',
            'headers'  => ['X-Baz' => 'bar']
        ],
        [
            'name'     => 'baz',
            'contents' => fopen('/path/to/file', 'r')
        ],
        [
            'name'     => 'qux',
            'contents' => fopen('/path/to/file', 'r'),
            'filename' => 'custom_filename.txt'
        ],
    ]
]);

?>
<!-- ----------------------------------------------------------------------------------------------- -->
<!-- ----------------------------------------------------------------------------------------------- -->
<?php

$client->request('POST', '/post', [
    'multipart' => [
        [
            'name'     => 'foo',
            'contents' => 'data',
            'headers'  => ['X-Baz' => 'bar']
        ],
        [
            'name'     => 'baz',
            'contents' => fopen('/path/to/file', 'r')
        ],
        [
            'name'     => 'qux',
            'contents' => fopen('/path/to/file', 'r'),
            'filename' => 'custom_filename.txt'
        ],
    ]
]);

?>
<!-- ----------------------------------------------------------------------------------------------- -->
<!-- ----------------------------------------------------------------------------------------------- -->
<?php

// Send a GET request to /get?foo=bar
$client->request('GET', '/get', ['query' => ['foo' => 'bar']]);
// Send a GET request to /get?foo=bar
$client->request('GET', '/get?abc=123', ['query' => ['foo' => 'bar']]);

?>
<!-- ----------------------------------------------------------------------------------------------- -->
<!-- ----------------------------------------------------------------------------------------------- -->
<?php

$client->request('GET', '/stream/20', ['sink' => '/path/to/file']);

$resource = fopen('/path/to/file', 'w');
$client->request('GET', '/stream/20', ['sink' => $resource]);

$resource = fopen('/path/to/file', 'w');
$stream = GuzzleHttp\Psr7\stream_for($resource);
$client->request('GET', '/stream/20', ['save_to' => $stream]);

?>
<!-- ----------------------------------------------------------------------------------------------- -->
<!-- ----------------------------------------------------------------------------------------------- -->
<?php

//Method
/*
The request method can only be set when instantiating a request
*/
//Path
$request->setPath('/path');
//Query
$request->getQuery()->set('query', '123');
//Protocol version
$request->setProtocolVersion('1.1');
//Header
$request->setHeader('X-Header', 'header');
//Entity Body
$request->setBody('data'); // Only available with PUT, POST, PATCH, DELETE

?>
<!-- ----------------------------------------------------------------------------------------------- -->
<!-- ----------------------------------------------------------------------------------------------- -->
<?php

$request = $client->createRequest('COPY', 'http://example.com/foo', array(
    'Destination' => 'http://example.com/bar',
    'Overwrite'   => 'T'
));
$response = $request->send();

?>
<!-- ----------------------------------------------------------------------------------------------- -->
<!-- ----------------------------------------------------------------------------------------------- -->
<?php

$request = new Guzzle\Http\Message\Request('GET', 'http://www.example.com?foo=bar&abc=123');

$query = $request->getQuery();
echo "{$query}\n";
// >>> foo=bar&abc=123

$query->remove('abc');
echo "{$query}\n";
// >>> foo=bar

$query->set('foo', 'baz');
echo "{$query}\n";
// >>> foo=baz

$query->add('foo', 'bar');
echo "{$query}\n";
// >>> foo%5B0%5D=baz&foo%5B1%5D=bar

?>
<!-- ----------------------------------------------------------------------------------------------- -->
<!-- ----------------------------------------------------------------------------------------------- -->
<?php

$query->useUrlEncoding(false);
echo "{$query}\n";
// >>> foo[0]=baz&foo[1]=bar

?>
<!-- ----------------------------------------------------------------------------------------------- -->
<!-- ----------------------------------------------------------------------------------------------- -->
<?php

$request = new Request('GET', 'http://httpbin.com/cookies');
// addHeader will set and append to any existing header values
$request->addHeader('Foo', 'bar');
$request->addHeader('foo', 'baz');
// setHeader overwrites any existing values
$request->setHeader('Test', '123');

// Request headers can be cast as a string
echo $request->getHeader('Foo');
// >>> bar, baz
echo $request->getHeader('Test');
// >>> 123

// You can count the number of headers of a particular case insensitive name
echo count($request->getHeader('foO'));
// >>> 2

// You can iterate over Header objects
foreach ($request->getHeader('foo') as $header) {
    echo $header . "\n";
}

// You can get all of the request headers as a Guzzle\Http\Message\Header\HeaderCollection object
$headers = $request->getHeaders();

// Missing headers return NULL
var_export($request->getHeader('Missing'));
// >>> null

// You can see all of the different variations of a header by calling raw() on the Header
var_export($request->getHeader('foo')->raw());

?>
<!-- ----------------------------------------------------------------------------------------------- -->
<!-- ----------------------------------------------------------------------------------------------- -->
<?php

$request = $client->post('/post');
// Set an overwrite any previously specified value
$request->setPostField('foo', 'bar');
// Append a value to any existing values
$request->getPostFields()->add('foo', 'baz');
// Remove a POST field by name
$request->removePostField('fizz');

// Add a file to upload (forces multipart/form-data)
$request->addPostFile('my_file', '/path/to/file', 'plain/text');
// Remove a POST file by POST key name
$request->removePostFile('my_other_file');

?>
<!-- ----------------------------------------------------------------------------------------------- -->
<!-- ----------------------------------------------------------------------------------------------- -->
<?php

Route::get('/', function () {
 
    $client = app('GuzzleClient')(['base_uri' => 'http://httpbin.org/']);
 
    $request = $client->get('get',[
        'query' => ['foo'=>'bar', 'baz' => 'baz2'] ,
        'headers' => [ 'accept' =>  'application/json']
    ]);
    $response = json_decode((string) $request->getBody());
    return response()->json($response);
});

?>
<!-- ----------------------------------------------------------------------------------------------- -->
<!-- ----------------------------------------------------------------------------------------------- -->
<?php

$client = new \GuzzleHttp\Client();
$body['name'] = "Testing";
$url = "http://my-domain.com/api/v1/post";
$response = $client->createRequest("POST", $url, ['body'=>$body]);
$response = $client->send($response);
return $response;

?>
<!-- ----------------------------------------------------------------------------------------------- -->
<!-- ----------------------------------------------------------------------------------------------- -->
<?php

// Where $request is an Illuminate\Http\Request instance
$request->all(); // Returns array with all elements.
$request->only(['key1', 'key2']); // Returns array with selected items
$request->except(['key1']); // Returns array with everything except key1.

?>
<!-- ----------------------------------------------------------------------------------------------- -->
<!-- ----------------------------------------------------------------------------------------------- -->
<?php

function storeDate(Request $request) 
{
	$authorName = 'Put your value here';

	$myNewData = $request->request->add(['author' => $authorName]);

	return $request->all();
}

?>
<!-- ----------------------------------------------------------------------------------------------- -->
<!-- ----------------------------------------------------------------------------------------------- -->
<?php

$myNewData = $request->request->add([
		'author' => $authorName
		'author2' => $authorName2
	]);

?>
<!-- ----------------------------------------------------------------------------------------------- -->
<!-- ----------------------------------------------------------------------------------------------- -->
<?php

use Proxy\Proxy;
use Proxy\Adapter\Guzzle\GuzzleAdapter;
use Proxy\Filter\RemoveEncodingFilter;
use Zend\Diactoros\ServerRequestFactory;

// Create a PSR7 request based on the current browser request.
$request = ServerRequestFactory::fromGlobals();

// Create a guzzle client
$guzzle = new GuzzleHttp\Client();

// Create the proxy instance
$proxy = new Proxy(new GuzzleAdapter($guzzle));

// Add a response filter that removes the encoding headers.
$proxy->filter(new RemoveEncodingFilter());

// Forward the request and get the response.
$response = $proxy->forward($request)->to('http://example.com');

// Output response to the browser.
(new Zend\Diactoros\Response\SapiEmitter)->emit($response);

?>
<!-- ----------------------------------------------------------------------------------------------- -->
<!-- ----------------------------------------------------------------------------------------------- -->
<?php

$response = $proxy
->forward($request)
->filter(function ($request, $response, $next) {
    // Manipulate the request object.
    $request = $request->withHeader('User-Agent', 'FishBot/1.0');

    // Call the next item in the middleware.
    $response = $next($request, $response);

    // Manipulate the response object.
    $response = $response->withHeader('X-Proxy-Foo', 'Bar');

    return $response;
})
->to('http://example.com');

?>
<!-- ----------------------------------------------------------------------------------------------- -->