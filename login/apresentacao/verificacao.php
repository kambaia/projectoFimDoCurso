<?php 
	include_once("../modelo/classe/aluno.php");
    include_once('../modelo/classe/usuario.php');
	include_once("../modelo/classe/pessoa.php");
    include_once("../modelo/classe/contacto.php");
	include_once("../modelo/classe/curso.php");
    include_once("../modelo/classe/classe.php");
    include_once("../modelo/classe/turma.php");
    include_once("../modelo/classe/propina.php");
	include_once("../modelo/classe/endereco.php");
    include_once("../modelo/classe/transferencia.php");
   

    if(isset($_POST['envair-formulario'])){
	 $codigo = 1;	
	 $nome    = $_POST['nome'];	
	 $email   = $_POST['email'];
	 $codigopco  =  $_POST['codigopco'];
	 $senha= $_POST['senha'];
	 $confirmaSenha = $_POST['confirmaSenha'];
	 $NivelAcesso= 2;
	 $status =  1;
		 
	         echo "Multa: ". $objecto1->GetMultaApgar() ."<br><br><br>";
			 echo "Foi transferido ". $objecto1->GetValorTransferir() ." Kz <br><br><br>";
		     echo "Valor total : ". ($objecto1->GetMultaApgar() +  $objecto1->GetValorTransferir())."<br><br><br>";
		
		//$objecto1->SetValorMulta(3000);
		
		
	 
	 
	   
	   //echo "O nome é". $objecto1->GetValorMulta() ." Kz <br><br><br>";
	  
		
	 
      echo "O nome é:"  .$nome;  
	  echo "O nome é:"	. $email;
      echo "O nome é:"	. $codigopco;
	  echo "O nome é:"  .$senha;
	  echo "O nome é:"	.$confirmaSenha;
	  echo "O nome é:"	.$NivelAcesso;
	  echo "O nome é:"	.$status;
        
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
		
