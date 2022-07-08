<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>
<?php include('uptomenu.php'); ?>




				<?php 
					
					

					
					include('../config.php');
							//$sql="SELECT * FROM booking where email='" . $_SESSION["email"] . "'";
							
			                $sql="SELECT * FROM booking";
							$q=mysqli_query($conn,$sql);
							$row=mysqli_num_rows($q);
							
							$data=mysqli_fetch_array($q);
							
							$dname=$data[1];
							$expertise=$data[4];
							$dates=$data[10];
							$tyme=$data[11];
							

							mysqli_close($conn);

					?>

					<!-- Cancel Booking -->




	<!-- Cancel Booking End-->
			</div>
		
	
	<div class="login" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#5D6D7E;color: #FDFEFE ;">My Details</h3>
			<div class="formstyle" style="float: right;padding:20px;border: 1px solid lightgrey;margin-right:415px; margin-bottom:30px;background-color:#EAF2F8;color:#141313;">
				<form action="" method="post" class="text-center form-group">
				<label>
						Dr. Name: <input type="text" name="dname"  value="<?php echo $dname; ?>" placeholder="Dr. name" required>
					</label><br><br>
					<label>
					<label>
					Expertise: <input type="text" name="expertise" value="<?php echo $expertise; ?>" placeholder="expertise" required>
					</label><br><br>
                    <label>
				    Date: <input type="date" name="dates" value="<?php echo $dates; ?>" placeholder="Date" required>
					</label><br><br>
 					
 					<label>
						
						Time: <input type="text" name="tyme" value="<?php echo $tyme; ?>" placeholder="time" disabled>
					</label><br><br>

					
					
					
					
					<button name="submit" type="submit" style="margin-left:43px;width:108px;border-radius: 3px;">Delete</button> <br>


			</form> <br>
				
				<br>

				
		
				
			
		
	</div>
	
	
</div>
<br><br><br>
	

	<?php
							include('../config.php');
							if(isset($_POST['submit'])){
							$dname=$data['dname'];
							$expertise=$data['expertise'];
							$dates=$data['dates'];
							$tyme=$data['tyme'];
											
							
							// sql to delete a record
							$sql = "DELETE FROM booking where id='$id'";

							if (mysqli_query($conn, $sql)) {
							    echo "<script>alert('Your booking has been Canceled!');</script>";
							} else {
							     echo "<script>alert('There was an Error')<script>";
							}

							mysqli_close($conn);
						}
					?> 
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
			



	
</body>
</html>
