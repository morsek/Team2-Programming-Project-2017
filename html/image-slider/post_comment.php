 <?php


//Define your host here.
$hostname = "localhost";

//Define your database username here.
$username = "root";

//Define your database password here.
$password = "Shadows98";

//Define your database name here.
$dbname = "comments";

 $conn = mysql_connect($hostname, $username, $password);
 
 if (!$conn)
 
 {
 
 die('Could not connect: ' . mysql_error());
 
 }
 
 mysql_select_db($dbname, $conn);


?>