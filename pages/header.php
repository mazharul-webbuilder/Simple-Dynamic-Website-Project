<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/<?php echo $customCss;?>">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="action.php?page=home" class="navbar-brand">BRAND</a>
        <button class="navbar-toggler" type="button" data-bs-target="#menu" data-bs-toggle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li><a href="action.php?page=home" class="nav-link">Home</a></li>
                <li><a href="action.php?page=calculator" class="nav-link">Calculator</a></li>
                <li><a href="action.php?page=series" class="nav-link">Series</a></li>
                <li><a href="action.php?page=product" class="nav-link">Product</a></li>
                <li><a href="action.php?page=blog" class="nav-link">Blogs</a></li>
                <li class="dropdown"><a href="" class="nav-link dropdown-toggle" data-bs-target="#dropdown" data-bs-toggle="dropdown">More</a>
                    <ul class="dropdown-menu dropdown-menu-dark bg-dark" id="dropdown">
                        <li><a href="" class="dropdown-item">Facebook</a></li>
                        <li><a href="" class="dropdown-item">Twitter</a></li>
                        <li><a href="" class="dropdown-item">LinkedIN</a></li>
                        <li><a href="" class="dropdown-item">Skype</a></li>
                    </ul>
                </li>
                <li><a href="" class="nav-link">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>