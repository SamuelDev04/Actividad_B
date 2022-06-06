<?php
    //include_once "../model/conexion.php";
    //include_once "../model/dto/userDto.php";

    class MatModel{
        private $codigoMatricula;
        private $fechaMatricula;
        private $nombreCentro;
        private $costo;
        private $estado;
        private $codigoPrograma;
        private $codigoAprendiz;

        public function __construct($objDtoUser)
        {
            $this -> code = $objDtoUser -> getCodigoMatricula();
            $this -> name = $objDtoUser -> getFechaMatricula();
            $this -> lastName = $objDtoUser -> getNombreCentro();
            $this -> userP = $objDtoUser -> getCosto();
            $this -> password = $objDtoUser -> getEstado();
            $this -> userP = $objDtoUser -> getCodigoPrograma();
            $this -> password = $objDtoUser -> getCodigoAprendiz();
        }
    }
?>