<?php
    require "./Persona.php";
    class Studente extends Persona {
        protected $matricola;

        function set_matricola($matricola){
            $this->matricola = $matricola;
        }

        function get_matricola(){
            return $this->matricola;
        }
        
        public function __construct($nome, $cognome, $matricola) {
            parent::__construct($nome, $cognome);
            $this->matricola = $matricola;
        }

        function presentati(){
            return parent::presentati() . "<br>Matricola: " . $this->matricola;
        }
    }
?>