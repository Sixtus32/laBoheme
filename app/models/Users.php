<?php

class User{
    // atributos de la clase User
    private $user_id;
    private $user_name;
    private $user_email;
    private $user_password_hash;
    private $user_profile_info_id;
    private $type_of_user;

    // atributo para llevar un control del número de usuarios
    static private $user_number=0;
    // método constructor 
    public function __construct($email, $password){
	// Almacenamos el email.
	$this->user_email=$email;
	// Generamos un hash seguro de la contraseña, y la almacenamos.
	$this->user_password_hash=password_hash($password,   PASSWORD_DEFAULT); 		   
	//Generar un identificador único para el usuario
	$this->user_id=substr(sha1(uniqid(mt_rand(), true)),0, 20);

	$this->user_profile_info_id=substr(sha1(uniqid(mt_rand(), true)), 0, 20);
	$this->type_of_user=1; //Todos comienzan siendo "1" compradores.
	//el nombre obtenido apartir del email introducido.
	$this->user_name=explode('@',$email)[0];
	User::$user_number++;
	echo "<script>console.log('Usuario:".$this->user_id." creado con exitó.')</script>";
      }


    //user_id
    public function getUserID(){
      return $this->user_id;
    }

    //user_name
    public function getUserName(){
      
      return $this->user_name;
    }

    //user_email
    public function getUserEmail(){
      return $this->user_email;
    }

    //user_password
    public function getUserPasswordHash(){
      return $this->user_password_hash;
    }

    //user_profile_info_id
    public function getUserProfileInfoId(){
      return $this->user_profile_info_id;
    }

    //type_of_user
    public function getTypeOfUser(){
      return $this->type_of_user;
    }

  }
