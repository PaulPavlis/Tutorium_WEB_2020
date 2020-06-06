<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <!-- Jquery JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Uebung - Teacher Login</title>
</head>

<body>
    <div class="container mt-3">

        <?php
        //Start the session here instead of two seperate times in the php files
        session_start();
        // Check if the User is logged in and display the correct page
        // Maybe it is not the best way to do it like this, because if you set the 
        // Session variable inside the include file, you have to reload the page again
        // so that the correct one is included.accordion
        // If you have no session you get displayed the form
        // Then you send the form with username and password
        // Page reloads and since there is still no session, the login form will be displayed
        // In the login form the username and password is correct and you set the Session
        // Because the page will not be reloaded normally, and the login form is already 
        // included, it will not show the student_notes.php file until you reload.
        if (empty($_SESSION["logged_Username"])) {
            echo "<h3>Teacher login</h3>";
            include("inc/teacher_login.php");
        } else {
            echo "<h3>Student notes</h3>";
            include("inc/student_notes.php");
        }

        ?>

    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>