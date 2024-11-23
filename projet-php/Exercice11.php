<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $date_input = $_POST['date'];
    $date = new DateTime($date_input);
    $end_of_year = new DateTime('31-12-' . $date->format('Y'));
    $interval = $date->diff($end_of_year);

    $result = "Il reste " . $interval->days . " jours jusqu'à la fin de l'année.";
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 11 : Jours restants jusqu'à la fin de l'année</title>
</head>

<body>
    <h1>Exercice 11 : Jours restants jusqu'à la fin de l'année</h1>
    <form method="POST">
        <label for="date">Entrez une date (format JJ-MM-AAAA) :</label>
        <input type="date" id="date" name="date" value=" " required>
        <button type="submit">Calculer</button>
    </form>

    <?php
    if (isset($result)) {
        echo "<p><strong>Résultat : </strong> $result</p>";
    }
    ?>
    <a href="index.php">Retour à la liste des exercices</a>
</body>

</html>