<?php 
    require RUTA_APP.'/views/inc/header.php';  //print_r($data);
?>

    <!--Container of elements of the view elements--> 
    <form method="POST" action="<?= RUTA_URL;?>/ProductController/searchProduct">
        <div class="optionProduct">
           
            <div  class="contBtnAndSearch">
                <button  class="btn btn-primary btnSearchProduct" >Buscar producto</button> 
                <input type="text" name="nameProduct"  class="inpSearchP " placeholde="Buscar producto" required/>
            </div>
        </div>
    </form>

    <?php 
        /*if (isset($_SESSION['CRUD'])) 
        {
            echo "La session crud existe ". $_SESSION['CRUD'] ;
        }*/
    ?>

    <!--div class="alert alert-warning alert-dismissable msAlert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>¡Cuidado!</strong> Es muy importante que leas este mensaje de alerta.
    </div-->



    <?php
        require RUTA_APP.'/views/pages/viewsProduct/viewProductForUser.php';  //print_r($data); 
    ?>





        
    <!--view form apart product-->   <!--view form apart product-->   <!--view form apart product-->
    <!--view form apart product-->   <!--view form apart product-->   <!--view form apart product-->
    


<div class="modal js-ModalUpdateApart">
        <div class="bodyModal ">
            
            <form action="<?= RUTA_URL;?>/ProductController/productUser" method="POST" class="formModal mApartarProducto">
                <div class="dataP">
                    <label id="js-inpNomPro" class="lblNameProductd"></label>
                    <h4 id="js-nomP" class="lblNameProduct"><h4>
                    <!--input type="text" name="nameProduct" class="js-inpNomPro"/-->
                </div>  
                <input type="hidden" name="idUser" value="<?php echo $_SESSION['datos']["idUser"]; ?>"/>
                <input type="hidden" name="codPro" id="cBarra" value=""/>  
                
                <img  src="" class="imgProductOption" id="imgProductA" >

                <div class="line line2"></div>
                <div class="contDispPrice">
                    <label id="js-price2"></label>
                    <label id="js-available2"></label>
                </div>
               
                    <label class="js-tProduct"></label>
                <div class="dataP cantApartar">
                        <label for="lang">total a Apartar</label>
                            <select name="cantProduct" id="langd" width="100px" height="170px" class="selectTotal js-CantidadP">
                            
                            <?php
                            $total = 5;
                                for ($i=1; $i <= $total ; $i++) { 
                                    # code...
                            ?>
                            <option value="<?php echo $i; ?> " class="" id="js-cantAp5"> <?php echo $i; ?>  </option>
                        <?php
                            }
                        ?>
                        </select>

                       
                </div>
                
                <div class="dataP contBtnAddP contBtnModal">
                    <input type="submit" value="Agregar" class="btn btn-success" />
                    <label class="btn btn-danger js-btnCanProApart" unset>Cancel</label>
                </div>
            </form>
        </div>
    </div>



    <?php
        require RUTA_APP.'/views/pages/viewsProduct/crudProduct.php';  //print_r($data); 
    ?>




















     
  


    











    


<?php require RUTA_APP.'/views/inc/footer.php';  ?>