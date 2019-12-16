<?php 
	
	require_once("config.php");

	/*$jean = new Usuarios(); //Carrega um usuario

	$jean->loadByid(4);

	echo $jean;*/

	/*$lista = Usuarios::getList(); //Carrega uma lista

	echo json_encode($lista);*/

	/*$seach = Usuarios::search("je"); //Pesquisa um usuario

	echo json_encode($seach);*/

	/*$usuario = new Usuarios(); //verificação de login
	$usuario->login("jean", "!@#$");

	echo $usuario;*/

	/*$aluno = new Usuarios("testeID", "selectprocedure"); //insert de usuarios

	$aluno->insert();

	echo $aluno;*/

	/*$update = new Usuarios(); //update de usuario

	$update->loadByid(4);

	$update->update("update", "wesds");

	echo $update;*/

	$delete = new Usuarios();

	$delete->loadByid(6);

	$delete->delete();
	echo $delete;
 ?>