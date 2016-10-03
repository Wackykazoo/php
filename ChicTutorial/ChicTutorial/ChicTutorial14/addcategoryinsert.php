<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
	include("dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	$newcat_sql="INSERT INTO category (name) VALUES ('".$_SESSION['addcategory']."')";
	$newcat_query=mysqli_query($dbconnect, $newcat_sql);
	unset($_SESSION['addcategory']);
?>
<html>
<head>
<title>Welcome to Chic Clothing</title>

<link href="styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="container">
	<?php
		include("header.php");
	?>
    <div class="maincontent">
 <!-- main content goes here-->
	<h1>Add new category</h1>
      <p>New category entered</p>
	  <p><a href="admin.php">Back to admin panel</a></p>
  </div>
    <?php
		include("seccontent.php");
	?>

	<div class="footer"></div>
</div><!-- Container ends here-->
</body>
</html>
