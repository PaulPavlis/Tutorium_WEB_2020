<?php
// $siteName = "greeting.php";
?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <!-- Jquery JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>PHP Tutorium</title>
</head>

<body>
    <!-- Inlcude the navbar on all pages  -->
    <?php
    include("inc/nav.php");
    ?>
    <div class="container mt-5">
        Hello <?php
                session_start();
                // unset($_SESSION["session_username"]);
                if (!empty($_SESSION["session_username"])) {
                    echo $_SESSION["session_username"];
                } else {
                    echo "Random Person";
                }
                ?>




        <?php
        //Normal output
        echo "<h3>Normal String</h3>";
        if (!empty(filter_input(INPUT_COOKIE, "testcookie"))) {
            $test1 = filter_input(INPUT_COOKIE, "testcookie");
            echo $test1 . "<br>";
            var_dump($test1) . "<br>";
        }

        echo "<h3>Cookie Array with Serialize</h3>";
        if (!empty(filter_input(INPUT_COOKIE, "testcookie2"))) {
            $test2 = filter_input(INPUT_COOKIE, "testcookie2");
            echo $test2 . "<br>";
            //has to be made back to an array from the string to use it properly
            $testArray2 = unserialize($test2);
            var_dump($testArray2) . "<br>";
        }


        echo "<h3>Cookie Array with Json</h3>";
        if (!empty(filter_input(INPUT_COOKIE, "testcookie3"))) {
            $test3 = filter_input(INPUT_COOKIE, "testcookie3");
            echo $test3 . "<br>";
            //has to be made back to an array from the string to use it properly
            $testArray3 = json_decode($test3);
            var_dump($testArray3) . "<br>";
        }

        echo "<h3>Cookie Assoc. Array with Json</h3>";
        if (!empty(filter_input(INPUT_COOKIE, "testcookie4"))) {
            $test4 = filter_input(INPUT_COOKIE, "testcookie4");
            echo $test4 . "<br>";
            //has to be made back to an array from the string to use it properly
            $testArray4 = json_decode($test4);
            var_dump($testArray4) . "<br>";
        }

        echo "<h3>Object with json</h3>";
        if (!empty(filter_input(INPUT_COOKIE, "testobject"))) {
            $testobjectString = filter_input(INPUT_COOKIE, "testobject");
            echo $testobjectString . "<br>";
            //has to be made back to an object from the string to use it properly
            $testobject = json_decode($testobjectString);
            var_dump($testobject) . "<br>";
        }

        ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>