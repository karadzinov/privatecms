<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Custom CMS</title>
    <!-- MDB icon -->
    <link rel="icon" href="/img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
    <!-- MDB -->
    <link rel="stylesheet" href="/css/mdb.min.css" />
    <link rel="stylesheet" href="/css/custom.css" />
</head>
<body>
<!-- Navbar -->
<nav data-mdb-navbar-init class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
    <!-- Container wrapper -->
    <div class="container">
        <!-- Navbar brand -->
        <a class="navbar-brand me-2" href="https://mdbgo.com/">
            <img
                src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp"
                height="16"
                alt="MDB Logo"
                loading="lazy"
                style="margin-top: -1px;"
            />
        </a>

        <!-- Toggle button -->
        <button
            data-mdb-collapse-init
            class="navbar-toggler"
            type="button"
            data-mdb-target="#navbarButtonsExample"
            aria-controls="navbarButtonsExample"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarButtonsExample">
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Custom CMS</a>
                </li>
            </ul>
            <!-- Left links -->

            <?php
            if(isset($_SESSION['user'])) {
                echo '<button data-mdb-ripple-init type="button" class="btn btn-link px-3 me-2">
                '.$_SESSION['user']['first_name'].' '. $_SESSION['user']['last_name'] . '
                </button>';

                echo ' <a href="/logout.php" data-mdb-ripple-init type="button" class="btn btn-primary px-3 me-2">
                    Logout
                </a>';
            } else {
                echo '<div class="d-flex align-items-center">
                <a href="/login.php" data-mdb-ripple-init type="button" class="btn btn-link px-3 me-2">
                    Login
                </a>
                <a href="/register.php" data-mdb-ripple-init type="button" class="btn btn-primary me-3">
                    Register
                </a>
            </div>';
            }

            ?>

        </div>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->