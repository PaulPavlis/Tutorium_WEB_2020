<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <!-- Jquery JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- My JS -->
    <script src="js/myScript.js"></script>
    <title>PHP Tutorium</title>
</head>

<body>
    <?php
    include("inc/nav.php");
    ?>
    <div class="container mt-5">
        <h1 id="test">Hello, Ajax!</h1>
        <button class="btn btn-primary mt-5" id="loadAjax">Click me</button>
        <p id="inputAjax"></p>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>