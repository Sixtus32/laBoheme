<?php
    include_once "../app/models/Users.php";
    include_once "../app/models/bd.ini.php";

    $user_email=$_POST['user_email'];
    $user_password=$_POST['user_password'];
    
    $user=new User($user_email,$user_password);
    $db=new BD_LaBoheme();

    if($db->insertUser($user)){
        header("Location:../index.php");
    }

    //CORREO ELECTRONICO DE AVISO DE QUE TOD SE LLEVO DE FORMA CORRECTA.
