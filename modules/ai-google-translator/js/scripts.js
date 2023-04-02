;(function ($, w, d, h, b) {
    var app = {
        googleTranslator: function () {
            if (typeof $().googleTranslator != 'undefined') {
                var settings = {
                    dropdown: true,
                    dropdownFlag: true,
                    dropdownChangeText: true,
                }

                $('.translator-trigger').googleTranslator(settings);
            }
        },
        init: function() {
            this.googleTranslator();
        }
    }
    
    $(document).ready(function () {
        app.init();
    });
    
})(jQuery, window, document, 'html', 'body');