<?php
    function sumaDivisores($num){
        if ($i=0; $i <=$num ; $i++) {
            if ($num%$i=0) {
                $num+=$i;
            }
        }
        return $num;
    }else{
        throw new Exception("el dato ingresado debe ser un numero");
        //return 0;        
    }

    try {
    echo sumaDivisores(10);
    } catch (exception $e) {
        echo $e-> getMessage();
    }
    catch(DivisionByZeroError $ob){
        echo $ob-> getMessage().'revise la division desde 1';
    }
    echo 'ultima linea del codigo';
?>