$(document).ready(function() {
    $(".btn2").on('click', function(){
        $(".login").css({
            display: 'block'
        })
        $(".cadastrar").css({
            display: 'none'
        })
    })
    $(".btn1").on('click', function(){
        
        $(".cadastrar").css({
            display: 'block'
        })
         $(".login").css({
            display: 'none'
        })
    })
    
    
    ///VERIFICAÇÃO DOS CAMPOS

    $('#btn3').on('click', function(){
        alert("A campos que não forma preenchido");
    })

    });
                  
        
