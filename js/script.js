$(document).ready(function () {

  $('body').animate({
    'opacity': '1'
  }, 500);

  var $grid = $('.grid').isotope({
    itemSelector: '.grid-item',
    percentPosition: true,
    masonry: {
      itemSelector: '.grid-item',
      columnWidth: '.grid-sizer',
      percentPosition: true,
      gutter: '.gutter-sizer'
    }
  });

  $grid.imagesLoaded().progress( function() {
    $grid.isotope('layout');
    $('.filter-button-group h5').on( 'click', function() {
      var filterValue = $(this).attr('data-filter');
      $grid.isotope({ filter: filterValue });
    });
  });

});
