<?php
/** @var string $content */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/app.js"></script>
    <link rel="stylesheet" href="css/style.css">

    <title>Document</title>

</head>
<body>

    <nav>
        <a href="<?= url("default", "index")?>">Main</a>
        <a href="<?= url("default", "about-us", ["id" => 1])?>">About Us</a>
        <a href="<?= url("register", "index")?>">Register</a>
    </nav>

    <div class="container">
        <?= $content ?>
    </div>

    <footer>
        Custom Text
    </footer>

</body>
</html>