 <?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('header.php'); ?>


	<div class="search form-group"  style="background-color: #7faf81;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">Search result</h3>
		
	</div>
<!-- result -->

					<?php 
					include('../config.php');
					

					$sql = " SELECT * FROM patient WHERE id = '" . $_POST["id"]."'";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
								
								<th>ID</th>
								<th>Name</th>
								<th>Age</th>
								<th>Contact</th>
								<th>Address</th>
								
								<th>bgroup</th>
								
								<th>Email</th>
								<th>Action</th>
								<th>Action</th>
								
								
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td>".$row['id']."</td>";
								echo "<td>".$row['name']."</td>";
								echo "<td>".$row['age']."</td>";
								
								echo "<td>".$row['contact']."</td>";
								echo "<td>".$row['address']."</td>";

								echo "<td>".$row['bgroup']."</td>";
								echo "<td>".$row['email']."</td>";
						?>
							<td><a href="booking.php?id=<?php echo $row['id'] ?>">Update</a></td>;
							<td><a href="delete_patient.php?id=<?php echo $row['id'] ?>">Delete</a></td>;
						<?php 		
								
								echo "</tr>";
						}
						echo "</table>";
					} 
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

					?>
					<!-- result -->


	<button style="margin-left: 605px;background-color:#17202A;color: antiquewhite;width: 115px;height: 30px;margin-bottom: 5px;">
	<a href="search_patient.php">Search Again</a></button>
	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 


	
</body>
</html>
