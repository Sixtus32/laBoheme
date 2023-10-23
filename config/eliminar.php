
<?php
    include_once "../app/models/bd.ini.php";

    $user_id=$_GET['user_id'];
    $bd=new BD_LaBoheme();
    

    if($bd -> deleteUser($user_id)){
      header("Location:index.php");
    }
