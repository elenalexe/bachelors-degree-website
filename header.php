<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
    <?php 
include "config.php";
?>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>

        <link rel="stylesheet" href="bootstrap-4.5.0-dist/css/bootstrap.min.css" />
        <style type="text/css">
        .footer {
            left: 0;
            position: fixed;
            bottom: 0;
            text-align: center;
            color: white;
            widith: 100%;
        }
        </style>
        <link rel="stylesheet" type="text/css" href="./styles.css">

    </head>

    <body>

        <header>
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <ul class="navbar-nav customNav">
                    <li class="nav-item active">
                        <a class="nav-link" href="firstPage.php"> <?php echo $lang['home'] ?></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="noutati.php"> <?php echo $lang['news'] ?></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="despreLucrare.php"> <?php echo $lang['paper'] ?></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="student.php"> <?php echo $lang['student'] ?></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="coordonator.php"> <?php echo $lang['coord'] ?></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="contact.php"> <?php echo $lang['contact'] ?></a>
                    </li>
                    <form action="includes/login.inc.php" method="post">
                        <input type="text" name="mailuid" placeholder="Username/Email">
                        <input type="password" name="pwd" placeholder="Password">
                        <button type="submit" name="login-submit">Login</button>
                    </form>

                    <form action="signup.php" method="post">
                        <button type="signup" name="signup-submit">Sign Up</button>

                    </form>
                    <form action="./includes/logout.inc.php" method="post" class="alignSelfEnd">
                        <button type="submit" name="logout-submit">Logout</button>
                    </form>
                </ul>
            </nav>


        </header>