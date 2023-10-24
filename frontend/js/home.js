$(document).ready(function () {
    $.get('backend/home.php', function (data) {
        $('#province').append(`<option value="${data}">${data}</option>`);
    });
});
