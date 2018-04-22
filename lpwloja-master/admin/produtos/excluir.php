<?php
	require_once('../inc/conexao.php');
	require_once $base_path.'inc/cabecalho.php';
	$id=$_GET['id'];
	
	$sql="DELETE FROM produtos WHERE id='$id'";
	$comand=pg_query($conexao,$sql);
	header('Location: '.$base_url.'produtos/');
?>
