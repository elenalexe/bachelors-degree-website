<?php
    include "config.php";
?>

<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8" />

        <title>The HTML5 Herald</title>
        <meta name="description" content="The HTML5 Herald" />
        <meta name="author" content="SitePoint" />

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
                <form action="./includes/logout.inc.php" method="post" class="alignSelfEnd">
                    <button type="submit" name="logout-submit">Logout</button>
                </form>
            </ul>
        </nav>
        <div class="container" style="margin-top: 100px;">
            <div class="row justify-content-center">
                <div class="col-md-6 col-md-offset-3 center_text_align">
                    <img src="./resources/pic.jpg" alt="" class="profile-image">
                    <h1> <?php echo $lang['numeEu'] ?></h1>
                    <p> <?php echo $lang['tech'] ?></p>
                </div>
            </div>
        </div>

        <div class="footer bg-dark">
            <a href="student.php?lang=en"><?php echo $lang['lang_en'] ?></a> || <a
                href="student.php?lang=ro"><?php echo $lang['lang_ro'] ?></a>

    </body>

</html>