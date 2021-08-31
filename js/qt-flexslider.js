(function($){
  $(document).ready(function() {
    $('#quicktabs-your_regional_branch .scrtabs-tab-container .scrtabs-tabs-fixed-container .scrtabs-tabs-movable-container .nav-tabs').children('li').find('a').on('click', function(){
      $('.flexslider').resize();
    });
  });
})(jQuery);
