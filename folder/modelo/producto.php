<?php
class Producto{
private $idProducto;
private $nombre;
private $descripcion;
private $precio;

function __construct($idProducto,$nombre,$descripcion,$precio){
    $this->idProducto=$idProducto;
    $this->nombre=$nombre;
    $this->descripcion=$descripcion;
    $this->precio=$precio;
}

function getIdProducto() {
    return $this->idProducto;
}

function setIdProducto($idProducto) {
    $this->idProducto = $idProducto;
}

function getNombre() {
    return $this->nombre;
}

function setNombre($nombre) {
    $this->nombre = $nombre;
}

function getDescripcion() {
    return $this->descripcion;
}

function setDescripcion($descripcion) {
    $this->descripcion = $descripcion;
}

function  getPrecio() {
    return $this->precio;
}

function  setPrecio($precio) {
    $this->precio = $precio;
}

}
