<html>
    <head>
    <title>ToDoList</title>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" 
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" 
            crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/index.css">
        <link rel="icon" href="https://img.icons8.com/external-vectorslab-glyph-vectorslab/53/C850F2/external-Checklist-shopping-and-commerce-vectorslab-glyph-vectorslab.png">
    </head>
    <body>
        <div class="container">
            <?php include "templates/header.php"?>
            <h1>Мои задачи</h1>
            <div class="content">
                <?php 
                    require_once 'db.php';

                    $tasks = get_tasks();

                    foreach ($tasks as $task){ 
                ?>
                    <div class="task-card priority-<?= $task['priority'] ?>">
                        <h2 class="task-title">
                            <a class="task-edit" href="edit.php?id=<?= $task['id'] ?>">
                                <?= $task['name'] ?>
                            </a>
                        </h2>
                        <label class="label" for="description">Описание</label>
                        <textarea id="description" class="task-description"><?= $task['description'] ?></textarea>
                        <label class="label" for="end_date">Дедлайн</label>
                        <input class="task-end-date" type="datetime-local" id="end_date" disabled
                            value="<?= $task['end_date'] ?>">
                        <div class="pad-top">
                            <button class="task-btn-close close_task" data-task-id="<?= $task['id'] ?>">Закрыть задачу</button>
                        </div>
                    </div>
                <?php } ?>

            </div>

            <script src="js/close.js"></script>
        </div>
    </body>
</html>