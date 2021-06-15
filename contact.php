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
            <div class="row justify-content-center ">
                <div class="col-md-6 col-md-offset-3 center_text_align">
                    <p> <br> <?php echo $lang['add'] ?></p>
                    <p> <br> <?php echo $lang['mail'] ?></p>
                    <p> <br>
                        <?php echo $lang['tel'] ?></p>
                    <p>
                        <br>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2849.9926192216362!2d26.01443561560827!3d44.41279717910249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b20040688f3f05%3A0xda6e1cbf5494046a!2sBloc%20D6%2C%20Aleea%20Valea%20Salciei%203%2C%20Bucure%C8%99ti!5e0!3m2!1sen!2sro!4v1593966476068!5m2!1sen!2sro"
                            width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe></p>

                </div>
            </div>
        </div>

        <div class="footer bg-dark">
            <a href="contact.php?lang=en"><?php echo $lang['lang_en'] ?></a> || <a
                href="contact.php?lang=ro"><?php echo $lang['lang_ro'] ?></a>
    </body>

</html>