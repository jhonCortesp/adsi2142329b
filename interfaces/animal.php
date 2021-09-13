<?php
    class Animal{
        public $nombre;
        public $clase;

        function __construct($nombre,$clase){
            $this ->nombre=$nombre;
            $this ->clase=$clase;
        }
        public function setter($atributo,$valor){
            $this->$atributo=$valor;
        }
        public function getter($atributo){
            return $this->$atributo;
        }
    }
    interface locomocion{
          public function movimiento();
        public function emitirSonido($sonido);  
    }          
?>