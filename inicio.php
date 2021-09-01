<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>numeros</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <form action="#" method="POST">
    <label id="n" for="numero">cuantos numeros desea generar</label><br>
    <input type="number" name="num" placeholder="numero" required><br><br>
    <input type="submit" id="m" name="enviar" value="generar">
    


    <h1>RESULTADO</h1>
    <?php 
    $num=$_POST['num'];

    $nums1=array();
    for ($i=0; $i<$num ; $i++) { 
        $nums1[$i]=rand(0,100);
    }
    for ($i=0; $i <$num ; $i++) { 
        echo $nums1[$i].',';
    }


function NumeroMayor($nums1){
    $mayor=0;
  foreach ($nums1 as $valor) {
    if ($valor>$mayor)
     $mayor = $valor;
  }
  return $mayor;
}
echo "<br>"."El numero mayor es".NumeroMayor($nums1)."<br>";
function NumeroMenor($nums1){
    $menor=min($nums1);
  return $menor;
}
echo "El numero menor es".NumeroMenor($nums1).'<br>';

    function prom($numeros){
        $sum=0;
        for ($i=0; $i <count($numeros) ; $i++) { 
            $sum+=$numeros[$i];
        }
        return $sum;
    }
    echo "el promedio es ".prom($nums1)/$num."<br>";
    ?>
</form>
</body>
</html>