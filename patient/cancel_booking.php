<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>
<?php include('uptomenu.php'); ?>
<?php 
	$id = isset($_GET['id'])?$_GET['id']:"";
	?>
	
	<!-- this is for donor registraton -->
	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#16A085;color: #E8F8F5;padding: 5px;">My Appoinment</h3>
		
		
	</div>

<?php
							include('../config.php');
							if(isset($_POST['submit'])){
							
							// sql to delete a record
							$sql = "DELETE * FROM booking";

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