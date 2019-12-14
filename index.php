<?php 
	
	require_once("config.php");

	$jean = new Usuarios();

	$jean->loadByid(1);

	echo $jean;
 ?>