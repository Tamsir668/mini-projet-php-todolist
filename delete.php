<?php
$id = $_GET["id"];
$data = file_get_contents("tasks.json");
$tasks = json_decode($data, true);

$tasks = array_filter($tasks, function($task) use ($id) {
    return $task["id"] != $id;
});

file_put_contents("tasks.json", json_encode(array_values($tasks), JSON_PRETTY_PRINT));
header("Location: index.php");
