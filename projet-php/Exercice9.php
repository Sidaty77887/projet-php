<?php
// Création du tableau multidimensionnel associatif
$personnes = array(
    "Dupont" => array(
        "prenom" => "Pierre",
        "ville" => "Paris",
        "age" => 30
    ),
    "Martin" => array(
        "prenom" => "Sophie",
        "ville" => "Lyon",
        "age" => 25
    ),
    "Lemoine" => array(
        "prenom" => "Julien",
        "ville" => "Marseille",
        "age" => 28
    ),
    "Bernard" => array(
        "prenom" => "Claire",
        "ville" => "Bordeaux",
        "age" => 35
    )
);

// Affichage des informations sous forme de tableau HTML
echo "<h1>Liste des Personnes</h1>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>";
echo "<th>Nom</th>";
echo "<th>Prénom</th>";
echo "<th>Ville</th>";
echo "<th>Âge</th>";
echo "</tr>";

foreach ($personnes as $nom => $infos) {
    echo "<tr>";
    echo "<td>$nom</td>";
    echo "<td>{$infos['prenom']}</td>";
    echo "<td>{$infos['ville']}</td>";
    echo "<td>{$infos['age']}</td>";
    echo "</tr>";
}

echo "</table>";

// Ajouter le lien de retour
echo "<br><a href='index.php'>Retour à la liste des exercices</a>";