<?php 
	require RUTA_APP.'/views/inc/header.php'; 

?>


<div class="contElement">
<form action="<?= RUTA_URL;?>/UserController/login" method="POST" class="formLogin-Js js-login2" >
	<!--form action="/Users/addUser" method="POST" class="formLogin-Js"-->
		<div class="containerLogin">
			<div class="contImgLogin">
				<img src="<?= RUTA_URL; ?>/public/images/logoApp.png" class="imgLogin">
			</div>
			<div class="contDataLogin loginEnter-js">
				<div class = "contGreeting">
					<div><lavel class="lblLog">Hello</label></div>
					<div><lavel class="lblLog lblM">Bienvenido</label></div>
				</div>
				<div class="contLoYorAcount">
					<label class="lblLog lblL" >Login your account</label>
				</div>
				<div class="conTxtLogo">
					<label class="lblLog lblL">Username</label>
					<input type="text" name="user" class="txtLogin">
					<label class="lblLog lblL">Password</label>
					<input type="password" name="pwd" class="txtLogin">
				</div>

				<div class="contForgotPass">
					<label class="lblLog lblL" >Forgot password?</label>
				</div>
				<input type="submit" value="Enter"  class="btnLogIn">
				<label class="lblLog lblCaccount lblL lblCreateAcount-js" >Create account</label>
			</div>

			<div class="contDataLogin contDataRegister-js" >
				<div class = "contGreeting">
					<div><lavel class="lblLog"></label></div>
					<div><lavel class="lblLog lblM">Good Morning</label></div>
				</div>
				<div class="contLoYorAcount">
					<label class="lblLog lblL" >Create account</label>
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

					<label class="lblLog lblL">User name</label>
					<input type="text" name="userName" class="txtLogin">

					<label class="lblLog lblL">Password</label>
					<input type="password" name="pass" class="txtLogin">
				</div>

				
				<input type="submit" value="Send"  class="btnLogIn">
				<label class="lblLog lblCaccount lblLoginI-js" >Login</label>
			</div>
			
		</div>
	</form>
</div>
	


	

 <?php require RUTA_APP.'/views/inc/footer.php';  ?>





