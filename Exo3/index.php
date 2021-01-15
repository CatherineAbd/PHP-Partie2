<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP2 exo3</title>
  </head>
  <body>
      <p>
      <?php
        $age = 18;
        $gender = "homme";
        if ($age < 18){
          if ($gender == "homme") {
            echo("Vous êtes un homme et vous êtes mineur");
          } else{
            echo("Vous êtes une femme et vous êtes mineure");
          }
        } else {
          if ($gender == "homme") {
            echo("Vous êtes un homme et vous êtes majeur");
          } else{
            echo("Vous êtes une femme et vous êtes majeure");
          }
        }

        // 2ème méthode
        echo("<br><br> Deuxième méthode<br>");
        if ($age < 18 AND $gender == "homme"){
            echo("Vous êtes un homme et vous êtes mineur");
        } elseif ($age < 18 AND $gender =="femme"){
            echo("Vous êtes une femme et vous êtes mineure");
        } elseif ($age >= 18 AND $gender == "homme"){
            echo("Vous êtes un homme et vous êtes majeur");
        } else{
          echo("Vous êtes une femme et vous êtes majeure");
        }
      ?>
      </p>
    
  </body>
</html>


<!-- Exercice 3
Créer deux variables age et gender. La variable gender peut prendre comme valeur :
Homme
Femme

En fonction de l'âge et du genre afficher la phrase correspondante :
Vous êtes un homme et vous êtes majeur
Vous êtes un homme et vous êtes mineur
Vous êtes une femme et vous êtes majeure
Vous êtes une femme et vous êtes mineur 

Gérer tous les cas.  -->