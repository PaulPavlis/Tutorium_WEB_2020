<?php

require_once("../utility/DB.class.php");

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $dbHandler = new DB();

    $returnArray = $dbHandler->getProdukte();

    // var_dump($returnArray);
    echo json_encode($returnArray);
} else {
    echo "No GET Request has been made!";
}
