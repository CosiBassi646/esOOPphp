<?php
    class Veicolo{
        protected $marca;
        protected $anno;

        function __construct($marca, $anno){ //costruttore
            $this->marca = $nome;
            $this->anno = $anno;
          }

          //get
          function get_marca(){
            return $this->marca;
          }

          function get_anno(){
            return $this->anno;
          }

          //set
          function set_marca($marca){
            $this->marca = $marca;
          }

          function set_anno($anno){
            $this->anno = $anno;
          }

          function stmpaInfo(){
             echo " MARCA: " . $this->get_marca();
             echo " ANNO: " . $this->get_anno();
           }
    }
?>