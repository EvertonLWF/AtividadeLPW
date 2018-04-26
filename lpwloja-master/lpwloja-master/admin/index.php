<?php
require_once('inc/conexao.php');
require_once('inc/cabecalho.php');
if(isset($_SESSION['nome'])){
	echo 'dashboard';
	?>
	<ul>
		<li><a href="<?php echo $base_url.'produtos'; ?>">Produtos</a></li>
	</ul>
	<?php 
}else{
	?>
	<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Loja Virtual</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/examples/navbar-fixed/navbar-top-fixed.css">
</head>

<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	<div class="collapse navbar-collapse" id="navbarCollapse">
        <a class="btn btn-primary" href="<?php echo $base_url1?>">Voltar</a>
	</div>
</nav>
	<table class="table">
	<center>
		<form action="<?php echo $base_url.'login.php'; ?>" method="post">
			<div class="form-group">
				<label for="email">E-mail</label>
				<input type="email" class="form-control" name="email" id="email">
			</div>
			<div class="form-group">
				<label for="email">Senha</label>
				<input type="password" class="form-control" name="senha" id="senha">
			</div>
			<button type="submit" class="btn btn-primary">Login</button>
		</form>
	</center>
	<?php
}
require_once('inc/rodape.php');
?>