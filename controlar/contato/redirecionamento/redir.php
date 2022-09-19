<?php
include_once '../../config/URL.php';

	define('HOME', 1);
	define('SOBRE', 2);
	define('CASAS', 3);
	define('CONTATO', 4);
	define('LOGIN', 5);
	
	$menu = (int)$_GET['menu'];
	switch ($menu)
	{
		case HOME :
			header("Location: ".BASE_URL . 'litus/inicial.php');
			exit;
		case SOBRE :
			header("Location: ". BASE_URL . 'litus/sobre.php');
			exit;
		case CASAS :
			header("Location: ". BASE_URL . 'litus/casas.php');
			exit;
		case CONTATO :
			header("Location: ". BASE_URL . 'litus/contato.php');
			exit;
		case LOGIN :
			header("Location: ". BASE_URL . 'litus/login.php');
			exit;
		default:
			header("Location: ". BASE_URL . 'litus/inicial.php');
			exit;
	}
?>