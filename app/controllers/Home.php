<?php
class Views {
  public function __construct(){

  }
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
        class Controller{
 
	public function __construct(){
	        $this->$views=new Views();
		$this->loadModel();
	}

	public function loadModel(){

	$model=get_class($this)."Model";
	$ruta="../app/models/".$model.".php";

	  if(file_exists($ruta)){
            require_once $ruta;
	    $this->$model=new $model();
	  }

	}


	}

class Home extends Controller{
  public function index(){
   $this->views→getView($this, "index");
  }
}
?>
