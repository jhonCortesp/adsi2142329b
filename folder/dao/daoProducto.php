<?php 
interface DaoProducto{
    public function registrar(Producto $a);
    public function modificar(Producto $a);
    public function eliminar(Producto $a);
    //public function buscar($campo,$dato);
    public function listar();
}
?>