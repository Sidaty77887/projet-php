<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $radius = $_POST['radius'];
    $diameter = 2 * $radius;
    $perimeter = 2 * M_PI * $radius;
    $area = M_PI * pow($radius, 2);

    $result = "Pour un cercle de rayon $radius :<br>
               - Diamètre : $diameter<br>
               - Périmètre : $perimeter<br>
               - Surface : $area";
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5 : Calculs du cercle</title>
</head>

<body>
    <h1>Exercice 5 : Calculs du cercle</h1>
    <form method="POST">
        <label for="radius">Entrez le rayon du cercle :</label>
        <input type="number" id="radius" name="radius" value=" " required>
        <button type="submit">Calculer</button>
    </form>

    <?php
    if (isset($result)) {
        echo "<p><strong>Résultat : </strong> $result</p>";
    }
    ?>
    <a href="index.php">Retour à la liste des exercices</a>