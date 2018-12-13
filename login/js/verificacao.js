

$(document).ready(function() {
   
  $("#cadastrar").validate({
      rules:{
          nome:{
              required: true,
              maxlength:100,
              minlength:5,
              email: false
          },
          email:{
              required:true,
              email: true,
              minlength: 10
              
          },
         codigo:{
              required: true,
             maxlength:10,
              minlength:2
          },
          senha:{
              required: true,
               maxlength:30,
              minlength:8
          },
           confirmaSenha:{
               required: true,
               equalTo: "#senha"
         
          }
          
      },
      submitHandler: function(form){
              alert("Dados envaidos com sucesso");
          }
  });
    
   $("#logar").validate({
      rules:{
          nome:{
              required: true,
              maxlength:100,
              minlength:5,
              email: false
          },
          email:{
              required:true,
              email: true,
              minlength: 10
              
          },
          
          senha:{
               required: true,
               maxlength:30,
               minlength:8
          }
      },
      submitHandler: function(form){
              alert("Dados envaidos com sucesso");
          }
  });
    
    
    
    
	
});