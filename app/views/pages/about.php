<?php 
    require RUTA_APP.'/views/inc/header.php';  //print_r($data);?>


    <div class ="containerAbout">
        <div class ="contInfoCompany">
            <label class="">Contactos</label>
            <label>sgElectronic@gmailcom</label>
            <label>9191321935</label>
            <label>Horarios</label>
            <label>Domingo a lunes de 9 AM - 7:00 PM</label>
        </div>

        <img src="<?= RUTA_URL; ?>/public/images/carRobot.jpg" width="300px" height = "160px" >

        <div class ="contInfoContacs">
            <div class="contImgAbout"><img src="<?= RUTA_URL; ?>/public/images/iconFacebook.png" class="imgAbout imgFacebook"></div>
            <div class="contImgAbout"><img src="<?= RUTA_URL; ?>/public/images/iconsInstagram.png" class="imgAbout"></div>
            <div class="contImgAbout"><img src="<?= RUTA_URL; ?>/public/images/iconsWhatsapp.png" class="imgAbout"></div>
        </div>
        

    </div>
   

<?php require RUTA_APP.'/views/inc/footer.php';  ?>