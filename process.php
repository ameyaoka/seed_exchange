<?php
include_once 'database.php';
// insert a record in database
 if(isset($_POST['save']))
{	 
	 $name = $_POST['sname'];
	 $num_seed = $_POST['qseeds'];
	 $sql = "INSERT INTO seed_record (name,quantity)
	 VALUES ('$name','$num_seed')";
	 if (mysqli_query($conn, $sql)) {
			echo "New record created successfully !";
	 } else {
			echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}

?>
