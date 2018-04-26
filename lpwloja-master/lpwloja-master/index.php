<?php
require_once('inc/cabecalho.php');
$sql = 'SELECT id, nome, preco FROM produtos';
$resultado = pg_query($conexao, $sql);
$resultado_array = pg_fetch_all($resultado);
?>
<div class="container">
	<div class="card-deck">
		<?php
		foreach($resultado_array as $produto){
			$html = '
			<div class="card">
			    <img class="card-img-top" src="img/sem_imagem.svg" alt="sem imagem">
			    <div class="card-body">
			      <h5 class="card-title">'.$produto['nome'].'</h5>
			      <p class="card-text">R$ '.str_replace('.', ',', $produto['preco']).'</p>
			      <a href="produto.php?codigo='.$produto['id'].'" class="btn btn-success">Ver mais</a>
			    </div>
			</div>
			';
			echo $html;
		}
		?>
	</div>
</div>
<?php
require_once('inc/rodape.php');