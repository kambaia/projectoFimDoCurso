

<?php
include_once("../../modelo/classe/pessoa.php");

class Colegio extends Pessoa{
	private $id_colegio;
	private $nome_cologio;
	
	
	
	
	public function  __construct($id_colegio=0, $nome_cologio="", $codigopco=0){
		$this->SetIdColegio($id_colegio);
		$this->SetColegio($nome_cologio);
		$this->codigopco($codigopco);
	}
	/////Medtodo codigo do classe Set e Get
	public function SetIdColegio($valor){
		$this->id_colegio= $valor;
	}
	public function GetIdColegio(){
		return $this->id_colegio;
	}
    /////Medtodo classe Set e Get
	public function SetColegio($valor){
		$this->nome_cologio=$valor;
	}
	public function GetColegio(){
		return $this->nome_cologio;
	}
		
}

?>