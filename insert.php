<?php
require 'vendor/autoload.php';
$client = new MongoDB\Client;

$companydb = $client->companydb;
//$result1 = $companydb->createCollection('content');
$collection = $companydb->content;
/*$insert = $collection->insertOne(
    ['name' => 'zain' , 'age' => 24, 'job' => 'software engineer']
);*/

/*$insert = $collection->insertMany(
    [
        ['name' => 'zaini', 'age' => 24, 'job' => 'software engineer1'],
        ['name' => 'zaina', 'age' => 23, 'job' => 'software engineer2'],
        ['name' => 'zainab', 'age' => 21, 'job' => 'software engineer3']
    ]
);
var_dump($insert->getInsertedIds());*/
