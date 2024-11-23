<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numbers = explode(",", $_POST['numbers']);
    $numbers = array_map('intval', $numbers);

    $average = array_sum($numbers) / count($numbers);
    $max = max($numbers);
    $min = min($numbers);

    $result = "Moyenne : $average<br>Maximum : $max<br>Minimum : $min";
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 13 : Moyenne, Maximum, Minimum</title>
</head>

<body>
    <h1>Exercice 13 : Moyenne, Maximum, Minimum</h1>
    <form method="POST">
        <label for="numbers">Entrez des nombres séparés par des virgules :</label>
        <input type="text" id="numbers" name="numbers" value=" " required>
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