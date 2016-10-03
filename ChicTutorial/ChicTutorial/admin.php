<?php
    session_start();

    //check to see if user is logging out
    if(isset($_GET['action'])){
        if($_GET['action'] == "logout"){
            unset($_SESSION['admin']);
        }
    }

    //if login form has been submitted, check if username and password match
    if(isset($_POST['login'])){
        $login_sql = "SELECT * FROM user WHERE username='".$_POST['title']."' and password='".sha1($_POST['password'])."'";
        echo $login_sql;
        if($login_query=mysqli_query($dbconnect, $login_sql)){
            echo $login_query;
            $login_rs = mysqli_fetch_assoc($login_query);
            echo $login_rs;
            $_SESSION['admin'] = $login_rs['username'];
        }
    }

    if(isset($_SESSION['admin'])){
        include("cpanel.php");
    } else {
        include ("login.php");
    }
?>