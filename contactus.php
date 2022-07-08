<?php include('header.php'); ?>




	<!-- this is for donor registraton -->
	<div class="contactus"  style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#1F618D;color: #F4D03F;">Contact Us</h3>

		
		
		<div class="main_content">
			<div class="col-md-6" style="border-right: 2px solid black;">
			    <img src="img/faysal1.png" alt="" class="img-responsive">
				<article>
					<h2>Faysal Sarder <h2><h4>Studing B.Sc in Computer Science & Engineering</h4>
							<h5>City University, 13/A Panthapath, Dhaka 1215</h5>
							>><a href="https://sites.google.com/view/faysal515">Please visit my website</a></td>
						<!--<p> https://sites.google.com/view/faysal515 <br> -->
							<br>call: +88 01797651089</p><br>
		
					<img src="img/Rubna.png" alt="" class="img-responsive">		
					<h2>Sorefa Akter <h2><h4>Studing B.Sc in Computer Science & Engineering</h4>
							<h5>City University, 13/A Panthapath, Dhaka 1215</h5>
							call: +88 017...</p><br>
					<img src="img/asik.png" alt="" class="img-responsive">	
					<h2>Ashiqur Rahman <h2><h4>Studing B.Sc in Computer Science & Engineering</h4>
							<h5>City University, 13/A Panthapath, Dhaka 1215</h5>
							call: +88 017...</p><br>
							
					<!--<img src="img/pata.png" alt="" class="img-responsive">			
					<h2>Labonno Deb <h2><h4>Studing B.Sc in Computer Science & Engineering</h4>
							<h5>City University, 13/A Panthapath, Dhaka 1215</h5>
						
							call: +88 017...</p><br>		-->
							
				</article>
			</div>
			<div class="col-md-6">
			    <marquee behavior="scroll" direction="left"scrollamount="3"><p style="color:red"><b><i>If you face any problem, then send us your valueable message &#128522</i></b></p></marquee>
				<h2 class="text-center">Your Message</h2>
				<form action="" method="post" class="text-center">
						<label>
								First Name: <input type="text" name="firstname" value="" placeholder="firstname" required>
						</label><br><br>

						<label>
								Last Name: <input type="text" name="lastname" value="" placeholder="lastname" required>
						</label><br><br>	

						<label>
								Email: <input type="email" name="email"  value="" placeholder="Your email" required>
						</label><br><br>
						<label>
								Your Comment: <textarea name="comment" id="" cols="30" rows="4" required></textarea> 
						</label><br><br>
								
						<input type="submit" value="Send Us" name="submit" style="margin-top: 75px;border-radius: 2px;"/>
					   <!-- <button name="submit" type="submit" class="btn btn-info"><i class="icon-signin icon-large"></i>&nbsp;Sign Up</button>
 -->
                        
					</form><br><br><br>
			</div>

          
 		</div>

	</div>
	
	

	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
<!-- contact information inserting -->
					<?php

						include('config.php');
						if(isset($_POST['submit'])){
							

							$sql = "INSERT INTO contact (firstname, lastname,email,comment)
							VALUES ('" . $_POST["firstname"] ."','" . $_POST["lastname"] . "','" . $_POST["email"] . "','" . $_POST["comment"] . "' )";

							if ($conn->query($sql) === TRUE) {
							    echo "<script>location.replace('success.php');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>" . $sql . "<br>" . $conn->error;
							}

							$conn->close();
						}
					?> 



	
</body>
</html>

