"use strict";

(function () {
    $('.btn-group').each(function () {
        if($(this).find('.radio_choice.active').length < 1) {
            $(this).find('.radio_choice').first().addClass('active')
        }
    });
    $('a.page-link').click(function () {
        if ($(this).attr('href') !== '#') {
            showBusy()
        }
    });

    /****************************************
     *  Приложение
     ***************************************/
    document.app = {
        //document.app = {};

        init: function () {
            //
        },

        showBusy: function () {
            var self = $('#ajax_busy');
            $(self).show();
            $(self).data('top', $(window).scrollTop());
            $('html').addClass('ov-hidden');
        },

        hideBusy: function () {
            var self = $('#ajax_busy');
            $(self).hide();
            $('html').removeClass('ov-hidden');
            $(window).scrollTop($(self).data('top'));
        },

        uniq : function (newArray) {
            return newArray.filter(function (item, index) {
                return newArray.indexOf(item) === index;
            });
        },

        ajax : function (data, success, error) {
            var obj = {
                method:"POST",
                type: "POST",
                data: data,
                dataType: "json",
                success: function(result) {
                    hideBusy();
                    success(result);
                },
                error: function() {
                    hideBusy();
                    error();
                },
            };

            showBusy();

            $.ajax(obj);
        },
    };

    $(document).ready(function() {
        document.app.init();
    });
})();
