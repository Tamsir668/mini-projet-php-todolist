<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $data = file_get_contents("tasks.json");
    $tasks = json_decode($data, true);

    $newTask = [
        "id" => time(),
        "titre" => $_POST["titre"],
        "description" => $_POST["description"],
        "priorite" => $_POST["priorite"],
        "statut" => "à faire",
        "date_creation" => date("Y-m-d"),
        "date_limite" => $_POST["date_limite"]
    ];

    $tasks[] = $newTask;
    file_put_contents("tasks.json", json_encode($tasks, JSON_PRETTY_PRINT));

    header("Location: index.php");
}
?>
