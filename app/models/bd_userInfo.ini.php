<?php
class BD_UserInfo{
  private $conn;
  public function __construct(){
      $db="laboheme";
      $user="root";
      $password="";
      $host="localhost:3307";
      try{
	$this->conn=new PDO("mysql:host=$host;dbname=$db",$user,$password);
        echo "<script>console.log('Conexión a [users_info] con éxito')</script>";
      }catch(PDOException $e){
	echo "<script>console.log('Error de conexión : ".$e->getMessage()."')</script>";
      }
  }

  public function getUserName(){
    try{
      $sql="SELECT name FROM users_info";
      return $this->conn->query($sql)->fetchColumn();
    }catch(PDOException $e){
      echo "no se pudo obtener el nombre";
      return " "; 
    }
  }
  public function getUserPhoto(){
    try{
      $sql="SELECT photo FROM users_info";
      return $this->conn->query($sql)->fetchColumn();
    }catch(PDOException $e){
      echo "no se pudo obtener el nombre";
      return " ";
    }
  }
  public function getUserDescription(){
    try{
      $sql="SELECT description FROM users_info";
      return $this->conn->query($sql)->fetchColumn();
    }catch(PDOException $e){
      echo "no se pudo obtener el nombre";
      return " ";
    }
  } }