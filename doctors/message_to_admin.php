<?php session_start();  ?>
<?php include('header.php'); ?>


	<div class="login" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#E74C3C;color: #fff;"> Messages to Admin </h3>
			<div class="formstyle" style="float: right;padding:20px;border: 2px solid lightgrey;margin-right:350px; margin-bottom:80px;background-color:#FADBD9;color:#141313;">
				<form action="" method="post" class="text-center form-group">
					<label>
						<span> Write message:</span><textarea name="message" id="" cols="40" rows="4" required></textarea>
					</label><br><br>
					
					<button name="submit" type="submit" style="margin-left: -26px;width: 85px;border-radius: 3px;">Send</button> <br>

							<!-- login validation -->
			<?php 
					
							include('../config.php');
							if(isset($_POST['submit'])){
							

							$sql = "INSERT INTO feedbacks (email,message)	VALUES ('" . $_SESSION["email"] ."','" . $_POST["message"] ."')";

							if ($conn->query($sql) === TRUE) {
							    echo "<script>alert('Successfully message sents!');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>";
							}

							$conn->close();
						}
					
 			?>


			
		<!-- login validation End-->


				</form> <br>&nbsp;&nbsp;&nbsp;
				
				<br>

				
		
				
			
		
	</div>
	
	
</div>
 <?php include('../footer.php'); ?>


</body>
</html>
