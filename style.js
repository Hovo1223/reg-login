$(document).ready(function() {
    $('.check').click(function() {
        var isChecked = $(this).is(':checked');
        if (isChecked) {
            $('.firstname').attr('type', 'text');
        } else {
            $('.firstname').attr('type', 'password');
        }
    });
});
