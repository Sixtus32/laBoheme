<?php
    		function conectar(){

				$host="localhost";
				$database="laboheme";
				$user="root";
				$password="";
			try{
				$conn = new PDO("mysql:host=$host;dbname=$database",$user,$password);
				echo "<script> console.log('conexion como admin realizada ✅.') </script>";
				return $conn;
			}catch(PDOException $e){
				echo "Error: " .$e->getMessage();
				return false;
			}
		}

        function checkAdminExists($admin_email, $admin_password){
            $conexion=conectar();
            $sql=$conexion->prepare("SELECT COUNT(*) FROM admin WHERE admin_email=:admin_email AND admin_password=:admin_password");
            $sql->bindValue(":admin_email", $admin_email);
            $sql->bindValue(":admin_password", $admin_password);
            $sql->execute();
            $datos=$sql->fetchColumn();
            return ($datos==1);
        }


