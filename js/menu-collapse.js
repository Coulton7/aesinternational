(function($){
  function autocollapse() {
    var navbar = $('#autocollapse');
    navbar.removeClass('collapsed');
    if(navbar.innerHeight() > 60) {
      navbar.addClass('collapsed');
      $('#overlay-btn').addClass('display-none');
    } else {
      navbar.removeClass('collapsed');
      $('#overlay-btn').removeClass('display-none');
    }
  }

  $(document).on('ready', autocollapse);
  $(window).on('resize', autocollapse);
})(jQuery);
