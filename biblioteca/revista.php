<?php 
include_once ('material.php');
class Revista extends Material{
     private $tema; 
     private $fechaPublicacion;
     private $LugarPublicacion;
     private $numeroEdicion;
        
function __construct($tipoMaterial,$codigo,$autor,$titulo,$año,$status,$tema,$fechaPublicacion,$LugarPublicacion,$numeroEdicion){
    parent::__construct($tipoMaterial,$codigo,$autor,$titulo,$año,$status);
    $this->tema=$tema;
    $this->fechaPublicacion=$fechaPublicacion;
    $this->lugarPublicacion=$LugarPublicacion;
    $this->numeroEdicion=$numeroEdicion;
}
    function setTema($tema){
        $this->tema=$tema;
    }
    function setFechaPublicacion($fechaPublicacion){
        $this->fechaPublicacion=$fechaPublicacion;
    }
    function setLugarPublicacion($LugarPublicacion){
        $this->lugarPublicacion=$LugarPublicacion;
    }
    function setNumeroEdicion($numeroEdicion){
        $this->numeroEdicion=$numeroEdicion;
    }
    function getTema(){
        return $this->tema;
    }
    function getFechaPublicacion(){
        return $this->fechaPublicacion;
    }
    function getLugarPublicacion(){
        return $this->lugarPublicacion;
    }
    function getNumeroEdicion(){
        return $this->numeroEdicion;
    }
}
$ob=new Revista('papel estucado','0028-0836','cristian perez','nature',2000,'Buen estado','Cientifico','03-09-2021','EEUU','19');
echo $ob->datos().'<br>';
echo '<b>'.'Tema: '.'</b>'.$ob->getTema().'<br>';
echo '<b>'.'Fecha de publicación: '.'</b>'.$ob->getFechaPublicacion().'<br>';  
echo '<b>'.'Lugar de publicacion: '.'</b>'.$ob->getLugarPublicacion().'<br>';
echo '<b>'.'Numero de edición: '.'</b>'.$ob->getNumeroEdicion().'<br>';
?>