<?php
//old method - every page has to declare this and then you can check for it
// echo $siteName;

//With this way, you can implement this code one time in the navbar and it works
//It gets the last element of the URL like greeting.php
$link = $_SERVER['PHP_SELF'];
$link_array = explode('/', $link);
$pageName = end($link_array);
// echo $pageName;

?>

<nav class="mt-5">
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <!-- Check if the pageName equals the name. If it does, add the active
            keyword to highlight the active site -->
                <a class="nav-link <?php if ($pageName == "login.php") {
                                        echo "active";
                                    } ?>" href="login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php
                                    if ($pageName == "greeting.php") {
                                        echo "active";
                                    }
                                    ?>" href="greeting.php">Greeting</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php
                                    if ($pageName == "ajax_sender.php") {
                                        echo "active";
                                    }
                                    ?>" href="ajax_sender.php">Ajax Sender</a>
            </li>
        </ul>
    </div>
</nav>