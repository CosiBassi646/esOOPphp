<?php
    class Alunno{
        protected $nome;
        protected $cognome;
        protected $eta;

        function __construct($nome, $cognome, $eta){ //costruttore
            $this->nome = $nome;
            $this->cognome = $cognome;
            $this->eta = $eta;
          }

          //get
          function get_nome(){
            return $this->nome;
          }

          function get_cognome(){
            return $this->cognome;
          }

          function get_eta(){
            return $this->eta;
          }  

          //set
          function set_nome($nome){
            $this->nome = $nome;
          }

          function set_cognome($cognome){
            $this->cognome = $cognome;
          }

          function set_eta($eta){
            $this->eta = $eta;
          }

          //funzione per stampare gli attributi
          function stampaValori($a){
            echo " NOME: " . $a->get_nome();
            echo " COGNOME: " . $a->get_cognome();
            echo " ANNI: " . $a->get_eta() . "<BR><br>";
          }
    }
?>