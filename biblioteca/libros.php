<?php
    class libro{
        private $editoria='';
        private $LibroAltaMaterial=0;
        private $LibroBajaMaterial=0;
        private $LibroCambioMaterial=0;

        function __construct($editoria,$LibroAltaMaterial,$LibroBajaMaterial,$LibroCambioMaterial){
            $this->editoria=$editoria;
            $this->LibroAltaMaterial=$LibroAltaMaterial; 
            $this->LibroBajaMaterial=$LibroBajaMaterial; 
            $this->LibroCambioMaterial=$LibroCambioMaterial;     
        }
        function dato1(){
            return '<br>'.'su editoria es:'.$this->editoria.'<br>'.'la alta material de su libro:'.$this->LibroAltaMaterial.'<br>'.'la baja material de su libro:'.$this->LibroBajaMaterial.'<br>'.'el cambio material de su libro:'.$this->LibroCambioMaterial.'<br>'.'<br>'.'<br>';
        }
    }
    class revista{
        private $RevistaAltaMaterial=0;
        private $RevistaBajaMaterial=0;
        private $RevistaCambioMaterial=0;

        function __construct($RevistaAltaMaterial,$RevistaBajaMaterial,$RevistaCambioMaterial){
            $this->RevistaAltaMaterial=$RevistaAltaMaterial; 
            $this->RevistaBajaMaterial=$RevistaBajaMaterial; 
            $this->RevistaCambioMaterial=$RevistaCambioMaterial;     
        }
        function dato2(){
            return '<br>'.'la alta material de su revista:'.$this->RevistaAltaMaterial.'<br>'.'la baja material de su revista:'.$this->RevistaBajaMaterial.'<br>'.'el cambio material de su revista:'.$this->RevistaCambioMaterial.'<br>';
        }
    }
?>