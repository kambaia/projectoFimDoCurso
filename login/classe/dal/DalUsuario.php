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
		
		$banco = $this->conexao->GetBanco();
		$banco->query($sql);
		$this->conexao->Desconectar();
			
	}



	public function AlterarUsuario($usuario){
		
		
		$sql = "update usuario set nome_usuario='".$usuario->GetNome().
			"', email_usuario='".$usuario->GetEmail().
			"', codigopco='".$usuario->GetCodigopco() . 
			"', senha_usuario='".$usuario->GetSenha(). 
			
			
			"', id_nivel_acesso=".$usuario->GetNivelAcesso().
			", status=".$usuario->GetStatus().
			", id_cliente=".$usuario->GetIdCliente().
			", id_colegio=". $usuario->GetidColegio(). 
			
			" where id_usuario=".$usuario-> GetId_usuario();
		
		echo $sql;
		
		$banco = $this->conexao->GetBanco();
		$banco->query($sql);
		$this->conexao->Desconectar();	
	}
	
	
	public function DeletarUsuario($codigo){
		
		
		$sql = "delete from  usuario where id_usuario=$codigo";
		echo $sql;
		
		$banco = $this->conexao->GetBanco();
		$banco->query($sql);
		$this->conexao->Desconectar();	
	}
	
	
	
	public function Localizar($nome){
		$sql = "select * from  usuario where ". "nome_usuario like '%".$nome."%'";	
		echo $sql;
		
		$banco = $this->conexao->GetBanco();
		$retorno= $banco->query($sql);
		$this->conexao->Desconectar();	
		return $retorno;
	}
	public function LocalizarDadosLogin($nome, $senha){
		$sql = "select * from  usuario where ". "email_usuario='$nome' and senha_usuario='$senha'";	
		
		echo $sql;
		
		$banco = $this->conexao->GetBanco();
		$retorno= $banco->query($sql);
		$this->conexao->Desconectar();	
		return $retorno;
	}
}
	
?>