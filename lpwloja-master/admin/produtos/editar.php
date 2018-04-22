<?php
	require_once('../inc/conexao.php');
	require_once $base_path.'inc/cabecalho.php';
	$id=$_GET['id'];
	$sql="SELECT * FROM produtos WHERE id='$id'";
	$comand=pg_query($conexao,$sql);
	$teste=pg_fetch_array($comand);
	$nm=$teste['nome'];
	$ds=$teste['descricao'];
	$pr=$teste['preco'];

	
	?>
	<a class="btn btn-primary" href="<?php echo $base_url.'produtos/index.php'; ?>">Voltar</a>
	<table class="table">
		<center>
			<form action="<?php echo $base_url.'produtos/editado.php'; ?>" method="post">
				<input type="hidden" name="id" value="<?php echo($id)?>" id="id">
				<div class="form-group">
					<label for="produto">Nome do Produto</label>
					<textarea class="form-control" name="produto" id="produto"><?php echo $nm;?></textarea>
				</div>
				<div class="form-group">
					<label for="preço">Preço do Produto</label>
					<textarea class="form-control" name="preço" id="preço"><?php echo $pr;?></textarea>
				</div>
				<div class="form-group">
					<label for="descricao">Descrição do produto</label>
					<textarea class="form-control" name="descricao" id="descricao"><?php echo $ds;?></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Salvar</button>
			</form>
		</center>
	</table>
	<?php
	require_once('../inc/rodape.php');
?>