<?php
 
class Usuario {
	
	private $senha;
	private $nivel_acesso;
	private $status;
	
	function __construct($senha = "", $nivel_acesso=0, $status=0){
		
		$this->SetSenha($senha );
		$this->SetNivelAcesso($nivel_acesso);
		$this->SetStatus($status);
	}
	
	///senha set e get
	public  function SetSenha($valor){
		$this->senha= $valor;
	}
	public  function GetSenha(){
		return $this->senha;
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
	
}
?>