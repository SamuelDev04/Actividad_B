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

        public function mIdInsertAprendiz()
        {
            $sql = "CALL spInsertAprendiz(?, ?, ?, ?);";
            $estado = false;
            try {
                $objCon = new Conexion();
                $stmt = $objCon -> getConec() -> prepare($sql);
                $stmt -> bindParam(1, $this -> nombre,          PDO::PARAM_STR);
                $stmt -> bindParam(2, $this -> fechaNacimiento, PDO::PARAM_STR);
                $stmt -> bindParam(3, $this -> sexo,            PDO::PARAM_STR);
                $stmt -> bindParam(4, $this -> ciudad,          PDO::PARAM_STR);
                $estado = $stmt -> execute();
            } catch (PDOexception $e) {
                echo "Error al insertar aprendices " . $e -> getMessage();
            }
            return $estado;
        }

        public function mIdSearchAllAprendiz()
        {
            $sql = "call spSearchAllAprendiz()";

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

        public function mIdEraseAprendiz()
        {
            $respon = false;
            $sql = "call spDeleteAprendiz(?)";

            try {
                $objCon = new Conexion;
                $stmt = $objCon -> getConec() -> prepare($sql);
                $stmt -> bindParam(1, $this-> codigo, PDO::PARAM_INT);
                $stmt -> execute();
                $respon = true;
            } catch (PDOException $e) {
                echo "Ha ocurrido un error al eliminar los registros en el dao " .$e -> getMessage();
            }
            return $respon;
        }

        public function mIdUpdateAprendiz()
        {
            $sql = "CALL spUpdateAprendiz(?, ?, ?, ?, ?);";
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
                echo "Error al modificar aprendices " . $e -> getMessage();
            }
            return $estado;
        }
    }

?>