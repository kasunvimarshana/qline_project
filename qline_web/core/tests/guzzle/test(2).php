<?php
use Guzzle\Http\Client,
    Guzzle\Common\Exception\MultiTransferException;

$client = new Client('http://graph.facebook.com');

try {
    $responses = $client->send(array(
        $client->get('/' . urlencode('http://tech.vg.no')),
        $client->get('/' . urlencode('http://www.vg.no')),
    ));

    foreach ($responses as $response) {
        echo $response->getBody();
    }
} catch (MultiTransferException $e) {
    echo 'The following exceptions were encountered:' . PHP_EOL;
    foreach ($e as $exception) {
        echo $exception->getMessage() . PHP_EOL;
    }
}
?>