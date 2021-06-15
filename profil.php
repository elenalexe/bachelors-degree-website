<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8" />

        <title>The HTML5 Herald</title>
        <meta name="description" content="The HTML5 Herald" />
        <meta name="author" content="SitePoint" />


        <link rel="stylesheet" type="text/css" href="./styles.css">

    </head>

    <body>
        <nav>
            <div class="nav">
                <ul class="nav-ul">
                    <li class="nav-ul-element">
                        <a href="./index.html" class="nav-ul-link">Acasa</a>
                    </li>
                    <li class="nav-ul-element">
                        <a href="./noutati.html" class="nav-ul-link">Noutăți</a>
                    </li>
                    <li class="nav-ul-element">
                        <a href="./despreLucrare.html" class="nav-ul-link">Despre lucrare</a>
                    </li>
                    <li class="nav-ul-element">
                        <a href="./profil.html" class="nav-ul-link">Profil student</a>
                    </li>
                    <li class="nav-ul-element">
                        <a href="./coordonator.html" class="nav-ul-link">Coordonator</a>
                    </li>
                    <li class="nav-ul-element">
                        <a href="./contact.html" class="nav-ul-link">Contact</a>
                    </li>
                    <form action="./includes/logout.inc.php" method="post" class="alignSelfEnd">
                        <button type="submit" name="logout-submit">Logout</button>
                    </form>
                </ul>
            </div>
            <div class="body">
                <div class="body-inner profile-section center_text_align">
                    <div class="body-inner-text center_text_align">
                        <h1 class="body-inner-heading">Profil</h1>
                        <img src="./resources/pic.jpg" alt="" class="profile-image">
                        <p class="profile-section-paragraph"><strong>Nume:</strong> Alexe Simona Elena</span></p>
                        <p class="profile-section-paragraph "><strong>Tehnologii de interes:</strong> Java & Android
                            Development</span></p>
                    </div>
                </div>
            </div>
        </nav>
        <div class="footer bg-dark">
            <a href="profil.php?lang=en"><?php echo $lang['lang_en'] ?></a> ||
            <a href="profil.php?lang=ro"><?php echo $lang['lang_ro'] ?></a>
    </body>

</html>