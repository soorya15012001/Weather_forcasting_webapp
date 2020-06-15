<?php
include "connection.php";
session_start();
if(empty($_POST['place'])){
$error="<center><h4><font color='#FF0000'>Please enter a city </h4></center></font>";
include"index.html";
exit();
}
$lan = $_POST['location'];
$sess = $_SESSION['SESS_NAME'] ;
$lan = addslashes($_POST['location']);
$lan = mysqli_real_escape_string($con, $lan);


$sql1 =mysqli_query($con, 'UPDATE languages SET votecount = votecount + 1 WHERE fullname = "'.$_POST['place'].'"');
$sql2 =mysqli_query($con, 'UPDATE voters SET status="VOTED" WHERE username="'.$_SESSION['SESS_NAME'].'"');
$sql3 = mysqli_query($con, 'UPDATE voters SET voted= "'.$_POST['place'].'" WHERE username="'.$_SESSION['SESS_NAME'].'"');
	if(!$sql1 && !$sql2){
	die("Error on mysql query".mysqli_error());
	}	
	else{
	include 'C:/xampp/htdocs/weather_app/flask-weather-app-master/templates/index.html';

	
	exit();
	}


$lan
?>
