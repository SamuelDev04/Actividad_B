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
    }

?>