<div class="w3-panel w3-pale-pink w3-border">
	<h3>Hello.</h3><p>We are hip developer who use an Continuous Integration/Continuous Delivery (CICD) Pipeline and we auto launch our application the moment we update our code repo!</p>
</div>

<form action="index.php" method="post">
	<p>What is the Secret Code? <input type="password" name="code" /> </p>
	<p><input type="submit" name="submit" value="Enter" /></p>
</form>

<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		//Get code submission from form
			$code = $_POST['code'];

		//Final validation
			if ($code == "deletedforever"){
				//Display Flag . . . 
				echo '<div class="w3-panel w3-pale-green w3-border" style="background-color:#000000 !important; color: #00ec28 !important;"><h3>Flag</h3><p>[REDACTED]</p></div>';
			}else
			{
				//Display Error . . .
				echo '<div class="w3-panel w3-pale-red w3-border" style="background-color:#000000 !important; color: #ec0000 !important;"><h3>Error!</h3><p>That is not the code!</p></div>';
			}
	}
?>

Powered By Github<a href="#"><i class="fa fa-github" style="font-size:36px"></i></a>
