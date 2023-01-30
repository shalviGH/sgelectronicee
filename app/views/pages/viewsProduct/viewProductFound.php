   
   <div class ="containerHome">
        <div class="contElement">
           
            <div class="contListImage" >
                 <?php 
                    
                 //show data of dtabase of product
                    foreach($data['productFound'] as $product) : 
                        #echo $product->idProduct;
                        #echo $product->imageProduct;
                        #echo "<br>";
                ?>
                    <div class="contImg js-contProducts" id="">
                        <div class="contImg js-contProduct">
                        <!--img  src="<?php echo RUTA_IMG?>/imgProfile.png" class="imgProduct"-->
                            <img  src="<?php echo RUTA_IMG , ($product->image); ?>" class="imgProduct" id="urlImg"  >
                            <div class="line"></div>
                            <div class="contPrecioAvailable"><label><?php echo '$'.$product->price.'.00' ?></label><label><?php echo 'Disponible:  '.$product->amount; ?></label></div>
                            
                            <input type="hidden" id="js-idProduct" value="<?php echo $product->codBarra; ?>" />
                            
                            <label class= "lblInfoProduct" style="display:none">Produc: <label class="lblInfoProduct2 js-nameProduct" id="js-nameProduct"><?php echo $product->nameProduct; ?> </label></label>
                            <label class= "lblInfoProduct" >desc: <label class="lblInfoProduct2 js-descPro" ><?php echo $product->descrip; ?> </label></label>
                            <label class= "lblInfoProduct" style="display:none">Precio: <label class="lblInfoProduct2 js-prePro" ><?php echo $product->price; ?> </label></label>
                            <label class= "lblInfoProduct" style="display:none">disponibles: <label class="lblInfoProduct2 js-cantProduct"><?php echo $product->amout; ?> </label></label>
                        </div>
                        <div class="contBtnProduct"><button class="btn btn-success btnRealizarVenta">Realizar venta</button></div>
                    </div>

                <?php 
                
                    endforeach;
                ?>
                <!--div class="contImg">
                    <img src="<?php echo RUTA_IMG?>/imgProfile.png" class="imgProduct">
                    <div class="line"></div>
                    <label class= "lblInfoProduct">Product: </label>
                    <label class= "lblInfoProduct">Precio: </label>
                    <label class= "lblInfoProduct">disponible: </label>
                </div-->
            </div>
        </div>
    </div>
