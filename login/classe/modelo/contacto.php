<?php

   class Contacto{
    protected $unitel;
	protected $movicel;
	protected $fixo;
   
	   
	function __construct($fixo="", $unitel="", $movicel="")
	{
		$this->GetMovicel($movicel);
		$this->SetSUnitel($unitel);
		$this->SetFixo($fixo);
		
	}
	   
	   ///CONTA unitel
	public  function SetSUnitel($valor){
		$this->unitel= $valor;
	}
	public  function GetUnitel(){
		return $this->unitel;
	}
	///CONTA  movicel 
	public  function SetSMovicel($valor){
		$this->movicel= $valor;
	}
	public  function GetMovicel(){
		return $this->movicel;
	}
	   
	   ///MEDOTO get set para contacto fixo
	   public  function SetFixo($valor){
		$this->fixo= $valor;
	}
	public  function GetFixo(){
		return $this->fixo;
	}
	
   
   }

?>