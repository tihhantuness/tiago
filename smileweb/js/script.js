$(document).ready(function()
{
    //código parallax
    $('.parallax').parallax();
    
    //Codigo tooltip
    $("a.tooltip").mouseover(function(){
        var texto = $(this).attr('data-tooltip');
        $(this).children(".text_tooltip").html(texto);
        $(this).children(".text_tooltip").css('opacity','1');
    });
    
    $("a.tooltip").mouseout(function(){
        $(this).children(".text_tooltip").css('opacity','0');
    });
    
    //Codigo Para Mostra ou Não o Menu
    $("nav").mouseover(function(){
       $(".nav-itens").addClass("nav-show");
    });
    
    $("nav").mouseout(function(){
        $(".nav-itens").removeClass("nav-show");
    });
    
    //Codigo Para Ajustar o Cabeçalho
    $(document).scroll(function(){
        var topWindow = $(window).scrollTop();
        if(topWindow > 60)
            {
                $("header").addClass('header_fixed');
            }
        else
        {
            $("header").removeClass('header_fixed');
        };
    });
    
	//Codigo Para Ajustar o menu
    $(document).scroll(function(){
        var topWindow = $(window).scrollTop();
        if(topWindow > 60)
            {
                $("header a").addClass('sumirmenu');
            }
        else
        {
            $("header a").removeClass('sumirmenu');
        };
    });
	
     //Codigo Para logo
    $(document).scroll(function(){
        var topWindow = $(window).scrollTop();
        if(topWindow > 60)
            {
                $("header img").addClass('logo_menu');
            }
        else
        {
            $("header img").removeClass('logo_menu');
        };
        
        
    });

});

