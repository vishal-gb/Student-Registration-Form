<?Php
require('fpdf/fpdf.php');
require('config.php');
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
        $pdf->Cell($width_cell[2],5,'Gender',1,0,false); // Third column of row 1
        $pdf->Cell($width_cell[3],5,$row['gender'],1,1,false);


        $pdf->Cell($width_cell[0],5,'Course',1,0,false); // First column of row 2
        $pdf->Cell($width_cell[1],5,$row['course'],1,0,false); // Second column of row 2
        $pdf->Cell($width_cell[2],5,'Food',1,0,false); // Third column of row 2
        $pdf->Cell($width_cell[3],5,$row['food'],1,1,false); // Fourth column of row 2

        $pdf->Cell($width_cell[0],5,'Department',1,0,false); // First column of row 1
        $pdf->Cell($width_cell[1],5,$row['department'],1,0,false); // Second column of row 1
        $pdf->Cell($width_cell[2],5,'Blood Group',1,0,false); // Third column of row 1
        $pdf->Cell($width_cell[3],5,$row['blood'],1,1,false);

        $pdf->Cell($width_cell[0],5,'Batch',1,0,false); // First column of row 1
        $pdf->Cell($width_cell[1],5,$row['batch'],1,0,false); // Second column of row 1
        $pdf->Cell($width_cell[2],5,'Aadhaar Number',1,0,false); // Third column of row 1
        $pdf->Cell($width_cell[3],5,$row['aadharno'],1,1,false);

        $pdf->Cell($width_cell[0],5,'Roll Number',1,0,false); // First column of row 1
        $pdf->Cell($width_cell[1],5,$row['rollno'],1,0,false); // Second column of row 1
        $pdf->Cell($width_cell[2],5,'Student Phone No.',1,0,false); // Third column of row 1
        $pdf->Cell($width_cell[3],5,$row['phno'],1,1,false);

        $pdf->Cell($width_cell[2],5,'Student Email',1,0,false); // Third column of row 1
        $pdf->Cell($width_cell[3],5,$row['email'],1,1,false);


        $pdf->Ln(5);

        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(190,10,'General Information','','','C',true);
        $pdf->Ln(15);

        $pdf->Cell($width_cell[0],5,'Date of Birth ',1,0,'L',false); // First header column
        $pdf->Cell($width_cell[1],5,$row['dob'],1,0,'L',false); // Second header column
        $pdf->Cell($width_cell[2],5,'Caste',1,0,'L',false); // Third header column
        $pdf->Cell($width_cell[3],5,$row['caste'],1,1,'L',false);

        $pdf->Cell($width_cell[0],5,'Community',1,0,false);
        $pdf->Cell($width_cell[1],5,$row['community'],1,0,false);
        $pdf->Cell($width_cell[2],5,'Annual Parent Income',1,0,false);
        $pdf->Cell($width_cell[3],5,$row['parentinan'],1,1,false);


        $pdf->Cell($width_cell[0],5,'Religion',1,0,false);
        $pdf->Cell($width_cell[1],5,$row['religion'],1,0,false);
        $pdf->Cell($width_cell[2],5,'Nationality',1,0,false);
        $pdf->Cell($width_cell[3],5,$row['nationality'],1,1,false);

        $pdf->Cell($width_cell[0],5,'Mother Tongue',1,0,false);
        $pdf->Cell($width_cell[1],5,$row['tongue'],1,0,false);
        $pdf->Cell($width_cell[2],5,'Members of',1,0,false);
        $pdf->Cell($width_cell[3],5,$row['membersof'],1,1,false);


        $pdf->Ln(5);

        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(190,10,'Admission Information','','','C',true);
        $pdf->Ln(15);

        $pdf->Cell($width_cell[0],5,'Date of Adminssion ',1,0,false);
        $pdf->Cell($width_cell[1],5,$row['doa'],1,0,false);
        $pdf->Cell($width_cell[2],5,'Admission Allotment',1,0,false);
        $pdf->Cell($width_cell[3],5,$row['adminall'],1,1,false);

        $pdf->Cell($width_cell[0],5,'Admission Type',1,0,false);
        $pdf->Cell($width_cell[1],5,$row['adtype'],1,0,false);
        $pdf->Cell($width_cell[2],5,' Admission Category',1,0,false);
        $pdf->Cell($width_cell[3],5,$row['admincat'],1,1,false);

        $pdf->Cell($width_cell[0],5,'Overall Rank',1,0,'L',false);
        $pdf->Cell($width_cell[1],5,$row['overallrank'],1,'L',false);
        $pdf->Cell($width_cell[2],5,'Community Rank',1,0,'L',false);
        $pdf->Cell($width_cell[3],5,$row['communityrank'],1,1,'L',false);

        $pdf->Cell($width_cell[0],5,'Sports Admission',1,0,false);
        $pdf->Cell($width_cell[1],5,$row['sportsadmin'],1,0,false);
        $pdf->Cell($width_cell[2],5,'If Yes, Specify the Game',1,0,false);
        $pdf->Cell($width_cell[3],5,$row['specifygame'],1,1,false);
        $pdf->Cell($width_cell[2],5,'Medium of Instruction',1,0,false);
        $pdf->Cell($width_cell[3],5,$row['medium'],1,1,false);


        $pdf->Ln(5);

        $pdf->SetFont('Arial','B',9);
        $pdf->Cell(190,10,'Passport Information','','','C',true);
        $pdf->Ln(15);


        $pdf->Cell($width_cell[0],5,'NRI / Foreign Student',1,0,false);
        $pdf->Cell($width_cell[1],5,$row['nriorfor'],1,0,false);
        $pdf->Cell($width_cell[2],5,'If Yes, Passport Number',1,0,false);
        $pdf->Cell($width_cell[3],5,$row['passnumber'],1,1,false);

        $pdf->Cell($width_cell[0],5,'Passport - Date of Expiry',1,0,false);
        $pdf->Cell($width_cell[1],5,$row['passexpiry'],1,0,false);


        $pdf->Ln(10);

        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(190,10,'Visa Information','','','C',true);
        $pdf->Ln(15);


        $pdf->Cell($width_cell[0],5,'Visa Number',1,0,false);
        $pdf->Cell($width_cell[1],5,$row['visanum'],1,0,false);
        $pdf->Cell($width_cell[2],5,'Type of Visa',1,0,false);
        $pdf->Cell($width_cell[3],5,$row['visatype'],1,1,false);

        $pdf->Cell($width_cell[0],5,'Visa - Date of Expiry',1,0,false);
        $pdf->Cell($width_cell[1],5,$row['visaexpiry'],1,0,false);

        $pdf->Ln(10);

        $pdf->SetFont('Arial','B',6);
        $pdf->Cell(190,10,'Academic Details','','','C',true);
        $pdf->Ln(15);

        $pdf->Cell($tabel_cell[0],5,'Qualification ',1,0,'L',false); // First header column
        $pdf->Cell($tabel_cell[1],5,'School / College',1,0,'L',false); // Second header column
        $pdf->Cell($tabel_cell[2],5,'Board / University',1,0,'L',false); // Third header column
        $pdf->Cell($tabel_cell[3],5,'Reg.No',1,0,'L',false);
        $pdf->Cell($tabel_cell[4],5,'Degree',1,0,false);
        $pdf->Cell($tabel_cell[5],5,'Specialization',1,0,false);
        $pdf->Cell($tabel_cell[6],5,'Year of passing',1,0,false);
        $pdf->Cell($tabel_cell[7],5,'% of Marks',1,0,false);
        $pdf->Cell($tabel_cell[8],5,'Class',1,0,false);
        $pdf->Cell($tabel_cell[9],5,'Grade',1,1,false);


        $pdf->Cell($tabel_cell[0],5,'10th / Equi',1,0,'L',false); // First header column
        $pdf->Cell($tabel_cell[1],5,$row['tenschorclg'],1,0,'L',false); // Second header column
        $pdf->Cell($tabel_cell[2],5,$row['tenboard'],1,0,'L',false); // Third header column
        $pdf->Cell($tabel_cell[3],5,$row['tenreg'],1,0,'L',false);
        $pdf->Cell($tabel_cell[4],5,$row['tendeg'],1,0,false);
        $pdf->Cell($tabel_cell[5],5,$row['tenspecial'],1,0,false);
        $pdf->Cell($tabel_cell[6],5,$row['tenpass'],1,0,false);
        $pdf->Cell($tabel_cell[7],5,$row['tenmark'],1,0,false);
        $pdf->Cell($tabel_cell[8],5,$row['tenclass'],1,0,false);
        $pdf->Cell($tabel_cell[9],5,$row['tengrade'],1,1,false);


        $pdf->Cell($tabel_cell[0],5,'12th / Equi',1,0,'L',false); // First header column
        $pdf->Cell($tabel_cell[1],5,$row['tweschorclg'],1,0,'L',false); // Second header column
        $pdf->Cell($tabel_cell[2],5,$row['tweboard'],1,0,'L',false); // Third header column
        $pdf->Cell($tabel_cell[3],5,$row['twereg'],1,0,'L',false);
        $pdf->Cell($tabel_cell[4],5,$row['twedeg'],1,0,false);
        $pdf->Cell($tabel_cell[5],5,$row['twespecial'],1,0,false);
        $pdf->Cell($tabel_cell[6],5,$row['twepass'],1,0,false);
        $pdf->Cell($tabel_cell[7],5,$row['twemark'],1,0,false);
        $pdf->Cell($tabel_cell[8],5,$row['tweclass'],1,0,false);
        $pdf->Cell($tabel_cell[9],5,$row['twegrade'],1,1,false);


        $pdf->Cell($tabel_cell[0],5,'Diploma',1,0,'L',false); // First header column
        $pdf->Cell($tabel_cell[1],5,$row['dipschorclg'],1,0,'L',false); // Second header column
        $pdf->Cell($tabel_cell[2],5,$row['dipboard'],1,0,'L',false); // Third header column
        $pdf->Cell($tabel_cell[3],5,$row['dipreg'],1,0,'L',false);
        $pdf->Cell($tabel_cell[4],5,$row['dipdeg'],1,0,false);
        $pdf->Cell($tabel_cell[5],5,$row['dipspecial'],1,0,false);
        $pdf->Cell($tabel_cell[6],5,$row['dippass'],1,0,false);
        $pdf->Cell($tabel_cell[7],5,$row['dipmark'],1,0,false);
        $pdf->Cell($tabel_cell[8],5,$row['dipclass'],1,0,false);
        $pdf->Cell($tabel_cell[9],5,$row['dipgrade'],1,1,false);


        $pdf->Cell($tabel_cell[0],5,'UG',1,0,'L',false); // First header column
        $pdf->Cell($tabel_cell[1],5,$row['ugschorclg'],1,0,'L',false); // Second header column
        $pdf->Cell($tabel_cell[2],5,$row['ugboard'],1,0,'L',false); // Third header column
        $pdf->Cell($tabel_cell[3],5,$row['ugreg'],1,0,'L',false);
        $pdf->Cell($tabel_cell[4],5,$row['ugdeg'],1,0,false);
        $pdf->Cell($tabel_cell[5],5,$row['ugspecial'],1,0,false);
        $pdf->Cell($tabel_cell[6],5,$row['ugpass'],1,0,false);
        $pdf->Cell($tabel_cell[7],5,$row['ugmark'],1,0,false);
        $pdf->Cell($tabel_cell[8],5,$row['ugclass'],1,0,false);
        $pdf->Cell($tabel_cell[9],5,$row['uggrade'],1,1,false);


        $pdf->Cell($tabel_cell[0],5,'PG',1,0,'L',false); // First header column
        $pdf->Cell($tabel_cell[1],5,$row['pgschorclg'],1,0,'L',false); // Second header column
        $pdf->Cell($tabel_cell[2],5,$row['pgboard'],1,0,'L',false); // Third header column
        $pdf->Cell($tabel_cell[3],5,$row['pgreg'],1,0,'L',false);
        $pdf->Cell($tabel_cell[4],5,$row['pgdeg'],1,0,false);
        $pdf->Cell($tabel_cell[5],5,$row['pgspecial'],1,0,false);
        $pdf->Cell($tabel_cell[6],5,$row['pgpass'],1,0,false);
        $pdf->Cell($tabel_cell[7],5,$row['pgmark'],1,0,false);
        $pdf->Cell($tabel_cell[8],5,$row['pgclass'],1,0,false);
        $pdf->Cell($tabel_cell[9],5,$row['pggrade'],1,1,false);

        $pdf->Ln(5);

        $pdf->Cell($width_cell[0],5,'12th / Equivalent',1,0,'L',false); // First header column
        $pdf->Cell($width_cell[1],5,'Maximum Marks',1,0,'L',false); // Second header column
        $pdf->Cell($width_cell[2],5,'Marks Obtained',1,0,'L',false); // Third header column
        $pdf->Cell($width_cell[3],5,'% of Marks',1,1,'L',false);

        $pdf->Cell($width_cell[0],5,'Maths',1,0,false); // First column of row 1
        $pdf->Cell($width_cell[1],5,$row['mathmax'],1,0,false); // Second column of row 1
        $pdf->Cell($width_cell[2],5,$row['mathob'],1,0,false); // Third column of row 1
        $pdf->Cell($width_cell[3],5,$row['mathper'],1,1,false);

        $pdf->Cell($width_cell[0],5,'Physics',1,0,false); // First column of row 2
        $pdf->Cell($width_cell[1],5,$row['phymax'],1,0,false); // Second column of row 2
        $pdf->Cell($width_cell[2],5,$row['phyob'],1,0,false); // Third column of row 2
        $pdf->Cell($width_cell[3],5,$row['phyper'],1,1,false); // Fourth column of row 2

        $pdf->Cell($width_cell[0],5,'Chemistry',1,0,false); // First column of row 1
        $pdf->Cell($width_cell[1],5,$row['chemmax'],1,0,false); // Second column of row 1
        $pdf->Cell($width_cell[2],5,$row['chemob'],1,0,false); // Third column of row 1
        $pdf->Cell($width_cell[3],5,$row['chemper'],1,1,false);

        $pdf->Cell($width_cell[0],5,'Total',1,0,false); // First column of row 1
        $pdf->Cell($width_cell[1],5,$row['totmax'],1,0,false); // Second column of row 1
        $pdf->Cell($width_cell[2],5,$row['totob'],1,0,false); // Third column of row 1
        $pdf->Cell($width_cell[3],5,$row['totper'],1,1,false);


        $pdf->Ln(5);

        $pdf->SetFont('Arial','B',9);
        $pdf->Cell(190,10,'Parent Details','','','C',true);
        $pdf->Ln(15);

        $pdf->Cell($width_cell[0],5,'Father\'s Name ',1,0,'L',false); // First header column
        $pdf->Cell($width_cell[1],5,$row['fathername'],1,0,'L',false); // Second header column
        $pdf->Cell($width_cell[2],5,'Father\'s Qualification',1,0,'L',false); // Third header column
        $pdf->Cell($width_cell[3],5,$row['fatherqual'],1,1,'L',false);

        $pdf->Cell($width_cell[0],5,'Father\'s Occupation',1,0,false);
        $pdf->Cell($width_cell[1],5,$row['fatherocc'],1,0,false);
        $pdf->Cell($width_cell[2],5,'Father\'s Address of Company',1,0,false);
        $pdf->Cell($width_cell[3],5,$row['fatheraddcom'],1,1,false);


        $pdf->Cell($width_cell[0],5,'Father\'s Designation',1,0,false);
        $pdf->Cell($width_cell[1],5,$row['fatherdis'],1,0,false);
        $pdf->Cell($width_cell[2],5,'Father\'s Mail-ID',1,0,false);
        $pdf->Cell($width_cell[3],5,$row['fathermail'],1,1,false);

        $pdf->Cell($width_cell[0],5,'Father\'s Country Code',1,0,false);
        $pdf->Cell($width_cell[1],5,$row['fathercouncode'],1,0,false);
        $pdf->Cell($width_cell[2],5,'Father\'s STD Code',1,0,false);
        $pdf->Cell($width_cell[3],5,$row['fatherstd'],1,1,false);

        $pdf->Cell($width_cell[0],5,'Father\'s Land Line Number',1,0,'L',false); // First header column
        $pdf->Cell($width_cell[1],5,$row['fatherlln'],1,0,'L',false); // Second header column
        $pdf->Cell($width_cell[2],5,'Father\'s Mobile Number',1,0,'L',false); // Third header column
        $pdf->Cell($width_cell[3],5,$row['fathermn'],1,1,'L',false);

        $pdf->Cell($width_cell[0],5,'Mother\'s Name',1,0,false);
        $pdf->Cell($width_cell[1],5,$row['mothername'],1,0,false);
        $pdf->Cell($width_cell[2],5,'Mother\'s Qualification',1,0,false);
        $pdf->Cell($width_cell[3],5,$row['motherqual'],1,1,false);

        $pdf->Cell($width_cell[0],5,'Mother\'s Occupation',1,0,false);
        $pdf->Cell($width_cell[1],5,$row['motherocc'],1,0,false);
        $pdf->Cell($width_cell[2],5,'Mother\'s Address of Company',1,0,false);
        $pdf->Cell($width_cell[3],5,$row['motheraddcom'],1,1,false);

        $pdf->Cell($width_cell[0],5,'Mother\'s Designation',1,0,false);
        $pdf->Cell($width_cell[1],5,$row['motherdis'],1,0,false);
        $pdf->Cell($width_cell[2],5,'Mother\'s Mail-ID',1,0,false);
        $pdf->Cell($width_cell[3],5,$row['mothermail'],1,1,false);

        $pdf->Cell($width_cell[0],5,'Mother\'s Country Code',1,0,'L',false); // First header column
        $pdf->Cell($width_cell[1],5,$row['mothercouncode'],1,0,'L',false); // Second header column
        $pdf->Cell($width_cell[2],5,'Mother\'s STD Code',1,0,'L',false); // Third header column
        $pdf->Cell($width_cell[3],5,$row['motherstd'],1,1,'L',false);

        $pdf->Cell($width_cell[0],5,'Mother\'s Land Line Number',1,0,false);
        $pdf->Cell($width_cell[1],5,$row['motherlln'],1,0,false);
        $pdf->Cell($width_cell[2],5,'Mother\'s Mobile Number',1,0,false);
        $pdf->Cell($width_cell[3],5,$row['mothermn'],1,1,false);

        $pdf->Ln(5);

        $pdf->SetFont('Arial','B',9);
        $pdf->Cell(190,10,'Contact Details','','','C',true);
        $pdf->Ln(15);


        $pdf->Cell(95,10,'Residential Address','','','C',true);
        $pdf->Cell(95,10,'Permanent Address','','','C',true);
        $pdf->Ln(15);

        $pdf->Cell($width_cell[0],5,'Plot / Door No',1,0,false);
        $pdf->Cell($width_cell[1],5,$row['resplot'],1,0,false);
        $pdf->Cell($width_cell[2],5,'Plot / Door No',1,0,false);
        $pdf->Cell($width_cell[3],5,$row['perplot'],1,1,false);

        $pdf->Cell($width_cell[0],5,'Street Name',1,0,false);
        $pdf->Cell($width_cell[1],5,$row['resstreet'],1,0,false);
        $pdf->Cell($width_cell[2],5,'Street Name',1,0,false);
        $pdf->Cell($width_cell[3],5,$row['perstreet'],1,1,false);

        $pdf->Cell($width_cell[0],5,'Area',1,0,false);
        $pdf->Cell($width_cell[1],5,$row['resarea'],1,0,false);
        $pdf->Cell($width_cell[2],5,'Area',1,0,false);
        $pdf->Cell($width_cell[3],5,$row['perarea'],1,1,false);

        $pdf->Cell($width_cell[0],5,'City',1,0,false);
        $pdf->Cell($width_cell[1],5,$row['rescity'],1,0,false);
        $pdf->Cell($width_cell[2],5,'City',1,0,false);
        $pdf->Cell($width_cell[3],5,$row['percity'],1,1,false);

        $pdf->Cell($width_cell[0],5,'District',1,0,false);
        $pdf->Cell($width_cell[1],5,$row['resdistrict'],1,0,false);
        $pdf->Cell($width_cell[2],5,'District',1,0,false);
        $pdf->Cell($width_cell[3],5,$row['perdistrict'],1,1,false);

        $pdf->Cell($width_cell[0],5,'Country',1,0,false);
        $pdf->Cell($width_cell[1],5,$row['rescoun'],1,0,false);
        $pdf->Cell($width_cell[2],5,'Country',1,0,false);
        $pdf->Cell($width_cell[3],5,$row['percoun'],1,1,false);

        $pdf->Cell($width_cell[0],5,'State',1,0,false);
        $pdf->Cell($width_cell[1],5,$row['resstate'],1,0,false);
        $pdf->Cell($width_cell[2],5,'State',1,0,false);
        $pdf->Cell($width_cell[3],5,$row['perstate'],1,1,false);

        $pdf->Cell($width_cell[0],5,'Pin code',1,0,false);
        $pdf->Cell($width_cell[1],5,$row['respin'],1,0,false);
        $pdf->Cell($width_cell[2],5,'Pin code',1,0,false);
        $pdf->Cell($width_cell[3],5,$row['perpin'],1,1,false);


        $pdf->Ln(10);

        $pdf->SetFont('Arial','B',9);
        $pdf->Cell(190,10,'Boarding Point Details','','','C',true);
        $pdf->Ln(15);

        $pdf->Cell($width_cell[0],5,'Area / Bus Name',1,0,false);
        $pdf->Cell($width_cell[1],5,$row['areaorbus'],1,0,false);
        $pdf->Cell($width_cell[2],5,'Boarding Point',1,0,false);
        $pdf->Cell($width_cell[3],5,$row['bp'],1,1,false);


        $pdf->Ln(5);

        $pdf->SetFont('Arial','B',9);
        $pdf->Cell(190,10,'Guardian Details','','','C',true);
        $pdf->Ln(15);

        $pdf->Cell(95,10,'Local Guardian 1','','','C',true);
        $pdf->Cell(95,10,'Local Guardian 2','','','C',true);
        $pdf->Ln(15);

        $pdf->Cell($width_cell[0],5,'Name',1,0,false);
        $pdf->Cell($width_cell[1],5,$row['gua1name'],1,0,false);
        $pdf->Cell($width_cell[2],5,'Name',1,0,false);
        $pdf->Cell($width_cell[3],5,$row['gua2name'],1,1,false);

        $pdf->Cell($width_cell[0],5,'Profession/Occpation',1,0,false);
        $pdf->Cell($width_cell[1],5,$row['gua1pro'],1,0,false);
        $pdf->Cell($width_cell[2],5,'Profession/Occpation',1,0,false);
        $pdf->Cell($width_cell[3],5,$row['gua2pro'],1,1,false);

        $pdf->Cell($width_cell[0],5,'Age',1,0,false);
        $pdf->Cell($width_cell[1],5,$row['gua1age'],1,0,false);
        $pdf->Cell($width_cell[2],5,'Age',1,0,false);
        $pdf->Cell($width_cell[3],5,$row['gua2age'],1,1,false);

        $pdf->Cell($width_cell[0],5,'Landline Number',1,0,false);
        $pdf->Cell($width_cell[1],5,$row['gua1lln'],1,0,false);
        $pdf->Cell($width_cell[2],5,'Landline Number',1,0,false);
        $pdf->Cell($width_cell[3],5,$row['gua2lln'],1,1,false);

        $pdf->Cell($width_cell[0],5,'Mobile Number',1,0,false);
        $pdf->Cell($width_cell[1],5,$row['gua1mn'],1,0,false);
        $pdf->Cell($width_cell[2],5,'Mobile Number',1,0,false);
        $pdf->Cell($width_cell[3],5,$row['gua2mn'],1,1,false);

        $pdf->Cell($width_cell[0],5,'Address - Home',1,0,false);
        $pdf->Cell($width_cell[1],5,$row['gua1addho'],1,0,false);
        $pdf->Cell($width_cell[2],5,'Address - Home',1,0,false);
        $pdf->Cell($width_cell[3],5,$row['gua2addho'],1,1,false);

        $pdf->Cell($width_cell[0],5,'Address - Office',1,0,false);
        $pdf->Cell($width_cell[1],5,$row['gua1addof'],1,0,false);
        $pdf->Cell($width_cell[2],5,'Address - Office',1,0,false);
        $pdf->Cell($width_cell[3],5,$row['gua2addof'],1,1,false);

    }
}






$pdf->Output();
?>
