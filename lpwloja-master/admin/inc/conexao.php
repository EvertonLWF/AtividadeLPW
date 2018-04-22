<?php
session_start();

//configura com o TEU caminho de instalação
$base_path = 'C:\Bitnami\wappstack-7.1.15-0\apache2\htdocs\lpwloja-master\admin\\';
$base_url = 'http://localhost/lpwloja-master/admin/';
$base_url1 = 'http://localhost/lpwloja-master';

$conexao = pg_connect('host=localhost port=5432 dbname=lojaLPW user=postgres password=feijo62378');
if(!$conexao){
	echo 'nao rolou';
}