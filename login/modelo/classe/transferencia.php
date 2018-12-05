
<?php

 	class Transferenca{

		   private $id_transferencia;
		   private $nome_cliente;
		   private $nconta_destino;
		   private $data_transferenca;
		   private $valor_transferir;
		   private $valor_multa;
		   private $id_colegio;
		   private $id_cliente;

	
	 /////Metodo construtor 
	   
	function __construct($id_transferencia=0, $nome_cliente = "", $nconta_destino=0, $data_transferenca=0, $valor_transferir=0, $valor_multa=0, $id_colegio=0, $id_cliente=0) 
	{
		$this->SetIdTransferencia($id_transferencia);
		$this->SetNomeCliente($nome_cliente);
		$this->SetContaDestino($nconta_destino);
		$this->SetDataTransferencia($data_transferenca);
		$this->SetValorTransferir($valor_transferir);
		$this->SetMultaApgar($valor_multa);
		
		$this->SetIdCliente($id_cliente);
		$this->SetidColegio($id_colegio);
		
	}
	 //Fim Metodo construtor 
	 /*=============================================================*/
	 //id da conta 
	 	 
	 public function SetIdTransferencia($valor){
		  $this->id_transferencia= $valor;
	  }
	  public function IdTransferencia(){
			 return $this->id_transferencia;
	  }
		//Numero do cliente Get E  Set 
	  public function SetNomeCliente($valor){
		  $this->nome_cliente= $valor;
	  }
	  public function GetNomeCliente(){
			 return $this->nome_cliente;
	  }
		//saldo ou dineiro disponiel do cliente Get E  Set
	  public function SetContaDestino($valor){
		  $this->nconta_destino= $valor;
	  }
	  public function GetContaDestino(){
			 return $this->nconta_destino;
	  }	 
		 ///Data de albertura da conta 

	  public function SetValorTransferir($valor){
		  $this->valor_transferir= $valor;
	  }
	  public function GetValorTransferir(){
			 return $this->valor_transferir;
	  }
	  ///idbanco get set
	 public function SetMultaApgar($valor){
		  $this->valor_multa = $valor;
	  }
	  public function GetMultaApgar(){
			 return $this->valor_multa;
	  }
		  ///idbanco get set
	 public function SetDataTransferencia($valor){
		  $this->data_transferenca= $valor;
	  }
	  public function GetDataTransferencia(){
			 return $this->data_transferenca;
	  }
	  //
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

