<script src='https://www.google.com/recaptcha/api.js'></script>

<link rel="stylesheet" type="text/css" href="style.css">
<?php include 'link.php'?>
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
  margin-bottom: 13px;
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
<div style="margin-top: -10px">
	<?php include "header.php";
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
</div>


<center>

<legend> <h3 class="container shadow" style="background-color: green ; color: orange; margin-top: -10px">  Register </h3></legend> </center>
<div class="transbox">
<?php global $nam; echo $nam; ?> 
<?php global $error; echo $error; ?>
<center><font size="4" >
<form action= "reg_action.php" method= "post" id="myform"
style="margin-top: 50px;height: 450px" class="container shadow"  >


<font color="black" style="text-shadow: 2px 2px 5px green"><b><i>Firstname:</i></b></font color="red" style="text-shadow: 2px 2px 5px green">
<input type="text" style="box-shadow: " name="firstname" value="" />
<br>
<br>
<font color="black" style="text-shadow: 2px 2px 5px green"><b><i>Lastname:</i></b></font color="red" style="text-shadow: 2px 2px 5px green">
<input type="text" name="lastname" value="" />
<br>
<br>
<font color="black" style="text-shadow: 2px 2px 5px green"><b><i>Email-id :</i></b></font color="red" style="text-shadow: 2px 2px 5px green">
<input type="text" name="username" value="" />
<br>
<br>
<font color="black" style="text-shadow: 2px 2px 5px green"><b><i>Password:</i></b></font color="red" style="text-shadow: 2px 2px 5px green">
<input type="password" name="password" value="" />
<br>
<br>
<div class="g-recaptcha" data-sitekey="6LeD3hEUAAAAAKne6ua3iVmspK3AdilgB6dcjST0"></div> 
<br>
<br>
</div>
<div style="margin-left: 600px ;margin-top: -10px"><input type="submit" class="btn btn-success" name="submit"   style="margin-left: 50px;padding: 10px 50px"></div>
</form>
</font>
</center>

<script type= "text/javascript" >
 var frmvalidator = new Validator("myform"); 
 frmvalidator.addValidation("firstname","req","Please enter student firstname"); 
 frmvalidator.addValidation("firstname","maxlen=50");
 frmvalidator.addValidation("lastname","req","Please enter student lastname"); 
 frmvalidator.addValidation("lastname","maxlen=50");
 frmvalidator.addValidation("username","req","Please enter student username"); 
 frmvalidator.addValidation("username","maxlen=50");
 frmvalidator.addValidation("password","req","Please enter student password"); 
 frmvalidator.addValidation("password","minlen=6","Password must not be less than 6 characters.");

</script>

<?php include "footer.php" ;?>

</div>
