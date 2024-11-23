<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ht = $_POST['ht'];
    $tva_rate = $_POST['tva_rate'];

    $tva = $ht * ($tva_rate / 100);
    $ttc = $ht + $tva;

    $result = "Montant de la TVA : $tva<br>Prix TTC : $ttc";
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 14 : TVA et Prix TTC</title>
</head>

<body>
    <h1>Exercice 14 : Calcul TVA et Prix TTC</h1>
    <form method="POST">
        <label for="ht">Prix HT :</label>
        <input type="number" id="ht" name="ht" value=" " required><br><br>

        <label for="tva_rate">Taux de TVA (%):</label>
        <input type="number" id="tva_rate" name="tva_rate" value=" " required><br><br>

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