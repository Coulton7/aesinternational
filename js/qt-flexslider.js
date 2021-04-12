(function($){
  $(document).ready(function() {
    $('#quicktabs-your_regional_branch .nav-tabs').children('li').find('a').on('click', function(){
      $('.flexslider').resize();
    });
  });
})(jQuery);
