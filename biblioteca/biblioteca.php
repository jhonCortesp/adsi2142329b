<?php
include ('revista.php');
class Biblioteca{
    private $coleccion;    

    function __construct(){
        $this->coleccion=array();
    }
    
    function adicionar($material){
        array_push($this->coleccion,$material);
    }

    function verMateriales(){
        for ($i=0; $i <count($this->coleccion) ; $i++) { 
            echo $this->coleccion[$i]->gettema();
        }
    }
    
}

$biblio=new Biblioteca();
$ob1=new Revista('papel estucado','ISSN 0028-0836','Pepe Perez','nature',2020,'Buen estado','Cientifico','03-09-2021','EEUU','19');

$biblio->adicionar($ob);
$biblio->adicionar($ob1);

$biblio->verMateriales();

include ('libros.php');
class Biblioteca1{
    private $coleccion;    

    function __construct(){
        $this->coleccion=array();
    }
    
    function adicionar($material){
        array_push($this->coleccion,$material);
    }

    function verMateriales(){
        for ($i=0; $i <count($this->coleccion) ; $i++) { 
            echo $this->coleccion[$i]->getAutor();
        }
    }
    
}

$biblio=new Biblioteca1();
$ob2=new Libro('virtual','ISBN 856-96700-0-9','Gabo','100 años de soledad',1978,'Buen estado','EDITORIAL Planeta','200','20');

$biblio->adicionar($ob);
$biblio->adicionar($ob2);

$biblio->verMateriales();

?>