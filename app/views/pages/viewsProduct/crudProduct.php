
<!--:::::::::::::Modal for sale products:::::::::::::--> <!--:::::::::::::Modal for sale products:::::::::::::-->
<!--:::::::::::::Modal for sale products:::::::::::::-->

<div class="modal js-ModalSaleProduct">
        <div class="bodyModal">
            
            <form action="<?= RUTA_URL;?>/ProductController/saleProduct" method="POST" enctype="multipart/form-data" class="formModal">
                <label class="lblTitleModal">Alert c !</label>
                <input type="hidden" value="" id="js-idPro" name = "idProduct" />
                <!--input type="text" value="" id="js-cantP" name = "cantProduct" /-->
                <input type="hidden" value="" id="js-precioP" name = "precioProduct"/>
                
                <div class="contMsModal">
                    <label>Esta Seguro realizar la venta</label>
                </div>
                        <label for="lang">total a vender</label>
                        <select name="cantProduct"  width="100px" height="170px" id="lang js-cantP" class="selectTotal js-CantidadP">
                        <?php
                           $total = 10;
                            for ($i=1; $i < $total ; $i++) { 
                                # code...
                        ?>
                        <option value="<?php echo $i; ?>" class = "js-cant3" > <?php echo $i; ?>  </option>
                        <?php
                            }
                        ?>
                    </select>

                    <label for="lang">total a pagar</label>
                    <input type="text" value="" id="js-pagoTotal" name = "precioProduct"/>
                
                <div class="dataP contBtnAddP">
                    <input type="submit" value="Aceptar" class="btnAddP" required/>
                    <i class="btnAddP btnpCancel js-btnCancelSaleProduct bnt" unset >Cancel</i>
                </div>
            </form>
        </div>
    </div>

    
    
    <!--Modal for add product---><!--Modal for add product---><!--Modal for add product--->
    <!--Modal for add product---><!--Modal for add product---><!--Modal for add product--->



    <div class="modal js-ModalAddProduct">
        <div class="bodyModal">
            
            <form action="<?= RUTA_URL;?>/ProductController/addProduct" method="post" enctype="multipart/form-data" class="formModal">
                <label>Add product</label>
                
                <div class="dataP">
                    <label>Codigo de Barra:</label>
                    <input type="text" name="codBarra" required />
                </div>
                <div class="dataP">
                    <label>Nombre:</label>
                    <input type="text" name="namePro" required/>
                </div>
                <div class="dataP">
                    <label>Descripcion:</label>
                    <input type="text" name="descPro" required/>
                </div>
                <div class="dataP">
                    <label>Precio:</label>
                    <input type="text" name="pricePro" required/>
                </div>
                <div class="dataP">
                    <label>Cantidad:</label>
                    <input type="text" name="amount" required />
                </div>
                <div class="dataP">
                    <label>Imagen:</label>
                    <input type="file"  name="photo" multiple  required/>
                </div>
                <div class="dataP contBtnAddP">
                    <input type="submit" value="Agregar" class="btnAddP" required/>
                    <i class="btnAddP btnpCancel js-btnCancel bnt">Cancel</i>
                </div>
            </form>
        </div>
    </div>




   <!--::::::::::::::::::Modal for update product:::::::::::::::--> 
   <!--::::::::::::::::::Modal for update product:::::::::::::::--> 
   <!--::::::::::::::::::Modal for update product:::::::::::::::--> 

    <div class="modal js-ModalUpdateProduct">
        <div class="bodyModal">
            
            <form action="<?= RUTA_URL;?>/ProductController/updateProduct" method="POST" enctype="multipart/form-data" class="formModal">
                <label>Update Infomation</label>
                
                <div class="dataP">
                    <label>Codigo de Barra:</label>
                    <input id="js-codBarra" type="text" name="codBarra" required />
                </div>
                <div class="dataP">
                    <label>Nombre:</label>
                    <input type="text" id="js-namePro" name="namePro" required/>
                </div>
                <div class="dataP">
                    <label>Descripcion:</label>
                    <input type="text" id="js-descPro" name="descPro" required/>
                </div>
                <div class="dataP">   
                    <label>Precio:</label>
                    <input type="text" id="js-precioPro" name="pricePro" required/>
                </div>
                <div class="dataP">
                    <label>Cantidad:</label>
                    <input type="text" id="js-cantPro" name="amount" required />
                </div>
                <div class="dataP">
                    <label>Imagen:</label>
                    <input type="file" id="js-imgPro js-imgPro2" value ="ccc" name="photo" multiple/>
                </div>
                <div class="dataP contBtnModal">
                    <input type="submit" value="Aactualizar" class="btn btn-success"/>
                    <i class="btn btn-danger js-btnCancelUpdate">Cancel</i>
                </div>

                
            </form>
        </div>
    </div>




       <!--Nodal for delete product --> <!--Nodal for delete product --> <!--Nodal for delete product --> 
       <!--Nodal for delete product --> <!--Nodal for delete product --> <!--Nodal for delete product --> 
       <div class="modal js-ModalDeleteProduct">
            <div class="bodyModal">
                <form action="<?= RUTA_URL;?>/ProductController/deleteProduct" method="POST" class="formModal js-formDelete">
                        <label id="js-inpNomPro" class="modalTitle">¡ alert !</label>
                        <input type="hidden" class="js-codBarra" name="codBarra"  >
                        <label id="js-inpNomPro" class="msModal">Esta seguro de eliminar el Producto </label> 
                    
                    <div class="contBtnModal">
                        <button class="btn btn-success" >Aceptar</button>
                        <p href="" class="btn btn-primary btnCanceDelete" unset>Cancelar</p>
                    </div>
                </form>
            </div>
        </div>