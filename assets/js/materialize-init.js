(function($){
    $(function() {
        $('.button-collapse').sideNav({
            menuWidth: 300,
            closeOnClick: true
        });

        $('.parallax').parallax();
        $('.materialboxed').materialbox();
        $('select').material_select();
    }); // end of document ready
})(jQuery);