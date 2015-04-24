(function ($, Drupal) {

  Drupal.behaviors.yw_mobile = {
    attach: function(context, settings) {
      // Get your Yeti started.
      //flyout left/right menu
    $(".left-off-canvas-toggle:not(.processed)").click(function() {
      $(".off-canvas-wrap").toggleClass("move-right");
    }).addClass('processed');
    $(".exit-off-canvas:not(.processed)").click(function() {
      $(".off-canvas-wrap").removeClass("move-right");
    }).addClass('processed');
    $(".right-off-canvas-toggle:not(.processed)").click(function() {
      $(".off-canvas-wrap").toggleClass("move-left");
    }).addClass('processed');
    
    $(".exit-off-canvas:not(.processed)").click(function() {
      $(".off-canvas-wrap").removeClass("move-left");
    }).addClass('processed');
    
    // Dropdowns for side nav
    $('.nolink').click(function() {
        $('.menu').toggleClass('visible');
    });
    
    }
    
  };
  
  
  
    


})(jQuery, Drupal)