<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP2 exo8</title>
  </head>
  <body>
      <p>
      <?php
          $number = 7;
          echo ($number % 5 == 0 && $number % 3 == 0)
          ? 'FizzBuzz'
          : ( $number % 3 == 0
            ? 'Fizz'
            : ($number % 5 == 0 ? 'Buzz' : $number)
            );
          
          echo("<br>"); 
          if ($number % 5 == 0 && $number % 3 == 0){
            echo("FizzBuzz");
          }elseif ($number % 3 == 0) {
            echo("Fizz");
          }elseif ($number % 5 == 0) {
            echo("Buzz");
          } else{
            echo ($number);
          }
  ?>
      </p>
    
  </body>
</html>

<!-- Traduire ce code avec des if et des else :

  <?php
  // $number = 11;
  // echo ($number % 5 == 0 && $number % 3 == 0)
  // ? 'FizzBuzz'
  // : ( $number % 3 == 0
  //   ? 'Fizz'
  //   : ($number % 5 == 0 ? 'Buzz' : $number)
  //   );
?> -->