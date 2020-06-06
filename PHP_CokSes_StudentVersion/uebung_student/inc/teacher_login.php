<?php
$alert_username = false;
$alert_password = false;
$alert_kombination = false;
$username = "";
$password = "";

$user_logins = ["sarah" => "123456", "markus" => "phpisgreat", "dominik" => "supersafe4k"];
var_dump($user_logins);


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty(filter_input(INPUT_POST, "username"))) {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    } else {
        $alert_username = true;
    }

    if (!empty(filter_input(INPUT_POST, "password"))) {
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
    } else {
        $alert_password = true;
    }

    //Check if both are set
    if (!empty($username) && !empty($password)) {
        //Check first if the array has the username (if not exit) and afterwards
        //check if the password in the array and the given password are ident
        if (!empty($user_logins[$username]) && $user_logins[$username] == $password) {
            echo "Should not be seen";
            //Set session so the other page will be included
            $_SESSION["logged_Username"] = $username;
            //read index.php for this. Basically reload the page so that the other one
            //will be included
            header("Location: ");
        } else {
            $alert_kombination = true;
        }
    }
}
?>


<div class="container mt-3">
    <form action="" method="post">

        <?php
        if ($alert_kombination) {
        ?>

            <div class="alert alert-danger" role="alert">
                Kombination aus Username und Passwort ist falsch
            </div>

        <?php
        }
        ?>




        <?php
        if ($alert_username) {
        ?>

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
                Password vergessen
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
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>