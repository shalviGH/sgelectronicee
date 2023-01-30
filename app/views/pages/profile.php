<?php require RUTA_APP.'/views/inc/header.php'; 
     //require RUTA_APP.'/controllers/Users.php';
     
    // $user = new Users;
     //$user->getProfile()
?>


<!-- diseños del contenedor del perfil del usuario-->
<div class="contDataProfile">
    <div class="dataProfile contImgProfile">
        <img src="<?php echo RUTA_IMG?>/imgProfile.png" alt="" class="imgProfile js-imgProfile">
    </div>
    <div class="dataProfile dataProfile2">
        <!--p class="dato js-IUser"><?php echo $data['nameU']; ?></p>
        <p class="area js-IUser">Back-end Developer</p>
        <p class="dataDescription js-IUser">sodales accumsan ligula. aenean sed diam tritique, fermentum mi nec, ornare arcu</p>
        <button class="btnProfile btnProfile-js">View Profile</button-->

        <form action="<?= RUTA_URL;?>/UserController/updateUser/<?php echo $data['idUser']; ?>/" method="POST"  class="formProfile-js1 contDataProfile1">
            <p class="area pUserInfo" >User information</p>
            <div class="contDataUs">            
                <div class="dataPro">
                <input type="hidden"  value=" <?php echo $data['idUser']; ?>" placeholher="user" name="idU" required>
                    <!--div class ="contUserInfo">
                        <label>Nombre</label>
                        
                        <input type="text" disabled = "true" id="js-inpProfile" value=" <?php echo $data['nameU']; ?>" placeholher="user" name="nameU" required>
                    </div>
                    <div class ="contUserInfo">
                        <label>Apellidos</label>
                        <input type="text"  disabled = "true" id="js-inpProfile1" value=" <?php echo $data['lastName']; ?>" placeholher="user" name="lastName" required>
                    </div>
                    <div class ="contUserInfo">
                        <label>Telefono</label>
                        <input type="text" disabled = "true" id="js-inpProfile2"  value="<?php echo $data['phone']; ?>" placeholher="pass" name="phone" required>
                    </div-->
                    <div class ="contUserInfo">
                        <label>User</label>
                        <input type="text" disabled = "true" id="js-inpProfile4" value="<?php echo $data['userName']; ?>" placeholher="pass" name="userName" required>
                    </div>
                </div>    

               <div class="dataPro"  > 
                    <!--div class ="contUserInfo">
                        <label>Email</label>
                        <input type="email" disabled = "true" id="js-inpProfile3" value="<?php echo $data['email']; ?>" placeholher="pass" name="email" required>
                    </div>
                    <div class ="contUserInfo">
                        <label>User</label>
                        <input type="text" disabled = "true" id="js-inpProfile4" value="<?php echo $data['userName']; ?>" placeholher="pass" name="userName" required>
                    </div-->
                    <div class ="contUserInfo">
                        <label>Password</label>   
                        <input type="password" disabled = "true" id="js-inpProfile5" value="<?php echo $data['pass']; ?>" placeholher="feha" name = "pass" required>
                    </div>
                </div>
            </div>        

                <div class="contBtnOptioProfile">
                    <button  type="submit"  class ="btn btn-success">Guardar</button>
                    <a class ="btn btn-primary btnCancel-js">Editar info</a>
                </div>
            
        </form>
    </div>
    
    

   
</div>










<?php require RUTA_APP.'/views/inc/footer.php';  ?>
