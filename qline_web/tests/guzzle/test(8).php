<?php

///////////////////////////////////////////////////////////////////////////////
$client->request('POST', '/post', [
    'form_params' => [
        'foo' => 'bar',
        'baz' => ['hi', 'there!']
    ]
]);
///////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////
// Set various headers on a request
$client->request('GET', '/get', [
    'headers' => [
        'User-Agent' => 'testing/1.0',
        'Accept'     => 'application/json',
        'X-Foo'      => ['Bar', 'Baz']
    ]
]);
///////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////
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
///////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////
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
///////////////////////////////////////////////////////////////////////////////

?>