

$(document).ready(function(){

    $('.js-loginMessage').hide();
    $('.js-loginMessage2').hide();

    $('.js-login').hide();
    $('.contDataRegister-js').hide();
    $('.formProfile-js').hide();
    $('.js-ModalAddProduct').hide();
    //$('.js-loginMessage').hide();

    $('.lblCreateAcount-js').on('click', function(){
        $('.loginEnter-js').hide();
        $('.contDataRegister-js').show();
        $('.formLogin-Js').attr("action", rutaUrl+"/UserController/addUser");
       
    });

    $('.lblLoginI-js').on('click', function(){
        $('.contDataRegister-js').hide();
        $('.loginEnter-js').show();
        $('.formLogin-Js').attr("action", rutaUrl+"/Paginas/login");
    });


    //funciones para la vista de home
    $('.btnProfile-js').on('click', function(){
        $('.js-IUser').hide();
        $('.btnProfile-js').hide();
        $('.formProfile-js').show();
        var width =  screen.width;
        alert( width );

        if(width > 1366){
            $('.js-imgProfile').css("margin-top", "-700px")
        }

        //$('.js-imgProfile').css("margin-top", "-560px")
        
       //alert("kñghfog");
    });

    $('.btnCancel-js').on('click', function(){
        /*$('.js-IUser').show();
        $('.btnProfile-js').show();
        $('.formProfile-js').hide();*/
        //alert("hghf");
        $('#js-inpProfile').attr('disabled', false);
        $('#js-inpProfile1').attr('disabled', false);
        $('#js-inpProfile2').attr('disabled', false);
        $('#js-inpProfile3').attr('disabled', false);
        $('#js-inpProfile4').attr('disabled', false);
        $('#js-inpProfile5').attr('disabled', false);

    });


    
    $('.js-btnCancel').on('click', function(){
       $('.js-ModalAddProduct').hide();
       //alert("fd");
    });

    $('.js-AddProduct').on('click', function(){
        $('.js-ModalAddProduct').show();
        //alert("fd");
     });

    
     $('.js-btnCreateAcount').on('click', function(){
       // alert("Probando boton");
        $('.js-contElementsProduct').hide();
        $('.js-login').show();

     });

     /* create function for press button main for show all products */
     $('.js-btnProductM').on('click', function(){
        $('.js-contElementsProduct').show();
        $('.js-login').hide();
     });

     $('.js-btnApartProIndex').on('click', function(){
        $('.js-loginMessage2').show();
     });
    
     $('.btnClosemsLog').on('click', function() {
        $('.js-loginMessage2').hide();
     })
    

     /*$(".js-btnApartProIndex").on("click", function(){
        alert("la fbhjf");
     })*/
   

    

    

});