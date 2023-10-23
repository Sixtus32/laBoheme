<?php
  class BD_LaBoheme{
    private $conectar;

    public function __construct(){
      $db="laboheme";
      $user="root";
      $password="";
      $host="localhost:3307";

      try{
	$this->conectar=new PDO("mysql:host=$host;dbname=$db",$user,$password);
        echo "<script>console.log('Conexión realizada con éxito')</script>";
      }catch(PDOException $e){
	echo "<script>console.log('Error de conexión : ".$e->getMessage()."')</script>";
      }

      }
      // funcion para obtener todos los usuarios.
      public function getBD_Users(){
	try{
	  $sql="SELECT * FROM users";
	  $user_data=$this->conectar->query($sql)->fetchAll();
	  //echo "<script>console.log('Obtención de datos de los usuarios realizada con éxito')</script>";
	  return $user_data;
	}catch(PDOException $e){
	  //echo "<script>console.log('Error::Obtención Fallida : <br>".$e->getMessage()."')</script>";
	  return [];
	}
      }

      // funcion para obtener los datos de un usuario.
      public function getBD_User($user_id){
	try{
	  $sql="SELECT * FROM users WHERE user_id='$user_id'";
	  $user_data=$this->conectar->query($sql)->fetch();
	  echo "<script>console.log('Obtención de datos del usuario realizada con éxito')</script>";
	  return $user_data;
	}catch(PDOException $e){
	  echo "<script>console.log('Error::Obtención Fallida : <br>".$e->getMessage()."')</script>";
	  return [];
	}
      }
      // validar contraseña.
      public function validatePassword($password){
	//verificar longitud
	if(strlen($password) < 8){
	  return false;
	}
	//verificar al menos una mayúscula
	if(!preg_match('/[A-Z]/', $password)){
	  return false;
	}
	//verificar al menos una minuscula
	if(!preg_match('/[a-z]/', $password)){
	  return false;
	}
	//verificar al menos un número 
	if(!preg_match('/[0-9]/', $password)){
	  return false;
	}
	//verificar al menos un carácter especial 
	if(!preg_match('/[\W_]/', $password)){
	  return false;
	}
	return true;
      }
      // validar email
      public function validateEmail($email){
	$part=explode('@', $email);
	if(count($part) == 2){
	  return true;
	}else{
	  return false;
	}
      }
      // funcion para insertar un usuario.
      public function insertUser($user){
	$password = $user->getUserPasswordHash();
	$email = $user->getUserEmail();
	if($this->validatePassword($password) && $this->validateEmail($email)){
          try{
	    $sql="INSERT INTO users VALUES(?,?,?,?,?,?)";
	    $stmt=$this->conectar->prepare($sql);
	    $stmt->execute([$user->getUserID(),$user->getUserName(),$user->getUserEmail(),$user-> getUserPasswordHash(),$user->getUserProfileInfoId(),$user->getTypeOfUser()]);
	    //$echo "<script>console.log('Insertado con éxito')</script>";
	    return true;
	  }catch(PDOException $e){
	    echo "<script>console.log('Error::Inserción Fallida : <br>".$e->getMessage()."')</script>";
	    return false;
	  } 
	}else{
	    //echo "<script>console.log('Email/Contraseña erroneos : <br>')</script>";
	  return false;
	}
      }



      // funcion para eliminar un usuario.
      public function deleteUser($user_id){
	try{
	  $sql="DELETE FROM users WHERE user_id=?";
	  $stmt=$this->conectar->prepare($sql);
	  $stmt->execute([$user_id]);
	 // $echo "<script>console.log('Eliminado con éxito')</script>";
	  return true;
	}catch(PDOException $e){
	//  $echo "<script>console.log('Fallo en la eliminación.')</script>"; 
	  return false;

	}
      }

      
    
  } 
