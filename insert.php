<!Doctype html> 
<html>
<head>
<style>
* {
box-sizing: border-box;
}

body{
margin:0;
font-family:ARIAL,Helvetica,san-serief;
}

/* sign up */

	/* Full-width input fields */
input[type=text], input[type=password] {
	  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

	/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
	  background-color: #ddd;
  outline: none;
}

	/* Set a style for all buttons */
button {
	  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
	  opacity:1;
}

	/* Extra styles for the cancel button */
.cancelbtn {
	  padding: 14px 20px;
  background-color: #f44336;
}

	/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
	  float: left;
  width: 50%;
}

	/* Add padding to container elements */
.container {
	  padding: 16px;
}

	/* The Modal (background) */
.modal {
	  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

	/* Modal Content/Box */
.modal-content {
	  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

	/* Style the horizontal ruler */
hr {
	  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
	/* The Close Button (x) */
.close {
	  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
	  color: #f44336;
  cursor: pointer;
}

	/* Clear floats */
.clearfix::after {
	  content: "";
  clear: both;
  display: table;
}




	/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
	  .cancelbtn, .signupbtn {
	     width: 100%;
  }
}
 

/*navagation bar
/*add a green background color to the top navigation bar */
.topnav {
	  overflow: hidden;
  background-color: #2bd9ab;
}

/* Style the links inside the navigation bar */
.topnav a {
	  float: right;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
	  background-color: #070ede
  color: black;
}

/* Style the "active" element to highlight the current page */
.topnav a.active {
	  background-color: #2bd9ab;
  color: black;
}


/* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally */
@media screen and (max-width: 600px) {
	  .topnav a, .topnav input[type=text] {
	    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  }


#myInput {
	background-image: url('/css/searchicon.png');
background-position: 10px 10px;
background-repeat: no-repeat;
width: 100%;
font-size: 16px;
padding: 12px 20px 12px 40px;
border: 1px solid #ddd;
margin-bottom: 12px;

}

#myTable {
	border-collapse: collapse;
width: 100%;
border: 1px solid #ddd;
font-size: 18px;
}

#myTable th, #myTable td {
	text-align: left;
padding: 12px;
}

#myTable tr {
	border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
	background-color: #f1f1f1;
}
</style>

</style>
</head>
<body>

<div class="topnav">
	
	<h1>SEED EXCHANGE </h2>
	<a class="active" href="home.html">home</a>
  	<a class="active"href="about.html" >about</a>
	<a class="active" onclick="document.getElementById('id01').style.display='block'" style="width:auto;" >signup</a>
</div>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for seeds.." title="Type in a name">


<?php
$conn=mysqli_connect("localhost","root","")
or die("unable to connect to mysql");

$selected=mysqli_select_db($conn,"seed_record")
or die("could not connect");

$query=mysqli_query($conn,"SELECT name FROM seed_available") or die (mysqli_error());
//if we get someresults we show them in table data
if(mysqli_num_rows($query)>0):
?>

<table id="myTable">
<tr class="header">
<th style="width:60%;
background-color:orange;">seeds available</th>
<?php
	
	//loopinh
	while($row=mysqli_fetch_object($query)):?>
<tr>
	<td><?php echo $row->name;?>
<tr>
<?php endwhile;?>
</table>
<?php
		//no result shown
else: ?>
<h3>no result found</h3>
<?php endif;?>

<script>
function myFunction() {
	var input, filter, table, tr, td, i, txtValue;
input = document.getElementById("myInput");
filter = input.value.toUpperCase();
table = document.getElementById("myTable");
tr = table.getElementsByTagName("tr");
for (i = 0; i < tr.length; i++) {
	td = tr[i].getElementsByTagName("td")[0];
if (td) {
	txtValue = td.textContent || td.innerText;
if (txtValue.toUpperCase().indexOf(filter) > -1) {
	tr[i].style.display = "";
} else {
	tr[i].style.display = "none";
}
} 
}
}
</script>


<!--form for signup-->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      
	
      <label for="email"><b>name</b></label>
      <input type="text" placeholder="Enter your name" name="fname" required>


	<label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>

  </form>
</body>
</html>
