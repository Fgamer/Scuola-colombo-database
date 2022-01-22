<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Menu_stylesheet.css">
    <link rel="stylesheet" href="mainpage_stylesheet.css">
    <link rel="stylesheet" href="temi_counter.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mea+Culpa&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>

    <?php require 'Menu.php' ?>
    <form class="Temi_counter" action="Temi.php" method="get"> <br>
        <input type="text" name="theme" id="theme_counter" placeholder="inserisci qui il tuo tema (non preoccuparti della formattazione)">
        <input type="submit" class="submit_button">
    </form>
</body>


</html>