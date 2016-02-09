(function($) {

  // Equal height to certain column divs on homepage
  equalheight = function(container){

  var currentTallest = 0,
       currentRowStart = 0,
       rowDivs = new Array(),
       $el,
       topPosition = 0;
   $(container).each(function() {

     $el = $(this);
     $($el).height('auto')
     topPostion = $el.position().top;

     if (currentRowStart != topPostion) {
       for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
         rowDivs[currentDiv].height(currentTallest);
       }
       rowDivs.length = 0; // empty the array
       currentRowStart = topPostion;
       currentTallest = $el.height();
       rowDivs.push($el);
     } else {
       rowDivs.push($el);
       currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
    }
     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
       rowDivs[currentDiv].height(currentTallest);
     }
   });
  }


  $(document).ready(function () {

    $(".menu-toggle").click(function () {
      $('#main-menu').toggleClass("show");
    });

    // If not mobile view, equal height the columns
    if ($(window).width() > 765) {
      equalheight('.topFacts .columns .negative');
      equalheight('.homeColTwo .columns .negative');
      equalheight('.homeColThree .columns .negative');
    }

  });

  $(window).resize(function(){
    // Resshuffle on resize, but still equal height the columns
    if ($(window).width() > 765) {
      equalheight('.topFacts .columns');
      equalheight('.homeColTwo .columns');
      equalheight('.homeColThree .columns');
    }
  });






}(jQuery));
