<?php
require_once('inc/conexao.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = 'SELECT * FROM usuarios WHERE email = \''.$email.'\' AND senha = \''.$senha.'\' AND admin = 1';
$res = pg_query($conexao, $sql);

if($res != false){
	if(pg_num_rows($res) != 0 AND !empty($res)){
		$res = pg_fetch_assoc($res);

		$_SESSION['nome'] = $res['nome'];
		header('Location: '.$base_url.'index.php');
	}
}
echo "teste";
?>
