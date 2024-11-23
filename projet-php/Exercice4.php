<?php
function ppcm($a, $b)
{
    $max = max($a, $b);
    while (true) {
        if ($max % $a == 0 && $max % $b == 0) {
            return $max;
        }
        $max++;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $result = "Le PPCM de $a et $b est " . ppcm($a, $b);
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4 : PPCM</title>
</head>

<body>
    <h1>Exercice 4 : Calculer le PPCM</h1>
    <form method="POST">
        <label for="a">Entrez un premier entier :</label>
        <input type="number" id="a" name="a" value=" " required>
        <label for="b">Entrez un second entier :</label>
        <input type="number" id="b" name="b" value=" " required>
        <button type="submit">Calculer le PPCM</button>
    </form>

    <?php
    if (isset($result)) {
        echo "<p><strong>Résultat : </strong> $result</p>";
    }
    ?>
    <a href="index.php">Retour à la liste des exercices</a>
</body>

</html>