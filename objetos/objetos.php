<?php
    //notacion camell case
    include('persona.php');
    
    class aprendiz extends persona{
        private $nombre;
        private $documento;
        private $ficha;


        function __construct($nombre,$documento,$ficha,$ciudad,$telefono){
            parent::__construct($ciudad,$telefono);
            $this->nombre=$nombre;
            $this->documento=$documento;
            $this->ficha=$ficha;
           // echo 'soy el constructor'.'<br>';
        }
        function setter($atributo,$valor){
            $this->$atributo=$valor;

        }
        function getter($atributo){
            return $this->$atributo;
        }
        /*function setNombre($nombre){
            $this->nombre=$nombre;

        }
        function setDocumento($documento){
            $this->documento=$documento;

        }
        function setFicha($ficha){
            $this->ficha=$ficha;

        }*/
        function getDocumento(){
            return $this->documento;
        }
        function getNombre(){
            return $this->nombre;
        }
        function getFicha(){
            return $this->ficha;
        }
    }
    $ob=new aprendiz("jhon",1000125,2142329,'soacha',2563336665);
    

    $ob-> setter("nombre","jhon");
    $ob-> setter("documento",12358);
    $ob-> setter("ficha",52486);
    echo $ob-> datos();
    echo $ob->getter("nombre");
    echo $ob->getter("documento");
    echo $ob->getter("ficha");
    /*$ob->setDocumento(123456);
    $ob->setNombre("jhon");
    $ob->setFicha(123456);*/

    /*echo $ob->getDocumento();
    echo "<br>";
    echo $ob->getNombre();
    echo "<br>";
    echo $ob->getFicha();*/
    
    

    //var_dump($ob);
    //$num=10;
    //$real=1.5;

?>