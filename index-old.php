<?php
//echo phpinfo();
require 'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
$client = new MongoDB\Client;

//$resul3 = $client->dropDatabase('newdb'); // drop database

//list database
/*foreach ($client->listDatabaseNames() as $db){
    var_dump($db);
}*/

$companydb = $client->companydb;

//drop collection
/*$result2 = $companydb->dropCollection('empcollection');
var_dump($result2);*/

//list collection
/*foreach ($companydb->listCollections() as $collection){
    print_r($collection);
}*/

// create collection
$result1 = $companydb->createCollection('content');

var_dump($result1);