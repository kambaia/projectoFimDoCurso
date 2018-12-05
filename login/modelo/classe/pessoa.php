<?php

class Pessoa{
	protected $codigo;
	protected $nome;
	protected $sexo;
	protected $apelido;
	protected $data_nascimento;
	protected $email;
	protected $codigopco;
	protected $senha;
	protected $estado_civel;
	protected $numeroBI;
	
	
	
	
	
	function __construct($codigo=0, $nome = "", $apelido="", $sexo="", $data_nascimento="", $email_usuario="", $codigopco=0, $senha = "", $estado_civel="", $numeroBI="")
	{
		$this->SetCodigo($codigo);
		$this->SetNome($nome);
		$this->SetEmail($email_usuario);
		$this->SetSexo($sexo);
		$this->SetApelido($apelido);
		$this->SetDataNascimento($data_nascimento);
		
		$this->SetCodigopco($codigopco);
		$this->SetSenha($senha );
		
		$this->SetEstado_Civel($estado_civel);
		$this->SetNumeroBI($numeroBI);
		
	}
	
	public  function SetCodigo($valor){
		$this->codigo= $valor;
	}
	public  function GetCodigo(){
		return $this->codigo;
	}
	///Nome set e get
	public  function SetNome($valor){
		$this->nome_usuario= $valor;
	}
	public  function GetNome(){
		return $this->nome_usuario;
	}
	///Subrinome set e get
	public  function SetApelido($valor){
		$this->apelido= $valor;
	}
	public  function GetApelido(){
		return $this->apelido;
	}
	//Sexo  get e get 
	public  function SetSexo($valor){
		$this->sexo = $valor;
	}
	public  function GetSexo(){
		return $this->sexo;
	}
	
	
	// Data de nascimento 
	public  function SetDataNascimento($valor){
		$this->data_nascimento = $valor;
	}
	public  function GetDataNascimento(){
		return $this->data_nascimento;
	}
	
	///email set e get
	public  function SetEmail($valor){
		$this->email_usuario= $valor;
	}
	public  function GetEmail(){
		return $this->email_usuario;
	}
	//codigopco
	public  function SetCodigopco($valor){
		$this->codigopco= $valor;
	}
	public  function GetCodigopco(){
		return $this->codigopco;
	}
	///senha set e get
	public  function SetSenha($valor){
		$this->senha= $valor;
	}
	public  function GetSenha(){
		return $this->senha;
	}
	
	///CONTA Estado civel Get e Set
	public  function SetEstado_Civel($valor){
		$this->estado_civel= $valor;
	}
	public  function GetEstado_Civel(){
		return $this->estado_civel;
	}
	///CONTA  BI set e get
	public  function SetNumeroBI($valor){
		$this->numeroBI= $valor;
	}
	public  function GetNumeroBI(){
		return $this->numeroBI;
	}
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}
?>