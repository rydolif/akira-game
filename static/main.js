
$(function() {  
  //------------------------------гамбургер-----------------------------
    $('.hamburger').click(function() {
      $('nav').toggleClass('nav--active');
    });

    $('.click--button').click(function() {
      $(this).toggleClass('click--button--active');
    });

});