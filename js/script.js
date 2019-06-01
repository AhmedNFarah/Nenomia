$(document).ready(function () {
  $('body').animate({
    'opacity': '1'
  }, 500);

  var $grid = $('.grid').imagesLoaded( function() {
    $grid.masonry({
      itemSelector: '.grid-item',
      columnWidth: '.grid-sizer',
      percentPosition: true,
      gutter: 37
    });
  });
  
});
