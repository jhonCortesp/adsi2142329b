<?php
include('daoProducto.php');
include ('../conexion/conexion.php');
include ('../modelo/Producto.php');

class DaoProductoImpl extends Conexion implements daoProducto{
   
    
    public function registrar(Producto $a){ 
        try{
        if ($this->getCnx()!=null) {
        $idProducto=$a->getIdProducto();
        $nombre=$a->getNombre();
        $descripcion=$a->getDescripcion();
        $precio=$a->getPrecio();
        $sql="insert into productos values(?,?,?,?)";
        $stmt=$this->getCnx()->prepare($sql);
        $stmt->execute([$idProducto,$nombre,$descripcion,$precio]);        
        } else {
            echo $this->getCnx().' Es nulo <br>';
        }
    }catch(PDOException $p){
        echo $p->getMessage().'***********************';
    }
                       
    }    

public function modificar(Producto $a){  
    $idProducto=$a->getidProducto();      
    $nombre=$a->getnombre();
    $descripcion=$a->getdescripcion();
    $precio=$a->getprecio();
    $sql="UPDATE productos
    SET IdProductos ='$idProducto', NombreProductos ='$nombre', DescripcionProductos = '$descripcion', PrecioProductos = '$precio'
    WHERE IdProductos ='$idProducto'";
    $stmt=$this->getCnx()->prepare($sql);
    $stmt->execute();
}

    public function eliminar($a){        
        $id=$_GET['idProducto'];
        $stmt=$this->getCnx()->prepare("DELETE FROM productos where IdProductos=$id");
        $stmt->execute(); 

    }
    
    public function listar(){
    $lista = null;
    try{    
        $stmt = $this->getCnx()->prepare("select * from productos");
        $lista = array();
        $stmt->execute();
        foreach ($stmt as $key ) {           
            $a = new Producto(null,null,null,null);
            $a->setIdProducto($key['IdProductos']);
            $a->setNombre($key['NombreProductos']);
            $a->setDescripcion($key['DescripcionProductos']);
            $a->setPrecio($key['PrecioProductos']);           
            array_push($lista,$a);            
        }        
        //$this->getCnx()->close();
    }catch(PDOException $e){
        $e->getMessage().'error en listar de DaoAprendizImpl';
    } 
        return $lista;       
    }       
    //public function buscar($campo,$dato);
    
}
?>
