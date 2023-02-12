		<?php 
			require RUTA_APP.'/views/inc/header.php'; 

			$numImg = 1;

			if(isset($_SESSION['Search'])){
				$values = $_SESSION['Search'];
				if($values == 0){ ?>
					<div class="alert alert-info alert-dismissable msAlert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Message!</strong> No se encontraron resultados de las busqueda.
					</div>
			<?php }
				/*elseif($values == 1){
					echo "SE encontrasron resultado de la busqueda";
				}*/
			}
		
		?>
			<form method="POST" action="<?= RUTA_URL;?>/ProductController/searchProductIndex/">
				<div class="optionProduct">
					<div  class="contBtnAndSearch">
						<button  class="btn btn-primary btnSearchProduct" >Buscar</button> 
						<input type="text" name="nameProduct"  class="inpSearchP intpNamePro" placeholder="Busque un producto" />
						
						<select class="form-select inpSearchP" name="category" aria-label="Default select example">
							<option value="0">Categorias</option>
							<option value="1" class="js-category1">Electronica</option>
							<option value="2" class="js-category1">Audio</option>
							<option value="3" class="js-category1">Computo</option>
							<option value="4" class="js-category1">Hogar</option>
							<option value="5" class="js-category1">Gamer</option>
						</select>
					</div>
				</div>
			</form>

			<?php
				require RUTA_APP.'/views/pages/viewsProduct/viewProductForUser.php';  //print_r($data); 
			?>
   
			<!--Nodal for delete product --> <!--Nodal for delete product --> <!--Nodal for delete product --> 
			<!--Nodal for delete product --> <!--Nodal for delete product --> <!--Nodal for delete product --> 
			<div class="modal js-loginMessage2">
				 <div class="bodyModal">
					 <form action="<?= RUTA_URL;?>/Paginas/login" method="POST" class="formModal js-formDelete">
							 <label id="js-inpNomPro" class="modalTitle">¡ Message !</label>
							 <input type="hidden" class="js-codBarra" name="codBarra"  >
							 <label id="js-inpNomPro" class="msModal">Para realizar este proceseo debe crear una cuenta personal o iniciar sesion</label> 
						 
						 <div class="contBtnModal">
							 <button class="btn btn-success">Crear cuenta</button>
							 <p href="" class="btn btn-primary btnClosemsLog" unset>Cerrar</p>
						 </div>
					 </form>
				 </div>
			 </div>

		


<?php 
	$_SESSION['Search'] = 3;

	require RUTA_APP.'/views/inc/footer.php';  

?>





