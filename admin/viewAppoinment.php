<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>


<!-- this is for search -->
	<div class="search" style="background-color:#EAF2F8;">
		<h3 class="text-center" style="background-color:#82E0AA;color: #641E16;padding: 5px;">Search for Delete Appointment</h3>

		 <div class="formstyle" style="padding:15px;border: 1px solid lightgrey;margin-right: 150px;margin-bottom: 30px;background-color:#1C2833 ;color:#FDFEFE;width: 530px;margin-left: 650px;">
					<form action="search_appointment.php" method="post" class="form-group">
		
					<label>
						Appoint number : <input type="number" name="id" value="<?php echo $id; ?>" placeholder="number" required>
					</label><br>
					
					<button name="submit" type="submit" style="border-radius: 3px;color:#000;margin-left: 145px;margin-top: 8px;">Search</button>
					<br>
					
					</form>



					
		 	</div>
	</div>



	<!-- this is for donor registraton -->
	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#3498DB ;color: #4A235A;padding: 5px;">Patient Who taken Appoinment</h3>
		
		
	</div>
		
			<div class="all_user" style="margin-top:0px; margin-left: 40px;">
				<?php 
					include('../config.php');
					

					$sql = " SELECT * FROM booking";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
								<th>Appoint number</th>
								<th>Dr.Name</th>
								<th>Contact</th>
								<th>Expert at</th>
								<th>Patient</th>

								<th>PatientContact</th>
								<th>Date</th>
								<th>Time</th>
								
								
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td>".$row['id']."</td>";
								echo "<td>".$row['dname']."</td>";
								echo "<td>".$row['dcontact']."</td>";
								
								
								echo "<td>".$row['expertise']."</td>";
								echo "<td>".$row['pname']."</td>";
								echo "<td>".$row['pcontact']."</td>";
								
								echo "<td>".$row['dates']."</td>";
								echo "<td>".$row['tyme']."</td>";
								//echo "<td><button type='submit' name='submit' style='color:#000;'>Update</button><button type='submit' name='submit' style='color:#000;'>Delete</button></td>";
								
								echo "</tr>";
						}
						echo "</table>";
					}
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

					?>
			</div>
		
	
	
	

	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
			



	
</body>
</html>
