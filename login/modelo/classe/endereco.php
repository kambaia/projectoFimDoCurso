<?php

 class Endereco{
   private $id_endereco;
   private $provincia;
   private $municipio;
   private $bairro;
   private $rua;
   private $casa;
   private $id_cliente;
   private $id_colegio;
	 
	 /////Metodo construtor 
	   
	function __construct($id_endereco=0, $provincia = "", $municipio="", $bairro="", $rua="", $casa="", $id_colegio=0, $id_cliente=0) 
	{
		$this->SetIdEndereco($id_endereco);
		$this->SetProvincia($provincia);
		$this->SetMunicipio($municipio);
		$this->SetBairro($bairro);
		$this->SetRua($rua);
		$this->SetCasa($casa);
		$this->SetIdCliente($id_cliente);
		$this->SetidColegio($id_colegio);
	}
	 //Fim Metodo construtor 
	 /*=============================================================*/
	 //id da endereco Get E Set
	 	 
	 public function SetIdEndereco($valor){
		  $this->id_endereco= $valor;
	  }
	  public function GetIdEndereco(){
			 return $this->id_endereco;
	  }
		// provincia Get E  Set 
	  public function SetProvincia($valor){
		  $this->provincia= $valor;
	  }
	  public function GetProvincia(){
			 return $this->provincia;
	  }
		//saldo ou dineiro disponiel do cliente Get E  Set
	  public function SetMunicipio($valor){
		  $this->municipio= $valor;
	  }
	  public function GetMunicipio(){
			 return $this->municipio;
	  }	 
		 ///Data de albertura da conta 

	  public function SetBairro($valor){
		  $this->bairro= $valor;
	  }
	  public function GetBairro(){
			 return $this->bairro;
	  }
	  ///idbanco get set
	 public function SetRua($valor){
		  $this->rua= $valor;
	  }
	  public function GetRua(){
			 return $this->rua;
	  }
	 public function SetCasa($valor){
		  $this->casa= $valor;
	  }
	  public function GetCasa(){
			 return $this->casa;
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








