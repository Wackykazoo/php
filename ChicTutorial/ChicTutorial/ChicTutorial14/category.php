<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
	include("dbconnect.php");
	if(!isset($_GET['categoryID'])) {
		header("Location:index.php");
	}
	$stock_sql="SELECT stock.stockID, stock.name, stock.price, category.name AS catname FROM stock JOIN category ON (stock.categoryID=category.categoryID) WHERE stock.categoryID=".$_GET['categoryID'];
	if($stock_query=mysqli_query($dbconnect, $stock_sql)) {
		$stock_rs=mysqli_fetch_assoc($stock_query);
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
      <h1><?php echo $stock_rs['catname']; ?></h1>
	  <?php do { ?>
		<div class="item">
		<a href="item.php?stockID=<?php echo $stock_rs['stockID']; ?>">
		<p><?php echo $stock_rs['name']; ?></p>
		<p>Price: $<?php echo $stock_rs['price']; ?></p>
		</a>
		</div>
	  <?php
	  } while ($stock_rs=mysqli_fetch_assoc($stock_query))
	  ?>
  </div>
    <?php
		include("seccontent.php");
	?>

	<div class="footer"></div>
</div><!-- Container ends here-->
</body>
</html>
