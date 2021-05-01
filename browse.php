<html>
<head>
<link  href="navbar.css" rel="stylesheet">
<style>
.search-box{
	position:absolute;
	margin: 0;
	top: 50%;
	left: 50%;
        -ms-transform: translate(-50%, -50%);
  	transform: translate(-50%, -50%); 

h1{

	color: red;
}
<style>
</style>
</head>

<!-- search-bar-script -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
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
        } else{
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

<!-- navbar -->

<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script>
$(function(){
	  $("#nav-placeholder").load("nav.html");
});
</script>

</head>
<body>
<!--Navigation bar-->
<div id="nav-placeholder">

</div>

<!--end of Navigation bar-->
<div class="search-box">
<h1 style="color:blue;"> SEARCH SEEDS HERE!  </h1> 
<input type="text"  autocomplete="off" placeholder="search seeds" >

<div class="result"><div>
</div>
</body>
</html>
