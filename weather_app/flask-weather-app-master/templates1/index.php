
<?php global $msg; echo $msg;?>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="javsrip.js"></script>

<style>
div.background {
  
  
  background-image:url(img/backg.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  border: 3px solid black;
  opacity: 1;
}

div.transbox {
  margin: 80px;
  background-color: #ffffff;
  border: 2px solid black;
  opacity: 0.8;
  filter: alpha(opacity=60); /* For IE8 and earlier */
}


</style>

<style>
.center
{
	
    margin: auto;
    display: block; 

}
</style>
<div class="background">
  <?php include "header.php";
session_start();
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>


<div  ><img  align="top" name="slide" width="700" height="300" class="center"></div>


<script>
var i = 0; 			// Start Point
var images = [];	// Images Array
var time = 2000;	// Time Between Switch
	 
// Image List
images[0] = "logo.JPG";


// Change Image
function changeImg(){
	document.slide.src = images[i];

	// Check If Index Is Under Max
	if(i < images.length - 1){
	  // Add 1 to Index
	  i++; 
	} else { 
		// Reset Back To O
		i = 0;
	}

	// Run function every x seconds
	setTimeout("changeImg()", time);
}

// Run function when page loads
window.onload=changeImg;	

</script>



<div class="transbox">
<br>
<center><font color='#008000' size='5' style="text-shadow: 2px 2px 5px red";>This website allows you to view current and predicted weather<br>In order to start using please register first and then login.</font></center>
 </div>
<div style="margin-top: 1%">

<?php include "footer.php";?>
</div>
