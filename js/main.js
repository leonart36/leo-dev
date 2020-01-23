$(function(){
    var header = $('.header').get(0);

    function resizeHeader() {
        header.style.height = window.innerHeight + 'px';
    }

    $(window).on('resize', resizeHeader);
    resizeHeader();
});

$(".navbar a").click(function(){
    $("body,html").animate({
     scrollTop:$("#" + $(this).data('value')).offset().top
    },3000);
    
   });
/*
   $(document).ready(function(){
       $('a[href^="#"]').click(function(){
           elementClick=$(this).attr("href");
           destination=$(elementClick).offset().top;
           if($.browser.safari){
               $('body').animate({scrollTop: destination},1000);
           } else {
               $('html').animate({scrollTop:destination},1000);
           }
           return false;
       });
   });*/