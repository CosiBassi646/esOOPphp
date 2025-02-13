<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>es 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Risultato</h1>
    <?php
      require "./Studente.php";
      $S1 = new Studente('guido', "lauto", 123);
      $S1->set_nome('guido');
      $S1->set_cognome('lauto');
      $S1->set_matricola(123); 
      echo $S1->presentati();
      echo "<br>";
      $S2 = new Studente('sara', "cinesca", 456);
      $S2->set_nome('sara');
      $S2->set_cognome('cinesca');
      $S2->set_matricola(456); 
      echo $S2->presentati();
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>