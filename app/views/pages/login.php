<?php 
	require RUTA_APP.'/views/inc/header.php'; 

?>

<?php 

	if(isset($_SESSION['register']))
	{

		$insert = $_SESSION['register'];

		if($insert == 'true')
		{
?>
			<div class="alert alert-success alert-dismissable msAlert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>¡Message!</strong> El registro se relizo con exito, ya puede inicar sesion con su cuenta.
			</div>
<?php
		}
		elseif ($insert == 'false') {
		?>
			<div class="alert alert-danger alert-dismissable msAlert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>¡Message!</strong> El suario / contraseña ya existen pruebe con otra.
			</div>

		<?php	# code...
		}		
	}
	if(isset($_SESSION['inicio'])){
		if($_SESSION['inicio'] == 'false'){?>
			<div class="alert alert-danger alert-dismissable msAlert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>¡Message!</strong> El suario / contraseña incorrecto intente nuevamente.
			</div>

<?php		
		}
	}
	

?>


<div class="contElementsw contLogin">
<form action="<?= RUTA_URL;?>/UserController/login" method="POST" class="formLogin-Js formLogin js-login2" >
	<!--form action="/Users/addUser" method="POST" class="formLogin-Js"-->
		<div class="containerLogin">
			<div class="contImgLogin">
				<img src="<?= RUTA_URL; ?>/public/images/robotLog2.png" class="imgLogin">
				<label class="lblNameE">Electronica García</label>
				<label class="lblSlogan">Todo empieza en la imaginación</label>
			</div>
			<div class="contDataLogin loginEnter-js">
				<div class = "contGreeting">
					<!--div><lavel class="lblLog">Hello</label></div-->
					<!--div--><!--label class="lblLog lblM">Bienvenido</label--><!--/div-->
				</div>
				<div class="contLoYorAcount">
					<label class="lblLog lblL lblT" >Login your account</label>
				</div>
				<div class="conTxtLogo">
					<label class="lblLog lblL">Username</label>
					<input type="text" name="user" class="txtLogin txtUserLog">
					<label class="lblLog lblL">Password</label>
					<input type="password" name="pwd" class="txtLogin">
				</div>

				<!--div class="contForgotPass">
					<label class="lblLog lblL" >Forgot password?</label>
				</div-->
				
				<!--label class="lblLog lblCaccount lblL lblCreateAcount-js" >Create account</label-->
					<div class="contBtnLogin">
						<button type="submit" value="Enter"  class="btnAnimate btnLogSendData2 btnLogoCreate">
							<span></span>
							<span></span>
							<span></span>
							<span></span>Enter
						</button>

						<a class="btnAnimate btnLogoCreate lblCreateAcount-js">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							Register
						</a>
					</div>
				
			</div>

			<div class="contDataLogin contDataRegister-js" >
				<div class = "contGreeting">
					<div><lavel class="lblLog"></label></div>
					<div><lavel class="lblLog lblM"></label></div>
				</div>
				<div class="contLoYorAcount">
					<label class="lblLog lblL lblT">Create account</label>
				</div>
				<div class="conTxtLogo">
					<!--label class="lblLog lblL">Name</label>
					<input type="text" name="name" class="txtLogin" >

					<label class="lblLog lblL">Last name</label>
					<input type="text" name="lastName" class="txtLogin">

					<label class="lblLog lblL">Email</label>
					<input type="email" name="email" class="txtLogin">

					<label class="lblLog lblL">Phone</label>
					<input type="phone" name="phone" class="txtLogin"-->

					<label class="lblLog lblL">User Name</label>
					<input type="text" name="userName" class="txtLogin">

					<label class="lblLog lblL">Password</label>
					<input type="password" name="pass" class="txtLogin">

					<label class="lblLog lblL">Phone</label>
					<input type="phone" name="phone" class="txtLogin" placeholder= "Este campo no es obligatorio">
				</div>

				
				<!--input type="submit" value="Send"  class="btnLogIn"-->
				<!--label class="lblLog lblCaccount lblLoginI-js" >Login</label-->

				<div class="contBtnLogin">
					<button type="submit" class="btnAnimate btnLogSendData2 btnLogoCreate">
						<span></span>
						<span></span>
						<span></span>
						<span></span>Register
					</button>

					<a class="btnAnimate btnLogoCreate lblLoginI-js">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						Login
					</a>
				</div>
			</div>
			
		</div>
	</form>
</div>
	


	

 <?php require RUTA_APP.'/views/inc/footer.php';  ?>





