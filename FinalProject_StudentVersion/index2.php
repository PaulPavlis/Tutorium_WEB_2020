<?php
session_start();

if (!empty(filter_input(INPUT_GET, "warenkorb"))) {
    unset($_SESSION["totalPrice"]);
}

if (!empty(filter_input(INPUT_GET, "price"))) {
    $price = filter_input(INPUT_GET, "price");

    if (empty($_SESSION["totalPrice"])) {
        $_SESSION["totalPrice"] = 0;
    }

    $_SESSION["totalPrice"] += $price;
    // echo "<h3>Total Price: " . $_SESSION["totalPrice"] . "</h3>";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Web Engineering Termin 1</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="res/css/produktestyle.css">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <?php
    if (!empty(filter_input(INPUT_GET, "menu"))) {
        if (filter_input(INPUT_GET, "menu") == "shop") {
    ?>
            <!-- My JS -->
            <script src="res/js/myScript2.js"></script>
    <?php
        }
    }
    ?>

    <!-- My CSS -->
    <link rel="stylesheet" href="res/css/myStyle.css">


</head>

<body>
    <header class="page-header">
        <img src="res/pics/Logo.jpg" alt="Logo">
        <div class="float-right">
            <button type="button" class="btn btn-outline-info" onclick="location.href='index2.php?warenkorb=leeren'">Warenkorb leeren</button>
            <img src="res/pics/Cart.png" alt="Cart">
            <span class="badge badge-info"><?php
                                            if (!empty($_SESSION["totalPrice"])) {
                                                echo $_SESSION["totalPrice"];
                                            } else {
                                                echo "0";
                                            }
                                            ?> €</span>
        </div>
        <?php
        include("inc/navi2.inc.php");
        ?>
    </header>

    <div class="container">
        <main>
            <h1>Willkommen im Smart Home Online Shop!</h1>
            <div id="inputProdukte">

            </div>
        </main>
    </div>

</body>

</html>