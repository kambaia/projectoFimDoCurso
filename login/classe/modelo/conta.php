<?php

 class Conta {
   private $id_conta;
   private $numerodaConta;
   private $saldo_disponivel;
   private $data_emissao;
   private $id_banco;
   private $id_colegio;
   private $id_cliente;
	 
	 
	 /////Metodo construtor 
	   
	function __construct($id_conta=0, $numerodaConta = 0, $saldo_disponivel=0, $data_emissao=0, $data_emissao="", $id_banco=0, $id_colegio=0, $id_cliente=0) 
	{
		$this->SetIdConta($id_conta);
		$this->SetNumerodaConta($numerodaConta);
		$this->SetSaldoDisponivel($saldo_disponivel);
		$this->SetData_alberturaConta($data_emissao);
		$this->SetIdBanco($id_banco);
		$this->SetIdCliente($id_cliente);
		$this->SetidColegio($id_colegio);
		
	}
	 //Fim Metodo construtor 
	 /*=============================================================*/
	 //id da conta 
	 	 
	 public function SetIdConta($valor){
		  $this->id_conta= $valor;
	  }
	  public function GetIdConta(){
			 return $this->id_conta;
	  }
		//Numero do cliente Get E  Set 
	  public function SetNumerodaConta($valor){
		  $this->numerodaConta= $valor;
	  }
	  public function GetNumerodaConta(){
			 return $this->numerodaConta;
	  }
		//saldo ou dineiro disponiel do cliente Get E  Set
	  public function SetSaldoDisponivel($valor){
		  $this->saldo_disponivel= $valor;
	  }
	  public function GetSaldoDisponivel(){
			 return $this->saldo_disponivel;
	  }	 
		 ///Data de albertura da conta 

	  public function SetData_alberturaConta($valor){
		  $this->data_emissao= $valor;
	  }
	  public function GetData_alberturaConta(){
			 return $this->data_emissao;
	  }
	  ///idbanco get set
	 public function SetIdBanco($valor){
		  $this->id_banco= $valor;
	  }
	  public function GetIdBanco(){
			 return $this->id_banco;
	  }
	  ///idClinte get set
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