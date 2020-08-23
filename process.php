<?php
include_once 'database.php';
// insert a record in database
 if(isset($_POST['save']))
{	 
	 $name = $_POST['name'];
	 $num_seed = $_POST['number of seed'];
	 $sql = "INSERT INTO seec_record (name,number_of_seed)
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
