<?php
$data = file_get_contents("tasks.json");
$tasks = json_decode($data, true);

$total = count($tasks);
$terminees = count(array_filter($tasks, fn($t) => $t["statut"] == "terminée"));
$retard = count(array_filter($tasks, fn($t) =>
    $t["statut"] != "terminée" && $t["date_limite"] < date("Y-m-d")
));

$pourcentage = $total > 0 ? round(($terminees / $total) * 100, 2) : 0;
?>

<h1>📊 Statistiques</h1>
<p>Total des tâches : <?= $total ?></p>
<p>Tâches terminées : <?= $terminees ?></p>
<p>Pourcentage terminé : <?= $pourcentage ?> %</p>
<p>Tâches en retard : <?= $retard ?></p>

<a href="index.php">⬅ Retour</a>
