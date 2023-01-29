<?php
$api_url = 'http://localhost/dolibarr/api/index.php/products/'.$_GET['id'].'?DOLAPIKEY=PayeTonKawaNov10';

$json_data = file_get_contents($api_url);

$response_data = json_decode($json_data);

var_dump($response_data);