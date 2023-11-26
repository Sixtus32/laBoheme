<?php
  require_once "bd.inc.php";
  // class BD_User extends BD_Connection{
    // REGISTRAR USUARIO.
    function registerUser($user_name,$user_email,$user_password){
      try{
      $connect=new BD_Connection();
      $password=hash("sha256",$user_password);
      $sql=$connect->connection_start()->prepare("INSERT INTO users VALUES (null,:user_name,:user_email,:user_password)");
      $sql->bindValue(':user_name',$user_name);
      $sql->bindValue(':user_email',$user_email);
      $sql->bindValue(':user_password',$password);
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
      $sql->execute();  // Ejecuta la consulta
      $datos=$sql->fetchColumn();
      return ($datos==1);
      }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
        return false;
      }
    }

    // COMPROBACIÓN PARA REDIRIGIR AL USUARIO EN CASO DE QUE YA ESTE EN EL SISTEMA.
    function checkForSignedUser($user_email,$user_password){
      $connect=new BD_Connection();
      $sql=$connect->connection_start()->prepare("SELECT COUNT(*) FROM users WHERE user_email=:user_email AND user_password_hash=:user_password");
      $sql->bindValue(":user_email",$user_email);
      $sql->bindValue(":user_password",$user_password);
      $sql->execute();
      $datos=$sql->fetchColumn();
      return ($datos==1);
    }


    // OBTENCION DEL ID DEL USUARIO
    function getUserIDSigned($user_email,$user_password){
      try{
      $connect=new BD_Connection();
      $sql=$connect->connection_start()->prepare("SELECT user_id FROM users WHERE user_email=:user_email AND user_password_hash=:user_password");
      $sql->bindValue(":user_email",$user_email);
      $sql->bindValue(":user_password",$user_password);
      $sql->execute();  // Ejecuta la consulta
      $dato=$sql->fetchColumn();
      return $dato;
      }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
        return null;
      }
    }

    // OBTENCION DEL ID DEL USUARIO
    function getUserName($user_email,$user_password){
      try{
      $connect=new BD_Connection();
      $sql=$connect->connection_start()->prepare("SELECT user_name FROM users WHERE user_email=:user_email AND user_password_hash=:user_password");
      $sql->bindValue(":user_email",$user_email);
      $sql->bindValue(":user_password",$user_password);
      $sql->execute();  // Ejecuta la consulta
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
        $sql->execute();  // Ejecuta la consulta
        $datos=$sql->fetch();
        return $datos;
      }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
        return [];
      }
    }


    // // UNA VEZ REGISTRADO SE LE HACE SEGUIMIENTO PARA SABER SI SU DATOS SON CORRECTOS (CON EL FIN DE NOTIFICARLE."en su entrada.")
    // function createAccount($user_email,$user_password){
    //   try{
    //     $userId=getUserIDSigned($user_email,$user_password);

    //     $connect=new BD_Connection();
    //     $sql=$connect->connection_start()->prepare("INSERT INTO account VALUES(false,:user_id)");
    //     $sql->bindValue(":user_id",$userId);
    //     $sql->execute();
    //     return true;
    //   }catch(PDOException $e){
    //     echo "Error: " . $e->getMessage();
    //     return false; 
    //   }
    // }

    // // saber si la cuenta ha sido activada (es decir, que tras recibir un mail con un codigo es ha sido activado por el usuario)
    // function statusAccount($userId){
    //     $connect=new BD_Connection();
    //     $sql=$connect->connection_start()->prepare("SELECT status FROM account WHERE user_id=:user_id");
    //     $sql->bindValue(":user_id",$userId);
    //     $sql->execute();
    //     $status = $sql->fetchColumn();
    //     return $status;
    // }

    // // ACTIVAR LA CUENTA DEL USUARIO.
    // function activateAccountStatus($userId){
    //     $connect=new BD_Connection();
    //     $sql=$connect->connection_start()->prepare("UPDATE account SET status=:status WHERE user_id=:user_id");
    //     $sql->bindValue(":status",true);
    //     $sql->bindValue(":user_id",$userId);
    //     $sql->execute();
    // }
    // // DESACTIVAR LA CUENTA DEL USUARIO.
    // function deactivateAccountStatus($userId){
    //     $connect=new BD_Connection();
    //     $sql=$connect->connection_start()->prepare("UPDATE account SET status=:status WHERE user_id=:user_id");
    //     $sql->bindValue(":user_id",$userId);
    //     $sql->bindValue(":status",false);
    //     $sql->execute();
    // }


    // GENERAR LA IMAGEN PRIMERIZA DEL USUARIO AL REGISTRARSE.
    function generateUserImage($texto){
        // Crear una imagen en blanco con un fondo de color aleatorio
      $image = imagecreatetruecolor(100, 100);
      $bgColor = imagecolorallocate($image, rand(0, 255), rand(0, 255), rand(0, 255));
      imagefill($image, 0, 0, $bgColor);

        // Establecer el color del texto (blanco)
      $textColor = imagecolorallocate($image, 255, 255, 255);

        // Establecer la fuente y la posición del texto
      $font = '../public/assets/fonts/arial.ttf'; // Reemplaza con la ruta a tu fuente TrueType
      $fontSize = 25;
      $posX = 40;
      $posY = 70;

        // Escribir el texto en la imagen
      imagettftext($image, $fontSize, 0, $posX, $posY, $textColor, $font, $texto);

        // Guardar la imagen en un archivo PNG
      $fileName = '../public/assets/img/userImage/';

      if (!file_exists($fileName)) {
        mkdir($fileName, 0755, true);
    }

      // Guardar la imagen en un archivo PNG
      $imageUrlName = $fileName . 'imagen_generada.png';
      imagepng($image, $imageUrlName);

        // Liberar la memoria
      imagedestroy($image);

      // Retornar el nombre del archivo
      // return $fileName;
    }

    

  // }
