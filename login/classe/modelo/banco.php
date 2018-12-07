<?php

class Banco{
	private $Id_banco;
	private $banco;
	
	
	
	
	public function  __construct($id_banco=0, $banco=""){
		$this->SetId_banco($id_banco);
		$this->SetBanco($banco);
	}
	/////Medtodo codigo do banco Set e Get
	public function SetId_banco($valor){
		$this->Id_banco=$valor;
	}
	public function GetId_banco(){
		return $this->Id_banco;
	}
    /////Medtodo banco Set e Get
	public function SetBanco(){
		$this->banco=$valor;
	}
	public function GetBanco(){
		return $this->banco;
	}
		
}

?>