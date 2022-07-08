<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php 
	$id = isset($_GET['id'])?$_GET['id']:"";
	
 ?>

<?php include('header.php'); ?>
				<?php
					       $servername = "localhost";
							$username = "root";
							$password = "";
							$dbname = "polyclinic";

							// Create connection
							$conn = new mysqli($servername, $username, $password, $dbname);
							// Check connection
							if ($conn->connect_error) {
							    die("Connection failed: " . $conn->connect_error);
							}

					// sql to delete a record
					$sql = "DELETE FROM doctor WHERE id='$id'";

					if ($conn->query($sql) === TRUE) {
					  echo "Record deleted successfully";
					} else {
					  echo "Error deleting record: " . $conn->error;
					}

					$conn->close();
				?>

	
	
 <?php include('footer.php'); ?>



	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 


	
</body>
</html>
