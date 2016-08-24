jQuery(document).ready(function($) {

    $('.js-photo').on('click', function() {
        var id = $(this).data('photo-id');
        var html = '<img src="' + gallery[id]['url'] + '"><p>' + gallery[id]['caption'] + '</p>';

        $('.modal-body').empty().append(html);

        $('#photoModal').modal();
    });

});
