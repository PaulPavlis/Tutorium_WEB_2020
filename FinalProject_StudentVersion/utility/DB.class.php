<?php

require_once("../conf/properties.php");
require_once("../model/Produkt.class.php");


class DB
{
    private $conn = null;

    private function connectToDb()
    {
        $this->conn = new mysqli(HOST, DBUSER, DBPWD, DBNAME);
        // echo "connection established";
    }

    function getProdukte()
    {
        $this->connectToDb();

        $produktArray = array();

        if ($this->conn) {
            // echo "connection is da";

            if (!mysqli_errno($this->conn)) {

                $query = "SELECT * FROM produkte";

                $result = $this->conn->query($query);

                // var_dump($result);

                while ($dbObject = mysqli_fetch_object($result)) {
                    // var_dump($dbObject);

                    $newProdukt = new Produkt(
                        $dbObject->Produktid,
                        $dbObject->Name,
                        $dbObject->Preis,
                        $dbObject->Beschreibung,
                        $dbObject->Bewertung
                    );

                    // var_dump($newProdukt);
                    array_push($produktArray, $newProdukt);
                }

                mysqli_free_result($result);
            } else {
                echo "Error with connection. Error message: " . mysqli_error($this->conn);
            }
        } else {
            echo "Error with connection (is null)";
        }

        // var_dump($produktArray);
        return $produktArray;
    }
}

// $myDb = new DB();
// // $myDb->connectToDb();
// $myDb->getProdukte();
