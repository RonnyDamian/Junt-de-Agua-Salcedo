<?php
  require_once("../reportes/fpdf.php");

class PDF extends FPDF
{

// Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','B',8);
        // Número de página

        $this->Cell(0,10,utf8_decode(    'Páginas ').$this->PageNo().'/{nb}',0,0,'C');
    }
}

 /*Llamamos al archivo Conexión*/

 require_once("../config/Conexion.php");
    /*Iniciamos la sesion */
    session_start();

      $idCliente=$_SESSION['idCliente'];
      $numLote=$_SESSION['numLote'];
      $estadoActual=   $_SESSION['estadoActual'];
      $totalPago=$_SESSION['totalPago'];
      $valorPago=$_SESSION['valorPago'];
      $idCobro=$_SESSION['idCobro'];
      $total=$totalPago-$valorPago;



      $pdf=new PDF('P','mm',array(90,150));
      $pdf->AliasNbPages();
      $pdf->AddPage();
      $pdf->SetFont('Arial','B',16);
      $pdf->SetXY(5,3);
      $pdf->Cell(40,10,"-----------------------------------------");
      $pdf->SetXY(5,9);
      $pdf->Cell(40,10,"      Junta de Agua Pilalo ");
      $pdf->Ln();
      $pdf->SetXY(5,15);
      $pdf->Cell(40,10,"-----------------------------------------");
      $pdf->Ln();
     date_default_timezone_set('America/Guayaquil');
      $fecha =  date("d") . " del " . date("m") . " de " . date("Y");
      $hora= date('H').':'.date('i').':'.date('s');
     /*COnsulta tabla Lote*/

     $sql="SELECT  CONCAT(nombre,' ', apellido) AS Cliente
           FROM t_clientes WHERE idCliente=?";
                $sql=Conexion::conectar()->prepare($sql);
                $sql->bindValue(1,$idCliente,PDO::PARAM_STR);
                $sql->execute();
                $response=$sql->fetch();
                $pdf->SetFont('Arial','B',11);
                $pdf->Cell(8,10,"Fecha: ",0,0,'C',0);
                $pdf->SetFont('Arial','i',11);
                $pdf->Cell(35,10,$fecha,0,1,'C',0);
                $pdf->SetFont('Arial','B',11);
                $pdf->Cell(6,10,"Hora: ",0,0,'C',0);
                $pdf->SetFont('Arial','i',11);
                $pdf->Cell(20,10,$hora,0,1,'C',0);
                $pdf->SetFont('Arial','B',11);
                $pdf->Cell(10,10,"Cliente: ",0,0,'C',0);
                $pdf->SetFont('Arial','i',11);
                $pdf->Cell(30,10,$response['Cliente'],0,1,'C',0);
                $pdf->SetFont('Arial','b',11);
                $pdf->Cell(25,10,"Deuda Anterior: ",0,0,'C',0);
                $pdf->SetFont('Arial','i',11);
                $pdf->Cell(23,10,utf8_decode('  $'.$totalPago.' dólares'),0,1,'C',0);
                $pdf->SetFont('Arial','b',11);
                $pdf->Cell(51,10,utf8_decode("Clave de lote(s) cancelado(s): "),0,0,'C',0);
                $pdf->SetFont('Arial','i',11);
                $pdf->Cell(17,10,'clave '.$numLote,0,1,'C',0);
                $pdf->SetFont('Arial','b',11);
                $pdf->Cell(23,10,"Valo abonado: ",0,0,'C',0);
                $pdf->SetFont('Arial','i',11);
                $pdf->Cell(22,10,utf8_decode(' $'.$valorPago.' dólares'),0,1,'C',0);
                $pdf->SetFont('Arial','b',11);
                $pdf->Cell(22,10,"Deuda actual: ",0,0,'C',0);
                $pdf->SetFont('Arial','i',11);
                $pdf->Cell(22,10,utf8_decode(' $'.$total.' dólares'),0,1,'C',0);


              $pdf->Output();



?>
