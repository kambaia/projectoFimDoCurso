<?php include("../cabecalho.php") ?>
<link rel="stylesheet" href="css/login-style.css">
  <div class="caixa-main">
      <div class="infor">
            <h3>PCO DIRECTO EM SUA CASA</h3>
              <h2>ASSIM FICA MAIS FÁCIL!</h2>
              <P>O PCO NO TELEMÓVEL OU NO COMPUTADOR</P>
               <P class="des">Faça já a escrição e começa a pagar as propinas dos seus Candengues</P>
               <div class="pco"></div>
              <h1>PCO</h1>
      </div>
     
            
     <div class="caixa-op">
         <div class="cab-login">
             <h2>PCO DIREITO AO SEU PC</h2>
             <button class="btn btn1">Escrever-se</button>
             <button class="btn btn2" id="btn-login">Logar</button>
          </div>
    
    <section class="login">
        <form id="logar" action="classe/apresentacao/validacacaologin.php" method="post" enctype="multipart/form-data">
        <input class="input" type="text" name="email" placeholder="E-mail:">
		<span class="help-block"></span>
        

        <input class="" type="password" name="senha" placeholder="Senha">
		<span class="help-block"></span>
        
       <button class="btn btn3" type="submit" name="login">Acessar</button>
        <h4><a href="">Esqueceu a sua palavra-passe?</a></h4>
        </form>

         
    </section >
    <section class="cadastrar">
		
      <form id="cadastrar" action="login.php" method="post" enctype="multipart/form-data">
		  
        <input class="input" type="text" id="nome" name="nome" placeholder="Nome usúario:">
		  
        <input class="input" type="email" id="email" name="email" placeholder="Email:">
		  
        <input class="" type="text"  id="codigopco" name="codigo" placeholder="Código PCO:">
		  
        <input class="input"  type="password" id="senha" name="senha" placeholder="Senha:">
	
        <input class="input"  type="password" id="confirmaSenha" name="confirmaSenha" placeholder="confirmar senha:">
		 
       <button class="btn btn3" type="submint" id="enviar" name="envair-formulario">Acessar</button>

        </form>

         
    </section >
   </div>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/additional-methods.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/localization/messages_pt_PT.js"></script>
 <script src="js/menu.js"></script>
<script src="js/verificacao.js"></script>

