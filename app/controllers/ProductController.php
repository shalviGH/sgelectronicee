<?php
	/**
	 * 
	 */
	class ProductController extends Controller
	{
		//$_SESSION['CRUD'] = "product";
		function __construct()
		{
			$this->productModel = $this->model('ProductModel');
			session_start();
		}


		//function for get all products of databases>>>>>>>>>>>>>>>>
		//function for get all products of databases>>>>>>>>>>>>>>>>

		public function getProducts(){
			if(isset($_SESSION['datos']['tipoUser'])){

				$typeUser = $_SESSION['datos']['tipoUser'];
			}else{
				echo "NO exist";

			}
			if(isset($_SESSION['datos']["idUser"]))
			{
				$products = $this->productModel->getProducts();

				$productImage = $this->productModel->getProductImage();

				$_SESSION['page'] = 'Product';

				$data = [
						
						'product' => $products,
						'productImage' => $productImage
				];
				
				$_SESSION['CRUD'] = "product";

				if($typeUser == 1){
					//echo "Welcome admin";
					$this->view('pages/vAdmin', $data);
				}
				elseif ($typeUser == 2) {
					# code...
					//echo "Welcome user";
					$this->view('pages/vUser', $data);
				}



			}
			else
			{
				redirection('/index');
			}
			
			//echo "Realizando la consula de productos";
		} 


		/*Function for obatain producto  for id inforamtion>>>>>>>>>>>>>>>>>>>>>>>>> */
		/*Function for obatain producto  for id inforamtion>>>>>>>>>>>>>>>>>>>>>>>>> */
		/*Function for obatain producto  for id inforamtion>>>>>>>>>>>>>>>>>>>>>>>>> */

		public function getProductId($idProduct){
			$products = $this->productModel->getProd($idProduct);

			$_SESSION['page'] = 'Product';
			
			$data = [
					'idProduct' => $products->idProduct,
					'nombreProduct' => $products->nombreProduct,
					'descripcion' => $products->descripcion,
					'precio' => $products->precio,
					'cantidad' => $products->cantidad,
					'imageProduct' => $products->imageProduct,
			];
			//echo $idProduct;
			
			$this->view('pages/productView', $data);
			//print_r($data);
			
			//echo "Realizando la consula de productos";
		}

		

		public function addProduct(){
			if($_SERVER['REQUEST_METHOD'] == 'POST')
			{
				//recibimo la variable imagen
				$nombreImage= $_FILES['photo']['name'];
				$tipoImage = $_FILES['photo']['type'];
				$tam_iamge = $_FILES['photo']['size'];
				//Ruta de la carpeta del servidor

				if( $nombreImage == null)
				{
					$this->view('pages/productView', $data);
				}
				else{
					echo "los datos estan completos";
				}

				$_SESSION['CRUD'] = "insert";

				$carpetaDestino = $_SERVER['DOCUMENT_ROOT'] . RUTA_IMG ;

				//MOVEMOS A LA IMAGEN DEL DIRECTORIO TEMPORAL AL directorio escogido
				move_uploaded_file($_FILES['photo']['tmp_name'], $carpetaDestino.$nombreImage );
				
				//$imgContent = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
					
                   $data = [
                        'codBarra' => trim($_POST['codBarra']),
                        'namePro' => trim($_POST['namePro']),
                        'descPro' => trim($_POST['descPro']),
						'pricePro' => trim($_POST['pricePro']),
                        'category' => trim($_POST['category']),
						'amountPro' => trim($_POST['amount']),
                        'imageProduct' => $nombreImage,
                    ];	

                    if ($this->productModel->addProduct($data)) {
                        
						
						//redirection('/paginas/productView', $data);
						redirection('/ProductController/getProducts', $data);
                    }
                    else 
					{
                        die('Ocurred a error');
                    }
			}
			else{
				$data = [
					'user' => '',
					'password' => ''
				];
				$this->view('user/users', $data);
				//echo "vfbsglkd";
			}
		}



		/*>>>><<<<<<<<<<<<<<<<<<Function for addimage of product>>>>>>>>>>>>> */
		/*>>>><<<<<<<<<<<<<<<<<<Function for addimage of product>>>>>>>>>>>>> */
		/*>>>><<<<<<<<<<<<<<<<<<Function for addimage of product>>>>>>>>>>>>> */

		public function addImage(){
			if($_SERVER['REQUEST_METHOD'] == 'POST')
			{
				//recibimo la variable imagen
				$nombreImage1= $_FILES['photo1']['name'];
				$tipoImage1 = $_FILES['photo1']['type'];
				$tam_iamge1 = $_FILES['photo1']['size'];


				$nombreImage2= $_FILES['photo2']['name'];
				$tipoImage2 = $_FILES['photo2']['type'];
				$tam_iamge2 = $_FILES['photo2']['size'];
				

				$nombreImage3= $_FILES['photo3']['name'];
				$tipoImage3 = $_FILES['photo3']['type'];
				$tam_iamge3 = $_FILES['photo3']['size'];

				$nombreImage4= $_FILES['photo4']['name'];
				$tipoImage4 = $_FILES['photo4']['type'];
				$tam_iamge4 = $_FILES['photo4']['size'];
				//Ruta de la carpeta del servidor

				$carpetaDestino = $_SERVER['DOCUMENT_ROOT'] . RUTA_IMG ;
				//MOVEMOS A LA IMAGEN DEL DIRECTORIO TEMPORAL AL directorio escogido
				move_uploaded_file($_FILES['photo1']['tmp_name'], $carpetaDestino.$nombreImage1 );
				move_uploaded_file($_FILES['photo2']['tmp_name'], $carpetaDestino.$nombreImage2 );
				move_uploaded_file($_FILES['photo3']['tmp_name'], $carpetaDestino.$nombreImage3 );
				move_uploaded_file($_FILES['photo4']['tmp_name'], $carpetaDestino.$nombreImage4 );

				//$imgContent = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
					
                   $data = [
						'codBarra' => trim($_POST['idPro']),
                        'img1' => $nombreImage1,
                        'img2' => $nombreImage2,
                        'img3' => $nombreImage3,
						'img4' => $nombreImage4,
                    ];	

					//print_r($data);
                  	if ($this->productModel->addImageP($data)) 
					{
						//redirection('/paginas/productView', $data);
						redirection('/ProductController/getProducts', $data);
                    }
                    else 
					{
                        die('Ocurred a error');
                    }
			}
			else{
				$data = [
					'user' => '',
					'password' => ''
				];
				$this->view('user/users', $data);
				//echo "vfbsglkd";
			}
		}


		/*>>>Function for obatims product apart for user>>>>>>>>>>>>>>>>>>> */
		/*>>>Function for obatims product apart for user>>>>>>>>>>>>>>>>>>> */
		/*>>>Function for obatims product apart for user>>>>>>>>>>>>>>>>>>> */

		public function productUser()
		{
			if($_SERVER['REQUEST_METHOD'] == 'POST')
			{
				
				$data = [
					'idUser'=>  trim($_POST['idUser']),
					'idProduct'=> trim($_POST['codPro']),
					'numProduct'=> trim($_POST['cantProduct']),
				];
				//print_r($data);
				if ($this->productModel->addUserProduct($data)) {
					redirection('/productController/getProducts');
				}
				else {
					die('Ocurred a error');
				}
			}
		}

		/* >>>>>>>>>>>>>>>>>>>>Function for show the products apart >>>>>>>>>>>>>>*/
		/* >>>>>>>>>>>>>>>>>>>>Function for show the products apart >>>>>>>>>>>>>>*/
		/* >>>>>>>>>>>>>>>>>>>>Function for show the products apart >>>>>>>>>>>>>>*/

		public function sistemApart()
		{
			if(isset($_SESSION['datos']["idUser"]))
			{
				$idUser = $_SESSION['datos']["idUser"];
				$data = [
					'idUser'=>  $idUser,
				];
	
				//print_r($data);
				if ($this->productModel->productApart($data)) {
					
					$productsA = $this->productModel->productApart($data);
					
					$data = [
						'productApart' => $productsA,
					];
					
					//print_r($data);
					$this->view('/pages/viewsProduct/productAparts', $data);
				}
				else 
				{
					
					echo "no hay productos apartados deberia agragar productos a la lista";
					//$this->view('/pages/viewsProduct/productAparts', $data);
				}
			}
			else
			{	
				$_SESSION['sesion'] = false;
				redirection('/index');
				//echo "Es necesario crear una cuenta o iniciar sesion";
			}
			
		}

		public function saleProduct()
		{
			$_SESSION['CRUD'] = "sales";
			
			if($_SERVER['REQUEST_METHOD'] == 'POST')
			{
				$idUser = $_SESSION['datos']["idUser"];
				$precioP = $_POST['precioProduct'];
				$cantP = $_POST['cantProduct'];
				$precioTotal = $precioP * $cantP;


				//echo $precioP. " ".$cantP. " ".$precioTotal;

				$data = [
					'codProduct'=> trim($_POST['idProduct']),
					'cantidad' => trim($_POST['cantProduct']),
					'precioTotal' => $precioTotal,
					'idU' => $idUser,
				];

				if ($this->productModel->productSale($data)) {
					//$this->view('/pages/productView');
					redirection('/productController/getProducts/', $data['idProduct']);
					//redirection('/pages/productView');
				}
				else {
					die('Ocurred a error');
				}
				//echo "se realizara la venta";
			}

			else{
				echo "No se recivieron datos";
			}
			
		}

		public function searchProduct($idCategory)
		{
			
				if($_SERVER['REQUEST_METHOD'] == 'POST')
				{
					$data = [
						'nameProduct'=> trim($_POST['nameProduct']),
						'category'=> $idCategory,
					];
					//echo "El producto a buscar el ".$data['idProduct'];
					if ($this->productModel->searchProduct($data)) 
					{
						$productSearch = $this->productModel->searchProduct($data);
						$productImage = $this->productModel->getProductImage();

						$data = [
							'productFound' => $productSearch,
							'productImage' => $productImage
						];
						//print_r($productSearch);
						if(isset($_SESSION['datos']["idUser"]))
						{
							$_SESSION['CRUD'] = "search";
							$tipoUser = $_SESSION['datos']["tipoUser"];

							if($tipoUser == 2){
								$this->view('/pages/vUser', $data);
							}else{
							//$this->view('/pages/productView', $data);
								$this->view('/pages/vAdmin', $data);
							}
						}
						else
						{
							//redirection('/index', $data);
							$this->view('/pages/productIndex', $data);
						}
					}
					else 
					{
						echo "no se encontraron resultados";
						redirection('/productController/getProducts');
					}
				}
			
			elseif($idCategory != 0){
				//redirection('/Paginas/index');
				$data = [
					'category'=> $idCategory,
					'nameProduct'=> "desc",
				];
				if ($this->productModel->searchProduct($data)) 
				{
					$productSearch = $this->productModel->searchProduct($data);
					$productImage = $this->productModel->getProductImage();

					$data = [
						'productFound' => $productSearch,
						'productImage' => $productImage
					];

					//$this->view('/pages/productIndex', $data);

					if(isset($_SESSION['datos']["idUser"]))
					{
						$_SESSION['CRUD'] = "search";
						$tipoUser = $_SESSION['datos']["tipoUser"];

						if($tipoUser == 2){
								$this->view('/pages/vUser', $data);
						}elseif($tipoUser == 1){
						//$this->view('/pages/productView', $data);
							$this->view('/pages/vAdmin', $data);
						}
						else{
							redirection('/Paginas/index', $data);
						}
					}
					else
					{
						//redirection('/Paginas/index', $data);
						$this->view('/pages/productIndex', $data);
					}
				}
			
			}
		
		}





		/*Function for update product *//*Function for update product *//*Function for update product */
		/*Function for update product *//*Function for update product *//*Function for update product */
		/*Function for update product *//*Function for update product *//*Function for update product */
		public function updateProduct()
		{
			echo "Provando funcion update";
			if($_SERVER['REQUEST_METHOD'] == 'POST')
			{
				//recibimo la variable imagen
				$nombreImage = $_FILES['photo']['name'];
				$tipoImage = $_FILES['photo']['type'];
				$tam_iamge = $_FILES['photo']['size'];
				//Ruta de la carpeta del servidor

				if( $nombreImage == null)
				{
					$_SESSION['CRUD'] = "update";
					$this->view('pages/productView', $data);
				}
				else{
					echo "los datos estan completos";
				}


				$carpetaDestino = $_SERVER['DOCUMENT_ROOT'] . RUTA_IMG ;

				//MOVEMOS A LA IMAGEN DEL DIRECTORIO TEMPORAL AL directorio escogido
				move_uploaded_file($_FILES['photo']['tmp_name'], $carpetaDestino.$nombreImage );
				
				
				$data = [
					
					'cBarra'=> trim($_POST['codBarra']),
					'namePro' => trim($_POST['namePro']),
					'desc' => trim($_POST['descPro']),
					'price'=> trim($_POST['pricePro']),
					'amount' => trim($_POST['amount']),
					'photo' => $nombreImage,
				];

				if ($this->productModel->updateProductM($data)) {
					//$this->view('/UserController/profile', $data);
					//$this->view('/pages/profile', $data);
					//redirection('/UserController/profile', $data);
					//echo "vfbsglkd";
					redirection('/ProductController/getProducts');
					//getProducts();
					//echo "los datos se han actualizado conexito";
				}
				else {
					die('Ocurred a error');
				}
				//print_r($data);
			}

			else{
				echo "No se recivieron datos";
			}
			
		}



		/* Function for delete product *//* Function for delete product */
		/* Function for delete product *//* Function for delete product */
		/* Function for delete product *//* Function for delete product */
		public function deleteProduct(){
			
			$data = [

					'codBarra' => trim($_POST['codBarra']),
					
				];

			if($_SERVER['REQUEST_METHOD'] == 'POST')
			{

				if ($this->productModel->deleteProduct($data)) {
					//redirection('/Users/users');
					$_SESSION['CRUD'] = "delete";
					redirection('/ProductController/getProducts');
				}
				else 
				{
					die('Ocurred a error');
				}
			}
			
		}

		public function deleteProductApart(){
			$data = [
				'idUserProduct' => trim($_POST['idProUser']),
			];

			if($_SERVER['REQUEST_METHOD'] == 'POST')
			{
				

				if ($this->productModel->deleteProUser($data)) {
					//redirection('/Users/users');
					//$_SESSION['CRUD'] = "delete";
					redirection('/ProductController/sistemApart');
				}
				else 
				{
					die('Ocurred a error');
				}
				//print_r($data);
			}
		}


		

	}



?>