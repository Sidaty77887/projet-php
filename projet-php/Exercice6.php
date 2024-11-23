</body>

</html><?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $number = $_POST['number'];
            $divisors = [];

            for ($i = 1; $i <= $number; $i++) {
                if ($number % $i == 0) {
                    $divisors[] = $i;
                }
            }

            $result = "Les diviseurs de $number sont : " . implode(", ", $divisors);
        }
        ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6 : Diviseurs</title>
</head>

<body>
    <h1>Exercice 6 : Diviseurs d'un nombre</h1>
    <form method="POST">
        <label for="number">Entrez un nombre :</label>
        <input type="number" id="number" name="number" value=" " required>
        <button type="submit">Afficher les diviseurs</button>
    </form>

    <?php
    if (isset($result)) {
        echo "<p><strong>Résultat : </strong> $result</p>";
    }
    ?>

    <a href="index.php">Retour à la liste des exercices</a>