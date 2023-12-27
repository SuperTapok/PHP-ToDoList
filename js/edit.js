form.addEventListener('submit', function() {
    var form_data = $("#form").serialize();
    console.log( form_data );
    $.ajax({
        type: "POST",
        url: "api/edit_api.php",
        data: form_data,
        success: function () {
            alert('Задача изменена!');
        },
    });
});