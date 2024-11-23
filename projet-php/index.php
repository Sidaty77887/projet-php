<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices PHP</title>
    <style>
    /* Styles de base */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
        background-color: #f4f4f9;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
    }

    h1 {
        text-align: center;
        color: #333;
        width: 100%;
    }

    .exercise-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        width: 100%;
        gap: 20px;
    }

    .exercise-box {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 20px;
        width: 250px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    /* Couleur du nom de l'exercice */
    .exercise-box h2 {
        font-size: 20px;
        margin-bottom: 15px;
        color: #4CAF50;
        /* Couleur verte */
    }

    /* Couleur du bouton */
    .exercise-box button {
        padding: 10px 20px;
        font-size: 16px;
        background-color: #4CAF50;
        /* Couleur verte pour le bouton */
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    /* Effet hover pour le bouton */
    .exercise-box button:hover {
        background-color: #45a049;
        /* Couleur plus sombre du vert */
    }

    /* Lien de retour */
    .back-link {
        display: block;
        text-align: center;
        margin-top: 20px;
        text-decoration: none;
        color: #333;
        font-size: 16px;
    }

    .back-link:hover {
        text-decoration: underline;
    }
    </style>
</head>

<body>
    <h1>Serie d'exercice en php</h1>

    <div class="names-container">
        Membre du groupe :<br>
        Cheikh Sidaty Cheikh Saad Bouh 221380<br>
        Ndeye Ndella Dieng 221269<br>
        Fatima Rahma Wade
    </div>


    <div class="exercise-container">
        <!-- Exercice 1 -->
        <div class="exercise-box">
            <h2>Exercice 1 : Palindrome</h2>
            <button onclick="window.location.href='Exercice1.php'">Voir l'exercice</button>
        </div>

        <!-- Exercice 2 -->
        <div class="exercise-box">
            <h2>Exercice 2 : Multiples de 3 et de 5</h2>
            <button onclick="window.location.href='Exercice2.php'">Voir l'exercice</button>
        </div>

        <!-- Exercice 3 -->
        <div class="exercise-box">
            <h2>Exercice 3 : Tirages aléatoires</h2>
            <button onclick="window.location.href='Exercice3.php'">Voir l'exercice</button>
        </div>

        <!-- Exercice 4 -->
        <div class="exercise-box">
            <h2>Exercice 4 : PPCM</h2>
            <button onclick="window.location.href='Exercice4.php'">Voir l'exercice</button>
        </div>

        <!-- Exercice 5 -->
        <div class="exercise-box">
            <h2>Exercice 5 : Calculs du cercle</h2>
            <button onclick="window.location.href='Exercice5.php'">Voir l'exercice</button>
        </div>

        <!-- Exercice 6 -->
        <div class="exercise-box">
            <h2>Exercice 6 : Diviseurs</h2>
            <button onclick="window.location.href='Exercice6.php'">Voir l'exercice</button>
        </div>

        <!-- Exercice 7 -->
        <div class="exercise-box">
            <h2>Exercice 7 : Nombre parfait</h2>
            <button onclick="window.location.href='Exercice7.php'">Voir l'exercice</button>
        </div>

        <!-- Exercice 8 -->
        <div class="exercise-box">
            <h2>Exercice 8 : Moyenne, Max, Min</h2>
            <button onclick="window.location.href='Exercice8.php'">Voir l'exercice</button>
        </div>

        <!-- Exercice 9 -->
        <div class="exercise-box">
            <h2>Exercice 9 : Tableau associatif</h2>
            <button onclick="window.location.href='Exercice9.php'">Voir l'exercice</button>
        </div>

        <!-- Exercice 10 -->
        <div class="exercise-box">
            <h2>Exercice 10 : Voyelles et consonnes</h2>
            <button onclick="window.location.href='Exercice10.php'">Voir l'exercice</button>
        </div>

        <!-- Exercice 11 -->
        <div class="exercise-box">
            <h2>Exercice 11 : Jours restants</h2>
            <button onclick="window.location.href='Exercice11.php'">Voir l'exercice</button>
        </div>

        <!-- Exercice 12 -->
        <div class="exercise-box">
            <h2>Exercice 12 : Formulaire Adresse</h2>
            <button onclick="window.location.href='Exercice12.php'">Voir l'exercice</button>
        </div>

        <!-- Exercice 13 -->
        <div class="exercise-box">
            <h2>Exercice 13 : Moyenne, Max, Min (tableau)</h2>
            <button onclick="window.location.href='Exercice13.php'">Voir l'exercice</button>
        </div>

        <!-- Exercice 14 -->
        <div class="exercise-box">
            <h2>Exercice 14 : Prix HT et TVA</h2>
            <button onclick="window.location.href='Exercice14.php'">Voir l'exercice</button>
        </div>

        <!-- Exercice 15 -->
        <div class="exercise-box">
            <h2>Exercice 15 : Formulaire immobilier</h2>
            <button onclick="window.location.href='Exercice15.php'">Voir l'exercice</button>
        </div>

        <!-- Exercice 16 -->
        <div class="exercise-box">
            <h2>Exercice 16 : Majuscule à la première lettre</h2>
            <button onclick="window.location.href='Exercice16.php'">Voir l'exercice</button>
        </div>

        <!-- Exercice 17 -->
        <div class="exercise-box">
            <h2>Exercice 17 : Sinus d’un angle</h2>
            <button onclick="window.location.href='Exercice17.php'">Voir l'exercice</button>
        </div>

    </div>

    <a href="index.php" class="back-link">Retour à la liste des exercices</a>
</body>

</html>