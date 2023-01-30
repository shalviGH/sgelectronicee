<?php 

	/*
	Mapear the url from browswer
	
	1-controller
	2-metod
	3- Parameters

	Example: /articulos/actualizar/4
	*/

	/**
	 * 
	 */
	class Core
	{
		protected $controladorActual = 'Paginas';
		protected $metodoActual = 'index';
		protected $parametros=[];

		public function __construct(){
			//print_r($this->getUrl());
			$url = $this->getUrl();

			//search in controllerif controller exist
			if (file_exists('../app/controllers/'.ucwords($url[0].'.php'))) {
				//if exisst si setea as current controller  for defualt
				$this->controladorActual = ucwords($url[0]);

				//unset indice
				unset($url[0]);
			}
			else
			{
				redirection('/Paginas/index');
			}

			//require the controller
			require_once '../app/controllers/'.$this->controladorActual.'.php';
			$this->controladorActual = new $this->controladorActual;

			//check the second part of the url what should be the method
			if(isset($url[1])){
				if (method_exists($this->controladorActual, $url[1])) {
					
					//check the method
					$this->metodoActual = $url[1];

					//uset indice
					unset($url[1]);
				}
			}
			//para probar traer metodo
			//echo $this->metodoActual;;

			//obtains the parameters
			$this->parametros = $url ? array_values($url) : [];

			//call callback whith parameters array

			call_user_func_array([$this->controladorActual, $this->metodoActual], $this->parametros);
		}

		public function getUrl(){
			//echo $_GET['url'];
			if (isset($_GET['url'])) {
				$url = rtrim($_GET['url'],'/');
				$url = filter_var($url,FILTER_SANITIZE_URL);

				$url = explode('/', $url);

				return $url;
			}
		}
	}
?>