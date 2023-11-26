<?php
    // conectar con la base de datos
    require_once("../app/models/bd.user.inc.php");

    // toma de dato del formulario
    $user_name=$_POST["user_name"];
    $user_email=$_POST["user_email"];
    $user_password=$_POST["user_password"];


    if(checkUserForRegistration($user_name,$user_email)){
        echo "<script>
                    console.log('El usuario ya existe, NO PUEDES REGISTRAR A ALGUIEN QUE YA ESTA EN EL SISTEMA.');
            </script>";

        header("refresh:3;url=../index.php");
    }else{
        registerUser($user_name,$user_email,$user_password);
        // createAccount($user_email,$user_password);
        echo    "<script>
                    console.log('Make Your Choise');
                </script>";
        $archivo='../pages/loading.php';
        $contenido=file_get_contents($archivo);
        echo $contenido;
        header("refresh:8;url=../index.php");
    }
