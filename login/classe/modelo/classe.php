<?php

class Classe{
	private $id_classe;
	private $classe;
	
	
	
	
	public function  __construct($id_classe=0, $classe=""){
		$this->SetIdClasse($id_classe);
		$this->SetClasse($classe);
	}
	/////Medtodo codigo do classe Set e Get
	public function SetIdClasse($valor){
		$this->id_classe= $valor;
	}
	public function GetIdClasse(){
		return $this->id_classe;
	}
    /////Medtodo classe Set e Get
	public function SetClasse($valor){
		$this->classe=$valor;
	}
	public function GetClasse(){
		return $this->classe;
	}
		
}

?>