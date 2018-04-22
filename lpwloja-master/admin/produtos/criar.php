<?php
	require_once('../inc/conexao.php');
	require_once $base_path.'inc/cabecalho.php';
	?>
	<a class="btn btn-primary" href="<?php echo $base_url.'produtos/index.php'; ?>">Voltar</a>
	<table class="table">
		<center>
		<form action="<?php echo $base_url.'produtos/cria.php'; ?>" method="post">
			<div class="form-group">
				<label for="produto">Nome do Produto</label>
				<textarea class="form-control" name="produto" id="produto"></textarea>
			</div>
			<div class="form-group">
				<label for="preço">Preço do Produto</label>
				<textarea class="form-control" name="preço" id="preço"></textarea>
			</div>
			<div class="form-group">
				<label for="descricao">Descrição do produto</label>
				<textarea class="form-control" name="descricao" id="descricao"></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Salvar</button>
		</form>
	</center>
	<?php
	require_once('../inc/rodape.php');
?>

