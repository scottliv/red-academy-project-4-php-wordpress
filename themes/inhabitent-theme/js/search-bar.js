(function($){
  
  $('.nav-search-button').click(function(e){
    e.preventDefault();
    e.stopPropagation();
    $('.search-input').toggleClass('show');
    setTimeout(function(){
      $('.search-input').focus()
    }, 201);

    $(document).one('click', function closeSearch(e) {
      if ($('#search').has(e.target).length === 0) {
        $('#search').removeClass('show');
      } else {
        $(document).one('click', closeSearch);
      }
    });
  });  

})(jQuery);