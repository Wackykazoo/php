<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
	include("dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	
	
	$editcat_sql="UPDATE category SET name='".$_SESSION['editcategory']['name']."' WHERE categoryID=".$_SESSION['editcategory']['categoryID'];
	$editcat_query=mysqli_query($dbconnect, $editcat_sql);
	
	unset($_SESSION['editcategory']);
?>
	<h1>Edit category</h1>
    <p>Category successfully updated</p>
	<p><a href="index.php?page=admin">Back to admin panel</a></p>