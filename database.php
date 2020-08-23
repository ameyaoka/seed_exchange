
<?php
$servername='localhost'; 
$username='root'; 
$password=''; 
$dbname="seed_data";

// Check connection
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn)
{
    die("ERROR: Could not connect. " . mysqli_error());
}

?>

