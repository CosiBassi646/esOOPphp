<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>esercizio 1 oop php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>ELENCO DEGLI ALUNNI:</h1>
    <?php
    require_once "./alunno.php";
        $a1 = new Alunno('omer', 'toso', 18);
        $a1->set_nome('omer');
        $a1->set_cognome('toso');
        $a1->set_eta(18);    
        
        $a2 = new Alunno('guido', 'lauto', 14);
        $a2->set_nome('guido');
        $a2->set_cognome('lauto');
        $a2->set_eta(14);    
        
        $a3 = new Alunno('sara', 'cinesca', 19);
        $a3->set_nome('sara');
        $a3->set_cognome('cinesca');
        $a3->set_eta(19);   
        
        $elencoAlunni = array($a1, $a2, $a3);//array di alunni
        
        for($i=0;$i<sizeof($elencoAlunni);$i++){
            $elencoAlunni[$i]->stampaValori($elencoAlunni[$i]);
        }


    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>