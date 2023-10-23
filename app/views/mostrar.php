<?php
include_once "../models/bd.ini.php";

echo "<h1> Contactos </h1> ";
    $bd=new BD_LaBoheme();
    $datos=$bd->getBD_Users();
    foreach($datos as $elemento){
        echo "<br>";
        echo $elemento["user_name"];
        echo "<br><a href='./config/detalle.php?user_id=".$elemento['user_id']."'>|  Ver Detalle   ||   </a>
        <a href='editar.php?telefono=".$elemento['user_id']."'>Editar  || <a href='./config/eliminar.php?user_id=".$elemento['user_id']."'>Eliminar |</a><br>
        ";
    }
echo "<br>";

echo "<hr>";

echo '<a href="./templates/form.php">Registrarse</a>';
echo '<a href="./templates/form_session.php">Inciar Sesión</a>';

?>


<?php
/*$my_url = !empty($_GET['url']) ? $_GET['url'] : "Home/index"; 
$arrayUrl = explode("/", $my_url);
$controller=$arrayUrl[0];
$method="index";
$param="";

// Validacion de metodo
wf(!empty($arrayUrl[1])){
  if(!empty($arrayUrl[1] != "")){
    $method=$arrayUrl[1];
  }
}

// Validación del parametro
if(!empty($arrayUrl[2])){
  if(!empty($arrayUrl[2] != "")){
    for($i=2; $i < count($arrayUrl); $i++){
      $param.=$arrayUrl[$i].",";
    }
    $param=trim($param, ",");
  }
}
include "./config/autoload.php";
$dirControllers = "./app/controllers/".$controller.".php";

if(file_exists($dirControllers)){
  require_once $dirControllers;
  $controller=new $controller();
  if(method_exists($controller, $method)){
    $controller->$method($param);
  }else{
    echo "No existe el método.";
  }
}else{
  echo "No existe el controlador.";
}*/

?>
