<?php
	require_once('../inc/conexao.php');
	$nome=$_POST['produto'];
	$preco=$_POST['preço'];
	$descricao=$_POST['descricao'];
	$sql="INSERT INTO produtos(nome,preco,descricao) VALUES('$nome','$preco','$descricao')";
	$comand=pg_query($conexao,$sql);
	header('Location: '.$base_url.'produtos/');
	
?>