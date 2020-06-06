<?php
// echo $siteName;

$link = $_SERVER['PHP_SELF'];
$link_array = explode('/', $link);
$pageName = end($link_array);
// echo $pageName;

?>

<nav class="mt-5">
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
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