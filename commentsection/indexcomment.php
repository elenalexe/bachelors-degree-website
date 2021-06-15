<?php
    date_default_timezone_set('Europe/Bucharest');
    include'comments.inc.php';
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="UFT-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="stylecomments.css">
    </head>

    <body>

    </body>
    <?php
echo"<form method='POST' action='".setComments()."'>
    <input type='hidden' name='uid' value='Anonymous'>
    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    <textarea name='message'></textarea><br>
    <button type='submit' name='submit' >Comment</button>
</form>";
?>

</html>