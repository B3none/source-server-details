<?php

require("vendor/autoload.php");



try {
    $client = \B3none\ServerDetails\Client::create();

    $serverDetails = $client->getServer('retake1.tfrag.dk', '27016');

    print_r($serverDetails);
} catch (Exception $e) {
    echo 'error';
}