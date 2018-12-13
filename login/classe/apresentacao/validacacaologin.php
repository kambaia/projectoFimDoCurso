<?php	
include("verificacao.php");
if(isset($_POST['login'])){
			$email   = $_POST['email'];
			$senha=  $_POST['senha'];
			
			if($email ==''){
				
				echo "<span>Campo vazio! Por favor preencha com o seu email</span>";
			}
			else if($senha ==''){

						echo "<span>Campo vazio! Por favor preencha com a seu sua senha</span>";
					}
	       else{
						  
	        $con = new Conexao();
		
		    $dalusuario= new DalUsuario($con);
			   
   			$resultados= $dalusuario->LocalizarDadosLogin($email, $senha);
			  
				if(mysqli_num_rows($resultados)>0){
					          
					         echo "<br>";
				          echo "<h2>Registros encontrados</h2>";
					}
				else{
					echo "Não foram encontrados nenhum registro";
				}
	  	    }
			
		
	}
?>