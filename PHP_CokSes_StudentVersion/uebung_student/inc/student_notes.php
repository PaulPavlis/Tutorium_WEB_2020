<?php
//If the post request with delete session arrives, clear the session
if (filter_has_var(INPUT_POST, "clear_session")) {
    // echo "Clear Session";
    unset($_SESSION["logged_Username"]);
    //read index.php for this. Basically reload the page so that the other one
    //will be included
    header("Location: ");
}
?>

<!-- To make an post request to delete the session -->
<form method="post">
    <input type="submit" class="btn btn-danger" name="clear_session" value="Log out" />
</form>

<!-- Include the js (with ajax) -->
<!-- My JS -->
<script src="js/ajax_call.js"></script>

<input type="text" class="input-group input-group-text mt-3" id="filter_input" placeholder="Use me to filter" />

<ul class="list-group mt-1" id="notelist">
    <li class="list-group-item">Test li</li>
</ul>