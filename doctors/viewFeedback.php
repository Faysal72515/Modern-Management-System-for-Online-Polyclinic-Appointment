<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>




	<!-- this is for donor registraton -->
	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#F4D03F;color: #17202A;padding: 5px;">Patient messages</h3>
		
		
	</div>
		
			<div class="all_user" style="margin-top:0px; margin-left: 40px;">
				<?php 
					include('../config.php');
					$sql = " SELECT * FROM feedback";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
								<th>ID</th>
								<th>Email</th>
								<th>FeedBack</th>
								
								
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td>".$row['id']."</td>";
								echo "<td>".$row['email']."</td>";
								echo "<td>".$row['feedback']."</td>";
								//echo "<td><button type='submit' name='submit' style='color:#000;'>Delete</button></td>";
								echo "</tr>";
						}
						echo "</table>";
					}
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

					?>
			</div>
		
	
	<button style="margin-left: 605px;background-color:#17202B;color: antiquewhite;width: 115px;height: 30px;margin-bottom: 5px;">
	<a href="search_feedbak_message.php">Click for Delete Message</a></button>

	
 <?php include('../footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
			



	
</body>
</html>
