<?Php
require('fpdf/fpdf.php');
require('dbconnect.php');
error_reporting(E_ERROR | E_WARNING | E_PARSE);


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFillColor(193,229,252);
$pdf->SetFont('Arial','B',16);
$pdf->Ln(80);

$pdf->Image('IMG/college_header.jpg',10,10,190);

if(isset($_POST['genpdf']))
{
    $roll = $_POST['rollno'];
    $sql = "select * from information where rollno = '$roll'";
    $res = mysqli_query($scon, $sql);
    $row=mysqli_fetch_array($res);
    $count = mysqli_num_rows($res);
    foreach ($scon->query($sql) as $row) {

        $pdf->SetFont('Arial','B',12);
        $width_cell = array(45,50,45,50);
        $tabel_cell = array(20,20,20,15,15,25,20,15,20,20);
        $head_cell = array(50,140);

        

        $extsension = end(explode('.',$row['studentphoto']));
        $file_ext1=strtolower($extsension);

        $extsension = end(explode('.',$row['fatherphoto']));
        $file_ext2=strtolower($extsension);

        $extsension = end(explode('.',$row['motherphoto']));
        $file_ext3=strtolower($extsension);

        $stuphotoname = $row['rollno']."-studentphoto".".".$file_ext1;
        $fatphotoname = $row['rollno']."-fatherphoto".".".$file_ext2;
        $motphotoname = $row['rollno']."-motherphoto".".".$file_ext3;

        $pdf->Image("http://admission.stjosephsmail.in/imageassets/$stuphotoname",50,50,30,30);

        $pdf->Image("http://admission.stjosephsmail.in/imageassets/$fatphotoname",90,50,30,30);

        $pdf->Image("http://admission.stjosephsmail.in/imageassets/$motphotoname",130,50,30,30);


        $pdf->Cell($head_cell[0],10,'College Name',1,0,'L',false); // First header column
        $pdf->Cell($head_cell[1],10,$row['clginfo'],1,0,'L',false); // Second header column
        $pdf->Ln(15);

        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(190,10,'Personal Information','','','C',true);
        $pdf->Ln(15);

        $pdf->Cell($width_cell[0],5,'Name',1,0,'L',false); // First header column
        $pdf->Cell($width_cell[1],5,$row['candidatename'],1,0,'L',false); // Second header column
        $pdf->Cell($width_cell[2],5,'Initial',1,0,'L',false); // Third header column
        $pdf->Cell($width_cell[3],5,$row['initial'],1,1,'L',false);


        $pdf->Cell($width_cell[0],5,'Section',1,0,false); // First column of row 1
        $pdf->Cell($width_cell[1],5,$row['candidatesection'],1,0,false); // Second column of row 1
        


        $pdf->Cell($width_cell[0],5,'Roll Number',1,0,false); // First column of row 1
        $pdf->Cell($width_cell[1],5,$row['rollno'],1,0,false); // Second column of row 1
        

    }
}






$pdf->Output();
?>
