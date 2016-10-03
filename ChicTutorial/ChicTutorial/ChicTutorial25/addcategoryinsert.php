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
	<h1>Add new category</h1>
      <p>New category entered</p>
	  <p><a href="index.php?page=admin">Back to admin panel</a></p>
  