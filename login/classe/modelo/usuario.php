<?php
    include_once("pessoa.php");

class Usuario {
	private $id_usuario;

	private $nivel_acesso;
	private $status;

	private $id_cliente;
	private $id_colegio;
	private $email_usuario;
	
	function __construct($id_usuario=0, $nome_usuario="", $email_usuario="", $codigopco="",  $senha = "",  $nivel_acesso=0, $status=0, $id_colegio=0, $id_cliente=0){
		
		$this->SetId_usuario($id_usuario);
		
		$this->SetNome($nome_usuario);
		
		$this->SetEmail($email_usuario);
		$this->SetCodigopco($codigopco);
		$this->SetSenha($senha );
		$this->SetNivelAcesso($nivel_acesso);
		$this->SetStatus($status);
		$this->SetIdCliente($id_cliente);
		$this->SetidCcolegio($id_colegio);
		
	}
	
		
	public function SetId_usuario($valor){
		  $this->id_usuario= $valor;
	  }
	public function GetId_usuario(){
			 return $this->id_usuario;
	  }
	///Nome set e get
	public  function SetNome($valor){
		$this->nome_usuario= $valor;
	}
	public  function GetNome(){
		return $this->nome_usuario;
	}
	///senha set e get
	///email set e get
	public  function SetEmail($valor){
		$this->email_usuario= $valor;
	}
	public  function GetEmail(){
		return $this->email_usuario;
	}
	public  function SetSenha($valor){
		$this->senha= $valor;
	}
	public  function GetSenha(){
		return $this->senha;
	}
	//codigopco
	public  function SetCodigopco($valor){
		$this->codigopco= $valor;
	}
	public  function GetCodigopco(){
		return $this->codigopco;
	}

	
	///nevel de acesso set e get
	public  function SetNivelAcesso($valor){
		$this->nivel_acesso= $valor;
	}
	public  function GetNivelAcesso(){
		return $this->nivel_acesso;
	}
	///status de acesso set e get
	public  function SetStatus($valor){
		$this->status= $valor;
	}
	public  function GetStatus(){
		return $this->status;
	}
	public function SetIdCliente($valor){
		  $this->id_cliente= $valor;
	  }
	  public function GetIdCliente(){
			 return $this->id_cliente;
	  }
	  ///idCcolegio get set
	 public function SetidCcolegio($valor){
		  $this->id_colegio= $valor;
	  }
	  public function GetidColegio(){
			 return $this->id_colegio;
	  }
	
}
?>