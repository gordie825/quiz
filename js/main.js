/*global $, jQuery, alert*/
$(document).ready(function() {

  'use strict';

  // ========================================================================= //
  //  Typed Js
  // ========================================================================= //

  var typed = $(".typed");

  $(function() {
    typed.typed({
      strings: ["INFORMATIVE ","EXCITING ", "AMAZING ", "EDUCATIONAL ", "I.T QUIZ "],
      typeSpeed: 10,
      loop: true,
    });
  });


  
})
