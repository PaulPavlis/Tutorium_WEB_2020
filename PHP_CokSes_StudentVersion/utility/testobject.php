<?php

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


class test_class
{
    private $name;
    public $lastname;

    function __construct($nameIn, $lastNameIn)
    {
        $this->name = $nameIn;
        $this->lastname = $lastNameIn;
    }

    function foobar()
    {
        $testing_array = ["asdfsdf", "345", 34];
        foreach ($testing_array as $value) {
            echo "$value<br>";
        }
    }

    function getName()
    {
        return $this->name . " " . $this->lastname;
    }
}

// $testobject = new test_class("Jakob", "Huber");
// $testobject->foobar();
// echo $testobject->lastname . "<br>";
// echo $testobject->getName() . "<br>";
