<?php
// Traitement des actions en fonction du bouton soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];

    // Variables pour stocker les données du formulaire
    $bien = $prix = $description = $type_bien = $budget = $ville = '';

    // Traitement du formulaire en fonction de l'action choisie
    if ($action == "Vendre") {
        $bien = $_POST['bien'] ?? '';
        $prix = $_POST['prix'] ?? '';
        $description = $_POST['description'] ?? '';
    } elseif ($action == "Acheter") {
        $type_bien = $_POST['type_bien'] ?? '';
        $budget = $_POST['budget'] ?? '';
        $ville = $_POST['ville'] ?? '';
    } elseif ($action == "Louer") {
        $type_bien = $_POST['type_bien'] ?? '';
        $budget = $_POST['budget'] ?? '';
        $ville = $_POST['ville'] ?? '';
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 15 : Vendre, Acheter, Louer</title>
</head>

<body>
    <h1>Exercice 15 : Choisissez une action immobilière</h1>

    <!-- Formulaire principal pour choisir l'action -->
    <form method="POST">
        <fieldset>
            <legend>Choisir une action</legend>
            <button type="submit" name="action" value="Vendre">Vendre</button>
            <button type="submit" name="action" value="Acheter">Acheter</button>
            <button type="submit" name="action" value="Louer">Louer</button>
        </fieldset>
    </form>

    <?php
    // Si une action a été choisie, afficher le formulaire correspondant
    if (isset($action)) {
        if ($action == "Vendre") {
            echo "<h2>Formulaire de Vente</h2>";
            echo '<form method="POST">
                    <fieldset>
                        <legend>Vendre un bien immobilier</legend>
                        <input type="hidden" name="action" value="Vendre">
                        <label for="bien">Type de bien :</label>
                        <input type="text" id="bien" name="bien" value="' . htmlspecialchars($bien) . '" required><br><br>

                        <label for="prix">Prix de vente :</label>
                        <input type="number" id="prix" name="prix" value="' . htmlspecialchars($prix) . '" required><br><br>

                        <label for="description">Description :</label>
                        <textarea id="description" name="description" required>' . htmlspecialchars($description) . '</textarea><br><br>

                        <button type="submit">Soumettre</button>
                    </fieldset>
                </form>';

            // Affichage des données soumises
            if ($bien && $prix && $description) {
                echo "<h2>Résumé de la vente</h2>";
                echo "<table border='1'>
                        <tr><th>Type de bien</th><td>$bien</td></tr>
                        <tr><th>Prix de vente</th><td>$prix</td></tr>
                        <tr><th>Description</th><td>$description</td></tr>
                      </table>";
            }
        } elseif ($action == "Acheter" || $action == "Louer") {
            echo "<h2>Formulaire pour $action un bien</h2>";
            echo '<form method="POST">
                    <fieldset>
                        <legend>' . ucfirst($action) . ' un bien immobilier</legend>
                        <input type="hidden" name="action" value="' . $action . '">
                        
                        <label for="type_bien">Type de bien recherché :</label>
                        <input type="text" id="type_bien" name="type_bien" value="' . htmlspecialchars($type_bien) . '" required><br><br>

                        <label for="budget">Budget :</label>
                        <input type="number" id="budget" name="budget" value="' . htmlspecialchars($budget) . '" required><br><br>

                        <label for="ville">Ville :</label>
                        <input type="text" id="ville" name="ville" value="' . htmlspecialchars($ville) . '" required><br><br>

                        <button type="submit">Soumettre</button>
                    </fieldset>
                </form>';

            // Affichage des données soumises
            if ($type_bien && $budget && $ville) {
                echo "<h2>Résumé de l'$action</h2>";
                echo "<table border='1'>
                        <tr><th>Type de bien recherché</th><td>$type_bien</td></tr>
                        <tr><th>Budget</th><td>$budget</td></tr>
                        <tr><th>Ville</th><td>$ville</td></tr>
                      </table>";
            }
        }
    }
    ?>

    <a href="index.php">Retour à la liste des exercices</a>
</body>

</html>