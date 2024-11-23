<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer la chaîne entrée par l'utilisateur
    $string = $_POST['string'];

    // Initialiser les variables pour compter les voyelles et consonnes
    $vowels = 0;
    $consonants = 0;

    // Convertir la chaîne en minuscules pour simplifier les comparaisons
    $string = strtolower($string);

    // Parcourir chaque caractère de la chaîne
    foreach (str_split($string) as $char) {
        // Vérifier si le caractère est une voyelle
        if (preg_match('/[aeiouy]/', $char)) {
            $vowels++;
        }
        // Vérifier si le caractère est une consonne
        elseif (preg_match('/[bcdfghjklmnpqrstvwxz]/', $char)) {
            $consonants++;
        }
    }

    // Stocker le résultat sous forme de texte
    $result = "Voyelles : $vowels<br>Consonnes : $consonants";
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 10 : Voyelles et Consonnes</title>
</head>

<body>
    <h1>Exercice 10 : Compter les voyelles et consonnes</h1>

    <!-- Formulaire pour entrer une chaîne de caractères -->
    <form method="POST">
        <label for="string">Entrez une chaîne de caractères :</label>
        <input type="text" id="string" name="string" required>
        <button type="submit">Compter</button>
    </form>

    <?php
    // Affichage du résultat si le calcul a été effectué
    if (isset($result)) {
        echo "<p><strong>Résultat : </strong> $result</p>";
    }
    ?>

    <!-- Lien pour revenir à la page d'accueil -->
    <a href="index.php">Retour à la liste des exercices</a>
</body>

</html>