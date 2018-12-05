<?php

class Curso{
	private $Id_curso;
	private $curso;
	
	
	
	public function  __construct($id_curso=0, $curso=""){
		$this->SetIdCurso($id_curso);
		$this->SetCurso($curso);
	}
	/////Medtodo codigo do banco Set e Get
	public function SetIdCurso($valor){
		$this->Id_curso=$valor;
	}
	public function GetIdCurso(){
		return $this->Id_curso;
	}
    /////Medtodo banco Set e Get
	public function SetCurso($valor){
		$this->curso=$valor;
	}
	public function GetCurso(){
		return $this->curso;
	}
		
}

?>