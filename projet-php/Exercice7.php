<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number = $_POST['number'];
    $divisors_sum = 0;

    // Trouver la somme des diviseurs propres
    for ($i = 1; $i < $number; $i++) {
        if ($number % $i == 0) {
            $divisors_sum += $i;
        }
    }

    if ($divisors_sum == $number) {
        $result = "$number est un nombre parfait.";
    } else {
        $result = "$number n'est pas un nombre parfait.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7 : Nombre parfait</title>
</head>

<body>
    <h1>Exercice 7 : Nombre parfait</h1>
    <form method="POST">
        <label for="number">Entrez un nombre :</label>
        <input type="number" id="number" name="number" value=" " required>
        <button type="submit">Vérifier</button>
    </form>

    <?php
    if (isset($result)) {
        echo "<p><strong>Résultat : </strong> $result</p>";
    }
    ?>
    <a href="index.php">Retour à la liste des exercices</a>
</body>

</html>