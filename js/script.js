$(document).ready(function () {
  $('body').animate({
    'opacity': '1'
  }, 500);

  var $grid = $('.grid').imagesLoaded( function() {
    $grid.isotope({
      itemSelector: '.grid-item',
      percentPosition: true,
      masonry: {
        itemSelector: '.grid-item',
        columnWidth: '.grid-sizer',
        percentPosition: true,
        gutter: 37
      }
    });

    $('.filter-button-group').on( 'click', 'button', function() {
      var filterValue = $(this).attr('data-filter');
      $grid.isotope({ filter: filterValue });
    });
  });

});
