<?php
    class MatriculaController{

        public function setInsertMatricula($fechaMatricula,$nombreCentro,$costo,$estado,$codigoPrograma,$codigoAprendiz){
            try {
                $objDtoMatricula = new Matricula();
                $objDtoMatricula -> setFechaMatricula($fechaMatricula);
                $objDtoMatricula -> setNombreCentro($nombreCentro);
                $objDtoMatricula -> setCosto($costo);
                $objDtoMatricula -> setEstado($estado);
                $objDtoMatricula -> setCodigoPrograma($codigoPrograma);
                $objDtoMatricula -> setCodigoAprendiz($codigoAprendiz);

                $objDaoMatricula = new MatriculaModel($objDtoMatricula);

                if ($objDaoMatricula -> mIdInsertMatricula()){
                    echo "<script>
                        Swal.fire({
                            icon: 'success',
                            title: 'La Matricula se ha guardado',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    </script>";
                }

            } catch (Exception $e) {
                echo "Error en el controlador de insercion" .$e -> getMessage();
            }
        }

        public function getSearchAllMatricula(){
            $respon = false;
            try {
                $objDtoMatricula = new Matricula();
                $objDaoMatricula = new MatriculaModel($objDtoMatricula);
                $respon = $objDaoMatricula -> mIdSearchAllMatricula() -> fetchAll(); //La funcion fetchAll es para convertir todos los datos en un arreglo asociativo

            } catch (PDOException $e) {
                echo "Error en la creacion del controlador para mostrar todas las Matriculas ". $e -> getMessage();
            }

            return $respon;
        }

        public function setUpdateMatricula($codigo,$nombre, $fechaNacimiento, $sexo, $ciudad){
            try {
                $objDtoMatricula = new Matricula();
                $objDtoMatricula -> setCodigo($codigo);
                $objDtoMatricula -> setNombre($nombre);
                $objDtoMatricula -> setFechaNa($fechaNacimiento);
                $objDtoMatricula -> setSexo($sexo);
                $objDtoMatricula -> setCiudad($ciudad);

                $objDaoMatricula = new MatriculaModel($objDtoMatricula);

                if ($objDaoMatricula -> mIdUpdateMatricula()) {
                    echo "
                        <script>
                        Swal.fire({
                            'Actualizado!',
                            'Los campos ingresados se han actualizado',
                            'success'
                        })
                        </script>
                    ";
                    include_once("view/module/Matricula.php");
                }

            } catch(PDOException $e) {
                echo "Error al modificar " .$e -> getMessage();
            }
        }
    }

?>