<?php 
$consulta= consultarProducto($_GET['idProducto']);

function consultarProducto($id){
    include '../conexion/conexion2.php';
    $sentencia="SELECT * FROM productos WHERE IdProductos='".$id."'";
    $resultado=$conexion->query($sentencia) or die ("Error de conexion".mysqli_error($conexion));
    $lis=$resultado->fetch_assoc();
return[
    $lis['IdProductos'],
    $lis['NombreProductos'],
    $lis['DescripcionProductos'],
    $lis['PrecioProductos'],

];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../estilos/estilo3.css">
</head>
<ul>
		<li><a href="../vista/indexlistar.php">MOSTRAR PRODUCTOS</a></li>

</ul>
</head>
<body>

        
    <form action="../controlador/controladoractuali.php", method="GET">
     <div class="form">
        <h1>FORMULARIO <br> DE PRODUCTOS</h1>
            <div class="grupo">    
                <input type="text" name="idProducto" id="idProducto" value="<?php echo $consulta[0]?>" required><span class="barra"></span>
                <label for="">Id Producto</label>
            </div>
            <div class="grupo"> 
                <input type="text" name="nombre" id="nombre" value="<?php echo $consulta[1]?>" required><span class="barra"></span>
                <label for="">Nombre</label>    
            </div>
            <div class="grupo"> 
                <input type="text" name="descripcion" id="descripcion"  value="<?php echo $consulta[2]?>" required><span class="barra"></span>
                <label for="">Descripcion</label>    
            </div>      
            <div class="grupo"> 
                <input type="text" name="precio" id="precio" value="<?php echo $consulta[3]?>" required><span class="barra"></span>
                <label for="">Precio</label> 
            </div>  
                <button id="but"><input id="inpu" type="submit" name="update" value="Actualizar" ></button>

    </div>  
    <button id="but"><a id="b" href="../vista/indexlistar.php">REGRESAR</a></button>
    </form>  
</body>
</html>
