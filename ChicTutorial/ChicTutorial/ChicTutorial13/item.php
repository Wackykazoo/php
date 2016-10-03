<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
	include("dbconnect.php");
	$stock_sql="SELECT stock.*, category.name AS catname FROM stock JOIN category ON (stock.categoryID=category.categoryID) WHERE stock.stockID=".$_GET['stockID'];
	$stock_query=mysqli_query($dbconnect, $stock_sql);
	$stock_rs=mysqli_fetch_assoc($stock_query);
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
      <p><?php echo $stock_rs['name']; ?></p>
	  <p><?php echo $stock_rs['catname']; ?></p>
	  <p>Price: $<?php echo $stock_rs['price']; ?></p>
	  <p><?php echo $stock_rs['description']; ?></p>
  </div>
    <?php
		include("seccontent.php");
	?>

	<div class="footer"></div>
</div><!-- Container ends here-->
</body>
</html>
