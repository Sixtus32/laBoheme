<?php
        class Controller{
	public $views, $model;
 
	public function __construct(){
	$this->loadModel();
	}
	public function loadModel(){
	$model=get_class($this)."Model";
	$url="../app/models/".$model.".php";

	  if(file_exists($url)){
            require_once $url;
	    $this->$model=new $model();
	  }

	}


	}

