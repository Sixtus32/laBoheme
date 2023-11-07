<?php
    session_start();
    require_once("../app/models/bd.user.inc.php");

    $user_email=$_POST["user_email"];
    $user_password=$_POST["user_password"];

    $connUser=new BD_User();
    if($connUser->checkForSignedUser($user_email,$user_password)){
        $_SESSION["user_id"]=true;
        header("Location:../index.php");
    }else{
        echo "NO pudo ser 🥲";
        header("Location:../index.php");
    }
