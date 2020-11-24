<?php
include_once 'database.php';
// insert a record in database
 if(isset($_POST['save']))
{	 
	 $name = $_POST['name'];
	 $num_seed = $_POST['number_of_seed'];
	 $sql = "INSERT INTO seec_record (name,number_of_seed)
	 VALUES ('$name','$num_seed')";
	 if (mysqli_query($conn, $sql)) {
			echo "New record created successfully !";
	 } else {
			echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}




 if(isset($_SUP['signup']))
{	 
	 $fname = $_SUP['username'];
	 $lname = $_SUP['lastname'];
	$email=$_SUP["email_address"];
	$passcode=$_SUP["password"];
	$gender=$_sup["gender"];	
	$birthdate=$_SUP["birthdate"]; 
	$sql = "INSERT INTO seec_record (username,lastname,email_address,password,gender,birthdate)
	 VALUES ('$user_name','$last_name',$passcode,$gender,$birhdate)";
	 if (mysqli_query($conn, $sql)) {
			echo "New record created successfully !";
	 } else {
			echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);


}

?>
