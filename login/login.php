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
      <div class="infor-img">
           <img src="../img/pco.png">
      </div>
            
     <div class="caixa-op">
         <div class="cab-login">
             <h2>PCO DIREITO AO SEU PC</h2>
             <button class="btn btn1">Escrever-se</button>
             <button class="btn btn2" id="btn-login">Logar</button>
          </div>
    
    <section class="login">
        <form action="Principal.php" method="post" enctype="multipart/form-data">
        <input class="input" type="text" name="email" placeholder="E-mail:">
        

        <input class="" type="password" name="senha" placeholder="Senha">
        
       <button class="btn btn3" type="submit">Acessar</button>
        <h4><a href="">Esqueceu a sua palavra-passe?</a></h4>
        </form>

         
    </section >
    <section class="cadastrar">
      <form id="cadastrar" action="apresentacao/verificacao.php" method="post" enctype="multipart/form-data">
        <input class="input" type="text" id="nome" name="nome" placeholder="Nome usúario:">
        <input class="input" type="email" id="email" name="email" placeholder="Email:">
        <input class="" type="text"  id="codigopco" name="codigopco" placeholder="Código PCO:">
        <input class="" type="password" name="senha" placeholder="Senha:">
        <input class="" type="password" name="confirmaSenha" placeholder="confirmar senha:">
          
       <button class="btn btn3" type="submint" id="cadatrar" name="envair-formulario">Acessar</button>

        </form>

         
    </section >
   </div>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
 <script src="js/menu.js"></script>
<script src="js/verificacao.js"></script>

