<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $ville = $_POST['ville'];
    $code_postal = $_POST['code_postal'];

    // Afficher les données dans un tableau
    echo "<h1>Adresse Client</h1>";
    echo "<table border='1'>";
    echo "<tr><th>Nom</th><td>$nom</td></tr>";
    echo "<tr><th>Prénom</th><td>$prenom</td></tr>";
    echo "<tr><th>Adresse</th><td>$adresse</td></tr>";
    echo "<tr><th>Ville</th><td>$ville</td></tr>";
    echo "<tr><th>Code Postal</th><td>$code_postal</td></tr>";
    echo "</table>";
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 12 : Adresse Client</title>
</head>

<body>
    <h1>Exercice 12 : Formulaire d'adresse client</h1>
    <form method="POST">
        <fieldset>
            <legend>Adresse client</legend>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required><br><br>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required><br><br>

            <label for="adresse">Adresse :</label>
            <input type="text" id="adresse" name="adresse" required><br><br>

            <label for="ville">Ville :</label>
            <input type="text" id="ville" name="ville" required><br><br>

            <label for="code_postal">Code Postal :</label>
            <input type="text" id="code_postal" name="code_postal" required><br><br>

            <button type="submit">Envoyer</button>
        </fieldset>
    </form>

    <a href="index.php">Retour à la liste des exercices</a>
</body>

</html>