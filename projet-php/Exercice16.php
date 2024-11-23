<?php
// Fonction qui transforme chaque élément du tableau : 
// première lettre en majuscule, le reste en minuscules
function capitalizeFirstLetter(array &$array): void
{
    foreach ($array as &$item) {
        $item = ucfirst(strtolower($item));
    }
}

// Initialisation du tableau modifié
$words = [];

// Traitement des données après soumission du formulaire
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['words'])) {
    // Récupérer les données entrées par l'utilisateur et les transformer en tableau
    $words = explode(",", $_POST['words']);
    capitalizeFirstLetter($words);
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 16 : Transformation des chaînes</title>
</head>

<body>
    <h1>Exercice 16 : Transformation des chaînes</h1>
    <p>
        Entrez une liste de mots séparés par des virgules (par exemple : "hElLo, woRLD, pHp") pour les transformer :
        <strong>Chaque mot aura sa première lettre en majuscule et le reste en minuscules.</strong>
    </p>

    <!-- Formulaire pour entrer des mots -->
    <form method="post" action="">
        <label for="words">Mots à transformer :</label>
        <input type="text" id="words" name="words" placeholder=" " required>
        <button type="submit">Transformer</button>
    </form>

    <?php if (!empty($words)) : ?>
    <h2>Résultat :</h2>
    <pre><?php print_r($words); ?></pre>
    <?php endif; ?>

    <a href="index.php">Retour à la liste des exercices</a>
</body>

</html>