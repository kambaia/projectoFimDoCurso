
<?php  include("lib/dbconect.php"); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	 <base href="http://localhost/sistema_pco/login/">
	

    <title>pco_pagamantos colégias online</title>
  </head>
  <body>
    <h1 class="">Hello, world!</h1>
	  
	  <div class="container">
	        <?php 
		        $url = (isset($_GET['pagina'])) ? $_GET['pagina'] : 'login';
		  
		        $explode = explode('/', $url);
		        $dir= "pags";
		        $ext= ".php";
		  
		          if(file_exists($dir.$explode['0'].$ext)){
					  include($dir.$explode['0'].$ext);
				  }
		           else{
					   echo  "<div class='alert alert-danger'>Pagína não encontrada</div>";
				   }
		  
		      
		     ?>
	  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>