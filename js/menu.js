$(document).ready(function(){
    
    var _menu_link= $('.nav li a');
    
     $(window).scroll(function(){
         var posicaoMenu = $(this).scrollTop();
         if(posicaoMenu>=139){
              $('.nav').css({
                  position: 'fixed',
                 'margin': '-100px 0px'
                  
              })
         }
         else if(posicaoMenu<=139){
              $('.nav').css({
                 'margin': '80px 0px',
                  width: '100%',
                   position: 'relative',
                  
              })
         }
        
         
     })
    
    $('a').on('click', function(){
        var selector = $(this).attr('href');
        alert(selector);

    })
   
    
    
})