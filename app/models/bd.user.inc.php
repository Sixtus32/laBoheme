<?php
  require_once "bd.inc.php";
  class BD_User extends BD_Connection{
    // REGISTRAR USUARIO.
    function registerUser($user_name,$user_email,$user_password){
      try{
      $connect=new BD_Connection();
      $password=hash("sha256",$user_password);
      $sql=$connect->connection_start()->prepare("INSERT INTO users VALUES (user_id,:user_name,:user_email,:user_password_hash)");
      $sql->bindValue(':user_name',$user_name);
      $sql->bindValue(':user_email',$user_email);
      $sql->bindValue(':user_password_hash',$password);
      $sql->execute();
      return true;
      }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
        return false;
      }
    }

    // COMPROBACIÓN PARA REGISTRO DE USUARIO.
    function checkUserForRegistration($user_name,$user_email){
      try{
      $connect=new BD_Connection();
      $sql=$connect->connection_start()->prepare("SELECT COUNT(*) FROM users WHERE user_name=:user_name OR user_email=:user_email");
      $sql->bindValue(':user_name',$user_name);
      $sql->bindValue(':user_email',$user_email);
      $datos=$sql->fetchColumn();
      return ($datos==1);
      }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
        return false;
      }
    }

    // COMPROBACIÓN PARA REDIRIGIR AL USUARIO EN CASO DE QUE YA ESTE EN EL SISTEMA.
    function checkForSignedUser($user_email,$user_password){
      try{
      $connect=new BD_Connection();
      $sql=$connect->connection_start()->prepare("SELECT COUNT(*) FROM users WHERE user_email=:user_email AND user_password=:user_password");
      $sql->bindValue(":user_email",$user_email);
      $sql->bindValue(":user_password",hash("sha256",$user_password));
      $datos=$sql->fetchColumn();
      return ($datos==1);
      }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
        return false; 
      }
    }


    // OBTENCION DEL ID DEL USUARIO
    function getUserIDSigned($user_email,$user_password){
      try{
      $connect=new BD_Connection();
      $sql=$connect->connection_start()->prepare("SELECT user_id FROM user WHERE user_email=:user_email AND user_password=:user_password");
      $sql->bindValue(":user_email",$user_email);
      $sql->bindValue(":user_password",$user_password);
      $dato=$sql->fetchColumn();
      return $dato;
      }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
        return null;
      }
    }

    // OBTENCIÓN DE TODOS LOS SERVICIOS QUE OFRECEN NUESTROS USUARIOS.
    function getUsersServicesData(){
      try{
        $connect=new BD_Connection();
        $sql="SELECT * FROM services";
        $datos=$connect->connection_start()->query($sql)->fetchAll();
        return $datos;
      }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
        return [];
      }
    }

    // OBTENCIÓN DE LA INFO DE UN USUARIO CONCRETO.
    function getUserInfo($user_id){
      try{
        $connect=new BD_Connection();
        $sql=$connect->connection_start()->prepare("SELECT * FROM users_info WHERE user_id=:user_id");
        $sql->bindValue(":user_id",$user_id);
        $datos=$sql->fetch();
        return $datos;
      }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
        return [];
      }
    }

    

  }