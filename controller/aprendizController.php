<?php
    class AprendController{

        public function setInsertAprendiz($nombre, $fechaNacimiento, $sexo, $ciudad){
            try {
                $objDtoAprendiz = new Aprendiz();
                $objDtoAprendiz -> setNombre($nombre);
                $objDtoAprendiz -> setFechaNa($fechaNacimiento);
                $objDtoAprendiz -> setSexo($sexo);
                $objDtoAprendiz -> setCiudad($ciudad);

                $objDaoAprendiz = new AprendizModel($objDtoAprendiz);

                if ($objDaoAprendiz -> mIdInsertAprendiz()){
                    echo "<script>
                        Swal.fire({
                            icon: 'success',
                            title: 'El aprendiz se ha guardado',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    </script>";
                }

            } catch (Exception $e) {
                echo "Error en el controlador de insercion" .$e -> getMessage();
            }
        }

        public function getSearchAllAprendiz(){
            $respon = false;
            try {
                $objDtoAprendiz = new Aprendiz();
                $objDaoAprendiz = new AprendizModel($objDtoAprendiz);
                $respon = $objDaoAprendiz -> mIdSearchAllAprendiz() -> fetchAll(); //La funcion fetchAll es para convertir todos los datos en un arreglo asociativo

            } catch (PDOException $e) {
                echo "Error en la creacion del controlador para mostrar todo ". $e -> getMessage();
            }

            return $respon;
        }

        public function setUpdateAprendiz($codigo,$nombre, $fechaNacimiento, $sexo, $ciudad)
        {
            try {
                $objDtoAprendiz = new Aprendiz();
                $objDtoAprendiz->setCodigo($codigo);
                $objDtoAprendiz->setNombre($nombre);
                $objDtoAprendiz->setFechaNa($fechaNacimiento);
                $objDtoAprendiz->setSexo($sexo);
                $objDtoAprendiz->setCiudad($ciudad);

                $objDaoAprendiz = new AprendizModel($objDtoAprendiz);

                if ($objDaoAprendiz->mIdUpdateAprendiz()) {
                    //include_once("view/module/aprendiz.php");
                    echo 
                        "<script>
                            location.replace('aprendiz');
                        </script>";
                }
            } catch (PDOException $e) {
                echo "Error al modificar la Aprendiz parcero" . $e->getMessage();
            }
        }
    }

?>