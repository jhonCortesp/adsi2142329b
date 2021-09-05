<?php
class persona{
    private $ciudad='';
    private $telefono=0;

    function __construct($ciudad,$telefono){
        $this->ciudad=$ciudad;
        $this->telefono=$telefono;
    }

    function datos(){
        return 'vive en:'.$this->$ciudad.'y su numero es: '.$this->$telefono;
    }
}
?>