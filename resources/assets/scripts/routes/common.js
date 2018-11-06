export default {
  init() {
    // JavaScript to be fired on all pages


    $('.menu-item-has-children').on('click', function() {
      if ($(window).width() < 992) {
        $(this).find('.sub-menu').toggle('hidden');
      }
    });

    $('.menu-mobile').on('click', function() {
      $('.nav-primary').toggleClass('hidden').toggleClass('flex');
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
