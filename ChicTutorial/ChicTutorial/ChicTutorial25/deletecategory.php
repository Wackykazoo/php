<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
	include("dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	$delcat_sql="DELETE FROM category WHERE categoryID=".$_GET['categoryID'];
	$delcat_query=mysqli_query($dbconnect, $delcat_sql);
	
	$delstock_sql="DELETE FROM stock WHERE categoryID=".$_GET['categoryID'];
	$delstock_query=mysqli_query($dbconnect, $delstock_sql);
?>
	<h1>Category deleted</h1>
      <p>Category has successfully been deleted</p>
	  <p><a href="index.php?page=admin">Return to admin panel</a></p>