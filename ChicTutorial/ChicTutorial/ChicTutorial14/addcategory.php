<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
	include("dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	if(!isset($_GET['update'])) {
		$_SESSION['addcategory']="";
	}
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
      <form action="addcategoryconfirm.php" method="post">
		<p>Name: <input name="name" value="<?php echo $_SESSION['addcategory']; ?>" /></p>
		<p><input type="submit" /></p>
	  </form>
  </div>
    <?php
		include("seccontent.php");
	?>

	<div class="footer"></div>
</div><!-- Container ends here-->
</body>
</html>
