<?php session_start(); ?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The best team of the "Hello world"</title>
    <link rel="stylesheet" href="/assets/css/index.css">
    <link rel="shortcut icon" href="/assets/favicon.ico" type="image/x-icon">
</head>
<body>
<div class="wrapper">
    <a href="/andrey/">тут тестится андрей</a>
    <a href="/andrey/">тут ебашит костя</a>
    <a href="/zooadmin/">тут вход админов</a>
    <a href="/login/">Вход</a>

    <?php
    if (isset($_SESSION['user_id'])) { ?>
        <a href="/logout/">выход</a>
    <?php }
    
    ?>
</div>
</body>
