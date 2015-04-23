
(function ($) {
  $(document).ready(function() {
    //var sig = Drupal.settings.signaturefield.sig || null;
    $('form .sig').each(function(){
      var api = $(this).parent().signaturePad(Drupal.settings.signaturefield.settings);
      //regenerate existing signature when editing content
      var sigid = $(this).find('input.output').attr('id');
      setTimeout(function(){api.regenerate(Drupal.settings.signaturefield[sigid])}, 60);
    });
  });
})(jQuery);
