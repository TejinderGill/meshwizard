<?php include('header.php'); ?>

<div id="contact" class="container">
	<div class="col-md-12 heading">
		<h3>Conatct Us</h3>
		<div class="form">
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">				
					<input type="text" placeholder="Name" name="name"><br>
					<input type="text" placeholder="Email" name="email"><br>
					<input type="text" placeholder="Company" name="company"><br>
					<input type="text" placeholder="Phone" name="phone"><br>
					<textarea placeholder="Message" name="comment" rows="5" cols="40"></textarea><br>				
					<input id="submit" type="submit" name="submit" value="Submit">
			</form>
		</div>
	</div>
</div>
<?php include('footer.php'); ?>