<?php session_start();  ?>
<?php include('header.php'); ?>



	<!-- this is for doctor registraton -->
	<div class="login" style="background-color:#fff;">
		<h1 class="text-center" style="background-color:#E8DAEF;color: #17202A;">Doctor Panel</h1>
			<div class="formstyle" style="padding: 10px;border: 1px solid lightgrey;margin-right: 376px;margin-left: 406px; margin-bottom: 25px;background-color:#ABEBC6;color:#17202A;">
				<form action="" method="post" class="text-center">
					<label>
						<input type="text" name="userid"  placeholder="userid" required>
					</label><br><br>
					<label>
						<input type="password" name="password"  placeholder="password">
					</label><br><br>
					<button name="submit" type="submit" style="margin-left:127px;padding: 5px 25px; border-radius: 4px;">Login</button> <br>
               <span style="color:#000;">Not a member yet?</span> <a href="admin/doctor_reg.php" title="create a account" target="" style="color:#154360;">&nbsp;<b>Sign Up</b></a> <br>
 


					<!-- login validation -->
			<?php 
							$_SESSION['doctorstatus']="";
							
							include('config.php');
							if(isset($_POST["submit"])){

							$sql= "SELECT * FROM doctor WHERE userid= '" . $_POST["userid"]."' AND password= '" . $_POST["password"]."'";

							$result = $conn->query($sql);

									if ($result->num_rows > 0) {
											$_SESSION["userid"]= $_POST["userid"];
											// $_SESSION["type"]=$result[2];
											$_SESSION['doctorstatus']= "yes";
										    echo "<script>location.replace('myDetails.php');</script>";
												// echo "u are supposed to redirect to ur profile";
										} else {
										    echo "<span style='color:red;'>Invalid username or password</span>";
										}
						$conn->close();		
					}
					
 			?>
		<!-- login validation End-->


				</form> <br>&nbsp;&nbsp;&nbsp;
				
				<br>

				
		
				
			
		
	</div>
	
	
</div>
	
<?php include('footer.php'); ?>

	
</div><!--  containerFluid Ends -->




<script src="js/bootstrap.min.js"></script>


 
			



	
</body>
</html>

