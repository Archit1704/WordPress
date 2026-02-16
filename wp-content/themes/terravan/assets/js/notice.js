jQuery(document).ready(function($) {
    $('#terravan-notice .notice-dismiss').on('click', function() {
        $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {
                action: 'terravan_dismiss_notice'
            }
        });
    });
});