<?php

 class Convocatoria{
   
	
	 
   private $id_convocatoria;
   private $informacao;
   private $dataInformacao;
  
   private $id_cliente;
   private $id_colegio;
	 
	 /////Metodo construtor 
	   
	function __construct($id_convocatoria=0, $informacao = "", $data="",  $id_colegio=0, $id_cliente=0) 
	{
		$this->SetIdConvocatoria($id_convocatoria);
		$this->SetInformacao($informacao);
		$this->dataInformacao($data);
	
		$this->SetIdCliente($id_cliente);
		$this->SetidColegio($id_colegio);
	}
	 //Fim Metodo construtor 
	 /*=============================================================*/
	 //id da convocatoria Get E Set
	 	 
	 public function SetIdConvocatoria($valor){
		  $this->id_convocatoria= $valor;
	  }
	  public function GetIdConvocatoria(){
			 return $this->id_convocatoria;
	  }
		// Informação Get E  Set 
	  public function SetInformacao($valor){
		  $this->informacao= $valor;
	  }
	  public function GetInformacao(){
			 return $this->informacao;
	  }
		//sDataInformação Get E  Set
	  public function SetDataInformacao($valor){
		  $this->dataInformacao= $valor;
	  }
	  public function GetDataInformacao(){
			 return $this->dataInformacao;
	  }	 
		 

	  ///idClinte get set
	 public function SetIdCliente($valor){
		  $this->id_cliente= $valor;
	  }
	  public function GetIdCliente(){
			 return $this->id_cliente;
	  }
	 
	  ///idCcolegio get set
	 public function SetidColegio($valor){
		  $this->id_colegio= $valor;
	  }
	  public function GetidColegio(){
			 return $this->id_colegio;
	  }
 }

?>
