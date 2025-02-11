<?php
require "./veicolo.php";
    class Automobile extends Veicolo {
        protected $modello;

        function __construct($marca, $anno, $modello){ //costruttore
            parent::__construct($marca, $anno);
            $this->modello = $modello;
        }

        //get
        function get_modello(){
            return $this->modello;
        }

        //set
        function set_modello($modello){
            $this->modello = $modello;
        }

        function stampaVal(){
            parent::stmpaInfo(); // Chiama il metodo info della classe Veicolo
            echo " MODELLO: " . $this->get_modello() . "<br>";
        }
    }
?>
