<?php

require("vendor/autoload.php");

$a = new \B3none\ServerDetails\Helpers\ServerHelper();
try {
    $serverDetails = $a->getServerDetails('retake1.tfrag.dk', '27016');

    print_r($serverDetails);
} catch (Exception $e) {
    echo 'error';
}
//retake1.tfrag.dk:27016