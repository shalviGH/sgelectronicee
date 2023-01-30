<?php 
    require RUTA_APP.'/views/inc/header.php';  //print_r($data);


?>

<!--div class="box-header with-border"ffffff>
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProducto">
            Agreagar imagen
        </button>
</div  productImage -->


    <!--Container of elements of the view elements--> 
    <form method="POST" action="<?= RUTA_URL;?>/ProductController/searchProduct">
        <div class="optionProduct">
            <button  class="btn btn-primary js-AddProduct">Agregar Producto</button>
            <div  class="contBtnAndSearch">
                <button  class="btn btn-primary btnSearchProduct" >Buscar producto</button> 
                <input type="text" name="nameProduct"  class="inpSearchP " placeholde="Buscar producto" required/>
            </div>
        </div>
    </form>

    <?php 
        if (isset($_SESSION['CRUD'])) 
        {
            $crud=  $_SESSION['CRUD'] ;
        }


        //print_r($data['productImage']);
    ?>

    <!--div class="alert alert-warning alert-dismissable msAlert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>¡Cuidado!</strong> Es muy importante que leas este mensaje de alerta.
    </div-->
        
            <?php 
                if(isset($data['product'])){
                    $op = $data['product'];
                    //echo $op;
                }
                
                if(isset($data['productFound'])) {
                    $op = $data['productFound'];
                    //echo $op;     
                }
            ?>


        <div class="containerTable"> 
            <table class= "table">
                <thead class="tblHead1">
                    <tr class="tblHead">
                        <th class="tColumn1 tcNum">Num</th>
                        <th class="tColumn1">Imagen</th>
                        <th class="tColumn1">Nombre pro</th>
                        <th class="tColumn1">Precio</th>
                        <th class="tColumn1">Disponibles</th>
                        <th class="tColumn1">Opciones</th>
                    </tr>
                </thead>

                <tbody class="tBody">
                    <?php 
                    
                    ?>
                        <?php 
                            //show data of dtabase of product
                        $numL = 1;
                        foreach($op as $product) : 
                        ?>
                        <tr class="colDataT js-ConProduct">
                            <input type="hidden" value=" <?php echo $product->codBarra; ?>" id="js-idP">
                            <input type="hidden" value=" <?php echo $product->descrip; ?>" id="js-desc">
                            <input type="Hidden" value=" <?php echo $product->image; ?>" id="js-cImg">

                            <th class="colData tcNum"><div class="divTbl"><?php echo $numL; ?></div></th>
                            <td><div class="divTbl" ><img src="<?php echo RUTA_IMG , ($product->image); ?>" width="100px" height="100px"  style="padding:10px" /></div></td>
                            <td><div class="divTbl" id="js-nameProduct"><?php echo $product->nameProduct; ?></td></div>
                            <td> <div class="divTbl" id="js-priceProduct"><?php echo $product->price;  ?></td></div>
                            <td> <div class="divTbl" id="js-cantP"><?php echo $product->amount;  ?></td></div>
                            <td>
                                <div class="divTbl divTblOptions">
                                    <a  href= "#" class="btn btn-successw js-makeSale btnTbl" id="">Vender</a>
                                    <a href= "#" class="btn btn-primaryw  btnTbl js-editProduct" id="">Editar</a>
                                    <a href= "#" class="btn btn-dangerw js-deleteProduct btnTbl" id="">Eliminar</a>
                                    <a href= "#" class="btn btn-dangerw js-addImage btnTbl" id="">Agregar Imagen</a>
                                </div> 
                            </td>
                            <?php 
                                $codB = $product->codBarra;

                                //echo $codB;

                                if(isset($data['productImage']))
                                {
                                foreach($data['productImage'] as $img):
                                        if($codB == $img->idProducto){ 
                                            //echo RUTA_IMG.$img->nombreImg;
                                            ?>
                                            <div class="listImg js-imgList" >
                                                <img  class="imgL" src="<?php echo RUTA_IMG.$img->nombreImg ?>" 
                                                     height="20" width="20" id="imgProductw">
                                            </div>
                                        <?php   
                                        }
                                    endforeach;
                                }

                            ?>

                           
                        </tr>
                        <?php 
                            $numL = $numL + 1; 
                            endforeach;
                    
                    ?>

                            

                    
                </tbody>    
            </table>
        </div>
        


