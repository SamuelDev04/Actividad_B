<?php
class MatriculaController
{

    public function setInsertMatricula($fechaMatricula, $nombreCentro, $costo, $estado, $codigoPrograma, $codigoAprendiz)
    {
        try {
            $objDtoMatricula = new Matricula();
            $objDtoMatricula->setFechaMatricula($fechaMatricula);
            $objDtoMatricula->setNombreCentro($nombreCentro);
            $objDtoMatricula->setCosto($costo);
            $objDtoMatricula->setEstado($estado);
            $objDtoMatricula->setCodigoPrograma($codigoPrograma);
            $objDtoMatricula->setCodigoAprendiz($codigoAprendiz);

            $objDaoMatricula = new MatriculaModel($objDtoMatricula);

            if ($objDaoMatricula->mIdInsertMatricula()) {
                echo "<script>
                        Swal.fire({
                            icon: 'success',
                            title: 'La Matricula se ha guardado',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    </script>";
<<<<<<< HEAD
=======
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

        public function setUpdateMatricula($codigoMatricula,$fechaMatricula,$nombreCentro,$costo,$estado,$codigoPrograma,$codigoAprendiz){
            try {
                $objDtoMatricula = new Matricula();
                $objDtoMatricula -> setCodigoMatricula($codigoMatricula);
                $objDtoMatricula -> setFechaMatricula($fechaMatricula);
                $objDtoMatricula -> setNombreCentro($nombreCentro);
                $objDtoMatricula -> setCosto($costo);
                $objDtoMatricula -> setEstado($estado);
                $objDtoMatricula -> setCodigoPrograma($codigoPrograma);
                $objDtoMatricula -> setCodigoAprendiz($codigoAprendiz);

                $objDaoMatricula = new MatriculaModel($objDtoMatricula);

                if ($objDaoMatricula -> mIdUpdateMatricula()) {
                    // include_once("view/module/matricula.php");
                    echo "
                        <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'La Matricula se ha actualizado',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        </script>
                    ";
                    if (true){
                        sleep(2);
                        echo 
                            "<script>
                                console.log('Entro');
                                location.replace('index.php?ruta=matricula');
                            </script>";
                    }
                }

            } catch(PDOException $e) {
                echo "Error al modificar la Matricula parcero" .$e -> getMessage();
>>>>>>> david2
            }
        } catch (Exception $e) {
            echo "Error en el controlador de insercion" . $e->getMessage();
        }
    }

    public function getSearchAllMatricula()
    {
        $respon = false;
        try {
            $objDtoMatricula = new Matricula();
            $objDaoMatricula = new MatriculaModel($objDtoMatricula);
            $respon = $objDaoMatricula->mIdSearchAllMatricula()->fetchAll(); //La funcion fetchAll es para convertir todos los datos en un arreglo asociativo

        } catch (PDOException $e) {
            echo "Error en la creacion del controlador para mostrar todas las Matriculas " . $e->getMessage();
        }

        return $respon;
    }

    public function setUpdateMatricula($codigoMatricula, $fechaMatricula, $nombreCentro, $costo, $estado, $codigoPrograma, $codigoAprendiz)
    {
        try {
            $objDtoMatricula = new Matricula();
            $objDtoMatricula->setCodigoMatricula($codigoMatricula);
            $objDtoMatricula->setFechaMatricula($fechaMatricula);
            $objDtoMatricula->setNombreCentro($nombreCentro);
            $objDtoMatricula->setCosto($costo);
            $objDtoMatricula->setEstado($estado);
            $objDtoMatricula->setCodigoPrograma($codigoPrograma);
            $objDtoMatricula->setCodigoAprendiz($codigoAprendiz);

            $objDaoMatricula = new MatriculaModel($objDtoMatricula);

            if ($objDaoMatricula->mIdUpdateMatricula()) {
                echo "<script>
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'La matricula ha sido actualizada',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    </script>";
                include_once("view/module/matricula.php");
            }
        } catch (PDOException $e) {
            echo "Error al modificar la Matricula parcero" . $e->getMessage();
        }
    }
}
