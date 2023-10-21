<?php
class User{
    // atributos de la clase User
    private $user_id;
    private $user_name;
    private $user_email;
    private $user_password;
    private $user_profile_info_id;
    private $type_of_user;

    // atributo para llevar un control del número de usuarios
    static private $user_number=0;
    // método constructor 
    public function __construct($email, $password){
      if(checkUserEmail($email) && checkUserPassword($password)){
        $this→$user_email=$email;
	$this→$user_password=$password;
	$this→$user_id=generateUserID();
	User::$user_number++;
	echo "<script>console.log('Usuario:".$user_id." creado con exitó.')</script>";
      }

    }
    // comprueba que el email introducido es válido.
    public function checkUserEmail($users_email){
      return true;
    }
    // comprueba que la contraseña introducida es válida.
    public function checkUserPassword($users_password){
      return true;
    }
    // genera un "user_id" de forma random siguiendo cierta especificaciones.
    public function generateUserID(){
      return 00002;
    }
    // 
    public function encryptPassword(){
      return "";
    }
    public function decryptPassword(){
      return "";
    }

  }
?>
