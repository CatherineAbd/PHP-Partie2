<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP2 exo1</title>
  </head>
  <body>
      <p>
      <?php
        $age = 20;
        if ($age>=18)
        {
          echo ("Vous avez $age, Vous êtes majeur (e)");
        }else{
          echo ("Vous avez $age, Vous êtes mineur (e)");
        }
      ?>
      </p>
    
  </body>
</html>

<!-- Créer une variable age et l'initialiser avec une valeur.  
Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur. -->