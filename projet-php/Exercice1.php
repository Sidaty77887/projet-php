<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $word = $_POST['word'];
    $reversed_word = strrev($word);

    if ($word === $reversed_word) {
        $result = "$word est un palindrome.";
    } else {
        $result = "$word n'est pas un palindrome.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1 : Palindrome</title>
</head>

<body>
    <h1>Exercice 1 : Vérifier un Palindrome</h1>
    <form method="POST">
        <label for="word">Entrez un mot :</label>
        <input type="text" id="word" name="word" required>
        <button type="submit">Vérifier</button>
    </form>

    <?php
    if (isset($result)) {
        echo "<p><strong>Résultat : </strong> $result</p>";
    }
    ?>

    <a href="index.php">Retour à la liste des exercices</a>
</body>

</html>