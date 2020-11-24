
<?php
$servername='localhost'; 
$username='root'; 
$password=''; 
$dbname="seed_record";

// Check connection
$link=mysqli_connect($servername,$username,$password,"$dbname");
if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_error());
}

?>

