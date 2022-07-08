<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('header.php'); ?>
<?php include('uptomenu.php'); ?>

<!-- <?php include('function.php'); ?> -->



	<!-- this is for donor registraton -->
	<div class="search" style="background-color:#EAF2F8;">
		<h3 class="text-center" style="background-color:#1F618D;color: #fff;padding: 5px;">Search Here</h3>

		 <div class="formstyle" style="padding:70px;border: 1px solid lightgrey;margin-right: 293px;margin-bottom: 30px;background-color:#EAFAF1;color:#141313;width: 530px;margin-left: 400px;">
					<form action="search_result.php" method="post" class="form-group">

					<!-- testing -->
					<label>
						Search By:<select name="address" type="text" style="width: 110px;margin-right: 175px;" />
												<option>-Select-</option>
												<!--<option>Dhaka</option> -->
												<option>Dhanmondi</option>
												<option>Gulshan</option>
												<option>Shyamoli</option>
												<option>Gandaria</option>
												<option>Bir Uttam Mir Shawkat Sarak</option>
												<option>Kallyanpur</option>
												<option>Johnson Road</option>
												<option>Panthapath</option>
												<option>North Jatrabari</option>
												<option>Postogola</option>
												<option>Jurain</option>
												<option>Basudhara R/A</option>
												<option>Farmgate</option>
												<option>Mirpur</option>
												<option>Uttara</option>
												<option>Jatrabari</option>
												<option>Keraniganj</option>
												<option>Rampura</option>
												<option>Admajji</option>
												<option>South Keraniganj</option>
												<option>Mughdha</option>
												<option>Dhaka</option>
												
												
											</select>

					</label><br><br>
					<!-- testing end-->

					<label>
						 Category:<select name="expertise" type="text" style="width: 110px;margin-right: 175px;" />
												<option>-Select-</option>
												<option>Medicine</option>
												<option>Heart</option>
												<option>Bone</option>
												<option>Neurologist</option>
												<option>kedney</option>
												<option>Cardiologist</option>
												<option>Plastic Surgeon</option>
												<option>General Physician</option>
											</select>

					</label>
					<button name="submit" type="submit" style="border-radius: 3px;color:#000;margin-left: 145px;margin-top: 8px;">Search</button>
					<br>
					
					</form>



					
		 	</div>
	</div>
	
	

	
 <?php include('../footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>




</body>
</html>