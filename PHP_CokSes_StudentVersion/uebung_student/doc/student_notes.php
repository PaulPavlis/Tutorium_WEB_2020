<?php
// To access the data use the method 
// getJsonData() from the file db.php in db_handler
// this should kind of simulates the data you get from a database
require("db_handler/db.php");

// $studentArrayString = getJsonData();
// echo $studentArrayString;

$studentArray = json_decode(getJsonData());
// var_dump($studentArray);

// if (!empty(filter_input(INPUT_GET, "filtervalue"))) {
if (filter_has_var(INPUT_GET, "filtervalue")) {
    // echo "Filtervalue is da";
    $filtervalue = filter_input(INPUT_GET, "filtervalue");
    // echo strlen($filtervalue) . "<br>";
    $length = strlen($filtervalue);
    foreach ($studentArray as $student) {
        // echo $student->Name;
        if (substr($student->Name, 0, $length) == $filtervalue) {
            // echo $student->Name;
            echo "<li class='list-group-item'>$student->Name - Note: $student->Note</li>";
        }
    }
} else {
    echo "No filter";
}
