<?php
    header("Content-Type: application/json");
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
        
        //for($i=0;$i<sizeof($elencoAlunni);$i++){
       //     $elencoAlunni[$i]->stampaValori($elencoAlunni[$i]);
      //  }
        echo json_encode($elencoAlunni);
    ?>
   