<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP2 exo6</title>
  </head>
  <body>
      <p>
      <?php
        $var_a =  null;

        if ($var_a == null){
          echo $var_a;
        } else {
          echo("Je suis une variable sans valeur");
        }
        // echo $var_a ?: 'Je suis une variable sans valeur';
      ?>
      </p>
    
  </body>
</html>

<!-- Traduire ce code avec des if et des else : -->

<!-- <?php
  // $var_a = null;
  // echo $var_a ?: 'Je suis une variable sans valeur';
?> -->