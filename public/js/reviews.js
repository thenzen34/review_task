$(function() {
    var add_reviews_modal_form = $('#add_reviews_form');

    $('button.add_reviews_btn').click(function() {
        const self = this;

        $(add_reviews_modal_form).modal();

        return false;
    });
});
