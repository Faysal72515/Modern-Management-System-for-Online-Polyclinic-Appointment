<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('header.php'); ?>
<?php 
	$id = isset($_GET['id'])?$_GET['id']:"";
	
 ?>

	

				<!-- fetching patient info -->
					<?php 
	
							include('../config.php');
							$id=$_REQUEST['id'];
							$sql="SELECT * from patient where id='$id'";
			
							$q=mysqli_query($conn,$sql);
							$row=mysqli_fetch_assoc($q);
							
							$name=$row['name'];
							$age=$row['age'];
							$contact=$row['contact'];
							$address=$row['address'];
							$bgroup=$row['bgroup'];
							$email=$row['email'];
						?>
                         
					

	<!-- 	booking info-->
	<div class="login" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#5D6D7E;color: #FDFEFE ;">Customer Details</h3>
			<div class="formstyle" style="float: right;padding:20px;border: 1px solid lightgrey;margin-right:415px; margin-bottom:30px;background-color:#EAF2F8;color:#141313;">
				<form action="" method="post" class="text-center form-group">
					<label>
						Your Name: <input type="text" name="name" placeholder="full name" required value="<?php echo $row['name']; ?>" 
					</label><br><br>

					<label>
						Age: <input type="number" name="age"  value="<?php echo $row['age']; ?>" placeholder="age" required="required" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age"/>
					</label><br><br>
					<label>
						Mobile: <input type="number" name="contact" value="<?php echo $row['contact']; ?>" placeholder="contact no" required="required" pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no."/>
					</label><br><br>
 					
 					<label>
						Address: <input type="text" name="address" value="<?php echo $row['address']; ?>" placeholder="address" required>
					</label><br><br>
					<label>
						Blood Group: <input type="text" name="bgroup" value="<?php echo $row['bgroup']; ?>" placeholder="bgroup" disabled>
					</label><br><br>

					<label>
						Email: <input type="email" name="email" value="<?php echo $row['email']; ?>" placeholder="email" required>
					</label><br><br>
					
					
					
					<button name="submit" type="submit" style="margin-left:43px;width:108px;border-radius: 3px;">UpdateProfile</button> <br>


			</form> <br>
				
				<br>

				
		
				
			
		
	</div>
	
	
</div>
				
				
			<!-- delete information -->

				<?php
							include('../config.php');
							if(isset($_POST['submit'])){
												
							$name=$_POST['name'];
							$age=$_POST['age'];
							$contact=$_POST['contact'];
							$address=$_POST['address'];
							$email=$_POST['email'];

				
							
							

				
							

							$sql="UPDATE patient SET name='$name' ,age='$age' , contact='$contact',address='$address', email='$email' WHERE id=' $id'";
		
							if (mysqli_query($conn, $sql)) {
						    echo "<script>alert(' Record updated successfully');</script>";
							} else {
							    echo "<script>alert('There was a Error Updating profile');</script>";
							}

						mysqli_close($conn);
													}
					?> 
			

	
	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 


	
</body>
</html>
