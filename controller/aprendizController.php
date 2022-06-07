<?php
    class AprendController{

        public function setInsertUser($nombre, $fechaNacimiento, $sexo, $ciudad){
            try {
                $objDtoAprendiz = new User();
                $objDtoAprendiz -> setName($nombre);
                $objDtoAprendiz -> setLastName($fechaNacimiento);
                $objDtoAprendiz -> setUserP($sexo);
                $objDtoAprendiz -> setPassword($ciudad);

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
    }

?>