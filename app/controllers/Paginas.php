<?php  

	class Paginas extends Controller
	{
		function __construct()
		{
			$this->productModel = $this->model('ProductModel');
			session_start();
			
		}
		
		public function index(){
			$_SESSION['page'] = 'ProIndex';
			$_SESSION['page2'] = 'HomeIndex';
		
			$data = [
				'titulo' => 'home',
				'user' => "uknow",
				//'product' => $product,
			];

			$this->view('pages/home', $data);
		}


		

		public function home(){
			$_SESSION['page'] = 'Home';
			$_SESSION['page2'] = '';

			if(isset($_SESSION['datos']["idUser"]))
			{
				$id = $_SESSION['datos']["idUser"];
				
				$data = [
					'titulo' => 'home',
					'user' => $id,
					//'product' => $product,
				];
				$this->view('pages/home', $data);
			}
			else{
				redirection('/Paginas/index');
			}
		}


		public function products(){
			$_SESSION['page'] = 'ProIndex';
			
			$_SESSION['page2'] = 'pro';

			$products = $this->productModel->getProducts();
			
			$productImage = $this->productModel->getProductImage();

				$data = [
					'product' => $products,
					'productImage' => $productImage
				]; 	
				
			$this->view('pages/productIndex', $data);
		}






		public function login(){

			$_SESSION['page'] = 'ProIndex';
			$_SESSION['page2'] = 'ProIndex2';

			$data = [
				'titulo' => 'home1',
			];
				
			$this->view('pages/login', $data);
		
		}
		public function about(){

			$_SESSION['page'] = 'ProIndex';
			$_SESSION['page2'] = 'about';

			$data = [
				'titulo' => 'home1',
			];
				
			$this->view('pages/about', $data);
		
		}

		
		/*public function login(){
			//$this->view('pages/home');
			//$articulos = $this->articuloModelo->obtenerArticulos();
			$_SESSION['page'] = 'Home';
			if($_SERVER['REQUEST_METHOD'] == 'POST'){

				$data = [
					'user'=> trim($_POST['user']),
					'pass' => trim($_POST['password']),
				];

				//$this->view('pages/home', $data);
				//echo "View found !";
			}
			else
			{
				$_SESSION['page'] = 'Home';
				$data = [
					'user'=> "",
					'password' => "",
				];
				$this->view('pages/home', $data);
			}
			
		}*/

		

		public function logOut(){
			$_SESSION['page'] = 'ProIndex';
			$_SESSION['page2'] = 'ProIndex2';

			session_destroy();
			//$this->view('pages/home');
			//$articulos = $this->articuloModelo->obtenerArticulos();
			$data = [
				'titulo' => 'Login',
			];
			//$this->view('pages/login', $data);
			redirection('/Paginas/index');
		}
	}
?>