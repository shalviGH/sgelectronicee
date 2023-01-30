<?php 
	require RUTA_APP.'/views/inc/header.php'; 

    $numImg = 1;

?>






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





