<!Doctype html> <html>
 <head>
<style>
* {box-sizing: border-box;}

body{
margin:0;
font-family:ARIAL,Helvetica,san-serief;
}


/*add a green background color to the top navigation bar */
.topnav {
	  overflow: hidden;
  background-color: #0af030;
}

/* Style the links inside the navigation bar */
.topnav a {
	  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
	  background-color: #0d0c0a;
  color: black;
}

/* Style the "active" element to highlight the current page */
.topnav a.active {
	  background-color: #0af030;
  color: black;
}

/* Style the search box inside the navigation bar */
.topnav input[type=text] {
	  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 16px;
  font-size: 17px;
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
  .topnav input[type=text] {
	    border: 1px solid #ccc;
  }
}

.result{
	        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
	        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
	        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
	        background: #f2f2f2;
    }




</style>

<script  src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	    $('.search-box input[type="text"]').on("keyup input", function(){
	        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
	            $.get("search.php", {term: inputVal}).done(function(data){
	                // Display the returned data in browser
                resultDropdown.html(data);
            });
        }
           else{
	            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
	        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});


</script>
</head>
<body>

<div class="topnav">
	<a class="active" href="home.html">Home</a>
  	<a class="active"href="about.html" >about</a>
	<a class="active" href="contact.html" >Contact</a>
</div>	
	<input type="text" placeholder="Search..">
<div class="result"></div>
<br>
<title> seed exchange   </title>    
<form method="post" action="process.php">
	name:<br>
	<input type ="text" name="name">
<br>
	number of seeds:<br>
	<input type ="text" id="num_seed"name="sum_seed"><br>
<br>
	<input type='submit' name='save' value="Donate">
<br>

	
</form>

</body>
</html>
