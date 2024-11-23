<?php
// Fonction pour calculer le sinus d'un angle en fonction de l'unité
function calculerSinus($angle, $unite = 'r')
{
    // Conversion de l'angle en radians selon l'unité spécifiée
    if ($unite == 'd') {
        // Si l'unité est en degrés, on convertit l'angle en radians
        $angle = deg2rad($angle);
    } elseif ($unite == 'g') {
        // Si l'unité est en grades, on convertit l'angle en radians
        $angle = $angle * (pi() / 200);
    }

    // Calcul du sinus en utilisant la fonction sin() qui attend l'angle en radians
    return sin($angle);
}

// Traitement du formulaire après soumission
$sinus_result = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données du formulaire
    $angle = isset($_POST['angle']) ? $_POST['angle'] : 0;
    $unite = isset($_POST['unite']) ? $_POST['unite'] : 'r';

    // Calcul du sinus
    $sinus_result = calculerSinus($angle, $unite);
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 17 : Calcul du Sinus</title>
</head>

<body>
    <h1>Calcul du Sinus d'un Angle</h1>

    <form method="POST" action="">
        <label for="angle">Angle :</label>
        <input type="number" name="angle" id="angle" step="any" required>

        <label for="unite">Unité :</label>
        <select name="unite" id="unite">
            <option value="r">Radian</option>
            <option value="d">Degré</option>
            <option value="g">Grade</option>
        </select>

        <button type="submit">Calculer le Sinus</button>
    </form>

    <?php
    // Affichage du résultat
    if ($sinus_result !== '') {
        echo "<h2>Résultat :</h2>";
        echo "<p>Le sinus de l'angle de $angle ";
        if ($unite == 'd') {
            echo "(en degrés) est : " . $sinus_result;
        } elseif ($unite == 'g') {
            echo "(en grades) est : " . $sinus_result;
        } else {
            echo "(en radians) est : " . $sinus_result;
        }
        echo "</p>";
    }
    ?>

    <a href="index.php">Retour à la liste des exercices</a>
</body>

</html>