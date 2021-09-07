<?php 
include_once ('material.php');
class Libro extends Material{
    
     private $editorial; 
     private $numeroPaginas;
     private $numeroCapitulos;
        
function __construct($tipoMaterial,$codigo,$autor,$titulo,$año,$status,$editorial,$numeroPaginas,$numeroCapitulos){
    parent::__construct($tipoMaterial,$codigo,$autor,$titulo,$año,$status);
    $this->editorial=$editorial;
    $this->numeroPaginas=$numeroPaginas;
    $this->numeroCapitulos=$numeroCapitulos;
}
    function setEditorial($editorial){        
        $this->editorial=$editorial;
    }
    function setnumeroPaginas($numeroPaginas){
        $this->numeroPaginas=$numeroPaginas;
    }
    function setnumeroCapitulos($numeroCapitulos){
        $this->numeroCapitulos=$numeroCapitulos;
    }
    function getEditorial(){
        return $this->editorial;
    }
    function getnumeroPaginas(){
        return $this->numeroPaginas;
    }
    function getnumeroCapitulos(){
        return $this->numeroCapitulos;
    }

    function getAutor(){
        return $this->autor;
    }
}
$ob2=new Libro('papel','Cod. 606094',' J. K. Rowling','HARRY POTTER Y LA ORDEN DEL FÉNIX',1865,'Buen estado',' salamandra','928','25');
echo '<br>';
echo '<br>';
echo $ob2->datos().'<br>';
echo '<b>'.'EDITORIAL:'.'</b>'.$ob2->getEditorial().'<br>';
echo '<b>'.'NUMERO DE PAGINAS:'.'</b>'.$ob2->getnumeroPaginas().'<br>';   
echo '<b>'.'NUMERO DE CAPITULOS:'.'</b>'.$ob2->getnumeroCapitulos().'<br>';
?>
