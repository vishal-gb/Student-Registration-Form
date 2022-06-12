<?Php
require('fpdf/fpdf.php');
require('config.php');
error_reporting(E_ERROR | E_WARNING | E_PARSE);

session_start();


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFillColor(193,229,252);
$pdf->SetFont('Arial','B',16);
$pdf->Ln(80);

$pdf->Image('IMG/college_header.jpg',10,10,190);

if(isset($_POST['genpdf']))
{
    $roll = $_SESSION['Roll_No'];
    $sql = "select * from student_data where Roll_No = '$roll'";
    $res = mysqli_query($con, $sql);
    $row=mysqli_fetch_array($res);
    $count = mysqli_num_rows($res);
    foreach ($con->query($sql) as $row) {

        $pdf->SetFont('Arial','B',12);
        $width_cell = array(45,50,45,50);
        $width_cell1 = array(63.5,63.5,63.5);
        $tabel_cell = array(20,20,20,15,15,25,20,15,20,20);
        $head_cell = array(50,140);

        

        $extsension = explode('.',$row['studentphoto']);
        $file_ext1=strtolower(array_pop($extsension));

        $extsension = explode('.',$row['fatherphoto']);
        $file_ext2=strtolower(array_pop($extsension));

        $extsension = explode('.',$row['motherphoto']);
        $file_ext3=strtolower(array_pop($extsension));

        $stuphotoname = $row['Roll_No']."-studentphoto".".".$file_ext1;
        $fatphotoname = $row['Roll_No']."-fatherphoto".".".$file_ext2;
        $motphotoname = $row['Roll_No']."-motherphoto".".".$file_ext3;

        $pdf->Image("http://localhost/student-registration1/imageassets/$stuphotoname",50,50,30,30);

        $pdf->Image("http://localhost/student-registration1/imageassets/$fatphotoname",90,50,30,30);

        $pdf->Image("http://localhost/student-registration1/imageassets/$motphotoname",130,50,30,30);


        $pdf->Ln(15);

        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(190,10,'Personal Information','','','C',true);
        $pdf->Ln(15);

        $pdf->Cell($width_cell[0],5,'Name',1,0,'L',false); // First header column
        $pdf->Cell($width_cell[1],5,$row['Name'],1,1,'L',false); // Second header column
        $pdf->Cell($width_cell[2],5,'Initial',1,0,'L',false); // Third header column
        $pdf->Cell($width_cell[3],5,$row['Initial'],1,1,'L',false);

        $pdf->Cell($width_cell[2],5,'Aadhaar Number',1,0,false); // Third column of row 1
        $pdf->Cell($width_cell[3],5,$row['Aadhaar_No'],1,1,false);


        $pdf->Cell($width_cell[2],5,'Student Email',1,0,false); // Third column of row 1
        $pdf->Cell($width_cell[3],5,$row['Student_MailID'],1,1,false);


        $pdf->Ln(5);

        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(190,10,'General Information','','','C',true);
        $pdf->Ln(15);

        $pdf->Cell($width_cell[0],5,'Date of Birth ',1,0,'L',false); // First header column
        $pdf->Cell($width_cell[1],5,$row['Date_of_Birth'],1,0,'L',false); // Second header column


        
        $pdf->Ln(10);

        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(190,10,'Academic Details','','','C',true);
        $pdf->Ln(15);

        $pdf->Cell($width_cell1[0],5,'Qualification ',1,0,'L',false); // First header column
        $pdf->Cell($width_cell1[1],5,'10th / Equi',1,0,'L',false); // First header column
        $pdf->Cell($width_cell1[2],5,'12th / Equi',1,1,'L',false); // First header column


        $pdf->Cell($width_cell1[0],5,'School / College',1,0,'L',false); // Second header column
        $pdf->Cell($width_cell1[1],5,$row['tenth_school'],1,0,'L',false); // Second header column
        $pdf->Cell($width_cell1[2],5,$row['twelveth_school'],1,1,'L',false); // Second header column

        $pdf->Cell($width_cell1[0],5,'Board / University',1,0,'L',false); // Third header column
        $pdf->Cell($width_cell1[1],5,$row['tenth_board'],1,0,'L',false); // Third header column
        $pdf->Cell($width_cell1[2],5,$row['twelveth_board'],1,1,'L',false); // Third header column
        
        $pdf->Cell($width_cell1[0],5,'Reg.No',1,0,'L',false);
        $pdf->Cell($width_cell1[1],5,$row['tenth_reg'],1,0,'L',false);
        $pdf->Cell($width_cell1[2],5,$row['twelveth_reg'],1,1,'L',false);

        $pdf->Cell($width_cell1[0],5,'Year of passing',1,0,false);
        $pdf->Cell($width_cell1[1],5,$row['tenth_yearofpassing'],1,0,false);
        $pdf->Cell($width_cell1[2],5,$row['twelveth_yearofpassing'],1,1,false);

        $pdf->Cell($width_cell1[0],5,'% of Marks',1,0,false);
        $pdf->Cell($width_cell1[1],5,$row['tenth_markpercent'],1,0,false);
        $pdf->Cell($width_cell1[2],5,$row['twelveth_markpercent'],1,1,false);




        
        $pdf->Ln(5);

        $pdf->Cell($width_cell[0],5,'12th / Equivalent',1,0,'L',false); // First header column
        $pdf->Cell($width_cell[1],5,'Maximum Marks',1,0,'L',false); // Second header column
        $pdf->Cell($width_cell[2],5,'Marks Obtained',1,0,'L',false); // Third header column
        $pdf->Cell($width_cell[3],5,'% of Marks',1,1,'L',false);

        $pdf->Cell($width_cell[0],5,'Maths',1,0,false); // First column of row 1
        $pdf->Cell($width_cell[1],5,$row['max_mathmarks'],1,0,false); // Second column of row 1
        $pdf->Cell($width_cell[2],5,$row['obtained_mathmarks'],1,0,false); // Third column of row 1
        $pdf->Cell($width_cell[3],5,$row['percent_mathmarks'],1,1,false);

        $pdf->Cell($width_cell[0],5,'Physics',1,0,false); // First column of row 2
        $pdf->Cell($width_cell[1],5,$row['max_physicsmarks'],1,0,false); // Second column of row 2
        $pdf->Cell($width_cell[2],5,$row['obtained_physicsmarks'],1,0,false); // Third column of row 2
        $pdf->Cell($width_cell[3],5,$row['percent_physicsmarks'],1,1,false); // Fourth column of row 2

        $pdf->Cell($width_cell[0],5,'Chemistry',1,0,false); // First column of row 1
        $pdf->Cell($width_cell[1],5,$row['max_chemistrymarks'],1,0,false); // Second column of row 1
        $pdf->Cell($width_cell[2],5,$row['obtained_chemistrymarks'],1,0,false); // Third column of row 1
        $pdf->Cell($width_cell[3],5,$row['percent_chemistrymarks'],1,1,false);

        $pdf->Cell($width_cell[0],5,'Total',1,0,false); // First column of row 1
        $pdf->Cell($width_cell[1],5,$row['max_totalmarks'],1,0,false); // Second column of row 1
        $pdf->Cell($width_cell[2],5,$row['obtained_totalmarks'],1,0,false); // Third column of row 1
        $pdf->Cell($width_cell[3],5,$row['percent_totalmarks'],1,1,false);


        $pdf->Ln(5);

        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(190,10,'Parent Details','','','C',true);
        $pdf->Ln(15);

        $pdf->Cell($width_cell[0],5,'Father\'s Name ',1,0,'L',false); // First header column
        $pdf->Cell($width_cell[1],5,$row['father_name'],1,0,'L',false); // Second header column


        $pdf->Cell($width_cell[2],5,'Father\'s Mobile Number',1,0,'L',false); // Third header column
        $pdf->Cell($width_cell[3],5,$row['father_moblie'],1,1,'L',false);

        $pdf->Cell($width_cell[0],5,'Mother\'s Name',1,0,false);
        $pdf->Cell($width_cell[1],5,$row['mother_name'],1,0,false);

        $pdf->Cell($width_cell[2],5,'Mother\'s Mobile Number',1,0,false);
        $pdf->Cell($width_cell[3],5,$row['mother_mobile'],1,1,false);




    }
}






$pdf->Output();
?>
