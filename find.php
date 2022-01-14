<?php
require 'vendor/autoload.php';
$client = new MongoDB\Client;
$companydb = $client->companydb;
$collection = $companydb->content;

//$document = $collection->findOne(['name'=>'zaini']);
$document = $collection->find(
    [
        'age' => 24
    ],
    [
        'projection' => ['name' => 1]
    ]
);

foreach ($document as $doc){
    print_r($doc);
}