<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vista/estilos.css">
    <title>Document</title>
</head>
<body>
<?php 
require('../vista/indexactuali.php');
require('../dao/DaoProductoImpl.php');
$dao=new DaoProductoImpl();
if (isset($_GET['update'])) {
    $idProducto=$_GET['idProducto'];
    $nombre=$_GET['nombre'];
    $descripcion=$_GET['descripcion'];
    $precio=$_GET['precio']; 
    $a=new Producto($idProducto,$nombre,$descripcion,$precio);
    $dao->modificar($a);
    echo "Se actualizo correctamente...";
}
           
?> 
</body>
</html>
</html>