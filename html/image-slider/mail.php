
<?php
$link = mysql_connect('localhost', 'root', 'Shadows98');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
?>
