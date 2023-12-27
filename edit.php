<html>
    <head>
        <title>ToDoList - Изменить</title>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" 
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" 
            crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/index.css">
        <link rel="icon" href="https://img.icons8.com/external-vectorslab-glyph-vectorslab/53/C850F2/external-Checklist-shopping-and-commerce-vectorslab-glyph-vectorslab.png">
    </head>
    <body>
        <div class="container">
            <?php include "templates/header.php"?>
            <h1>Изменить задачу</h1>
            <?php 
                require_once 'db.php';

                $task = get_task($_GET["id"]);
            ?>
            <form class="form" method="post" id="form">
                <input type="hidden" name="id" value="<?= $task["id"] ?>">
                <div class="form-group">
                    <label class="task-label" for="name">Название</label>
                    <input type="text" name="name" value="<?= $task["name"] ?>" required>
                </div>
                <div class="form-group">
                    <label class="task-label" for="description">Описание</label>
                    <textarea name="description" cols="30" rows="5"><?= $task["description"] ?></textarea>
                </div>
                <div class="form-group">
                    <label class="task-label" for="end_date">Дедлайн</label>
                    <input class="task-end-date" type="datetime-local" name="end_date" value="<?= $task["end_date"] ?>">
                </div>
                <div class="form-group">
                    <label class="task-label" for="priority">Приоритет</label>
                    <select name="priority" required>
                        <?php

                            $optionArr = [
                                1 => "Очень важно",
                                2 => "Важно",
                                3 => "Важно но не срочно",
                                4 => "Не важно",
                            ];
                            
                            for ($i = 1; $i < 5; $i++) {
                                if ($i == $task["priority"]){ ?>
                                    <option value="<?= $i ?>" selected><?= $optionArr[$i]; ?></option>
                        <?php
                                }
                                else
                                { ?>
                                    <option value="<?= $i ?>"><?= $optionArr[$i]; ?></option>
                        <?php
                                }
                            }
                        ?>
                    </select>
                </div>
                <button class="btn">Изменить</button>
            </form>
            <script src="js/edit.js"></script>
        </div>
    </body>
</html>