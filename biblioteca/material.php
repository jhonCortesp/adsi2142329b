<?php 
class Material{
protected $tipoMaterial='';
protected $codigo='';
protected $autor='';
protected $titulo='';
protected $año=0;
protected $status='';

function __construct($tipoMaterial,$codigo,$autor,$titulo,$año,$status){
$this->tipoMaterial=$tipoMaterial;
$this->codigo=$codigo;
$this->autor=$autor;
$this->titulo=$titulo;
$this->año=$año;
$this->status=$status;
}

 function datos(){
     return 'TIPO DE MATERIAL: '.$this->tipoMaterial.'<br>'. 'CODIGO: '.$this->codigo.'<br>'. 'AUTOR: '.$this->autor.'<br>'. 'TITULO: '.$this->titulo.'<br>'. 'AÑO: '.$this->año.'<br>'. 'STATUS: '.$this->status;
 }
}
?>