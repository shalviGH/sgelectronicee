<?php 

	require_once 'config/config.php';

	require_once 'helpers/url_helper.php';

	//autoload php
	spl_autoload_register(function($nameClass){
		require_once 'libraries/'.$nameClass.'.php';
	});

?>