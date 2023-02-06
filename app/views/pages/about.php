<?php 
    require RUTA_APP.'/views/inc/header.php';  //print_r($data);?>


    <div class ="containerAbout">
        <div class ="contInfoCompany">
            <label class="lblAbout">Contactos</label>
            <label class="lblAbout">sgElectronic@gmailcom</label>
            <label class="lblAbout">9191321935</label>
            <label class="lblAbout">Horarios</label>
            <label class="lblAbout">Domingo a lunes de 9 AM - 7:00 PM</label>
        </div>

        <img src="<?= RUTA_URL; ?>/public/images/carRobot.jpg" width="300px" height = "160px" class="imgA" >

        <div class ="contInfoContacs">
            <div class="contImgAbout"><img src="<?= RUTA_URL; ?>/public/images/iconFacebook.png" class="imgAbout imgFacebook"></div>
            <div class="contImgAbout"><img src="<?= RUTA_URL; ?>/public/images/iconsInstagram.png" class="imgAbout"></div>
            <div class="contImgAbout"><img src="<?= RUTA_URL; ?>/public/images/iconsWhatsapp.png" class="imgAbout"></div>
        </div>
        

    </div>
   

<?php require RUTA_APP.'/views/inc/footer.php';  ?>