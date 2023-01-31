<?php
	/**
	 * 
	 */
	class UserModel
	{
		function __construct()
		{
			$this->db = new Base;
		}

		public function getUsers()
		{
			$this->db->query('SELECT * FROM user');
			$result = $this->db->getRegisters();

			return $result; 
		}


		public function verifyUser($data)
		{
			$this->db->query('SELECT * FROM users WHERE userName = :userName');
			$this->db->bind(':userName', $data['userName']);
			$row = $this->db->register();

			return $row;
		}



		public function addUser($data)
		{
			$this->db->query('INSERT INTO users 
			(name, lastName, email, phone, userName, pass, tipoUser) 
			VALUES( :nameU, :lastName, :email, :phone, :userName, :pass, :idTipoUser)' );

			//vinculara valores
			$this->db->bind(':nameU', $data['name']);
			$this->db->bind(':lastName', $data['lastName']);
			$this->db->bind(':email', $data['email']);
			$this->db->bind(':phone', $data['phone']);
			$this->db->bind(':userName', $data['userName']);
			$this->db->bind(':pass', $data['pass']);
			$this->db->bind(':idTipoUser', 2 );

			if ($this->db->execute()) 
			{
				return true;
			}
			else{
				return false;
			}
		}

		public function getUser($idUser)
		{
			$this->db->query('SELECT * FROM users WHERE idUser= :idU');
			$this->db->bind(':idU', $idUser);
			$row = $this->db->register();

			return $row;
		}

		public function updateUser($data)
		{
			$this->db->query('UPDATE users SET 
				name = :name, 
				lastName = :lastName, 
				email = :email, 
				phone = :phone, 
				userName = :user, 
				pass = :pass
				WHERE idUser = :idU ');

			//vincular values
			$this->db->bind(':idU',$data['idUser']);
			$this->db->bind(':name',$data['name']);
			$this->db->bind(':lastName',$data['lastName']);
			$this->db->bind(':email',$data['email']);
			$this->db->bind(':phone',$data['phone']);
			$this->db->bind(':user',$data['user']);
			$this->db->bind(':pass',$data['pass']);

			//execute
			if($this->db->execute())
			{
				return true;

			}
			else
			{
				return false;
			}
		}

		public function deleteUser($data)
		{
			$this->db->query('DELETE FROM user WHERE id = :idU');

			//vincular values
			$this->db->bind(':idU',$data['id']);
			
			//execute
			if($this->db->execute())
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		public function LoginUser($data)
		{
			$this->db->query('SELECT * FROM users WHERE userName=:us AND pass= :pwd');

			//vincular values
			$this->db->bind(':us', $data['user']);
			$this->db->bind(':pwd', $data['pass']);
			//execute
			$row = $this->db->register();
			return $row;
		}
	}

?>