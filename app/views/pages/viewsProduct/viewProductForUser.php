
<div class ="containerHome containerProductForUser js-contElementsProducto1">
    
            <?php 
                if(isset($data['product'])){
                    $op = $data['product'];
                }
                if(isset($data['productFound'])) {
                    $op = $data['productFound'];

                    //echo "la busqueda de producto existe";
                }
           ?>

            <div class="contListImage" >
                 <?php 

                 //show data of dtabase of product
                    foreach($op as $product) : 
                        #echo "<br>";
                ?>
                    <div class="contImg js-contProducts" id="dataP">
                        <div class="contImg js-contProduct" id="dataPl">
                            <!--label><?php echo $product->nameProduct; ?></label-->
                        <!--img  src="<?php echo RUTA_IMG?>/imgProfile.png" class="imgProduct"-->
                            <img  src="<?php echo RUTA_IMG , ($product->image); ?>" 
                            class="imgProduct" id="urlImg">
                            
                        
                       



                            <div class="line"></div>
                            <!--a class="tooltip" href="http:sgElectroni.com">ndbfndknbknjnjnjj
                                <i class="fas fa-info-circle"><i>
                                    <span class="tooltip-box">de clic sobre la imagenpara ver mas infrolmacion</span>
                            </a--> 
                            <div class="contPrecioAvailable"><label><?php echo '$'.$product->price.'.00' ?></label><label><?php echo 'Disponible:  '.$product->amount; ?></label></div>
                            
                            <input type="hidden" id="js-idProduct" value="<?php echo $product->codBarra; ?>" />
                            
                            <?php
                               $lenght = strlen($product->descrip);
                            
                            ?>
                            
                            <label class= "lblInfoProduct" style="display:none">Produc: <label class="lblInfoProduct2 js-nameProduct" id="js-nameProduct"><?php echo $product->nameProduct; ?> </label></label>
                            <label class= "lblInfoProduct" >Descripcion:
                                <?php if($lenght>25){?>
                                    <marquee class="lblInfoProduct2 js-descPro" ><?php echo $product->descrip; ?> </marquee>
                       
                                <?php } else{?>
                                <label class="lblInfoProduct2 js-descPro" ><?php echo $product->descrip; ?> </label>
                                <?php } ?> 
                            
                            
                            </label>
                            <label class= "lblInfoProduct" style="display:none">Precio: <label class="lblInfoProduct2 js-prePro" ><?php echo $product->price; ?> </label></label>
                            <label class= "lblInfoProduct" style="display:none">disponibles: <label class="lblInfoProduct2 js-cantProduct"><?php echo $product->amount; ?> </label></label>
                        
                            <?php 
                                $codB = $product->codBarra;

                                if(isset($data['productImage']))
                                {
                                    //echo "Si hay imagenes";
                                    // $var = $data['productImage']['idProducto'];
                                // echo $var;
                                foreach($data['productImage'] as $img):
                                // $numImg = 1;
                                        if($codB == $img->idProducto){ ?>
                                        
                                            <div class="listImg js-imgList" >
                                                <img  class="imgL" src="<?php echo RUTA_IMG.$img->nombreImg ?>" 
                                                     height="20" width="20" id="imgProductw">
                                            </div>
                                        <?php   
                                        }
                                    endforeach;
                                }

                            ?>
                            
                        </div>
                        <!--div class="contBtnProduct"><a href="<?php echo RUTA_URL. '/ProductController/sistemApart/'.  $product->codBarra;  ?> " 
                            class="btn btn-success btnRealizarVenta">Apartar producto</a></div-->
                            
                            <div class="contBtnProducts contBtnApart">
                            <a href="#" id="js-btnApartUst" <?php if($view == 'ProIndex'){?> class="btn btn-success  js-btnApartProIndex" <?php  }else{?> class="btn btn-success  js-contProductA"  <?php } ?> 
                                js-codB = " <?php echo $product->codBarra;  ?> "
                                js-imgP = " <?php echo RUTA_IMG.$product->image;  ?> "
                                js-nomPro = " <?php echo $product->nameProduct;  ?> "
                                js-pricePro = " <?php echo $product->price;  ?> "
                                js-cantPro = " <?php echo $product->amount;  ?> "

                            >Apartar producto</a>
                            
                        </div>
                    </div>
                <?php 
                    endforeach;
                ?>

            </div>
        </div>
                
</div>
       
      



<!--Modal for show product info---><!--Modal for show product info--->
<!--Modal for show product info---><!--Modal for show product info--->

<div class="modal js-ModalInfoProduct">
        <div class="bodyModal ">
            
            <form action="<?= RUTA_URL;?>/ProductController/productUser" method="post" enctype="multipart/form-data" class="formModal mApartarProducto">
                <div class="dataP">
                    <label id="js-inpNomPro" class="lblNameProduct">qq</label>
                </div>  
                <input type="hidden" name="idUser" value="<?php //echo $_SESSION['datos']["idUser"]; ?>"/>
                <input type="hidden" name="idProduct" id="idPro" value=""/>  
                <img  src="" class="imgProductOption" id="imgProduct" >

                <div class="contListImageInfo">
                    <img  class="imgL" id="img1" src="" class="imgLIst" height="50px" width="50px" >
                    <img  class="imgL" id="img2" src="" class="imgLIst"  height="50px" width="50px" >
                    <img  class="imgL" id="img3" src="" class="imgLIst" height="50px" width="50px" id="imgProduct" >
                    <img  class="imgL" id="img4" src="" class="imgLIst" height="50px" width="50px" id="imgProduct" >
                </div>

                <div class="line line2"></div>
                <label id="js-desc"></label>
                <div class="contDispPrice">
                    <label id="js-available"></label>
                    <label id="js-price"></label>
                </div>

                <div class="dataP contBtnAddP ">
                    <label class="btn btn-danger btnCloseInfo js-btnCancelw" unset>Cerrar</label>
                </div>
            </form>
        </div>
    </div>


    <!--Nodal for delete product --> <!--Nodal for delete product --> <!--Nodal for delete product --> 
	<!--Nodal for delete product --> <!--Nodal for delete product --> <!--Nodal for delete product --> 
	<div class="modal js-loginMessage">
		<div class="bodyModal">
			<form action="<?= RUTA_URL;?>/ProductController/deleteProduct" method="POST" class="formModal js-formDelete">
				<label id="js-inpNomPro" class="modalTitle">¡ Message !</label>
				<input type="hidden" class="js-codBarra" name="codBarra"  >
				<label id="js-inpNomPro" class="msModal">Para realizar este proceseo debe crear una cuenta personal</label> 
						 
				<div class="contBtnModal">
					<button class="btn btn-success" >Aceptar</button>
					<p href="" class="btn btn-primary btnClosemsLog" unset>Cerrar</p>
				</div>
			</form>
		</div>
	</div>