<style>
div.background {
 
 background: linear-gradient(to right, #f1f2b5, #135058);
  border: 3px solid black;
  opacity: 0.9;
  width: 100%;
  height: 100%;
  
}

div.transbox {
  margin-left: 200px;
  margin-right: 200px;
  background:linear-gradient(to right, #feac5e, #c779d0, #4bc0c8) ;
  border: 2px solid black;
  opacity: 70;
  filter: alpha(opacity=100);
  padding-left: 10px;
  /* For IE8 and earlier */
}
</style>


<div class="background">

<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>
<br>
<br>

<link rel="stylesheet" type="text/css" href="style.css">
<?php include 'link.php'?>
<div class="transbox">
<center><h3 style="color: orange;background-color: green" class="container shadow"> Change Password</h3></center>
<h4 style="color:#e60808;"><?php global $nam; echo $nam;?> </h4> 
<?php global $error; echo $error;?>                  

<form action="change_pass_action.php" method="post" id="myform" class="container shadow" style="height: 300px">
	<br>

<label style="color: orange ;font-weight: bold;margin-left: 400px">Current Password :</label>
<input type="password" name="cpassword" value=""  >
<br>
<br>

<label style="color: orange ;font-weight: bold;margin-left: 400px">New Password:</label>
<input type="password" name="npassword" value="" >
<br>

<br>
<label style="color: orange ;font-weight: bold;margin-left: 400px">Confirm New Password:</label>

<input type="password" name="cnpassword" value="" >
<br>
<br>

<input type="submit" class="btn btn-success" name="cpass" value="UPDATE"  style="margin-left: 450px;margin-top: 30px; padding: 10px 50px">
</form>
<script type="text/javascript">
var frmvalidator = new Validator("myform"); 
frmvalidator.addValidation("cpassword","req","Please enter Current Password"); 
frmvalidator.addValidation("cpassword","maxlen=50");
frmvalidator.addValidation("npassword","req","Please enter New Password"); 
frmvalidator.addValidation("npassword","maxlen=50");
frmvalidator.addValidation("cnpassword","req","Please enter Confirm New Password"); 
frmvalidator.addValidation("cnpassword","maxlen=50");
</script>
<br>
<br>

</div>
</div>
