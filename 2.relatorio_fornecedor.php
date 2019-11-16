<?php
	ini_set('display_errors', 0 );
	error_reporting(0);
?>
<?php
define('FPDF_FONTPATH','font/');
require('fpdf/fpdf.php');
$pdf=new FPDF('P','cm','A4');
$pdf ->Open();
$pdf->AddPage();
$pdf-> SetFont('Arial','',8); 
require('conexao.php');
$sql="select * from fornecedor";

$exe_sql=mysqli_query($db,$sql) or die (mysqli_error());
$pdf->Cell(19,1,'RELATORIO',1,1,'C');
$pdf-> Cell (1.1,1,' ID ',1,0,'C');
$pdf-> Cell (5.0,1,' Nome do Fornecedor',1,0,'C');
$pdf-> Cell (8.0,1,' Email',1,0,'C');
$pdf-> Cell (4.9,1,' Telefone',1,1,'C');

while ($resultado =mysqli_fetch_array($exe_sql))
{
$pdf-> Cell (1.1,1,$resultado ['id'],1,0,'C');
$pdf-> Cell(5.0,1,$resultado['Nome_fornecedor'],1,0,'C');
$pdf-> Cell (8.0,1,$resultado ['Email_fornecedor'],1,0,'C');
$pdf-> Cell(4.9,1,$resultado['Tel_fornecedor'],1,1,'C');

}
$pdf->Output();
?>