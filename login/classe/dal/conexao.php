

<?php
class Conexao{
  private   $servidor;
  private   $usuario;
  private   $senha;
  private   $nomeBanco;
  private   $banco_Dados;
	
  
	
	function __construct($servidor="localhost",  $usuario ="root", $senha="", $nomeBanco="pco") 
	{
		$this->SetServidor($servidor);
		$this->SetUsuario($usuario);
		$this->SetSenha($senha);
		$this->SetNomeBanco($nomeBanco);
		$this->Conectar();
		
	}
	 //Fim Metodo construtor 
	 /*=============================================================*/
	 //id da conta 
	 	 
	 public function SetServidor($valor){
		  $this->servidor= $valor;
	  }
	  public function GetServidor(){
			 return $this->servidor;
	  }
		//Numero do cliente Get E  Set 
	  public function SetUsuario($valor){
		  $this->usuario= $valor;
	  }
	  public function GetUsuario(){
			 return $this->usuario;
	  }
		//saldo ou dineiro disponiel do cliente Get E  Set
	  public function SetSenha($valor){
		  $this->senha= $valor;
	  }
	  public function GetSenha(){
			 return $this->senha;
	  }	 
		 ///Data de albertura da conta 

	  public function SetNomeBanco($valor){
		  $this->nomeBanco= $valor;
	  }
	  public function GetNomeBanco(){
			 return $this->nomeBanco;
	  }
	  ///idbanco get set
	
	
	
	///Metodo para se conetar no banco de dados 
	
	public function Conectar()
	{
		$this->banco_Dados = new MySQLi(
		 
		   $this->GetServidor(),
		   $this->GetUsuario(),
		   $this->GetSenha(),
		   $this->GetNomeBanco()
		
		);
		if($this->banco_Dados->connect_error){
			die('Erro de conexao(' .$this->banco_Dados->connect_error . '):' .$this->banco_Dados->connect_error);
		}
	}
	
	public function GetBanco(){
		return $this->banco_Dados;
	}
	
	public function Desconectar(){
		$this->banco_Dados->close();
	}
	
	
	
	 
}
?>