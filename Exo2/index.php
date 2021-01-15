<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP2 exo2</title>
  </head>
  <body>
      <p>
      <?php
        $isEasy = true;
        if ($isEasy==true){
          echo ("Trop facile !!!");
        } else {
          echo ("C'est difficile !!!");
        }
        echo("<br><br> Deuxième méthode");
        if ($isEasy) {
          echo ("Trop facile !!!");
        } else {
          echo ("C'est difficile !!!");
        }
      ?>
      </p>
    
  </body>
</html>

<!-- Créer une variable isEasy de type booléan et l'initialiser avec une valeur.  
Afficher C'est facile !! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!. 

Bonus : L'écrire de deux manières différentes. -->