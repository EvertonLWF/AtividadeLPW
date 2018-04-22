<?php
session_start();
$base_url = 'http://localhost/lpwloja-master';
$conexao = pg_connect('host=localhost port=5432 dbname=lojaLPW user=postgres password=feijo62378');
if(!$conexao){
	echo 'nao rolou';
}