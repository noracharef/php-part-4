<!DOCTYPE html>

<html lang="fr" dir="ltr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="HTML">
    <title>Exerice php partie 4 exercice 7</title>
    <link rel="stylesheet" href="assets/css/style.css">


</head>

<body>
    <nav>
        <ul>
            <li><a href="exo1.php">Ex 1</a></li>
            <li><a href="exo2.php">Ex 2</a></li>
            <li><a href="exo3.php">Ex 3</a></li>
            <li><a href="exo4.php">Ex 4</a></li>
            <li><a href="exo5.php">Ex 5</a></li>
            <li><a href="exo6.php">Ex 6</a></li>
            <li><a href="exo7.php">Ex 7</a></li>
            <li><a href="exo8.php">Ex 8</a></li>
            <li><a href="exo9.php">Ex 9</a></li>
            <li><a href="exo8.php">Ex 10</a></li>
        </ul>

        <h1>PHP Partie 4 : Les fonctions</h1>
        <h2>Exercice 7<h2>
                <p>Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :<br>
                    Homme <br>
                    Femme <br>

                    La fonction doit renvoyer en fonction des paramètres :<br><br>

                    Vous êtes un homme et vous êtes majeur<br>
                    Vous êtes un homme et vous êtes mineur<br>
                    Vous êtes une femme et vous êtes majeure<br>
                    Vous êtes une femme et vous êtes mineure<br>

                </p>

                <?php

                function information($gender, $age)
                {

                    if ($gender == "homme" && $age >= 18) {
                        return 'Vous êtes un homme et vous êtes majeur';
                    }

                    if ($gender == "homme" && $age <= 18) {
                        return 'Vous êtes un homme et vous êtes mineur';
                    }
                    if ($gender == "femme" && $age >= 18) {
                        return 'Vous êtes une femme et vous êtes majeur';
                    }

                    if ($gender == "femme" && $age <= 18) {
                        return 'Vous êtes une femme et vous êtes mineur';
                    }
                }


                echo information("homme", 15);

                ?>

</body>

</html>