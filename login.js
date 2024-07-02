$('.icon').on('click', function () {
    var inputField = $('.second input');
    if (inputField.attr('type') === 'password') {
        inputField.attr('type', 'text');
        $('.hide').text('Hide');
        $('.icon img').attr('src', 'images/icon.png');
    } else {
        inputField.attr('type', 'password');
        $('.hide').text('Show');
        $('.icon img').attr('src', 'images/iconmonstr-eye-9.png');
    }
});
