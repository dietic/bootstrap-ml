$('.dropdown').on('show.bs.dropdown', function(e){
  $(this).find('.dropdown-menu').first().stop(true, true).slideDown(300);
});

$('.dropdown').on('hide.bs.dropdown', function(e){
  $(this).find('.dropdown-menu').first().stop(true, true).slideUp(200);
});

$('.carousel').carousel({
  interval: 1000 * 3
});

$(window).resize(function(){
   var vh = $(window).height();
   var vw = $(window).width();
    $('.left-col p').html('Viewport height: '+vh+' Viewport width: '+vw);
});