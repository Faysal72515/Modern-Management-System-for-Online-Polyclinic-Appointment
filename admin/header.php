<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Polyclinic Appoinment</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<style>
		.error {color: #FF0000;}
	</style>
</head>
<body>


<?php
		if($_SESSION['adminstatus'] == ""){
			header("location:adminlogin.php");
		}
		
		   

	 ?>


<div class="container-fluid">
		<div class="header_top">
			<span style="font-size:45px;color:#008080;font-weight:bolder;margin-left:15px;"> <marquee behavior="scroll" direction="left"scrollamount="3">Modern Management System for Polyclinic Appointment</marquee></span>
		</div>

	<!-- 	this is for menu -->
	<div class="navbar navbar-default nav">
		<nav class="menu">
			<ul>
				
				
				
				<!--<li><a href="addDoctor2.php">Add Doctor</a></li> -->
				<!--<li><a href="doctor_reg.php">add Doctor</a></li> -->
				<li><a href="viewDoctor.php">View Doctor</a></li>
				<li><a href="search_doctor.php">Eliminate Doctor</a></li>
				<li><a href="viewCustomer.php">View Patient</a></li>
				<li><a href="search_patient.php">Modify Patient</a></li>
				<li><a href="viewAppoinment.php">Appoinments</a></li> 
			<!--	<li><a href="viewFeedback.php">View Feedback</a></li> -->
			    <li><a href="viewCustomarComments.php">Customer messages</a></li>
				<li><a href="viewdoctors_txt.php">Doctor Messages</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
	</div>
	
