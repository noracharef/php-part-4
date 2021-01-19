<!DOCTYPE html> 

<html lang="fr" dir="ltr">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="HTML"> 
        <title>Exerice php partie 4 exercice 4</title>
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
    <h2>Exercice 4<h2>
    <p>Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :<br>
    Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième<br>
    Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième<br>
    Les deux nombres sont identiques si les deux nombres sont égaux
    </p>

<?php
  
function numbers( $a, $b) {
    if ($a < $b) {
        return "Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième";
    }
    if ($a > $b) {
        return "Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième";
    }
    else "Les deux nombres sont identiques si les deux nombres sont égaux"; }


echo numbers (13, 47);
?>

</body>
</html>