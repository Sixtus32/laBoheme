<?php
session_start();
require_once("../app/models/bd.user.inc.php");

$user_email = $_POST['user_email'];
$user_password = hash("sha256", $_POST['user_password']);

// echo $user_email, $user_password;

if (checkForSignedUser($user_email, $user_password)) {
    $_SESSION["user_id"] = getUserIDSigned($user_email, $user_password);
    $_SESSION["user_name"] = getUserName($user_email, $user_password);
    $_SESSION['user_email'] = $user_email;
    // $_SESSION['user_id_ac'] =  getUserIDSigned($user_email, $user_password);
    // $_SESSION['account_status'] = statusAccount($_SESSION['user_id_ac']);


    $userImageName = strtoupper($_SESSION['user_name']);
    generateUserImage($userImageName[0]);
    $archivo='../pages/loading.php';
    $contenido=file_get_contents($archivo);
    echo $contenido;
    header("refresh:15;url=../index.php");
} else {
    header("Location:../index.php");
}
