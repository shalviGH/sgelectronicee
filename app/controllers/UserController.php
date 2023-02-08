<?php
	
	/**
	 * 
	 */
	class UserController extends Controller
	{
		//$_SESSION['iDu'] = 0;

		public $idUser = 0;
		
		function __construct()
		{
			$this->userModel = $this->model('UserModel');
			session_start();
			ob_start();
			

		}

		public function users(){
			$_SESSION['page'] = 'User';

			//get users
			$users = $this->userModel->getUsers();

			$data = [ 
				'title' => 'view users',
				'users' => $users
			];

			$this->view('pages/user/moduleUser', $data);
		}

		public function pageUser($data)
		{
			$this->view('pages/pageUser/admin', $data);
		}

		public function getProfile()
		{
			echo $_SESSION['datos']["idUser"];

		}

		

		public function addUser(){
			if($_SERVER['REQUEST_METHOD'] == 'POST')
			{

				$phone = trim($_POST['phone']);

				if($phone == null){
					$phone = "0000000000";
				}
				else{
					$phone = trim($_POST['phone']);
				}

				$data = [
					
					/*'name' => trim($_POST['name']),
					'lastName' => trim($_POST['lastName']),
					'email' => trim($_POST['email']),
					'phone' => trim($_POST['phone']),
					'name' => trim($_POST['name']),
					'lastName' => trim($_POST['lastName']),
					'email' => trim($_POST['email']),*/
					'name' => trim($_POST['userName']),
					'lastName' => "kkkkkkkkkkkk",
					'email' => "fffffffffffff",
					'phone' => $phone,
					'userName' => trim($_POST['userName']),
					'pass' => trim($_POST['pass']),
				];
				
				$row = $this->userModel->verifyUser($data);

				if($row == null)
				{
					if ($this->userModel->addUser($data)) {
						//redirection('/Users/users');
	
						$_SESSION['register'] = "insert";
						redirection('/Paginas/login');
						//echo "vfbsglkd";
	
						$_SESSION['register'] = "true";
					}
					else {
						die('Ocurred a error');
					}
				}
				else{
					//echo "El usuario ya existe en la base de datos";
					$_SESSION['register'] = "false";
					redirection('/Paginas/login');
				}
					
				



				/*if ($this->userModel->addUser($data)) {
					//redirection('/Users/users');

					$_SESSION['register'] = "insert";
					redirection('/Paginas/login');
					//echo "vfbsglkd";

					$_SESSION['register'] = "true";
				}
				else {
					die('Ocurred a error');
				}*/


				//print_r($data);
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


		public function updateUser(){
			if($_SERVER['REQUEST_METHOD'] == 'POST')
			{
				$data = [
					/*'idUser'=> trim($_POST['idU']), 
					'name'=> trim($_POST['nameU']),
					'lastName' => trim($_POST['lastName']),
					'email' => trim($_POST['email']),
					'phone' => trim($_POST['phone']),*/
					'idUser'=> trim($_POST['idU']), 
					'name'=> "fff",
					'lastName' => "ffvvv",
					'email' => "ffcvc",
					'phone' => "ffff",
					'user' => trim($_POST['userName']),
					'pass' => trim($_POST['pass']),
				];

				if ($this->userModel->updateUser($data)) {
					//$this->view('/UserController/profile', $data);
					$this->view('/pages/profile', $data);
					redirection('/UserController/profile', $data);
					//echo "vfbsglkd";
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

		public function deleteUser($idUser){

			$user = $this->userModel->getUser($idUser);

			$data = [
					'id' => $user->id,
					'name' => $user->name,
					'lastName' => $user->lastName,
					'user' => $user->user,
					'password' => $user->password
				];

			if($_SERVER['REQUEST_METHOD'] == 'POST')
			{
				$data = [
					'id'=> $idUser
				];

				if ($this->userModel->deleteUser($data)) {
					redirection('/Users/users');
				}
				else 
				{
					die('Ocurred a error');
				}
			}
			$this->view('pages/user/moduleDeleteUser', $data);
		}


		public function login()
		{
			if ($_SERVER['REQUEST_METHOD'] == 'POST') 
			{

				$data = [
					'user' => trim($_POST['user']),
					'pass' => trim($_POST['pwd']),
				];
				//print_r($data);
				if($data['user'] == '' || $data['pass'] == '')
				{
					redirection('/Paginas/login');
				}
				elseif($data['user'] != '' || $data['pass'] != ''){
					if ($this->userModel->LoginUser($data))
					{
						//redirection('/Users/users');
						$user = $this->userModel->LoginUser($data);
						
						$_SESSION['page'] = 'Home';
	
						$data = [
							'idUser' => $user->idUser,
							'nameU' => $user->name,
							'lastName' => $user->lastName,
							'email' => $user->email,
							'phone' => $user->phone,
							'userName' => $user->userName,
							'tipoUser' => $user->tipoUser,
						];
						
	
						//$id = $data['idUser' => $user->idUser];
	
	
						//$idUser = $_SESSION['iDu'];
						
						$_SESSION['datos'] = [
							'idUser' => $user->idUser,
							'nameU' => $user->name,
							'lastName' => $user->lastName,
							'email' => $user->email,
							'phone' => $user->phone,
							'userName' => $user->userName,
							'tipoUser' => $user->tipoUser,
						];
						//echo $_SESSION['iDu'] ;
	
						if($data != null)
						{
							
							//redirection('/pages/home', $data);
							//$this->view('/pages/profile', $data);
							$this->view('/pages/home', $data);
						}
						else 
						{
							redirection('/Paginas/login');
							#echo "no se encontraron datos";
						}
						//redirection('/Paginas/home', $data);
					}
					else 
					{	
						$_SESSION['inicio'] = 'false';
						$_SESSION['error']= 'vdeas';
						//echo "usuario no encontrado";
						redirection('/Paginas/login');
						
					}	

				}
				
			}
			else{
				 echo "Nose recivieron datos";
				 redirection('/index');	
			}
		}

		public function profile(){
			$_SESSION['page'] = 'Profile';
			//echo $_SESSION['datos']["idUser"];

			if(isset($_SESSION['datos']["idUser"]))
			{
				$idUser = $_SESSION['datos']["idUser"];
				//echo $id;
				$user = $this->userModel->getUser($idUser);
			
				$data = [
					'idUser' => $user->idUser,
					'nameU' => $user->name,
					'lastName' => $user->lastName,
					'email' => $user->email,
					'phone' => $user->phone,
					'userName' => $user->userName,
					'pass' => $user->pass,
					'typeUser' => $user->tipoUser,
				];

				$_SESSION['datos']['idUser'];

				$this->view('/pages/profile', $data);
			}
			else
			{
				echo "No se encontraron los datos";
				redirection('/index');
			}
			
				//$this->view('pages/pageUser/profile', $data);
				///echo "User profile";
		}

		public function closeSession()
		{
			
			session_unset();
			session_destroy();
			redirection('/index');		
		}
	}



?>