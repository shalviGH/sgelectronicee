<?php
	/**
	 * 
	 */
	
	class ProductModel extends controller
	{
		function __construct()
		{
			$this->db = new Base;
		}

		public function getProducts()
		{
			$this->db->query('SELECT * FROM producto');
			$result = $this->db->getRegisters();

			return $result; 
		}

		public function getProductImage()
		{
			$this->db->query('select * from producto inner join image on 
			producto.codBarra = image.idProducto');
			$result = $this->db->getRegisters();

			return $result; 
		}

		public function addProduct($data)
		{
			$this->db->query('INSERT INTO producto (codBarra, nameProduct, descrip, price, amount, category,image) 
            VALUES (:codBarra, :namePro, :descPro, :pricePro, :amountPro, :category,  :imageProduct)' );

			//vinculara valores
			$this->db->bind(':codBarra', $data['codBarra']);
			$this->db->bind(':namePro', $data['namePro']);
            $this->db->bind(':descPro', $data['descPro']);
			$this->db->bind(':pricePro', $data['pricePro']);
            $this->db->bind(':amountPro', $data['amountPro']);
			$this->db->bind(':category', $data['category']);
			$this->db->bind(':imageProduct', $data['imageProduct']);


			if ($this->db->execute()) 
			{
				return true;
			}
			else{
				return false;
			}

			//echo $data['imageProduct'];

		}

		
		public function addImageP($data)
		{
			$this->db->query('INSERT INTO image (nombreImg, idProducto)
            VALUES (:img1, :codBarra),(:img2, :codBarra),(:img3, :codBarra), (:img4, :codBarra)' );

			//vinculara valores
			$this->db->bind(':codBarra', $data['codBarra']);
			$this->db->bind(':img1', $data['img1']);
			$this->db->bind(':img2', $data['img2']);
			$this->db->bind(':img3', $data['img3']);
			$this->db->bind(':img4', $data['img4']);
            //$this->db->bind(':img2', $data['img2']);
			//$this->db->bind(':img3', $data['img3']);

			if ($this->db->execute()) 
			{
				return true;
			}
			else{
				return false;
			}

			//echo $data['imageProduct'];

		}

		public function addUserProduct($data)
		{
			$this->db->query('CALL setProductUser(:idUser, :idProduct, :numProduct)');

			//vinculara valores
			$this->db->bind(':idUser',$data['idUser']);
			$this->db->bind(':idProduct',$data['idProduct']);
			$this->db->bind(':numProduct',$data['numProduct']);
            

			if ($this->db->execute()) 
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		public function getProd($idp)
		{
			$this->db->query('SELECT * FROM producto WHERE codBarra= :idP');
			$this->db->bind(':idP', $idp);
			$row = $this->db->register();

			return $row;
		}

		
		public function productSale($data)
		{
			$this->db->query('CALL productSale(:codP, :cantP, :precioT, :idVendedor )' );
			
			$this->db->bind(':codP', $data['codProduct']);
			$this->db->bind(':cantP', $data['cantidad']);
			$this->db->bind(':precioT', $data['precioTotal']);
			$this->db->bind(':idVendedor', $data['idU']);

			if ($this->db->execute()) 
			{
				return true;
			}
			else
			{
				return false;
			}

		}



		
		public function productApart($data)
		{
			$this->db->query('CALL selectProduct(:idU)' );

			//vincular values
			$this->db->bind(':idU', $data['idUser']);

			$result = $this->db->getRegisters();

			return $result; 
		}

		public function searchProduct($data)
		{
			if($data['category'] == 0 )
			{
				$this->db->query('SELECT * FROM producto 
				WHERE producto.nameProduct  LIKE  "%":nameProduct"%" ');
				
				$this->db->bind(':nameProduct', $data['nameProduct']);
			}
			else{
				$this->db->query('SELECT * FROM producto 
								WHERE producto.category  LIKE  "%":idCategory"%" ');
				
				$this->db->bind(':idCategory',$data['category']);
			}

			$result = $this->db->getRegisters();

			return $result; 
		}


		/*Funtion for search product on index */

		public function searchProductIndex($data)
		{
			$nameProduct = $data['nameProduct'];
			$category = $data['category'];

			//echo $nameProduct ," " ,$category;

			if($category == 0 && $nameProduct != "empty")
			{
				//echo "se buscara por nombre";
				
				$this->db->query('SELECT * FROM producto 
				WHERE producto.nameProduct  LIKE  "%":nameProduct"%" ');
				
				$this->db->bind(':nameProduct', $data['nameProduct']);
			}
			elseif($category != 0 && $nameProduct == "empty")
			{
				$this->db->query('SELECT * FROM producto 
								WHERE producto.category  LIKE  "%":idCategory"%" ');
				
				$this->db->bind(':idCategory',$data['category']);
			}
			elseif($category == 0 && $nameProduct == "empty")
			{
				$this->db->query('SELECT * FROM producto');
			}
			elseif($category != 0 && $nameProduct != "empty")
			{
				echo "se buscara por nombre y categoria";
			}


			$result = $this->db->getRegisters();

			return $result;


		}


		//function for update product------------------function for update product------------------
		//function for update product------------------function for update product------------------

		public function updateProductM($data)
		{
			$this->db->query('UPDATE producto SET 
				nameProduct = :namePro, 
				descrip = :descrip,
				price = :price,
				amount = :amount,
				image = :photo
				WHERE codBarra = :cBarra ');

			//vincular values
			$this->db->bind(':cBarra', $data['cBarra']);
			$this->db->bind(':namePro', $data['namePro']);
			$this->db->bind(':descrip', $data['desc']);
			$this->db->bind(':price', $data['price']);
			$this->db->bind(':amount', $data['amount']);
			$this->db->bind(':photo', $data['photo']);



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

		public function deleteProduct($data)
		{
			$this->db->query('DELETE FROM producto WHERE codBarra = :codBarra');

			//vincular values
			$this->db->bind(':codBarra',$data['codBarra']);
			
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

		public function deleteProUser($data)
		{
			$this->db->query('DELETE FROM userproduct WHERE idUserProduct = :idUp');

			//vincular values
			$this->db->bind(':idUp',$data['idUserProduct']);
			
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
			$this->db->query('SELECT * FROM user WHERE user=:us AND pass= :pwd');

			//vincular values
			$this->db->bind(':us',$data['user']);
			$this->db->bind(':pwd',$data['pass']);
			//execute
			$row = $this->db->register();
			return $row;
		}
	}

?>