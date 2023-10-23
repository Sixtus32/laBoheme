<?php
    include_once "../app/models/bd.ini.php";

    $user_id=$_GET['user_id'];
    $db=new BD_LaBoheme();

    $user=$db->getBD_User($user_id);
    
    echo "<strong>User ID : </strong>";
    echo $user['user_id'];
    echo "<br/>";

    echo "<strong>User Name : </strong>";
    echo $user['user_name'];
    echo "<br/>";
?>
