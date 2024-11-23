<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number = $_POST['number'];

    if ($number % 3 == 0 && $number % 5 == 0) {
        $result = "$number est un multiple de 3 et de 5.";
    } else {
        $result = "$number n'est pas un multiple de 3 et de 5.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2 : Multiples de 3 et 5</title>
</head>

<body>
    <h1>Exercice 2 : Tester si un nombre est un multiple de 3 et de 5</h1>
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