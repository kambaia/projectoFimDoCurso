<?php

class Propina{
	private $id_propina;
	private $valor_propina;
	private $multa_propina;
	private $ano_letivo;
	
	
	
	
	
	public function  __construct($id_propina=0, $valor_propina=0, $multa_propina=0, $ano_letivo=""){
		$this->SetIdPropina($id_propina);
		$this->SetValor_propina($valor_propina);
		$this->GetValorMulta($multa_propina);
		$this->SetAnoLetivo($ano_letivo);
	}
	/////Medtodo codigo do classe Set e Get
	public function SetIdPropina($valor){
		$this->id_propina=$valor;
	}
	public function GetIdPropina(){
		return $this->id_propina;
	}
    /////Medtodo valor Propina Set e Get
	public function SetValor_propina($valor){
		$this->valor_propina=$valor;
	}
	public function GetValor_propina(){
		return $this->valor_propina;
	}
		
	/////Medtodo Valor Multa do classe Set e Get
	public function SetValorMulta($valor){
		$this->multa_propina=$valor;
	}
	public function GetValorMulta(){
		return $this->multa_propina;
	}
    /////Medtodo classe Set e Get
	public function SetAnoLetivo($valor){
		$this->ano_letivo=$valor;
	}
	public function GetAnoLetivo(){
		return $this->ano_letivo;
	}
		
}

?>