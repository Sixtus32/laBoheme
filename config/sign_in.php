<?php
session_start();
include_once "../app/models/bd.ini.php";

$user_email = $_POST['user_email'];
$user_password = $_POST['user_password'];

$db = new BD_LaBoheme();
$datos = $db->getBD_Users();
foreach ($datos as $user) {
    if ($user["user_email"] == $user_email) {
        if (password_verify($user_password, $user["user_password"])) {
            echo "Datos Validados.<br>";
            echo "Bienvenido " . $user['user_name'] . "   <br>Nos alegra volver a verte de nuevo.";
        } else {
            header("Location: ../index.php");
        }
    }
}














