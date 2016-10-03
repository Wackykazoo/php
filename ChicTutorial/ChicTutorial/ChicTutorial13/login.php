<form action="admin.php" method="post">
	<p>Username:<input name="username" /></p>
	<p>Password:<input name="password" type="password" /></p>
	<?php
	if(isset($_GET['error'])) {
		echo "Incorrect username or password";
	}
	
	?>
	<p><input type="submit" name="login" /></p>
</form>