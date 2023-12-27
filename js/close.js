$('.close_task').click(function (e) {
    if (confirm("Закрыть задачу?")) {
        let id = e.target.getAttribute('data-task-id');
        $.ajax({
            type: "POST",
            url: "api/close_api.php",
            data: {"id": id},
            success: function () {
                alert('Задача закрыта!');
                window.location.reload();
            },
        });
    } 
});
