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
$sql="select * from produtos";

$exe_sql=mysqli_query($db,$sql) or die (mysqli_error());
$pdf->Cell(19,1,'RELATORIO',1,1,'C');
$pdf-> Cell (1.1,1,' ID ',1,0,'C');
$pdf-> Cell (3.3,1,' Nome',1,0,'C');
$pdf-> Cell (4.5,1,' Descricao',1,0,'C');
$pdf-> Cell (2.7,1,' Preco',1,0,'C');
$pdf-> Cell (4.7,1,' Fornecedor',1,0,'C');
$pdf-> Cell (2.7,1,' Estoque',1,1,'C');
while ($resultado =mysqli_fetch_array($exe_sql))
{
$pdf-> Cell (1.1,1,$resultado ['id'],1,0,'C');
$pdf-> Cell(3.3,1,$resultado['nome'],1,0,'C');
$pdf-> Cell (4.5,1,$resultado ['descricao'],1,0,'C');
$pdf-> Cell(2.7,1,$resultado['preco'],1,0,'C');
$pdf-> Cell (4.7,1,$resultado ['fornecedor'],1,0,'C');
$pdf-> Cell(2.7,1,$resultado['marca'],1,0,'C');
$pdf->ln(1);
}
$pdf->Output();
?>