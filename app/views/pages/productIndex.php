<?php 
	require RUTA_APP.'/views/inc/header.php'; 

    $numImg = 1;

?>

			<form method="POST" action="<?= RUTA_URL;?>/ProductController/searchProduct">
				<div class="optionProduct">
				
					<div  class="contBtnAndSearch">
						<button  class="btn btn-primary btnSearchProduct" >Buscar</button> 
						<input type="text" name="nameProduct"  class="inpSearchP" placeholder="Nombre del producto" required/>
						
						<select class="form-select inpSearchP" aria-label="Default select example">
							<option selected>Categorias</option>
							<option value="1">Accesorio arduino electronica</option>
							<option value="2">Accesorios laptops</option>
							<option value="3">Accesoriios celulares</option>
							<option value="4">Bocinas</option>
							<option value="5">Relojes</option>
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

		


<?php require RUTA_APP.'/views/inc/footer.php';  ?>





