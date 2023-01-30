<?php 
    require RUTA_APP.'/views/inc/header.php';  //print_r($data);?>


    <div class ="containerHome">
        <!--div class="contElemntLeft">
            <p class="headDoc"> welcom to PrintDocument</p>
            <form class="formDoc">
                <div class="contDataUpload">
                    <label class="element" style="backgroung:red">Select Document</label>
			        <input type="file" name="userName" class="txtLogin element"> 
                    <input type="submit" value="Enter"  class="element btbUpFile">
                </div>
            </form>
        </div>

        <div class="contElemntRight">

        </div-->
        <div class="contElement contSlider">
               <!-- Slideshow container -->
            <div class="slider">
                <ul>
                    <li>
                        <img src=" <?php echo RUTA_IMG ?>/carRobot.jpg" alt="">
                    </li>
                    <li>
                        <img src=" <?php echo RUTA_IMG ?>/imgProgrammer.jpg"  alt="">
                    </li>
                    <li>
                        <img src=" <?php echo RUTA_IMG ?>/seguidor.jpg"  alt="">
                    </li>
                    <li>
                        <img src=" <?php echo RUTA_IMG ?>/robots.jpg"  alt="">
                    </li>
                </ul>
            </div>
            
        </div>

    </div>


 

   


    


<?php require RUTA_APP.'/views/inc/footer.php';  ?>