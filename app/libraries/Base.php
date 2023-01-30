<?php  

	//class for connect at the database
	class Base
	{
		private $host= DB_HOST;
		private $usuario = DB_USER;
		private $password = DB_PASSWORD;
		private $nombre_base = DB_NAME;

		private $dbh;
		private $stmt;
		private $error;
		

		public function __construct(){
			//setup conexion
			$dsn = 'mysql:host='.$this->host.';dbname='. $this->nombre_base;
			$opciones = array(
				PDO::ATTR_PERSISTENT => true,
				PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION
			);

			//Crear una instancia de PDO
			try{
				$this->dbh = new PDO($dsn, $this->usuario,$this->password,$opciones);
				$this->dbh->exec('set names utf8');
			}catch (PDOException $e){
				$this->error = $e->getMessage();
				echo $this->error;
			}
		}


		public function query($sql){
			$this->stmt = $this->dbh->prepare($sql);
		} 

		public function bind($parametro, $valor, $tipo = null)
		{
			if (is_null($tipo)) {
				switch (true) {
					case is_int($valor):
						$tipo = PDO::PARAM_INT;
						break;
					case is_bool($valor):
						$tipo = PDO::PARAM_BOOL;
						break;
					case is_null($valor):
						$tipo = PDO::PARAM_NULL;
						break;
					default:
						$tipo = PDO::PARAM_STR;
						break;
				}
			}
			$this->stmt->bindValue($parametro, $valor, $tipo);

		}

		//execute the query
		public function execute(){
			return $this->stmt->execute();
		}

		//obtains the registers
		public function getRegisters(){
			$this->execute();
			return $this->stmt->fetchAll(PDO::FETCH_OBJ);
		}

		//obtains the register
		public function register(){
			$this->execute();
			return $this->stmt->fetch(PDO::FETCH_OBJ);
		}

		//obtains THE CANT TH FILES with methos row count
		public function rowCount(){
			return $this->stmt->rowCount();
		}
	}

?>