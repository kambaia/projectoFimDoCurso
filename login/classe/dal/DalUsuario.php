<?php

include_once("conexao.php");
include_once("../modelo/pessoa.php");
include_once("../modelo/usuario.php");
?>
<?php
class DalUsuario{
	
	private $conexao;
	public function __construct($conexao){
		$this->conexao= $conexao;
		$this->conexao = new Conexao();
	}
	
	public function InserirUsuario($usuario){
		
		
		$sql = "insert into usuario(nome_usuario, email_usuario, codigopco, senha_usuario, id_nivel_acesso, status, id_cliente, id_colegio) values('";
		
		$sql = $sql. $usuario->GetNome() . "', '";
		$sql = $sql. $usuario->GetEmail() . "', '";
		$sql = $sql. $usuario->GetCodigopco() . "', '";
		$sql = $sql. $usuario->GetSenha() . "', ";
		$sql = $sql. $usuario->GetNivelAcesso().", ";
		$sql = $sql. $usuario->GetStatus() .", ";
		
		$sql = $sql. $usuario->GetIdCliente() ." , ";
		$sql = $sql. $usuario->GetidColegio() ." )";
		
		echo $sql;
		
		$banco = $this->conexao->GetBanco();
		$banco->query($sql);
		$this->conexao->Desconectar();	
	}
}
	
?>