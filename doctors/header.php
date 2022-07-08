<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Polyclinic Appointment</title>
	<link rel="stylesheet" href="../patient/css/bootstrap.min.css">
	<link rel="stylesheet" href="../style.css">
	<style>
		.error {color: #FF0000;}
	</style>
</head>
<body>


<?php
		if($_SESSION['adminstatus'] == ""){
			header("location:doctorlogin.php");
		}
		
		   

	 ?>


<div class="container-fluid">
		<div class="header_top">
			
			<span style="font-size:45px;color:#008080;font-weight:bolder;margin-left:15px;"> <marquee behavior="scroll" direction="left"scrollamount="3">Modern Management System for Polyclinic Appointment (Doctor Side)</marquee></span>
		
		</div>

	<!-- 	this is for menu -->
	<div class="navbar navbar-default nav">
		<nav class="menu">
			<ul>
				
				<li><a href="myAppoinment.php">My Appoinment</a></li>
				<li><a href="myCustomer.php">Customer Details</a></li>
				<li><a href="#">Add Description</a></li>
				<li><a href="myDetails.php">My Details</a></li>
				<li><a href="viewFeedback.php">Patient Messages</a></li>
				<li><a href="message_to_admin.php">Messages to Admin</a></li>
				<li><a href="../patient/logout.php">Logout</a></li>
			</ul>
		</nav>
	</div>
	
