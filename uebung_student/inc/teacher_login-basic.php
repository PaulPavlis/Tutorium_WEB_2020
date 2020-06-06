<?php
$user_logins = ["sarah" => "123456", "markus" => "phpisgreat", "dominik" => "supersafe4k"];
var_dump($user_logins);
?>


<div class="container mt-3">
    <form action="" method="post">
        <div class="form-group">
            <label for="username_field">Username</label>
            <input type="text" class="form-control" id="username_field" name="username">
        </div>
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