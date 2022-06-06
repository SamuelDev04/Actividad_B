<?php
    class Aprendiz{
        private $codigo;
        private $nombre;
        private $fechaNacimiento;
        private $sexo;
        private $ciudad;

        /*Getter*/
        public function getCodigo()
        {
            return $this -> codigo;
        }
        public function getNombre()
        {
            return $this -> nombre;
        }
        public function getFechaNa()
        {
            return $this -> fechaNacimiento;
        }
        public function getSexo()
        {
            return $this -> sexo;
        }
        public function getCiudad()
        {
            return $this -> ciudad;
        }

        /*Setter*/
        public function setCodigo($codigo)
        {
            $this -> codigo = $codigo;
        }
        public function setNombre($nombre)
        {
            $this -> nombre = $nombre;
        }
        public function setFechaNa($fechaNacimiento)
        {
            $this -> fechaNacimiento = $fechaNacimiento;
        }
        public function setSexo($sexo)
        {
            $this -> sexo = $sexo;
        }
        public function setCiudad($ciudad)
        {
            $this -> ciudad = $ciudad;
        }

    }

?>