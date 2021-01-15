<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP2 exo5</title>
  </head>
  <body>
      <p>
      <?php
        $gender="Homme";
        if ($gender!="Homme"){
          echo ("C'est une développeuse !!!");
        } else{
          echo ("C'est un développeur !!!");
        }
      ?>
      </p>
    
  </body>
</html>

<!-- Traduire ce code avec des if et des else : 

<?php
  // echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
?> -->