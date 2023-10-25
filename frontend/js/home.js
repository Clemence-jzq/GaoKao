$(document).ready(function () {
    // 获取中国所有省市，不包括港澳台
    $.get('backend/home.php', function (data) {
        JSON.parse(data).forEach(element => {
            $('#province').append(`<option value="${element.id}">${element.name}</option>`);
        });
    });
});
