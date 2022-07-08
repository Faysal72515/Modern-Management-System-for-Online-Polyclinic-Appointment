<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('header.php'); ?>


<!-- for retriving data -->
            
				<?php 
							include('../config.php');
							$sql="SELECT * FROM patient WHERE id='" .$_POST["id"]. "'";
			
							$q=mysqli_query($conn,$sql);
							$row=mysqli_num_rows($q);
							
							$data=mysqli_fetch_array($q);
							$id=$data[1];
							$name=$data[2];
							$age=$data[3];
							$contact=$data[4];
							$address=$data[5];
							$bgroup=$data[6];
							$email=$data[7];

							mysqli_close($conn);
				?>
			
<!-- for retriving data -->

<div class="login" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#5D6D7E;color: #FDFEFE ;">Patient Details</h3>
			<div class="formstyle" style="float: right;padding:20px;border: 1px solid lightgrey;margin-right:415px; margin-bottom:30px;background-color:#EAF2F8;color:#141313;">
				<form action="" method="post" class="text-center form-group">
				    <label>
						ID: <input type="number" name="id" value="<?php echo $id; ?>" placeholder="id" required>
					</label><br><br>
					<label>
					    Name: <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Full name" required>
					</label><br><br>

					<label>
						Age: <input type="number" name="age"  value="<?php echo $age; ?>" placeholder="age" required="required" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age"/>
					</label><br><br>
					<label>
						Mobile: <input type="text" name="contact" value="<?php echo $contact; ?>" placeholder="contact no" required="required" pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no."/>
					</label><br><br>
 					
 					<label>
						Address: <input type="text" name="address" value="<?php echo $address; ?>" placeholder="address" required>
					</label><br><br>
					<label>
						Blood Group: <input type="email" name="email" value="<?php echo $bgroup; ?>" placeholder="email" disabled>
					</label><br><br>

					<label>
						Email: <input type="email" name="email" value="<?php echo $email; ?>" placeholder="email" required>
					</label><br><br>
					
					
					
					<button name="submit" type="submit" style="margin-left:43px;width:108px;border-radius: 3px;">UpdateProfile</button> <br>


			</form> <br>
				
				<br>

				
		
				
			
		
	</div>
	
	
</div>
<br><br><br>

			<!-- update information -->

				<?php
							include('../config.php');
							if(isset($_POST['submit'])){
							

							$sql="UPDATE patient SET id='".$_POST["id"]."', name='".$_POST["name"]. "' ,age='" .$_POST["age"]."' , contact='" .$_POST["contact"]. "',address='" .$_POST["address"]. "', email='".$_POST["email"]."' WHERE id='" .$_POST["id"]. "' ";
		
							if (mysqli_query($conn, $sql)) {
						    echo "<script>alert(' Record updated successfully');</script>";
							} else {
							    echo "<script>alert('There was a Error Updating profile');</script>";
							}

						mysqli_close($conn);
													}
					?> 
			<!-- update information End -->


 <?php include('footer.php'); ?>


</body>
</html>
