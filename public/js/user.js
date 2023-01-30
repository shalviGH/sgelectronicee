
$(document).ready(function(){

    $('.js-btnAddUser').on('click', function(){
        $('.js-modalAddUser').show();
    });

    $('.jsBntCancelAddUser').on('click', function(){
        $('.js-modalAddUser').hide(8);
    });


    $('.js-btnUpdateUser').on('click', function(){
        $('.js-modalAddUser').show();

        $('.js-titleFormUser').text("Editar datos del usurio");
    });

    $('.js-btnDeleteUser').on('click', function(){
        $('.js-modalDeleteUser').show();
    });

    //code for modal  delete user
    $('.js-BntCancelDeleteUser').on('click',function(){
        $('.js-modalDeleteUser').hide();
    });


    

    
});