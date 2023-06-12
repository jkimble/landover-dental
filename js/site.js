(function($) {
    $(document).ready(function() {
        accordion_handler();
        filter_handler();
    });
    
    function accordion_handler() {
        $('.faq_row').on('click focus', function() {
            if (!$(this).find('.faq_answer').hasClass('active')) {
                $(this).find('.faq_answer').slideDown('fast').addClass('active');
                $(this).siblings().find('.faq_answer').slideUp('fast').removeClass('active');
                $(this).addClass('arrow_trns');
            } else {
                $(this).find('.faq_answer').slideUp('fast').removeClass('active');
                $(this).removeClass('arrow_trns');
            }
        });  
    }

    function filter_handler() {
        $('#arc_filter').on('keyup', function() {
            var value = $(this).val().toLowerCase();
            $(".procedure_col").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        })
    }
})(jQuery);
    

