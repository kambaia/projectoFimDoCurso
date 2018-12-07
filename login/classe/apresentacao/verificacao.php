<?php 
	include_once("../modelo/aluno.php");
    include_once('../modelo/usuario.php');
    include_once("../modelo/contacto.php");
	include_once("../modelo/curso.php");
    include_once("../modelo/classe.php");
    include_once("../modelo/turma.php");
    include_once("../modelo/propina.php");
	include_once("../modelo/endereco.php");
    include_once("../modelo/transferencia.php");
    include_once("../dal/conexao.php");
    include_once("../dal/DalUsuario.php");
   

    if(isset($_POST['envair-formulario'])){
	 $codigo = 0;	
	 $nome    = $_POST['nome'];	
	 $email   = $_POST['email'];
	 $codigopco  =  $_POST['codigopco'];
	 $senha= $_POST['senha'];
	 $confirmaSenha = $_POST['confirmaSenha'];
	 $NivelAcesso= 1;
	 $status =  1;
	 $id_cliente = 1;
	 $id_colegio = 1;
	 
		 
	        $con = new Conexao();
		
		    $dalusuario= new DalUsuario($con);
		    $usuario = new Usuario($codigo, $nome, $email, $codigopco, $senha, $NivelAcesso, $status, $id_cliente, $id_colegio);
		    $dalusuario->InserirUsuario($usuario);
		    
		    echo "<br>";
			 echo "<br>";
			 echo "<br>";
		    var_dump($usuario);
		     
		    echo   "Cadastro feiro com sucesso". "<br>";
		
		
	 if($confirmaSenha==$senha){
			 echo "O nome é: "  . $usuario->GetNome() ."<br>";  
			  echo "O email: :"	. $usuario->GetEmail() ."<br>";
			  echo "O codigo de identificacao é:" . $usuario->GetCodigopco(). $codigopco ."<br>";

			  echo "A senha é:"  .$usuario->GetSenha()."<br>";
			  echo "Nivel de acesso:"	.$usuario->GetNivelAcesso()."<br>";
			  echo "stutus:"	.$usuario->GetStatus()."<br>";
		}
     
        
	  //$obj = new Usuario();
		
	  /*
	  $obj->SetNome($nome);
      $obj->SetEmail($email);
      $obj->SetCodigopco($codigopco);
	  $obj->SetNivelAcesso($NivelAcesso);
	  $obj->SetStatus($status);
      

      if($senha==$confirmaSenha){
      	$obj->SetSenha($senha);
      }
      else{
      	echo "As senhas são diferentes! Deves igualar as senhas";
      }
		echo  "O nome é: ". $obj->GetNome();
		
		*/

  }
        ?>
		
