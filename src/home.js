$(document).ready(function(){
    $('#abre-menu').click(function(){
        $('.menu-nav').addClass('menu-nav-show');
        $('body').css({height: '100vh', overflow: 'hidden'});
    });
    $('#fecha-menu').click(function(){
        $('.menu-nav').removeClass('menu-nav-show');
        $('body').css({height: 'auto', overflow: 'auto'});
    });
});