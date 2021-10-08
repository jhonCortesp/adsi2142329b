<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Document</title>
</head>
<body>
<?php 
require('../vista/indexlistar.php');
$dao=new DaoProductoImpl();
if (isset($_GET['idProducto'])) {
    $id=$_GET['idProducto'];
    $a=$id;
    $dao->eliminar($a);
    
}
?>   
</body>
</html>