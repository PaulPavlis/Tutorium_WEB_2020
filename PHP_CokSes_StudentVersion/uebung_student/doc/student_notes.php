<?php
// To access the data use the method 
// getJsonData() from the file db.php in db_handler
// this should kind of simulates the data you get from a database
require("db_handler/db.php");

// $studentArrayString = getJsonData();
// echo $studentArrayString;

//Decode the String received to an array
$studentArray = json_decode(getJsonData());
// var_dump($studentArray);

//use not empty if you want to output no data when and empty string is given in the value
// if (!empty(filter_input(INPUT_GET, "filtervalue"))) {
//use filterhasvar or isset if you still want to update the filters with an emptry string
//which will output all the students

if (filter_has_var(INPUT_GET, "filtervalue")) {
    // echo "Filtervalue is da";
    $filtervalue = filter_input(INPUT_GET, "filtervalue");
    // echo strlen($filtervalue) . "<br>";
    //Get the length of the filtervalue to compare it afterwards
    $length = strlen($filtervalue);
    //Loop through all the students
    foreach ($studentArray as $student) {
        // echo $student->Name;
        //Check if the substring of the name from 0 to the length is equals to the filervalue
        //Example filtervalue = Be; Benjamin (with substring) will go to Be and equals the search
        if (substr($student->Name, 0, $length) == $filtervalue) {
            // echo $student->Name;
            //Output the data in a neat list item so that you dont have to do anything in js
            echo "<li class='list-group-item'>$student->Name - Note: $student->Note</li>";
        }
    }
} else {
    echo "No filter";
}
