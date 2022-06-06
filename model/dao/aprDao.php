<?php
    class AprendizModel{
        private $codigo;
        private $nombre;
        private $fechaNacimiento;
        private $sexo;
        private $ciudad;

        public function __construct($objDtoAprendiz)
        {
            $this -> codigo = $objDtoAprendiz -> getCodigo();
            $this -> nombre = $objDtoAprendiz -> getNombre();
            $this -> fechaNacimiento = $objDtoAprendiz -> getFechaNa();
            $this -> sexo = $objDtoAprendiz -> getSexo();
            $this -> ciudad = $objDtoAprendiz -> getCiudad();
        }
    }

?>