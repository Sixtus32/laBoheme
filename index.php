<?php
$my_url = !empty($_GET['url']) ? $_GET['url'] : "Home/index"; 
$arrayUrl = explode("/", $my_url);
$controller=$arrayUrl[0];
$method="index";
$param="";

// Validacion de metodo
if(!empty($arrayUrl[1])){
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
}


?>
