(function ($) {
  $(document).ready(function () {
    $('.portfolio-menu ul li').click(function () {
      $('.portfolio-menu ul li').removeClass('active');
      $(this).addClass('active');
      var selector = $(this).attr('data-filter');
      $('.portfolio-item').isotope({
        filter: selector
      });
      return false;
    });
    // $('.popup-btn').magnificPopup({
    //   type: 'image',
    //   gallery: {
    //     enabled: true
    //   }
    // });
  })
})(jQuery);











