<?php
function get_tasks(): array {
    // $conn = new PDO("sqlsrv:Server=DESKTOP-IT9AV0H\SQLEXPRESS;Database=tasks");
    $conn = new PDO("mysql:host=localhost;dbname=tasks", "root", "");
    $sql = "SELECT * FROM task where is_done=0 order by priority;";
    $result = $conn->query($sql);
    return $result->fetchAll();
}

function get_task($id): array {
    $conn = new PDO("mysql:host=localhost;dbname=tasks", "root", "");
    $sql = "SELECT * FROM task where id=$id";
    $result = $conn->query($sql);
    return $result->fetch();
}

function edit_task($id, $name, $priority, $description, $end_date): bool {
    $conn = new PDO("mysql:host=localhost;dbname=tasks", "root", "");
    $sql = "UPDATE task SET name=$name, priority=$priority, 
    description=$description, end_date=$end_date where id = $id";
    $conn->exec($sql);
    return true;
}

function close_task($id): bool {
    $conn = new PDO("mysql:host=localhost;dbname=tasks", "root", "");
    $sql = "UPDATE task SET is_done=1 where id = $id";
    $conn->exec($sql);
    return true;
}

function add_task($name, $priority, $description, $end_date): bool {
    $conn = new PDO("mysql:host=localhost;dbname=tasks", "root", "");
    $sql = "INSERT INTO task (name, description, end_date, priority) VALUES ($name, $description, $end_date, $priority);";
    $conn->exec($sql);
    return true;
}