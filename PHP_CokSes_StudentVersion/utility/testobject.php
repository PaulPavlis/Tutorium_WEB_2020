<?php
//Simple function
// function foo()
// {
//     echo "foo called<br>";
// }

// function bar($times)
// {
//     // echo "bar called $times<br>";
//     for ($i = 0; $i < $times; $i++) {
//         echo "bar called $i<br>";
//     }
// }

// foo();
// bar(3);

//Simple class
class test_class
{
    private $name;
    public $lastname;

    //Constructor syntax
    function __construct($nameIn, $lastNameIn)
    {
        //Dont forget the $this-> before the variable names in the class
        //That way you can access the variables of the current object (in java/c# this
        //does not need to be done)
        $this->name = $nameIn;
        $this->lastname = $lastNameIn;
    }

    function foobar()
    {
        $testing_array = ["asdfsdf", "345", 34];
        //Loop through the whole array
        foreach ($testing_array as $value) {
            echo "$value<br>";
        }
    }
    //Output private and public variable
    function getName()
    {
        return $this->name . " " . $this->lastname;
    }
}

// $testobject = new test_class("Jakob", "Huber");
// $testobject->foobar();
// echo $testobject->lastname . "<br>";
// echo $testobject->getName() . "<br>";
