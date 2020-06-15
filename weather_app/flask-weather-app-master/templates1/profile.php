<style>
div.background {
 
 background: linear-gradient(to right, #73c8a9, #373b44);
  border: 3px solid black;
  opacity: 0.9;
  width: 100%;
  height: 100%;
  
}

div.transbox {
  margin-left: 200px;
  margin-right: 200px;
  background-color: #ccff66;
  border: 2px solid black;
  opacity: 0.4;
  filter: alpha(opacity=70);
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
include "connection.php";
?>

<link rel="stylesheet" type="text/css" href="style.css">



<?php include 'link.php'?>
<center><h1 style="margin-top: 40px"> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h1></center>
<?php
$username = $_SESSION['SESS_NAME'];
$query = 'SELECT status FROM voters WHERE username="'.$_SESSION['SESS_NAME'].'" AND status = "VOTED"';
if ($result = mysqli_query($con,$query)) {
if (mysqli_num_rows($result) > 0) {
$sql = mysqli_query($con, 'SELECT voted from voters WHERE username="'.$_SESSION['SESS_NAME'].'"');
$row = mysqli_fetch_assoc($sql);
        
        echo "<br><h3 style='text-align: center'>Your last searched City was :- " . " " . $row['voted']."</h3>";
    } else {
        echo "You have no last city searched!!!....Please try us ;-)";
    }
}
?>
</div>
