<?php
include 'libros.php';
    class material extends libro {
        private $tipoMaterial='';
        private $codigo=0;
        private $autor='';
        private $titulo='';
        private $anio='';
        private $status=0;

        function __construct($tipoMaterial,$codigo,$autor,$titulo,$anio,$status,$editoria,$LibroAltaMaterial,$LibroBajaMaterial,$LibroCambioMaterial){
            parent::__construct($editoria,$LibroAltaMaterial,$LibroBajaMaterial,$LibroCambioMaterial);
            $this->tipoMaterial=$tipoMaterial;
            $this->codigo=$codigo;
            $this->autor=$autor;
            $this->titulo= $titulo;
            $this->anio=$anio;
            $this->status=$status;   
        }

        function dato(){
            return 'su tipo de material es :'.$this->tipoMaterial.'<br>'.'codigo:'.$this->codigo.'<br>'.'autor:'.$this->autor.'<br>'.'titulo:'.$this->titulo.'<br>'.'anio:'.$this->anio.'<br>'.'status:'.$this->status;
        }
    }
    class material1 extends revista {
        private $tipoMaterial='';
        private $codigo=0;
        private $autor='';
        private $titulo='';
        private $anio='';
        private $status=0;

        function __construct($tipoMaterial,$codigo,$autor,$titulo,$anio,$status,$RevistaAltaMaterial,$RevistaBajaMaterial,$RevistaCambioMaterial){
            parent::__construct($RevistaAltaMaterial,$RevistaBajaMaterial,$RevistaCambioMaterial);
            $this->tipoMaterial=$tipoMaterial;
            $this->codigo=$codigo;
            $this->autor=$autor;
            $this->titulo= $titulo;
            $this->anio=$anio;
            $this->status=$status;   
        }

        function dato(){
            return 'su tipo de material es :'.$this->tipoMaterial.'<br>'.'codigo:'.$this->codigo.'<br>'.'autor:'.$this->autor.'<br>'.'titulo:'.$this->titulo.'<br>'.'anio:'.$this->anio.'<br>'.'status:'.$this->status;
        }
    }


?>