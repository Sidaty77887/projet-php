<?php
$moyenne = $maximum = $minimum = null; // Initialisation des résultats
$numbers = []; // Initialisation du tableau

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['numbers'])) {
    // Récupérer et traiter les données entrées par l'utilisateur
    $input = $_POST['numbers'];
    $numbers = array_map('intval', explode(",", $input)); // Convertir les nombres en tableau d'entiers

    if (!empty($numbers)) {
        $moyenne = array_sum($numbers) / count($numbers); // Calcul de la moyenne
        $maximum = max($numbers); // Calcul du maximum
        $minimum = min($numbers); // Calcul du minimum
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8 : Moyenne, Maximum, Minimum</title>
</head>

<body>
    <h1>Exercice 8 : Moyenne, Maximum, Minimum</h1>
    <form method="POST">
        <label for="numbers">Entrez une liste de nombres entiers séparés par des virgules :</label><br>
        <input type="text" id="numbers" name="numbers" value="<?= htmlspecialchars($_POST['numbers'] ?? '') ?>"
            placeholder=" " required><br><br>
        <button type="submit">Calculer</button>
    </form>

    <?php if (!empty($numbers)) : ?>
    <h2>Résultats :</h2>
    <p><strong>Nombres :</strong> <?= implode(", ", $numbers) ?></p>
    <p><strong>Moyenne :</strong> <?= number_format($moyenne, 2) ?></p>
    <p><strong>Maximum :</strong> <?= $maximum ?></p>
    <p><strong>Minimum :</strong> <?= $minimum ?></p>
    <?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST') : ?>
    <p style="color: red;">Veuillez entrer une liste valide de nombres.</p>
    <?php endif; ?>

    <a href="index.php">Retour à la liste des exercices</a>
</body>

</html>