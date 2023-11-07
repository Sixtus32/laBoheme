<?php
	class BD_Connection {
		private $conn;
		function __construct(){
				$host="localhost:3307";
				$database="laboheme";
				$user="root";
				$password="";
			try{
				$this->conn = new PDO("mysql:host=$host;dbname=$database",$user,$password);
				echo "<script> console.log('conexion realizada ✅') </script>";
				return $this->conn;
			}catch(PDOException $e){
				echo "Error: " .$e->getMessage();
				return false;
			}
		}

		function connection_start(){
			return $this->conn;
		}

		function connection_aborted(){
			return $this->conn=null;
		}
	}