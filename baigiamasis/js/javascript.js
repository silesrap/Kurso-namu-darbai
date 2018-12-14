$(document).ready(function(){
  // Patikrina ar esame puslapio virsuje, jei ne, tada rodo mygtuka
  $(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
        $('#scrollToTop').fadeIn();
    } else {
        $('#scrollToTop').fadeOut();
    }
  });
  // funkcija grazinanti i puslapio virsu
  $('#scrollToTop').click(function(){
    $('html, body').animate({scrollTop : 0},800);
  });
});
  // paveiksleliu zoom'as
  $(document).ready(function(){
    $('.materialboxed').materialbox();
  });

  // modal hire me
  $(document).ready(function(){
    $('.modal').modal();
  });
