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

        <div class="body">
            <div class="body-inner">
                <div class="body-inner-text">
                    <div class="noutati-link center_text_align">
                        <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4925238/"
                            target="blank"><?php echo $lang['titl1'] ?></a>
                        <br>
                        <a target="blank"
                            href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4056332/?fbclid=IwAR1E0Awcyrozru6FDrKiGxwErC8nZmMkZJ2btBqvcWONEJJiFRGm5HHusE8"><?php echo $lang['titl2'] ?></a>
                    </div>
                    <div class="news-content">
                        <img src="./resources/nihms587716f1.jpg" alt="" class="news-image" />
                    </div>
                </div>
            </div>
        </div>
        <div id='content' class=" center_text_align">
            <table id='books' cellpadding='10px' style="text-align:left;">
                <thead>
                    <tr>
                        <th key='aut' class="tr">Autor</th>
                        <th key='ti' class="tr">Titlu</th>
                        <th key='an' class="tr">An</th>
                        <th key='rev' class="tr">Revista</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
        <script>
        let xmlContent = '';
        let tableBooks = document.getElementById('books');
        fetch('books.xml').then((response) => {
            response.text().then((xml) => {
                xmlContent = xml;
                let parser = new DOMParser();
                let xmlDOM = parser.parseFromString(xmlContent, 'application/xml');
                let books = xmlDOM.querySelectorAll('book');

                books.forEach(bookXmlNode => {
                    let row = document.createElement('tr');

                    //author
                    let td = document.createElement('td');
                    td.innerText = bookXmlNode.children[0].innerHTML;
                    row.appendChild(td);

                    //title
                    td = document.createElement('td');
                    td.innerText = bookXmlNode.children[1].innerHTML;
                    row.appendChild(td);

                    //year
                    td = document.createElement('td');
                    td.innerText = bookXmlNode.children[2].innerHTML;
                    row.appendChild(td);

                    //magazine
                    td = document.createElement('td');
                    td.innerText = bookXmlNode.children[3].innerHTML;
                    row.appendChild(td);

                    tableBooks.children[1].appendChild(row);
                });
            });
        });
        </script>
        <div class="footer bg-dark">
            <a href="noutati.php?lang=en"><?php echo $lang['lang_en'] ?></a>
            ||
            <a href="noutati.php?lang=ro"><?php echo $lang['lang_ro'] ?></a>
    </body>

</html>