<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $target = $_POST['target'];
    $draws = 0;
    $random_number = 0;

    // Effectuer les tirages jusqu'à obtenir le nombre cible
    while ($random_number != $target) {
        $random_number = rand(100, 999); // Tirage aléatoire d'un nombre entre 100 et 999
        $draws++;
    }

    $result = "Il a fallu $draws tirages pour obtenir $target.";
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3 : Tirages aléatoires</title>
</head>

<body>
    <h1>Exercice 3 : Tirages aléatoires jusqu'à un nombre spécifique</h1>
    <form method="POST">
        <label for="target">Entrez un nombre cible (3 chiffres) :</label>
        <input type="number" id="target" name="target" value=" " required>
        <button type="submit">Tirer</button>
    </form>

    <?php
    if (isset($result)) {
        echo "<p><strong>Résultat : </strong> $result</p>";
    }
    ?>
    <a href="index.php">Retour à la liste des exercices</a>
</body>

</html>