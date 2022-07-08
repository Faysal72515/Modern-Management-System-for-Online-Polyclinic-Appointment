<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('header.php'); ?>
<?php 
	$id = isset($_GET['id'])?$_GET['id']:"";
	?>
				
				
			<!-- delete information -->

				<?php
							include('../config.php');
							
											
							$sql="DELETE from booking WHERE id=' $id'";
		
							if (mysqli_query($conn, $sql)) {
						    echo "<script>alert(' Appontment record delete successfully');</script>";
							} else {
							    echo "<script>alert('There was a Error');</script>";
							}

						mysqli_close($conn);
													
					?> 
			

	
	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 


	
</body>
</html>
