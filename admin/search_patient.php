<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('header.php'); ?>

<!-- <?php include('function.php'); ?> -->



	<!-- this is for donor registraton -->
	<div class="search" style="background-color:#EAF2F8;">
		<h3 class="text-center" style="background-color:#1F618D;color: #fff;padding: 5px;">Search Here</h3>

		 <div class="formstyle" style="padding:70px;border: 1px solid lightgrey;margin-right: 293px;margin-bottom: 30px;background-color:#EAFAF1;color:#141313;width: 530px;margin-left: 400px;">
					<form action="search_result.php" method="post" class="form-group">
		
					<label>
						Patient ID: <input type="number" name="id" value="<?php echo $id; ?>" placeholder="id" required>
					</label><br>
					
					<button name="submit" type="submit" style="border-radius: 3px;color:#000;margin-left: 145px;margin-top: 8px;">Search</button>
					<br>
					
					</form>



					
		 	</div>
	</div>
	
	

	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>




</body>
</html>