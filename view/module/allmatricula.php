<?php
    require_once("../../controller/matriculaController.php");
    require_once("../../model/dao/matDao.php");
    require_once("../../model/dto/matDto.php");
    require_once("../../model/conexion.php");

    class Reporte{
        private $pdf;

        public function __construct(){
            include 'vendor/fpdf.php';
            $this -> pdf = new FPDF();
            $this -> pdf->AddPage();
        }

        //Encabezado de la pagina
        public function headReport() {
            $this -> pdf->SetFont('Arial','B',16);

            // Logo
            $this -> pdf ->Image('../img/a.jpg',20,5,40);
            // Arial bold 15
            $this -> pdf ->SetFont('Arial','B',15);
            // Movernos a la derecha
            $this -> pdf ->Cell(80);
            // Título
            $this -> pdf ->Cell(30,10,'Reporte Matricula',0,0,'C');
            // Salto de línea
            $this -> pdf ->Ln(20);
        }

        //Info de la pagina
        public function viewAll(){
            $this -> pdf->SetFont('Arial','B',16);

            try {
                $objDtoMatricula = new Matricula();
                $objDaoMatricula = new MatriculaModel($objDtoMatricula);
                $respon = $objDaoMatricula -> mIdSearchAllMatricula() -> fetchAll(); //La funcion fetchAll es para convertir todos los datos en un arreglo asociativo

            } catch (PDOException $e) {
                echo "Error en la creacion del controlador para mostrar todas las matriculas pa ". $e -> getMessage();
            }

            foreach ($respon as $key => $value) {
                $this -> pdf->Cell(40,50, $value['codigoMatricula']);
                $this -> pdf->Cell(40,50, $value['fechaMatricula']);
                $this -> pdf->Cell(40,50, $value['nombreCentro']);
                $this -> pdf->Cell(40,50, $value['costo']);
                $this -> pdf->Cell(40,50, $value['estado']);
                $this -> pdf->Cell(40,50, $value['codigoPrograma']);
                $this -> pdf->Cell(40,50, $value['codigoAprendiz']);
                $this -> pdf -> Ln(10);
            }      

        } 

        // Pie de página
        function fooReport() {
            $this -> pdf -> AliasNbPages();

            // Posición: a 1,5 cm del final
            $this -> pdf ->SetY(265);
            // Arial italic 8
            $this -> pdf ->SetFont('Arial','I',8);
            // Número de página
            $this -> pdf ->Cell(0,10,'Page '.$this-> pdf -> PageNo().'/{nb}',0,0,'C');

            $this -> pdf->Output();
        }
    }

    $view = new Reporte();
    $view -> headReport();
    $view -> viewAll();
    $view -> fooReport();
?>