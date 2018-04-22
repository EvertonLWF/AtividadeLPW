<?php
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);
	require_once('../inc/conexao.php');
	$nome=$_POST['produto'];
	$preco=$_POST['preço'];
	$descricao=$_POST['descricao'];
	$id=$_POST['id'];
	$sql="UPDATE produtos SET nome='$nome' WHERE id='$id'";
	$comand=pg_query($conexao,$sql);
	$sql="UPDATE produtos SET preco='$preco' WHERE id='$id'";
	$comand=pg_query($conexao,$sql);
	$sql="UPDATE produtos SET descricao='$descricao' WHERE id='$id'";
	$comand=pg_query($conexao,$sql);
	header('Location: '.$base_url.'produtos/');
