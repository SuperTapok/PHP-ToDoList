<html>
    <head>
        <title>ToDoList - Добавить</title>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" 
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" 
            crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/index.css">
        <link rel="icon" href="https://img.icons8.com/external-vectorslab-glyph-vectorslab/53/C850F2/external-Checklist-shopping-and-commerce-vectorslab-glyph-vectorslab.png">
    </head>
    <body>
        <div class="container">
            <?php include "templates/header.php"?>
            <h1>Добавить задачу</h1>
            <form class="form" method="post" id="form">
                <div class="form-group">
                    <label class="task-label" for="name">Название</label>
                    <input type="text" name="name" required>
                </div>
                <div class="form-group">
                    <label class="task-label" for="description">Описание</label>
                    <textarea name="description" cols="30" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label class="task-label" for="end_date">Дедлайн</label>
                    <input class="task-end-date" type="datetime-local" name="end_date">
                </div>
                <div class="form-group">
                    <label class="task-label" for="priority">Приоритет</label>
                    <select name="priority" required>
                        <option value="1">Очень важно</option>
                        <option value="2">Важно</option>
                        <option value="3">Важно но не срочно</option>
                        <option value="4" selected>Не важно</option>
                    </select>
                </div>
                <button class="btn">Добавить</button>
            </form>
            <script src="js/add.js"></script>
        </div>
    </body>
</html>