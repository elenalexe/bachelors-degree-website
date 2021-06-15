<?php
    include "config.php";
    date_default_timezone_set('Europe/Bucharest');
    include"commentsection/dbh.comments.inc.php";
    include"commentsection/comments.inc.php";
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
                <div class="col-md-12 col-md-offset-3 centerStuff">
                    <h1> <?php echo $lang['titlu'] ?></h1>
                    <p> <?php echo $lang['introd'] ?></p>
                    <div class="center_text_align">
                        <?php
        echo"<form method='POST' action='".setComments($conn)."'>
    <input type='hidden' name='uid' value='Anonymous'>
    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    <textarea name='message'></textarea><br>
    <button type='submit' name='commentSubmit' >Comment</button>
</form>"; 

getComments($conn);
?></div>
                </div>
            </div>
        </div>

        <div class="footer bg-dark">
            <a href="despreLucrare.php?lang=en"><?php echo $lang['lang_en'] ?></a> || <a
                href="despreLucrare.php?lang=ro"><?php echo $lang['lang_ro'] ?></a>
        </div>

    </body>

</html>