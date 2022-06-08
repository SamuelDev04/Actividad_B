<?php
    class MatriculaModel{
        private $codigoMatricula;
        private $fechaMatricula;
        private $nombreCentro;
        private $costo;
        private $estado;
        private $codigoPrograma;
        private $codigoAprendiz;

        public function __construct($objDtoMatricula)
        {
            $this -> codigoMatricula = $objDtoMatricula -> getCodigoMatricula();
            $this -> fechaMatricula = $objDtoMatricula -> getFechaMatricula();
            $this -> nombreCentro = $objDtoMatricula -> getNombreCentro();
            $this -> costo = $objDtoMatricula -> getCosto();
            $this -> estado = $objDtoMatricula -> getEstado();
            $this -> codigoPrograma = $objDtoMatricula -> getCodigoPrograma();
            $this -> codigoAprendiz = $objDtoMatricula -> getCodigoAprendiz();
        }

        public function mIdInsertMatricula()
        {
            $sql = "CALL spInsertMatricula(?, ?, ?, ?, ?, ?);";
            $estado = false;
            try {
                $objCon = new Conexion();
                $stmt = $objCon -> getConec() -> prepare($sql);
                $stmt -> bindParam(1, $this -> fechaMatricula,          PDO::PARAM_STR);
                $stmt -> bindParam(2, $this -> nombreCentro,            PDO::PARAM_STR);
                $stmt -> bindParam(3, $this -> costo,                   PDO::PARAM_STR);
                $stmt -> bindParam(4, $this -> estado,                  PDO::PARAM_STR);
                $stmt -> bindParam(5, $this -> codigoPrograma,          PDO::PARAM_INT);
                $stmt -> bindParam(6, $this -> codigoAprendiz,          PDO::PARAM_INT);
                $estado = $stmt -> execute();
            } catch (PDOexception $e) {
                echo "Error al insertar Matricula " . $e -> getMessage();
            }
            return $estado;
        }

        public function mIdSearchAllMatricula()
        {
            $sql = "call spSearchAllMatricula()";

            try {
                $objCon = new Conexion;
                $stmt = $objCon -> getConec() -> prepare($sql);
                $stmt -> execute();
                $respon = $stmt;
            } catch (PDOException $e) {
                echo "Ha ocurrido un error al mostrar los datos en el dao " .$e -> getMessage();
            }

            return $respon;
        }

        public function mIdEraseMatricula()
        {
            $respon = false;
            $sql = "call spDeleteMatricula(?)";

            try {
                $objCon = new Conexion;
                $stmt = $objCon -> getConec() -> prepare($sql);
                $stmt -> bindParam(1, $this-> codigoMatricula, PDO::PARAM_INT);
                $stmt -> execute();
                $respon = true;
            } catch (PDOException $e) {
                echo "Ha ocurrido un error al eliminar los registros en el dao de Matricula " .$e -> getMessage();
            }
            return $respon;
        }

        public function mIdUpdateMatricula()
        {
            $sql = "CALL spUpdateMatricula(?, ?, ?, ?, ?);";
            $estado = false;

            try {
                $objCon = new Conexion();
                $stmt = $objCon -> getConec() -> prepare($sql);
                $stmt -> bindParam(1, $this -> codigo,     PDO::PARAM_INT);
                $stmt -> bindParam(2, $this -> nombre,     PDO::PARAM_STR);
                $stmt -> bindParam(3, $this -> fechaNacimiento, PDO::PARAM_STR);
                $stmt -> bindParam(4, $this -> sexo,    PDO::PARAM_STR);
                $stmt -> bindParam(5, $this -> ciudad, 
                PDO::PARAM_STR);
                $estado = $stmt -> execute();
            } catch (PDOexception $e) {
                echo "Error al modificar matricula " . $e -> getMessage();
            }
            return $estado;
        }
    }

?>