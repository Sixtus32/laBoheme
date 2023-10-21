<?php
class Views {
  public function getView($controlador, $vista){
    $controlador=get_class($controlador);
    if($controlador == "Home"){
      $vista = "../app/views/".$vista.".php";
      }else{
	$vista="../app/views/".$controlador."/".$vista.".php";
      }
    require $vista;
  }
}
?>
