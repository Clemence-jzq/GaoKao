<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS -->
    <link rel="stylesheet" href="frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="frontend/css/base.css">
    <link rel="stylesheet" href="frontend/css/header.css">
    <?php
    if (isset($extraCSS)) {
        echo $extraCSS;
    }
    ?>
    <!-- JS -->
    <script src="frontend/js/jquery-3.7.1.min.js"></script>
    <script src="frontend/js/bootstrap.min.js"></script>
    <?php
    if (isset($extraJS)) {
        echo $extraJS;
    }
    ?>
</head>

<body>
    <nav class="navbar">
        <div class="container-fluid justify-content-between">
            <div class="nav_left">
                <a href="home.php">
                    <img src="frontend/imgs/book.svg" alt="Logo" id="logo">
                </a>
                <p>祝前程似锦！</p>
            </div>
        </div>
    </nav>