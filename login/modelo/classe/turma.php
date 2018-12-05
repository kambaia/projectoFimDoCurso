<?php

class Turma{
	private $Id_turma;
	private $turma;
	
	
	
	
	public function  __construct($Id_turma=0, $turma=""){
		$this->SetIdTurma($Id_turma);
		$this->SetTurma($turma);
	}
	/////Medtodo codigo do banco Set e Get
	public function SetIdTurma($valor){
		$this->Id_turma=$valor;
	}
	public function GetIdTurma(){
		return $this->Id_turma;
	}
    /////Medtodo banco Set e Get
	public function SetTurma($valor){
		$this->turma=$valor;
	}
	public function GetTurma(){
		return $this->turma;
	}
		
}

?>