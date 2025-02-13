<?php
class Persona {

    protected $nome;
    protected $cognome;

    // Costruttore
    public function __construct($nome, $cognome) {
        $this->nome = $nome;
        $this->cognome = $cognome;
    }

    // get
    public function get_nome(){
        return $this->nome;
    }

    public function get_cognome(){
        return $this->cognome;
    }

    //set 
    public function set_nome($nome){
        $this->nome = $nome;
    }

    public function set_cognome($cognome){
        $this->cognome = $cognome;
    }

    // Metodo presentati
    public function presentati(){
        return "Ciao, sono " . $this->nome . " " . $this->cognome . ".";
    }
}