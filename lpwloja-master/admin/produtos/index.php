<?php
require_once('../inc/conexao.php');
require_once $base_path.'inc/cabecalho.php';
$sql = 'SELECT * FROM produtos';
$resultado = pg_query($conexao, $sql);
$resultado_array = pg_fetch_all($resultado);
?>
<h2>Produtos</h2>
<a class="btn btn-primary" href="<?php echo $base_url.'produtos/criar.php'; ?>">Adicionar</a>
<table class="table">
	<thead>
		<tr>
		<th scope="col">id</th>
		<th scope="col">Nome</th>
		<th scope="col">Valor</th>
		<th scope="col">Operações</th>
		</tr>
	</thead>
	<tbody>
	<?php
	foreach($resultado_array as $produto){
		$html = '<tr>
		<td>'.$produto['id'].'</td>
		<td>'.$produto['nome'].'</td>
		<td>'.$produto['preco'].'</td>
		<td>
			<a class="btn btn-info" href="'.$base_url.'../produto.php?codigo='.$produto['id'].'" target="_blank">
				Visualizar</a>
			<a class="btn btn-success" href="editar.php?id='.$produto['id'].'">
				Editar</a>
			<a class="btn btn-danger"href="excluir.php?id='.$produto['id'].'">
				Excluir</a>
		</td>
		</tr>';
		echo $html;
	}
	?>
	</tbody>
</table>
<?php
require_once($base_path . 'inc/rodape.php');