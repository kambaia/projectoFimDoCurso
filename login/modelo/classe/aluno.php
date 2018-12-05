
<?php
include_once("pessoa.php");

class Aluno extends Pessoa {
 
	private  $id_classe;
	private  $id_curso;
	private  $numeroAluno;
	private  $id_propina;
	private  $curso;
	private  $id_turma;
	private  $id_colegio;
	
	
	
	
	function __construct($codigo=0, $nome = "", $sexo="", $data_nascimento="", $codigopco=0, $numeroAluno=0,  $id_classe=0, $id_curso=0, $id_propina=0, $curso=0, $id_turma=0, $id_colegio=0, $numeroBI="")
	{
		$this->SetCodigo($codigo);
		$this->SetNome($nome);
		$this->SetSexo($sexo);
		$this->SetNumeroBI($numeroBI);
		$this->SetIdCurso($id_curso);
		$this->SetIdPropina($id_propina);
		$this->SetIdClasse($id_classe);
		$this->SetIdTurma($id_turma);
		
		
		$this->SetDataNascimento($data_nascimento);
		$this->SetNumeroAluno($numeroAluno);
	}
	
	 /////Medtodo NumeroAluno Set e Get
	public function SetNumeroAluno($valor){
		$this->numeroAluno=$valor;
	}
	public function GetNumeroAluno(){
		return $this->numeroAluno;
	}
	/////Medtodo codigo do banco Set e Get
	
	public function SetIdCurso($valor){
		$this->Id_curso=$valor;
	}
	public function GetIdCurso(){
		return $this->Id_curso;
	}
	/////Medtodo codigo do banco Set e Get
	public function SetIdTurma($valor){
		$this->Id_turma=$valor;
	}
	public function GetIdTurma(){
		return $this->Id_turma;
	}
	/////Medtodo codigo do classe Set e Get
	public function SetIdPropina($valor){
		$this->id_propina=$valor;
	}
	public function GetIdPropina(){
		return $this->id_propina;
	}
	/////Medtodo codigo do classe Set e Get
	public function SetIdClasse($valor){
		$this->id_classe=$valor;
	}
	public function GetIdClasse(){
		return $this->id_classe;
	}
	
}

?>