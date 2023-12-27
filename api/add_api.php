<?php 

require_once 'db.php';

$name = "'".$_POST["name"]."'";
$priority = $_POST["priority"];

if (isset($_POST["description"]) and $_POST["description"]!= '') {
    $description = "'".$_POST["description"]."'";
}
else {
    $description = "NULL";
}

if (isset($_POST["end_date"]) and $_POST["end_date"]!= '') {
    $end_date = "'".$_POST["end_date"]."'";
}
else {
    $end_date = "NULL"; 
}

echo add_task($name, $priority, $description, $end_date);
