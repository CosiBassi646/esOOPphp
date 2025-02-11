<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>esercizio 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Veicoli memorizzati:</h1>
    <?php
        require "./automobile.php";
        $a1 = new Automobile('bmw', 2022, "M2");
        $a1->set_marca('bmw');
        $a1->set_anno(2022);
        $a1->set_modello("M2"); 

        $a2 = new Automobile('bmw', 2022, "z4");
        $a2->set_marca('bmw');
        $a2->set_anno(2022);
        $a2->set_modello("z4"); 

        $a1->stampaVal();
        $a2->stampaVal();
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>