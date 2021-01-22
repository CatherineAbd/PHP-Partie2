<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP2 exo7</title>
  </head>
  <body>
      <p>
      <?php
        $var_b = 'Je suis une variable qui a une valeur';
        // $var_b = null;
        if (isset($var_b)){
          echo $var_b;
        }else {
          echo("Je suis une variable sans valeur <br>");
        }
      ?>
      </p>
    
  </body>
</html>

<!-- Traduire ce code avec des if et des else :

<?php
  // $var_b = 'Je suis une variable qui à une valeur';
  // echo $var_b ?? 'Je suis une variable sans valeur';
?> -->