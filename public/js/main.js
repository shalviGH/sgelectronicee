$(document).ready(function() {
	
	if(viewPage == 'Home'){
		//alert('la vista es '+viewPage);
		$('.js-btnHome').addClass('btnMainSelected');
		//alert('la vista es '+ viewPage); 

	}
	else if(viewPage == 'Profile') 
	{ 
		$('.js-btnProfile').addClass('btnMainSelected');
		//alert('la vista es '+ viewPage); 
	}
	else if (viewPage == 'Product') 
	{ 
		$('.js-btnProduct').addClass('btnMainSelected');
		//alert('la vista es '+viewPage); 
	}
	else if (viewPage == 'Rad') 
	{ 
		$('.js-btnRad').addClass('btnMainSelected');
		//alert('la vista es '+viewPage); 
	}
	else if (viewPage == 'Employed') 
	{ 
		$('.js-btnEmployed').addClass('btnMainSelected');
		//alert('la vista es '+viewPage); 
	}
	else if (viewPage == 'Login') 
	{ 
		$('.js-btnLog').addClass('btnMainSelected');
		//$('.js-btnHome').addClass('btnMainSelected');

		//alert('vhbv');
		//('#js-btnApartUst').addClass('btnApart23');
		//alert('la vista es '+viewPage); 
	}
	else if (viewPage == 'ProIndex' && viewPage2 == ' ') 
	{ 
		//$('.js-btnLog').addClass('btnMainSelected');
		$('.js-btnProductM').addClass('btnMainSelected');

		//alert('vhbv');
		//('#js-btnApartUst').addClass('btnApart23');
		//alert('la vista es '+viewPage); 
	}
	else if(viewPage2 == 'ProIndex2' && viewPage == 'ProIndex') 
	{ 
		$('.btnLog').addClass('btnMainSelected');
		//$('.js-btnHome').addClass('btnMainSelected');

		//alert('vhbv');
		//('#js-btnApartUst').addClass('btnApart23');
		//alert('la vista es '+viewPage); 
	}

	


	$('.js-btnLogin').addClass('btnFormSelected');
	$('.js-formRegister').hide();

	$('.js-btnLogin').on("click", function()
	{
		$('.js-formLogin').show();
		$('.js-formRegister').hide();
		$('.js-btnLogin').addClass('btnFormSelected');
		$('.js-btnRegister').removeClass('btnFormSelected')
	});

	$('.js-btnRegister').on("click", function()
	{
		$('.js-btnRegister').addClass('btnFormSelected');
		$('.js-btnLogin').removeClass('btnFormSelected');
		$('.js-formLogin').hide();
		$('.js-formRegister').show();
	});

	var display;
	$('.js-listBtn').click(function()
	{
		$('.js-listBtn').css('color','white')
		$('.js-optionList').addClass('optionList');
		$('.js-listBtn').css('text-decoration', 'none');
		if($('.js-optionList').each(function(){
			displaying = $(this).css("display");
			if (displaying == 'flex') {
				$(this).fadeOut('slow', function(){
					$(this).css("display","none")
					$('.js-listBtn').css('color','white');
					$('.js-listBtn').css('text-decoration', 'none');
				});
				
			}else{
				$(this).fadeIn('slow', function() {
					$(this).css("display", "flex");
					$('.js-listBtn').css('color','white');
					$('.js-listBtn').css('text-decoration', 'none');
				})
			}
		}));
		
		
	});

	$('.js-listBtn').on('click',function()
	{
		//alert('prove button');
		if(display == 'flex'){
			//$('.js-optionList').css("display","none");
			alert(dis);
		}
		
		
	});

});