<!--:::::::::::::Modal for add image products:::::::::::::--> <!--:::::::::::::Modal for add image products:::::::::::::-->
<!--:::::::::::::Modal for add image products:::::::::::::-->

<div class="modal js-ModalAddImage">
        <div class="bodyModal">
            
            <form action="<?= RUTA_URL;?>/ProductController/addImage" method="POST" enctype="multipart/form-data" class="formModal">
                <label class="lblTitleModal"></label>
                <!--input type="text" value="" id="js-cantP" name = "cantProduct" /-->
                
                <div class="contMsModal">
                    <label>Agregar imagen al producto</label>
                </div>
                    
                    <input type="text"  name="idPro" multiple  required id="jsIdP"/>
                    <div class="dataP">
                        <label>Image 1:</label>
                        <input type="file"  name="photo1" multiple  required id="nuestroinput"/>
                    </div>
                    <div class="dataP">
                        <label>Imagen 2:</label>
                        <input type="file"  name="photo2" multiple  required id="nuestroinput"/>
                    </div>
                    <div class="dataP">
                        <label>Imagen 3:</label>
                        <input type="file"  name="photo3" multiple  required id="nuestroinput"/>
                    </div>
                
                <div class="dataP contBtnModal  contBtnModalAI">
                    <input type="submit" value="Aceptar" class="btn btn-primary" required/>
                    <i class="btn btn-danger js-btnCancelAddImage" unset >Cancel</i>
                </div>
            </form>
        </div>
    </div>



 


    

    <?php
        require RUTA_APP.'/views/pages/viewsProduct/crudProduct.php';  //print_r($data); 
    ?>


                            
    <!--div id="modalAgregarProducto"  class="modal fade" role="dialog" style="">
        <div class="modal-dialog">
            <div class="modal-content">
                <Modal heade>
                <div class="modal-header" style="background:#3c8dbc; color:white">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"> Agregar Imagen</h4>
                </div>
                <Body modal>
                <div class="modal-body">
                    <div class="box-body">
                        <Etry for the title>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-product-hunt">P</i></span>
                                <input type="text" class="form-control input-lg validarProducto tituloProducto" placeholder="ingresar titulo del producto">
                            </div>

                        </div>
                    </div>


                    <Entarada para agregar multimedia-->
                    <!--div class="form-group agregarMultimedia" style="display:none">
                        <span class="input-group-addon"><i class="fa fa-youtobe-play"></i></span>
                        <input type="text" class="form-control input-lg multimedia" placeholder="ingresar codigo video youtobe">

                    </div-->

                    <!--Subir multimedi a de producto fisico>
                    <div class="multimediaFisica needsclick dz-clickable">
                        <div class="dz-message needsclick">
                            Arrastrar o dar click para subir imagenes
                        </div>

                    </div>
                </div-->
                 <!-- footer modal---> 
                <!--div class="modal-footer">
                    <button type="button" class="guardarProducto btn btn-default pull-left" data-dismiss="modal">Salir</button>

                    <button type="button" class="guardarProducto btn btn-primary"> guardar Producto</button>
                </div>
            </div>
           
        </idv>
       
    </div-->






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
                
                <div class="dataP contBtnModal">
                    <input type="submit" value="Aceptar" class="btn btn-primary" required/>
                    <i class="btn btn-danger js-btnCancelSaleProduct " unset >Cancel</i>
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

    <div class="modal js-ModalAddImage2">
        <div class="bodyModal">
            
            <form action="<?= RUTA_URL;?>/ProductController/updateProduct" method="post" enctype="multipart/form-data" class="formModal">
                <label>Update Infomation</label>
                
                <div class="dataP">
                    <label>Codigo de Barra:</label>
                    <input id="js-codBarra" type="text" name="codBarra" required />
                </div>
                <div class="dataP">
                    <label>Cantidad:</label>
                    <input type="text" id="js-cantPro" name="amount" required />
                </div>
                <div class="dataP">
                    <label>Imagen:</label>
                    <input type="file" id="js-imgPro" name="photo" multiple  required/>
                </div>
                <div class="dataP contBtnAddP">
                    <input type="submit" value="Aactualizar" class="btn btn-success" required/>
                    <i class="btn btn-danger js-btnCancelUpdate">Cancel</i>
                </div>
            </form>
        </div>
    </div>


<?php require RUTA_APP.'/views/inc/footer.php';  ?>





