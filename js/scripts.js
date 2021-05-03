$(function(){
    //aqui vai nosso codigo
    $('nav.mobile').click(function(){
        //A o click
        var listaMenu = $('nav.mobile ul');
        //Usando fade in
        /*
        if(listaMenu.is(':hidden')==true){
            listaMenu.fadeIn();
        }
        else{
            listaMenu.fadeOut();
        }
        */
         //Usando nem um efeito
        /*
        if(listaMenu.is(':hidden')==true){
            listaMenu.show();
        }
        else{
            listaMenu.hidden();
        }
        */
       var icone = $('.botao-menu-mobile').find('i');
       if(listaMenu.is(':hidden')==true){
            icone.removeClass('fa-bars');
            icone.addClass('fa-times');
           listaMenu.slideToggle();
       }
       else{
           icone.removeClass('fa-times');
           icone.addClass('fa-bars');
           listaMenu.slideToggle();
       }
       
    })
    //rolando a tela so ate onde quero
    if($('target').length>0){
        var elemento='#'+$('target').attr('target');
        var divScroll = $(elemento).offset().top;
        $('html,body').animate({'scrollTop':divScroll},2000);
    }

})