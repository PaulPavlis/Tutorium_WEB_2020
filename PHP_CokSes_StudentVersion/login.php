<?php
// Alte nicht so gute Variante. Auf jeder Seite einen siteName deklarieren und diesen 
// dann in der Navbar abfragen und so dass active bestimmen. Bessere Lösung in nav.php
// $siteName = "login.php";

// Alerts für die Ausgabe - Müssen oben deklariert werden, da diese sonst nicht vorkommen
// außer im Fehlerfall und es sonst unten einen Fehler gibt im HTML (außer man überprüft dort)
// mit isset oder so
$alert_username = false;
$alert_password = false;
$username = "";

//Einfacher Cookie welcher 1 Stunde ab jetzt besteht
$test = "hello cookie";
setcookie("testcookie", $test, time() + 3600);

//Delete
setcookie("testcookie", $test, time() - 60);

//Check if the variable is empty so that you dont get an name missing error
if (!empty(filter_input(INPUT_COOKIE, "testcookie"))) {
    echo filter_input(INPUT_COOKIE, "testcookie");
} else {
    echo "not set";
}

// Normal Array
$test2 = array("assd", 234, "dsf", "", null, "P", time());
// echo $test2; //Not possible -> use var_dump
$test2[2] = 123; // override
$test2[] = "last"; //add to end
// var_dump($test2); //output array or object (or anything)

// ugly php method - dont use this - makes an array/object to a string so it can be transported
$testString2 = serialize($test2);
// echo $testString2;
setcookie("testcookie2", $testString2, time() + 3600);

// use this beautiful json code :) - makes an array/object to a string so it can be transported
$testString3 = json_encode($test2);
setcookie("testcookie3", $testString3, time() + 3600);

// Associatives Array
$test4 = array("test" => "hier", "dasfg" => 123, 1345 => "dsf");
// echo $test4["test"];
$test4["test"] = "dort"; //change the value of "test" to "dort"
$test4["last"] = "entry"; //add something (to last)
$testString4 = json_encode($test4);
setcookie("testcookie4", $testString4, time() + 3600);

// Has to be included or else all will fail (require)
require("utility/testobject.php");

// create a new object from the above file
$testingObject = new test_class("Sarah", "Huckeby-Sanders");
// pass object to other site
setcookie("testobject", json_encode($testingObject), time() + 3600);

// If a POST request is made
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "POST Request<br>";
    //Unsafe and a bit ugly
    // echo $_GET["username"];
    // if (!empty($_GET["username"])) {
    //     echo $_GET["username"];
    // }

    // Nicer and safer - Test if the post request has a variable username
    if (!empty(filter_input(INPUT_POST, "username"))) {
        // echo filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
        // FILTER_SANITIZE_STRING -> gets rid of special harmful characters like scripts
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    } else {
        $alert_username = true;
    }

    if (!empty(filter_input(INPUT_POST, "password"))) {
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
    } else {
        $alert_password = true;
    }

    // If both is set, log in
    if (!empty($username) && !empty($password)) {
        echo "Session set";
        // To start the session - has to be done
        session_start();
        // Access it directly via Superglobal
        $_SESSION["session_username"] = $username;
        // Move to different page
        header("Location: greeting.php");
    }
}

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
        <form action="" method="post">
            <!-- Tests if the alert is set to true (if the request has the value in it-->
            <?php
            if ($alert_username) {

            ?>
                <!-- Outputs it -->
                <div class="alert alert-danger" role="alert">
                    Username vergessen
                </div>

            <?php
            }
            ?>

            <div class="form-group">
                <label for="username_field">Username</label>
                <input type="text" class="form-control" id="username_field" name="username" value="<?php
                                                                                                    if (!empty($username)) {
                                                                                                        echo $username;
                                                                                                    }
                                                                                                    ?>">
            </div>

            <?php
            if ($alert_password) {

            ?>
                <div class="alert alert-danger" role="alert">
                    Passwort vergessen
                </div>

            <?php
            }
            ?>

            <div class="form-group">
                <label for="password_field">Password</label>
                <input type="password" class="form-control" id="password_field" name="password">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="useless_button" name="useless">
                <label class="form-check-label" for="useless_button">Useless af</label>
            </div>
            <button type="submit" class="btn btn-primary" name="button" value="test">Login</button>
        </form>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>