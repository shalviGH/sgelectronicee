<?php
/**
   * 
   */
  class Controller
  {
  	//load the model
  	public function model($model){
  		//load
  		require_once '../app/models/'.$model.'.php';
  		//instance the model
  		return new $model();
  	}

  	public function view($view, $data = []){
  		//check if the file view exists
  		if (file_exists('../app/views/'.$view.'.php')) {
  			# code...
  			require_once '../app/views/'.$view.'.php';
  		}
  		else
  		{
  			//si la vista o el archivo no existe
  			die('View no exsist');
  		}


  		//require_once '../app/models/'.$model.'.php';
  		//instance the model
  		//return new $model();
  	}
  	
  }  
?>