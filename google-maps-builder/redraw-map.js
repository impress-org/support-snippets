// Note: This will have to be customized per environment depending on tab markup.

(function($) {
    $(window).load(function() {
        $('#neighborhoodTab > a').one('click', function (e) {
            var panel_id = $(this).attr('href');
            setTimeout(function(){
                var panel = $(panel_id).get(0);
                MapsBuilder.load_hidden_map(panel);
            },100, panel_id);
        });
     });
})(jQuery);
