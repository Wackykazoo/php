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
	<h1>Add new category</h1>
      <form action="index.php?page=addcategoryconfirm" method="post">
		<p>Name: <input name="name" value="<?php echo $_SESSION['addcategory']; ?>" /></p>
		<p><input type="submit" /></p>
	  </form>
  