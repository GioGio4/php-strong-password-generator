<?php
session_start();
$password_generate = $_SESSION["valid-generated-password"];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

</body>

<div class="container">
    <div class="row text-center my-4">
        <div class="col-12">
            <?php
      if ($_SESSION["valid-generated-password"] = true) {
        echo '<p class="mt-2">La tua password generata:</p>' . '<h2 class="bg-success text-light py-2">' . $password_generate . '</h2>';
      };
      ?>
            <a href="./index.php">Torna indietro</a>
        </div>
    </div>
</div>

</html>