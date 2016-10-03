<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
	include("dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	unset($_SESSION['editcategory']);
	
	$editcat_sql="SELECT * FROM category";
	$editcat_query=mysqli_query($dbconnect, $editcat_sql);
	$editcat_rs=mysqli_fetch_assoc($editcat_query);
?>
	<h1>Edit category</h1>
    <?php do { ?>
		<p><a href="index.php?page=editcategory&categoryID=<?php echo $editcat_rs['categoryID']; ?>"><?php echo $editcat_rs['name']; ?></a></p>
	<?php
	} while ($editcat_rs=mysqli_fetch_assoc($editcat_query)) ?>