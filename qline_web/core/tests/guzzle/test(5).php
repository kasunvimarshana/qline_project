<?php

$client = new GuzzleHttpClient();

$promise = $client->requestAsync('GET', 'https://api.github.com/users/hannesvdvreken');

$promise->then(function (ResponseInterface $response) {
    $profile = json_decode($response->getBody(), true);
    // Do something with the profile.
});

$promise->wait();

?>