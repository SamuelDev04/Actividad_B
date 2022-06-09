<?php
    eraseMatricula();

    function eraseMatricula(){
        try {
            $objDtoMatricula = new Matricula();
            $objDtoMatricula -> setCodigoMatricula($_GET['codigo']);
            $objDaoMatricula = new MatriculaModel($objDtoMatricula);
            if ($objDaoMatricula -> mIdEraseMatricula() == true) {
                echo "
                    <script>
                        Swal.fire(
                            'Borrado!',
                            'El registro ha sido borrado',
                            'success'
                        )
                    </script>
                ";
                include_once("view/module/matricula.php");
            }
        } catch (PDOException $e) {
            echo "Error en el borrado del registro " . $e -> getMessage();
        }
    }
?>