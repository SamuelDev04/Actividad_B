<?php
    class Matricula{
        private $codigoMatricula;
        private $fechaMatricula;
        private $nombreCentro;
        private $costo;
        private $estado;
        private $codigoPrograma;
        private $codigoAprendiz;

        /*Getter*/
        public function getCodigoMatricula()
        {
            return $this -> codigoMatricula;
        }
        public function getFechaMatricula()
        {
            return $this -> fechaMatricula;
        }
        public function getNombreCentro()
        {
            return $this -> nombreCentro;
        }
        public function getCosto()
        {
            return $this -> costo;
        }
        public function getEstado()
        {
            return $this -> estado;
        }
        public function getCodigoPrograma()
        {
            return $this -> codigoPrograma;
        }
        public function getCodigoAprendiz()
        {
            return $this -> codigoAprendiz;
        }

        /*Setter*/
        public function setCodigoMatricula($codigoMatricula)
        {
            $this -> codigoMatricula = $codigoMatricula;
        }
        public function setFechaMatricula($fechaMatricula)
        {
            $this -> fechaMatricula = $fechaMatricula;
        }
        public function setNombreCentro($nombreCentro)
        {
            $this -> nombreCentro = $nombreCentro;
        }
        public function setCosto($costo)
        {
            $this -> costo = $costo;
        }
        public function setEstado($estado)
        {
            $this -> estado = $estado;
        }
        public function setCodigoPrograma($codigoPrograma)
        {
            $this -> codigoPrograma = $codigoPrograma;
        }
        public function setCodigoAprendiz($codigoAprendiz)
        {
            $this -> codigoAprendiz = $codigoAprendiz;
        }

    }

?>