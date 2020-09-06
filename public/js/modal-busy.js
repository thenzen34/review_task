
var showBusy = function () {
    var self = $('#ajax_busy');
    $(self).show();
    $(self).data('top', $(window).scrollTop());
    $('html').addClass('ov-hidden');
};

var hideBusy = function () {
    var self = $('#ajax_busy');
    $(self).hide();
    $('html').removeClass('ov-hidden');
    $(window).scrollTop($(self).data('top'));
};
