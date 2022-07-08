<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>



    
    
	
	
	<!-- this is for donor registraton -->
	<div class="search" style="background-color:#EAF2F8;">
		<h3 class="text-center" style="background-color:#1F618D;color: #fff;padding: 5px;">Search for Delete</h3>

		 <div class="formstyle" style="padding:40px;border: 1px solid lightgrey;margin-right: 150px;margin-bottom: 30px;background-color:#EAFAF1;color:#141313;width: 530px;margin-left: 400px;">
					<form action="search_customer_message.php" method="post" class="form-group">
		
					<label>
						Contact ID: <input type="number" name="id" value="<?php echo $id; ?>" placeholder="id" required>
					</label><br>
					
					<button name="submit" type="submit" style="border-radius: 3px;color:#000;margin-left: 145px;margin-top: 8px;">Search</button>
					<br>
					
					</form>



					
		 	</div>
	</div>
	
	
	
	
	
	
	
	
	
	

	<!-- this is for donor registraton -->
	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#F4D03F;color: #17202A;padding: 5px;">Customer messages</h3>
		
		
	</div>
		
			<div class="all_user" style="margin-top:0px; margin-left: 40px;">
				<?php 
					include('../config.php');
					$sql = " SELECT * FROM contact";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
								<th>Contact ID</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Email</th>
								<th>Comments</th>
								<th>Action</th>
								
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td>".$row['id']."</td>";
								echo "<td>".$row['firstname']."</td>";
								echo "<td>".$row['lastname']."</td>";
								echo "<td>".$row['email']."</td>";
								echo "<td>".$row['comment']."</td>";
								echo "<td><button type='submit' name='submit' style='color:#000;'>Delete</button></td>";
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
