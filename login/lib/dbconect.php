<?php
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'pco';

$con = new mysqli($host, $usuario, $senha, $banco);

if(mysqli_connect_errno()){
	exit("Erro ao conectar-se com o banco de dados. " .mysqli_error());
}