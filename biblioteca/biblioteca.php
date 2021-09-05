<?php
include 'material.php';
class biblioteca extends material{
    private $materiales;
    private $personas;

    function __construct($materiales,$personas,$tipoMaterial,$codigo,$autor,$titulo,$anio,$status,$editoria,$LibroAltaMaterial,$LibroBajaMaterial,$LibroCambioMaterial,$RevistaAltaMaterial){
        parent::__construct($tipoMaterial,$codigo,$autor,$titulo,$anio,$status,$editoria,$LibroAltaMaterial,$LibroBajaMaterial,$LibroCambioMaterial);
        $this->materiales=$materiales;
        $this->personas=$personas;
    }

    function setter($atributo, $valor){
        $this->$atributo=$valor;
    }
    function getter($atributo){
        return $this->$atributo;
    }
    
    function getmateriales(){
        return $this->materiales;
    }
    function getpersonas(){
        return $this->personas;
    }
    }
    $ob=new biblioteca("libro","aprendiz","libro",5,"jhon","cronicas de una muerte anunciada","positivo",5,"red","1","2",3,3,4);
    echo $ob->getter("materiales");
    echo '<br>';
    echo $ob->getter("personas");
    echo '<br>';
    echo $ob->dato();
    echo $ob->dato1();

class biblioteca1 extends material1{
        private $materiales;
        private $personas;
    
        function __construct($materiales,$personas,$tipoMaterial,$codigo,$autor,$titulo,$anio,$status,$RevistaAltaMaterial,$RevistaBajaMaterial,$RevistaCambioMaterial){
            parent::__construct($tipoMaterial,$codigo,$autor,$titulo,$anio,$status,$RevistaAltaMaterial,$RevistaBajaMaterial,$RevistaCambioMaterial);
            $this->materiales=$materiales;
            $this->personas=$personas;
        }
    
        function setter($atributo, $valor){
            $this->$atributo=$valor;
        }
        function getter($atributo){
            return $this->$atributo;
        }
        
        function getmateriales(){
            return $this->materiales;
        }
        function getpersonas(){
            return $this->personas;
        }
        }
        $ob=new biblioteca1("revista","maestro","revista",5,"alexander","J BIOL CHEM ISSN","positivo",5,1,2,3);
        echo $ob->getter("materiales");
        echo '<br>';
        echo $ob->getter("personas");
        echo '<br>';
        echo $ob->dato();
        echo $ob->dato2();

?>