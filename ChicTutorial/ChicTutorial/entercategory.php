<?php
    session_start();

    //check to see if user is logged in. If not, redirect to admin page
    if(!isset($_SESSION['admin'])){
        header("Location:index.php?page=admin");
    }

    //check to see if user has submitted the add category form
    if(!isset($_SESSION['addcategory']['name'])){
        header("Location:index.php?page=admin");
    }

    //enter the new category
    $newcategory_sql = "INSERT INTO category (name) VALUES ('".mysqli_real_escape_string($dbconnect, $_SESSION['addcategory']['name'])."')";
    $newcategory_query = mysqli_query($dbconnect, $newcategory_sql);
    unset($_SESSION['addcategory']['name']);
?>

<p>New category has been entered</p>
<p><a href="index.php?page=admin">Return to admin panel</a></p>