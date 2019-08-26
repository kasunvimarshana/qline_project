<?php

$client = new GuzzleClient(['timeout' => 12.0]); // see how i set a timeout

//
$requestPromises = [];
$sitesArray = SiteEntity->getAll(); // returns an array with objects that contain a domain 

foreach($sitesArray as $site)
{
    $requestPromises[$site->getDomain()] = $client->getAsync('http://' . $site->getDomain());
}

$results = GuzzlePromise\settle($requestPromises)->wait();

foreach($results as $domain => $result)
{
    $site = $sitesArray[$domain];
    $this->logger->info('Crawler FetchHomePages: domain check ' . $domain);

    if($result['state'] === 'fulfilled')
    {
        $response = $result['value'];
        if($response->getStatusCode() == 200)
        {
            $site->setHtml( $response->getBody() );
        }
        else{
            $site->setHtml( $response->getStatusCode() );
        }
    }
    else if($result['state'] === 'rejected'){ // notice that if call fails guzzle returns is as state rejected with a reason.

        $site->setHtml('ERR: ' . $result['reason'] );
    }
    else{
        $site->setHtml('ERR: unknown exception ' );
        $this->logger->err('Crawler FetchHomePages: unknown fetch fail domain: ' . $domain  );
    }

    $this->entityManager->persist($site); // this is a call to Doctrines entity manager
}

?>