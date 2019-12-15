<?php 
	
	require_once("config.php");

	/*$jean = new Usuarios(); //Carrega um usuario

	$jean->loadByid(2);

	echo $jean;

	$lista = Usuarios::getList(); //Carrega uma lista

	echo json_encode($lista);

	$seach = Usuarios::search("je"); //Pesquisa um usuario

	echo json_encode($seach);*/

	$usuario = new Usuarios(); //verificação de login
	$usuario->login("jean", "!@#$");

	echo $usuario;


 ?>