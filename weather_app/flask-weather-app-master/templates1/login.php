<style type="text/css">
div.background {
  background-image:url(img/backg.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  border: 3px solid black;
  opacity: 1;
}

div.transbox {
  margin-left: 250px;
  margin-right: 250px;
  margin-top: 5px;
  margin-bottom: 10px;
  background-color: #ffffff;
  border: 1px solid black;
  opacity: 0.6;
}

div.transbox p {
  margin: 5%;
  font-weight: bold;
  color: #000000;
}

</style>
<div class="background">
	
<?php include "header.php"; 
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<link rel="stylesheet" type="text/css" href="style.css">
<?php include 'link.php'?>
<center>

<legend> <h3 class="container shadow" style="background-color: green ; color: orange">Login</h3></legend> 
</center>
<div class="transbox">
<br></center>
<?php global $nam; echo $nam; ?>
<?php global $error; echo $error; ?>
<br><center><font size="4" >
<form action="login_action.php" method="post" id="myform"  class="container shadow" style="height: 430px">
<br><b><i><font color="black" style="text-shadow: 2px 2px 5px green " >Email-id :</i></b></font color="red" style="text-shadow: 2px 2px 5px green"></b></i>
<input type="text" name="username" value="" > 
<br><br><b><i><font color="black" style="text-shadow: 2px 2px 5px green ">Password :</i></b></font color="red" style="text-shadow: 2px 2px 5px green"></b></i>
<input type="password" name="password" value="" >
</div>
<input type="submit" class="btn btn-success" name="login" value="login"  style="margin-left: 700px;padding: 10px 50px">
</form></font>

</center><script type="text/javascript" > 
var frmvalidator = new Validator("myform");
frmvalidator.addValidation("username" , "req" , "Please Enter Username");
frmvalidator.addValidation("username", "maxlen=50");
frmvalidator.addValidation("password", "req" , "Please Enter Password");
</script>

<?php include "footer.php"; ?>
</div>


