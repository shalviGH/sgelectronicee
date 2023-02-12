$(document).ready(function(){

    
    $('.js-ModalUpdateProduct').hide();
    //ocultamos el modal para mostrar la informacion del producto
    $('.js-ModalInfoProduct').hide();
    //ocultamos el modal para agregar productos
    $('.js-ModalAddProduct').hide();
    //ocultamos el modal para para realizar la venta de producto
    $('.js-ModalSaleProduct').hide();
    //ocultamos el modala para modificar los productos apartado o cancelarlos
    $('.js-ModalUpdateApart').hide();
    //oultamos el modal para elminar el producto
    $('.js-ModalDeleteProduct').hide();
    //ocultamos el modal para aggregar imagen al producto
    $('.js-ModalAddImage').hide();
    $('.js-ModalAddImage2').hide();
    $('.js-ModalDeleteProductApart').hide();

    //ocultammos la listade imagnes
    $('.js-imgList').hide();

    var namePro, descPro, cantPro, precio, imgUrl, idProduct, nameImage; 

   /*Function for show product information*//*Function for show product information*/
   /*Function for show product information*/
    $('.js-contProduct').on('click', function(){
       // alert("ff");
       //var np = $('.js-descPro').text();idProduct
       idProduct = $('#js-idProduct', this).val();
        namePro = $('.js-nameProduct', this).text();
        descPro = $('.js-descPro', this).text();
        cantPro = $('.js-cantProduct', this).text();
        precio = $('.js-prePro', this).text();
       
        imgUrl= $("#urlImg", this).attr("src");
      // alert(idProduct);
        //var np    =   $('.js-contProduct').find('.js-nameProduct').val();
        $("#js-inpNomPro").text(namePro);
        $("#js-available").text("Disponible: "+cantPro );
        $("#js-price").text("$"+precio+".00 MX");
        $(".js-inpPrePro").val(precio);
        $(".js-inpCantPro").val(cantPro);
        $("#imgProduct").attr("src", imgUrl);
        $("#idPro").val(idProduct);
        $("#js-desc").text(descPro);
        

       //var v = 12;

      
      //alert(imgUrl); 
      var myArray = [];
       
       $(".listImg", this).each(function(){
           // alert($(this).attr('class'));
            var img = $('.imgL', this).attr('src');
           // $(".listImg", this).
            //alert(img.length);
            //alert(img);
           //while(img.length == 0){
               // var myArray = [];
                myArray.push(img);
                
           // }
            //console.log(myArray[1]);
            //console.log(img);
        });
        console.log(myArray.length);
        console.log(myArray[0]);
        console.log(myArray[1]);
        
        for (let index = 0; index < myArray.length; index++) {
            //const element = array[index];

            //$('.contListImageInfo').add('<span>Again</span>');
            //$("<i></i>").text("love ");

            $("#img1").attr('src', myArray[0]);
            $("#img2").attr('src',myArray[1]);
            $("#img3").attr('src', myArray[2]);
            $("#img4").attr('src',myArray[3]);
            
        }

        $('.js-ModalInfoProduct').show();
    });


    $('.js-btnCancelw').on('click', function(){
        $('.js-ModalInfoProduct').hide();
    });

    /* function for to make sale */
    /*$('.js-makeSale').on('click', function(){
       
        //var id = $('.lblIdProduct', this).val();
        //alert('probando boton' + id);
    });*/

   
   
    
    //fucntion for update product aparts :::::::::::::::::::::::::::::::::::::
    //fucntion for update product aparts :::::::::::::::::::::::::::::::::::::
    //fucntion for update product aparts :::::::::::::::::::::::::::::::::::::
    var prePro = 0;
    $('.js-contProductA').on('click', function(){
      
        $('.js-ModalUpdateApart').show();
       /* var precioP = $('.js-precioP').text();
        var cantP = $('.js-CantidadP').val();*/

        var idP = $('.js-idPro').val();
        var cBarra = $(this).attr('js-codB');
        var pImg = $(this).attr('js-imgP');
        var pNombre= $(this).attr('js-nomPro');
        var cantPro= $(this).attr('js-cantPro');
         prePro= $(this).attr('js-pricePro');
        //$('#js-idP').val(idP );
        $('#imgProductA').attr("src", pImg)
        $('#js-nomP').text(pNombre);
        //$('.js-tProduct').text(cantPro);
        //$('#js-imgPro2').val('dddd');
        /*$('.js-CantidadP').val(cantPro);*/
        $('#js-price2').text('Precio $'+prePro+'.00');
        $('#js-available2').text("Disponibles: "+cantPro);
       $('#cBarra').val(cBarra);
       //$('#pTotal').text(prePro);

       //alert(cBarra + pImg+ pNombre);

    });

   /* $('#js-cantAp5').on('click', function(){
        alert("ff");
        var cant =  $('.js-CantidadP',this).text();
        var pagoTotal = prePro * cant;
        $('#pTotal').text(pagoTotal);
        alert(pagoTotal);
        //alert(pagoTotal);
    });*/

    //$('pTotal').text();
        //var cant = $('.js-cantSelected').val();
   
    $('.js-cant3').on('click', function(){
        
        var cant =  $(this).text();
        var pagoTotal = precio * cant;

        $('#js-pagoTotal').val(pagoTotal);
        //alert(pagoTotal);
    });


    $('.js-btnCanProApart').on('click', function()
    {
        $('.js-ModalUpdateApart').hide();
    });


    //function for editINfromation Product//function for editINfromation Product
    //function for editINfromation Product//function for editINfromation Product
    $('.js-btnCancelUpdate').on('click', function()
    {
        $('.js-ModalUpdateProduct').hide();
    });

        
    //funcion para aguardar las varibles de la tabala y realizar la venta
    $('.js-ConProduct').hover(function()
    {
        namePro = $('#js-nameProduct', this).text();
        precio = $('#js-priceProduct', this).text();
        idProduct = $('#js-idP', this).val();
        descPro =   $('#js-desc', this).val();
        cantPro = $('#js-cantP', this).text();
        imgUrl = $('#imgProduct', this).attr('src');

        nameImage = $('.js-cImg', this).val();

    });

    $('.js-editProduct').on('click', function()
    {
        //$('.js-ModalInfoProduct').hide();
        
        $('#js-codBarra').val(idProduct);
        $('#js-namePro').val(namePro);
        $('#js-descPro').val(descPro);
        $('#js-precioPro').val(precio);
        $('#js-cantPro').val(cantPro);
        //$('#js-imgPro').val(imgUrl);
       $('#imgUpdate').attr('src', imgUrl)
        //alert(imgUrl+ "===="+ nameImage);
        $('#js-nameImg').val(nameImage);
        $('.js-ModalUpdateProduct').show(2000);
        //alert("probando boton");
    });


    //fucntion for delete product
    $('.js-deleteProduct').on('click', function()
    {
       $('.js-codBarra').val(idProduct);
        $('.js-ModalDeleteProduct').show();
        //alert("prove delete " + idProduct );
    });

    //fucntion for cancel delete product
    $('.btnCanceDelete').on('click', function()
    {
        $('.js-ModalDeleteProduct').hide();
    });



    $('.js-makeSale').on('click', function(){
        
        $('.js-ModalSaleProduct').show();
        
        $('#js-cantP').val(namePro);
        $('#js-idPro').val(idProduct);
        $('#js-precioP').val(precio);
        $('#js-pagoTotal').val(precio);
    });

    $('.js-btnCancelSaleProduct').on('click', function(){
        $('.js-ModalSaleProduct').hide();
    });


    $('.imgL').hover(function(){
        //alert('vbdsnm');
        var img = $(this).attr("src");
        $("#imgProduct").attr("src", img);
    });
    

    /* F8nction for add image*/
    $('.js-addImage').on('click', function(){

        $('#jsIdP').val(idProduct);
        $('.js-ModalAddImage').show();
       //alert("hjbkhjvndsl");
       //$('.js-ModalAddImage2').show();
    });
     
    $('.js-btnCancelAddImage').on('click', function(){
        $('.js-ModalAddImage').hide();
    });


    var arrayFiles = [];

    $('.multimediaFisica').dropzone({
        url: "/",
        addRemoveLinks: true,
        aceeptedFile: "image/jpeg, image/png",
        maxFilesize: 2,
        maxFiles: 3,    
        init: function(){

            this.on("addedfile", function(file){
                arrayFiles.push(file);
                console.log("arrayFiles", arrayFiles);
            });

            this.on("removedfile", function(file){
                var index = arrayFiles.indexOf(file);
                arrayFiles.splice(index, 1);
                console.log("arrafiles", arrayFiles);
            });
        }

    });





    jQuery('input[type=file]').change(function(){
    var filename = jQuery(this).val().split('\\').pop();
    var idname = jQuery(this).attr('id');
    console.log(jQuery(this));
    console.log(filename);
    console.log(idname);
    jQuery('span.'+idname).next().find('span').html(filename);
    });



    /*Function for delete product apart *//*Function for delete product apart */
    /*Function for delete product apart *//*Function for delete product apart */
    /*Function for delete product apart *//*Function for delete product apart */
    /*Function for delete product apart *//*Function for delete product apart */

    $('.js-btnCancelApart').on('click', function(){
        //alert('hfhd');
       var idusPr = $(this).attr('js-idpro');
       //alert(idusPr);
        $('#js-idProUserAp2').val(idusPr);
    $('.js-ModalDeleteProductApart').show();
    });
    $('.btnCanceDeleteProApart').on('click', function(){
       // alert('hfhd');
        $('.js-ModalDeleteProductApart').hide();
    });


    /* function for show the produt for category*//* function for show the produt for category*/
    /* function for show the produt for category*//* function for show the produt for category*/
    /* function for show the produt for category*//* function for show the produt for category*/
    $('.js-category').on('click' ,function(){

           $category = $(this).val();
           $(location).attr('href',rutaUrl + "/productController/searchProduct/"+$category);
    });
    

});





