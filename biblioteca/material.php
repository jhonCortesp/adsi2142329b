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
     return '<b>'.'TIPO DE MATERIAL: '.'</b>'.$this->tipoMaterial.'<br>'. '<b>'.'CODIGO: '.'</b>'.$this->codigo.'<br>'.'<b>'. 'AUTOR: '.'</b>'.$this->autor.'<br>'.'<b>'. 'TITULO: '.'</b>'.$this->titulo.'<br>'. '<b>'.'AÑO: '.'</b>'.$this->año.'<br>'. '<b>'.'STATUS: '.'</b>'.$this->status;
 }
}
?>