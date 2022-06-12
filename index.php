<?php
    require 'dbconnect.php';
    session_start();

    if (isset($_POST['submit']))
    {
        $clginfo = $_POST['clginfo'];
        $name = $_POST['name'];
        $initial = $_POST['initial'];
        $section = $_POST['section'];
        $gender = $_POST['gender'];
        $course = $_POST['course'];
        $food = $_POST['food'];
        $department = $_POST['department'];
        $blood = $_POST['blood'];
        $batch = $_POST['batch'];
        $aadharno = $_POST['aadharno'];
        $rollno = $_POST['rollno'];
        $phno = $_POST['phno'];
        $email = $_POST['stuemail'];
        $dob = $_POST['dob'];
        $caste = $_POST['caste'];
        $community = $_POST['community'];
        $parentinan = $_POST['parentIncomeAn'];
        $religion = $_POST['religion'];
        $nationality = $_POST['nationality'];
        $tongue = $_POST['tongue'];
        $membersof = $_POST['membersof'];
        $doa = $_POST['doa'];
        $adminall = $_POST['adminAll'];
        $adtype = $_POST['adType'];
        $admincat = $_POST['adminCat'];
        $overallrank = $_POST['overallRank'];
        $communityrank = $_POST['communityRank'];
        $sportsadmin = $_POST['sportsAdmin'];
        $specifygame = $_POST['specifyGame'];
        $medium = $_POST['medium'];
        $nriorfor = $_POST['nriOrfor'];
        $passnumber = $_POST['passNumber'];
        $passexpiry = $_POST['passExpiry'];
        $visanum = $_POST['visaNum'];
        $visatype = $_POST['visaType'];
        $visaexpiry = $_POST['visaExpiry'];
        $tenschorclg = $_POST['tenSchOrClg'];
        $tenboard = $_POST['tenBoard'];
        $tenreg = $_POST['tenReg'];
        $tendeg = $_POST['tenDeg'];
        $tenspecial = $_POST['tenSpecial'];
        $tenpass = $_POST['tenPass'];
        $tenmark = $_POST['tenMark'];
        $tenclass = $_POST['tenClass'];
        $tengrade = $_POST['tenGrade'];
        $tweschorclg = $_POST['tweSchOrClg'];
        $tweboard = $_POST['tweBoard'];
        $twereg = $_POST['tweReg'];
        $twedeg = $_POST['tweDeg'];
        $twespecial = $_POST['tweSpecial'];
        $twepass = $_POST['twePass'];
        $twemark = $_POST['tweMark'];
        $tweclass = $_POST['tweClass'];
        $twegrade = $_POST['tweGrade'];
        $dipschorclg = $_POST['dipSchOrClg'];
        $dipboard = $_POST['dipBoard'];
        $dipreg = $_POST['dipReg'];
        $dipdeg = $_POST['dipDeg'];
        $dipspecial = $_POST['dipSpecial'];
        $dippass = $_POST['dipPass'];
        $dipmark = $_POST['dipMark'];
        $dipclass = $_POST['dipClass'];
        $dipgrade = $_POST['dipGrade'];
        $ugschorclg = $_POST['ugSchOrClg'];
        $ugboard = $_POST['ugBoard'];
        $ugreg = $_POST['ugReg'];
        $ugdeg = $_POST['ugDeg'];
        $ugspecial = $_POST['ugSpecial'];
        $ugpass = $_POST['ugPass'];
        $ugmark = $_POST['ugMark'];
        $ugclass = $_POST['ugClass'];
        $uggrade = $_POST['ugGrade'];
        $pgschorclg = $_POST['pgSchOrClg'];
        $pgboard = $_POST['pgBoard'];
        $pgreg = $_POST['pgReg'];
        $pgdeg = $_POST['pgDeg'];
        $pgspecial = $_POST['pgSpecial'];
        $pgpass = $_POST['pgPass'];
        $pgmark = $_POST['pgMark'];
        $pgclass = $_POST['pgClass'];
        $pggrade = $_POST['pgGrade'];
        $mathmax = $_POST['mathMax'];
        $mathob = $_POST['mathOb'];
        $mathper = $_POST['mathPer'];
        $phymax = $_POST['phyMax'];
        $phyob = $_POST['phyOb'];
        $phyper = $_POST['phyPer'];
        $chemmax = $_POST['chemMax'];
        $chemob = $_POST['chemOb'];
        $chemper = $_POST['chemPer'];
        $totmax = $_POST['totMax'];
        $totob = $_POST['totOb'];
        $totper = $_POST['totPer'];
        $fathername = $_POST['fatherName'];
        $mothername = $_POST['motherName'];
        $fatherqual = $_POST['fatherQual'];
        $motherqual = $_POST['motherQual'];
        $fatherocc = $_POST['fatherOcc'];
        $motherocc = $_POST['motherOcc'];
        $fatheraddcom = $_POST['fatherAddCom'];
        $motheraddcom = $_POST['motherAddCom'];
        $fatherdis = $_POST['fatherDis'];
        $motherdis = $_POST['motherDis'];
        $fathermail = $_POST['fatherMail'];
        $mothermail = $_POST['motherMail'];
        $fathercouncode = $_POST['fatherCounCode'];
        $mothercouncode = $_POST['motherCounCode'];
        $fatherstd = $_POST['fatherSTD'];
        $motherstd = $_POST['motherSTD'];
        $fatherlln = $_POST['fatherLLN'];
        $motherlln = $_POST['motherLLN'];
        $fathermn = $_POST['fatherMN'];
        $mothermn = $_POST['motherMN'];
        $resplot = $_POST['resPlot'];
        $perplot = $_POST['perPlot'];
        $resstreet = $_POST['resStreet'];
        $perstreet = $_POST['perStreet'];
        $resarea = $_POST['resArea'];
        $perarea = $_POST['perArea'];
        $rescity = $_POST['resCity'];
        $percity = $_POST['perCity'];
        $resdistrict = $_POST['resDis'];
        $perdistrict = $_POST['perDis'];
        $rescoun = $_POST['resCoun'];
        $percoun = $_POST['perCoun'];
        $resstate = $_POST['resState'];
        $perstate = $_POST['perState'];
        $respin = $_POST['resPin'];
        $perpin = $_POST['perPin'];
        $areaorbus = $_POST['areaOrBus'];
        $bp = $_POST['BP'];
        $gua1name = $_POST['gua1Name'];
        $gua2name = $_POST['gua2Name'];
        $gua1pro = $_POST['gua1Pro'];
        $gua2pro = $_POST['gua2Pro'];
        $gua1age = $_POST['gua1Age'];
        $gua2age = $_POST['gua2Age'];
        $gua1lln = $_POST['gua1LLN'];
        $gua2lln = $_POST['gua2LLN'];
        $gua1mn = $_POST['gua1MN'];
        $gua2mn = $_POST['gua2MN'];
        $gua1addho = $_POST['gua1AddHo'];
        $gua2addho = $_POST['gua2AddHo'];
        $gua1addof = $_POST['gua1AddOf'];
        $gua2addof = $_POST['gua2AddOf'];
        

        $_SESSION['rollno'] = $_POST['rollno'];


        $studentphoto = $_FILES['studentPhoto']['name'];
        $fatherphoto = $_FILES['fatherPhoto']['name'];
        $motherphoto = $_FILES['motherPhoto']['name'];
        $aadharphoto = $_FILES['aadhaarPhoto']['name'];
        $communitycert = $_FILES['cc']['name'];
        $tenthcert = $_FILES['tenC']['name'];
        $twelcert = $_FILES['tweC']['name'];
        $allorder = $_FILES['allOd']['name'];
        $passportphoto = $_FILES['passC']['name'];





        $extsension = explode('.',$_FILES['studentPhoto']['name']);
        $file_ext1=strtolower(array_pop($extsension));
        $extsension = explode('.',$_FILES['fatherPhoto']['name']);
        $file_ext2=strtolower(array_pop($extsension));
        $extsension = explode('.',$_FILES['motherPhoto']['name']);
        $file_ext3=strtolower(array_pop($extsension));
        $extsension = explode('.',$_FILES['aadhaarPhoto']['name']);
        $file_ext4=strtolower(array_pop($extsension));
        $extsension = explode('.',$_FILES['cc']['name']);
        $file_ext5=strtolower(array_pop($extsension));
        $extsension = explode('.',$_FILES['tenC']['name']);
        $file_ext6=strtolower(array_pop($extsension));
        $extsension = explode('.',$_FILES['tweC']['name']);
        $file_ext7=strtolower(array_pop($extsension));
        $extsension = explode('.',$_FILES['allOd']['name']);
        $file_ext8=strtolower(array_pop($extsension));
        $extsension = explode('.',$_FILES['passC']['name']);
        $file_ext9=strtolower(array_pop($extsension));



        $sql = "INSERT INTO information VALUES ('$clginfo', '$name', '$initial', '$section', '$gender', '$course', '$food', '$department', '$blood', '$batch', '$aadharno',
            '$rollno', '$phno', '$email', '$dob', '$caste', '$community', '$parentinan', '$religion', '$nationality', '$tongue', '$membersof',
            '$doa', '$adminall', '$adtype', '$admincat', '$overallrank', '$communityrank', '$sportsadmin', '$specifygame', '$medium', '$nriorfor',
            '$passnumber', '$passexpiry', '$visanum', '$visatype', '$visaexpiry', '$tenschorclg', '$tenboard', '$tenreg', '$tendeg', '$tenspecial',
            '$tenpass', '$tenmark', '$tenclass', '$tengrade', '$tweschorclg', '$tweboard', '$twereg', '$twedeg', '$twespecial', '$twepass',
            '$twemark', '$tweclass', '$twegrade', '$dipschorclg', '$dipboard', '$dipreg', '$dipdeg', '$dipspecial', '$dippass', '$dipmark',
            '$dipclass', '$dipgrade', '$ugschorclg', '$ugboard', '$ugreg', '$ugdeg', '$ugspecial', '$ugpass', '$ugmark', '$ugclass',
            '$uggrade', '$pgschorclg', '$pgboard', '$pgreg', '$pgdeg', '$pgspecial', '$pgpass', '$pgmark', '$pgclass', '$pggrade',
            '$mathmax', '$mathob', '$mathper', '$phymax', '$phyob', '$phyper', '$chemmax', '$chemob', '$chemper', '$totmax',
            '$totob', '$totper', '$fathername', '$mothername', '$fatherqual', '$motherqual', '$fatherocc', '$motherocc', '$fatheraddcom', '$motheraddcom',
            '$fatherdis', '$motherdis', '$fathermail', '$mothermail', '$fathercouncode', '$mothercouncode', '$fatherstd', '$motherstd', '$fatherlln', '$motherlln',
            '$fathermn', '$mothermn', '$resplot', '$perplot', '$resstreet', '$perstreet', '$resarea', '$perarea', '$rescity', '$percity',
            '$resdistrict', '$perdistrict', '$rescoun', '$percoun', '$resstate', '$perstate', '$respin', '$perpin', '$areaorbus', '$bp',
            '$gua1name', '$gua2name', '$gua1pro', '$gua2pro', '$gua1age', '$gua2age', '$gua1lln', '$gua2lln', '$gua1mn', '$gua2mn',
            '$gua1addho', '$gua2addho', '$gua1addof', '$gua2addof', '$studentphoto', '$fatherphoto', '$motherphoto', '$aadharphoto', '$communitycert', '$tenthcert',
            '$twelcert', '$allorder', '$passportphoto')";

    if ($scon->query($sql) === TRUE) {

        move_uploaded_file($_FILES['studentPhoto']['tmp_name'], "./imageassets/$studentphoto");
        rename ("./imageassets/".$studentphoto , "./imageassets/".$rollno."-studentphoto".".".$file_ext1);
        
        move_uploaded_file($_FILES['fatherPhoto']['tmp_name'], "./imageassets/$fatherphoto");
        rename ("./imageassets/".$fatherphoto , "./imageassets/".$rollno."-fatherphoto".".".$file_ext2);
        
        move_uploaded_file($_FILES['motherPhoto']['tmp_name'], "./imageassets/$motherphoto");
        rename ("./imageassets/".$motherphoto , "./imageassets/".$rollno."-motherphoto".".".$file_ext3);
        
        move_uploaded_file($_FILES['aadhaarPhoto']['tmp_name'], "./imageassets/$aadharphoto");
        rename ("./imageassets/".$aadharphoto , "./imageassets/".$rollno."-aadharphoto".".".$file_ext4);
        
        move_uploaded_file($_FILES['cc']['tmp_name'], "./imageassets/$communitycert");
        rename ("./imageassets/".$communitycert , "./imageassets/".$rollno."-communitycert".".".$file_ext5);
        
        move_uploaded_file($_FILES['tenC']['tmp_name'], "./imageassets/$tenthcert");
        rename ("./imageassets/".$tenthcert , "./imageassets/".$rollno."-tenthcert".".".$file_ext6);
        
        move_uploaded_file($_FILES['tweC']['tmp_name'], "./imageassets/$twelcert");
        rename ("./imageassets/".$twelcert , "./imageassets/".$rollno."-twelcert".".".$file_ext7);
        
        move_uploaded_file($_FILES['allOd']['tmp_name'], "./imageassets/$allorder");
        rename ("./imageassets/".$allorder , "./imageassets/".$rollno."-allorder".".".$file_ext8);
        
        move_uploaded_file($_FILES['passC']['tmp_name'], "./imageassets/$passportphoto");
        rename ("./imageassets/".$passportphoto , "./imageassets/".$rollno."-passportphoto".".".$file_ext9);
        
        echo "New record created successfully";
        
        header("Location: ./viewpdf.php");
    } else {
        echo "Error: " . $sql . "<br>" . $scon->error;
    }

    }

?>


<html>
    <head>
        <title>Registration Form</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
            .required {
                color: red;
            }
        </style>
    </head>
    <body>

    <div class="container">
        <div class="row">
            <div class="col">
                <img src="IMG/college_header.jpg" class="img-fluid" alt="Responsive image">
                <hr>
            </div>
        </div>

        <div class="text-right">
            <h5 style="color: red;">If any Field Not applicable, Fill it as NA.</h5>
            <h5 style="color: green;">Fill all details in <label style="color: darkred;">CAPITAL</label>.</h5>
            <h5 style="color: indianred;">If u want to use ' Symbol, use as \'</h5>
            <h5>Any Queries Contact: <br>
                9486170605 <br>
                8122229363 <br>
                9840009627</h5>
        </div>

        <div class="row justify-content-center">
            <h3>College Information</h3>
        </div>

        <form action="index.php" method="post" enctype="multipart/form-data">
            <div class="row form-group">
                <div class="col">
                    <label for="clginfo">Select the College Name</label><span class="required">*</span>
                    <select class="form-control" id="clginfo" name="clginfo">
                        <option value="St. JOSEPH\'S COLLEGE OF ENGINEERING">St. JOSEPH'S COLLEGE OF ENGINEERING</option>
                        <option value="St. JOSEPH\'S INSTITUTE OF TECHNOLOGY">St. JOSEPH'S INSTITUTE OF TECHNOLOGY</option>
                    </select>
                </div>
            </div>

            <div class="row justify-content-center">
                <h3>Personal Information</h3>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="name">Name</label><span class="required">*</span>
                    <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
                </div>
                <div class="col">
                    <label for="initial">Initial</label><span class="required">*</span>
                    <input type="text" class="form-control" id="initial" placeholder="Initial" name="initial" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="section">Section</label><span class="required">*</span>
                    <select class="form-control" id="section" name="section">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                    </select>
                </div>
                <div class="col">
                    <label for="gender">Gender</label><span class="required">*</span>
                    <select class="form-control" id="gender" name="gender">
                        <option value="MALE">MALE</option>
                        <option value="FEMALE">FEMALE</option>
                        <option value="OTHERS">OTHERS</option>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="course">Course</label><span class="required">*</span>
                    <select class="form-control" id="course" name="course">
                        <option value="B.E.">B.E.</option>
                        <option value="B.Tech">B.Tech</option>
                        <option value="M.E.">M.E.</option>
                        <option value="MBA">MBA</option>
                        <option value="MBA (Integrated 5 Yrs)">MBA (Integrated 5 Yrs)</option>
                    </select>
                </div>
                <div class="col">
                    <label for="food">Food</label><span class="required">*</span>
                    <select class="form-control" id="food" name="food">
                        <option value="VEG">VEG</option>
                        <option name="NON-VEG">NON-VEG</option>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="department">Department</label><span class="required">*</span>
                    <input type="text" class="form-control" id="department" placeholder="Department" name="department" required>
                </div>
                <div class="col">
                    <label for="blood">Blood Group</label><span class="required">*</span>
                    <input type="text" class="form-control" id="blood" placeholder="Blood Group" name="blood" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="batch">Batch</label><span class="required">*</span>
                    <input type="text" class="form-control" id="batch" placeholder="2020 - 2024" name="batch" required>
                </div>
                <div class="col">
                    <label for="aadharno">Aadhaar Number</label><span class="required">*</span>
                    <input type="text" class="form-control" id="aadharno" placeholder="Aadhaar No." name="aadharno" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="rollno">Roll Number</label><span class="required">*</span>
                    <input type="text" class="form-control" id="rollno" placeholder="Roll No." name="rollno" required>
                </div>
                <div class="col">
                    <label for="phno">Phone Number (Student)</label><span class="required">*</span>
                    <input type="text" class="form-control" id="phno" placeholder="Student Phone No." name="phno" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-6">
                    <label for="stuemail">Student E-mail</label><span class="required">*</span>
                    <input type="email" class="form-control" id="stuemail" placeholder="Student E-mail" name="stuemail" required>
                </div>
            </div>
            <hr>

            <div class="row justify-content-center">
                <h3>General Information</h3>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="dob">Date of Birth</label><span class="required">*</span>
                    <input type="text" class="form-control" id="dob" placeholder="DD/MM/YYYY" name="dob" required>
                </div>
                <div class="col">
                    <label for="caste">Caste</label><span class="required">*</span>
                    <input type="text" class="form-control" id="caste" placeholder="Caste" name="caste" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="community">Community</label><span class="required">*</span>
                    <input type="text" class="form-control" id="community" placeholder="Community" name="community" required>
                </div>
                <div class="col">
                    <label for="parentIncomeAn"></label>Annual Parent Income<span class="required">*</span>
                    <input type="text" class="form-control" id="parentIncomeAn" placeholder="Annual Parent Income" name="parentIncomeAn" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="religion">Religion</label><span class="required">*</span>
                    <input type="text" class="form-control" id="religion" placeholder="Relogion" name="religion" required>
                </div>
                <div class="col">
                    <label for="nationality"></label>Nationality<span class="required">*</span>
                    <input type="text" class="form-control" id="nationality" placeholder="Nationality" name="nationality" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="tongue">Mother Tongue</label><span class="required">*</span>
                    <input type="text" class="form-control" id="tongue" placeholder="Mother Tongue" name="tongue" required>
                </div>
                <div class="col">
                    <label for="membersof">Members of</label><span class="required">*</span>
                    <input type="text" class="form-control" id="membersof" placeholder="NCC/NSS/YRC/Others( )" name="membersof" required>
                </div>
            </div>
            <hr>

            <div class="row justify-content-center">
                <h3>Admission Information</h3>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="doa">Date of Admission</label><span class="required">*</span>
                    <input type="text" class="form-control" id="doa" placeholder="DD/MM/YYYY" name="doa" required>
                </div>
                <div class="col">
                    <label for="adminAll">Admission Allotment</label><span class="required">*</span>
                    <select class="form-control" id="adminAll" name="adminAll">
                        <option value="REGULAR">REGULAR</option>
                        <option value="VOCATIONAL">VOCATIONAL</option>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="adType">Admission Type</label><span class="required">*</span>
                    <select class="form-control" id="adType" name="adType">
                        <option value="GOVERNMENT">GOVERNMENT</option>
                        <option value="MANAGEMENT">MANAGEMENT</option>
                    </select>
                </div>
                <div class="col">
                    <label for="adminCat">Admission Category</label><span class="required">*</span>
                    <select class="form-control" id="adminCat" name="adminCat">
                        <option value="GENERAL">GENERAL</option>
                        <option value="SPECIAL RESERVATION EMINENT SPORTS">SPECIAL RESERVATION (EMINENT SPORTS)</option>
                        <option value="SPECIAL RESERVATION EX-SERVICEMEN">SPECIAL RESERVATION (EX-SERVICEMEN)</option>
                        <option value="SPECIAL RESERVATION PH">SPECIAL RESERVATION (PH)</option>
                        <option value="PIO">PIO</option>
                        <option value="CIWGC">CIWGC</option>
                        <option value="NRI">NRI</option>
                        <option value="FOREIGN">FOREIGN</option>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="overallRank">Overall Rank (If Councelling, Otherwise fill as NA.)</label><span class="required">*</span>
                    <input type="text" class="form-control" id="overallRank" placeholder="Overall Rank" name="overallRank" required>
                </div>
                <div class="col">
                    <label for="communityRank">Community Rank (If Councelling, Otherwise fill as NA.)</label><span class="required">*</span>
                    <input type="text" class="form-control" id="communityRank" placeholder="Community Rank" name="communityRank" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="sportsAdmin">Sports Admission</label><span class="required">*</span>
                    <select class="form-control" id="sportsAdmin" name="sportsAdmin">
                        <option value="YES">YES (GOVT / MGMT)</option>
                        <option value="NO">NO</option>
                    </select>
                </div>
                <div class="col">
                    <label for="specifyGame">If YES, Specify the Game</label><span class="required">*</span>
                    <input type="text" class="form-control" id="specifyGame" placeholder="Specify Game" name="specifyGame" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-6">
                    <label for="medium">Medium of Instruction</label><span class="required">*</span>
                    <input type="text" class="form-control" id="medium" placeholder="Tamil/English/others" name="medium" required>
                </div>
            </div>
            <hr>

            <div class="row justify-content-center">
                <h3>Passport Information</h3>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="nriOrfor">NRI / Foreign Student</label><span class="required">*</span>
                    <input type="text" class="form-control" id="nriOrfor" placeholder="Name of the Country" name="nriOrfor" required>
                </div>
                <div class="col">
                    <label for="passNumber">If Yes, Passport Number</label><span class="required">*</span>
                    <input type="text" class="form-control" id="passNumber" placeholder="Passport No." name="passNumber" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-6">
                    <label for="passExpiry">Passport - Date of Expiry</label><span class="required">*</span>
                    <input type="text" class="form-control" id="passExpiry" placeholder="DD/MM/YYYY" name="passExpiry" required>
                </div>
            </div>
            <hr>

            <div class="row justify-content-center">
                <h3>Visa Information</h3>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="visaNum">Visa Number</label><span class="required">*</span>
                    <input type="text" class="form-control" id="visaNum" placeholder="Visa No." name="visaNum" required>
                </div>
                <div class="col">
                    <label for="visaType">Type of Visa</label><span class="required">*</span>
                    <input type="text" class="form-control" id="visaType" placeholder="Type of Visa" name="visaType" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-6">
                    <label for="visaExpiry">Visa - Date of Expiry</label><span class="required">*</span>
                    <input type="text" class="form-control" id="visaExpiry" placeholder="DD/MM/YYYY" name="visaExpiry" required>
                </div>
            </div>
            <hr>

            <div class="row justify-content-center">
                <h3>Academic Details</h3>
            </div>

            <table class="table table-borderless table-responsive">
                <thead>
                <tr>
                    <th scope="col">Qualification</th>
                    <th scope="col">School / College</th>
                    <th scope="col">Board / University</th>
                    <th scope="col">Reg.No</th>
                    <th scope="col">Degree</th>
                    <th scope="col">Specialization</th>
                    <th scope="col">Year of passing</th>
                    <th scope="col">% of Marks</th>
                    <th scope="col">Class</th>
                    <th scope="col">Grade</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">10th / Equivalent</th>
                    <td>
                        <input type="text" class="form-control" name="tenSchOrClg" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="tenBoard" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="tenReg" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="tenDeg" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="tenSpecial" required >
                    </td>
                    <td>
                        <input type="text" class="form-control" name="tenPass" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="tenMark" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="tenClass" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="tenGrade" required>
                    </td>
                </tr>

                <tr>
                    <th scope="row">12th / Equivalent</th>
                    <td>
                        <input type="text" class="form-control" name="tweSchOrClg" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="tweBoard" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="tweReg" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="tweDeg" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="tweSpecial" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="twePass" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="tweMark" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="tweClass" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="tweGrade" required>
                    </td>
                </tr>

                <tr>
                    <th scope="row">Diploma</th>
                    <td>
                        <input type="text" class="form-control" name="dipSchOrClg" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="dipBoard" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="dipReg" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="dipDeg" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="dipSpecial" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="dipPass" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="dipMark" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="dipClass" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="dipGrade" required>
                    </td>
                </tr>

                <tr>
                    <th scope="row">UG</th>
                    <td>
                        <input type="text" class="form-control" name="ugSchOrClg" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="ugBoard" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="ugReg" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="ugDeg" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="ugSpecial" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="ugPass" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="ugMark" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="ugClass" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="ugGrade" required>
                    </td>
                </tr>

                <tr>
                    <th scope="row">PG</th>
                    <td>
                        <input type="text" class="form-control" name="pgSchOrClg" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="pgBoard" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="pgReg" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="pgDeg" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="pgSpecial" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="pgPass" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="pgMark" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="pgClass" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="pgGrade" required>
                    </td>
                </tr>
                </tbody>
            </table>
            <hr>

            <table class="table table-borderless">
                <thead>
                <tr>
                    <th scope="col">12th / Equivalent</th>
                    <th scope="col">Maximum Marks</th>
                    <th scope="col">Marks Obtained</th>
                    <th scope="col">% of Marks</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">Maths</th>
                    <td>
                        <input type="text" class="form-control" name="mathMax" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="mathOb" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="mathPer" required>
                    </td>
                </tr>

                <tr>
                    <th scope="row">Physics</th>
                    <td>
                        <input type="text" class="form-control" name="phyMax" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="phyOb" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="phyPer" required>
                    </td>
                </tr>

                <tr>
                    <th scope="row">Chemistry</th>
                    <td>
                        <input type="text" class="form-control" name="chemMax" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="chemOb" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="chemPer" required>
                    </td>
                </tr>

                <tr>
                    <th scope="row">Total</th>
                    <td>
                        <input type="text" class="form-control" name="totMax" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="totOb" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="totPer" required>
                    </td>
                </tr>
                </tbody>
            </table>

            <div class="row justify-content-center">
                <h3>Parent Details</h3>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="fatherName">Father's Name</label><span class="required">*</span>
                    <input type="text" class="form-control" id="fatherName" placeholder="Father's Name" name="fatherName" required>
                </div>
                <div class="col">
                    <label for="motherName">Mother's Name</label><span class="required">*</span>
                    <input type="text" class="form-control" id="motherName" placeholder="Mother's Name" name="motherName" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="fatherQual">Father's Qualification</label><span class="required">*</span>
                    <input type="text" class="form-control" id="fatherQual" placeholder="Father's Qualification" name="fatherQual" required>
                </div>
                <div class="col">
                    <label for="motherQual">Mother's Qualification</label><span class="required">*</span>
                    <input type="text" class="form-control" id="motherQual" placeholder="Mother's Qualification" name="motherQual" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="fatherOcc">Father's Occupation</label><span class="required">*</span>
                    <input type="text" class="form-control" id="fatherOcc" placeholder="Father's Occupation" name="fatherOcc" required>
                </div>
                <div class="col">
                    <label for="motherOcc">Mother's Occupation</label><span class="required">*</span>
                    <input type="text" class="form-control" id="motherOcc" placeholder="Mother's Occupation" name="motherOcc" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="fatherAddCom">Father's Address of Firm / Company</label><span class="required">*</span>
                    <input type="text" class="form-control" id="fatherAddCom" placeholder="Father's Address of Firm / Company" name="fatherAddCom" required>
                </div>
                <div class="col">
                    <label for="motherAddCom">Mother's Address of Firm / Company</label><span class="required">*</span>
                    <input type="text" class="form-control" id="motherAddCom" placeholder="Mother's Address of Firm / Company" name="motherAddCom" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="fatherDis">Father's Designation</label><span class="required">*</span>
                    <input type="text" class="form-control" id="fatherDis" placeholder="Father's Designation" name="fatherDis" required>
                </div>
                <div class="col">
                    <label for="motherDis">Mother's Designation</label><span class="required">*</span>
                    <input type="text" class="form-control" id="motherDis" placeholder="Mother's Designation" name="motherDis" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="fatherMail">Father's Mail-ID</label><span class="required">*</span>
                    <input type="email" class="form-control" id="fatherMail" placeholder="Father's Mail-ID" name="fatherMail">
                </div>
                <div class="col">
                    <label for="motherMail">Mother's Mail-ID</label><span class="required">*</span>
                    <input type="email" class="form-control" id="motherMail" placeholder="Mother's Mail-ID" name="motherMail">
                </div>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="fatherCounCode">Father's Country Code</label><span class="required">*</span>
                    <input type="text" class="form-control" id="fatherCounCode" placeholder="Father's Country Code" name="fatherCounCode" required>
                </div>
                <div class="col">
                    <label for="motherCounCode">Mother's Country Code</label><span class="required">*</span>
                    <input type="text" class="form-control" id="motherCounCode" placeholder="Mother's Country Code" name="motherCounCode" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="fatherSTD">Father's STD Code</label><span class="required">*</span>
                    <input type="text" class="form-control" id="fatherSTD" placeholder="Father's STD Code" name="fatherSTD" required>
                </div>
                <div class="col">
                    <label for="motherSTD">Mother's STD Code</label><span class="required">*</span>
                    <input type="text" class="form-control" id="motherSTD" placeholder="Mother's STD Code" name="motherSTD" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="fatherLLN">Father's Land Line Number</label><span class="required">*</span>
                    <input type="text" class="form-control" id="fatherLLN" placeholder="Father's Land Line Number" name="fatherLLN" required>
                </div>
                <div class="col">
                    <label for="motherLLN">Mother's Land Line Number</label><span class="required">*</span>
                    <input type="text" class="form-control" id="motherLLN" placeholder="Mother's Land Line Number" name="motherLLN" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="fatherMN">Father's Mobile Number</label><span class="required">*</span>
                    <input type="text" class="form-control" id="fatherMN" placeholder="Father's Mobile Number" name="fatherMN" required>
                </div>
                <div class="col">
                    <label for="motherMN">Mother's Mobile Number</label><span class="required">*</span>
                    <input type="text" class="form-control" id="motherMN" placeholder="Mother's Mobile Number" name="motherMN" required>
                </div>
            </div>
            <hr>

            <div class="row justify-content-center">
                <h3>Contact Details</h3>
            </div>


            <div class="row form-group">
                <div class="col">
                    <div class="row justify-content-center">
                        <h5>Residential Address</h5>
                    </div>
                </div>
                <div class="col">
                    <div class="row justify-content-center">
                        <h5>Permanent Address</h5>
                    </div>
                </div>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="resPlot">Plot / Door No</label><span class="required">*</span>
                    <input type="text" class="form-control" id="resPlot" placeholder="Plot / Door No" name="resPlot" required>
                </div>
                <div class="col">
                    <label for="perPlot">Plot / Door No</label><span class="required">*</span>
                    <input type="text" class="form-control" id="perPlot" placeholder="Plot / Door No" name="perPlot" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="resStreet">Street Name</label><span class="required">*</span>
                    <input type="text" class="form-control" id="resStreet" placeholder="Street Name" name="resStreet" required>
                </div>
                <div class="col">
                    <label for="perStreet">Street Name</label><span class="required">*</span>
                    <input type="text" class="form-control" id="perStreet" placeholder="Street Name" name="perStreet" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="resArea">Area</label><span class="required">*</span>
                    <input type="text" class="form-control" id="resArea" placeholder="Area" name="resArea" required>
                </div>
                <div class="col">
                    <label for="perArea">Area</label><span class="required">*</span>
                    <input type="text" class="form-control" id="perArea" placeholder="Area" name="perArea" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="resCity">City</label><span class="required">*</span>
                    <input type="text" class="form-control" id="resCity" placeholder="City" name="resCity" required>
                </div>
                <div class="col">
                    <label for="perCity">City</label><span class="required">*</span>
                    <input type="text" class="form-control" id="perCity" placeholder="City" name="perCity" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="resDis">District</label><span class="required">*</span>
                    <input type="text" class="form-control" id="resDis" placeholder="District" name="resDis" required>
                </div>
                <div class="col">
                    <label for="perDis">District</label><span class="required">*</span>
                    <input type="text" class="form-control" id="perDis" placeholder="District" name="perDis" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col">
                    <label for="resCoun">Country</label><span class="required">*</span>
                    <input type="text" class="form-control" id="resCoun" placeholder="Country" name="resCoun" required>
                </div>
                <div class="col">
                    <label for="perCoun">Country</label><span class="required">*</span>
                    <input type="text" class="form-control" id="perCoun" placeholder="Country" name="perCoun" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="resState">State</label><span class="required">*</span>
                    <input type="text" class="form-control" id="resState" placeholder="State" name="resState" required>
                </div>
                <div class="col">
                    <label for="perState">State</label><span class="required">*</span>
                    <input type="text" class="form-control" id="perState" placeholder="State" name="perState" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="resPin">Pin code
                    </label><span class="required">*</span>
                    <input type="text" class="form-control" id="resPin" placeholder="Pin code" name="resPin" required>
                </div>
                <div class="col">
                    <label for="perPin">Pin code
                    </label><span class="required">*</span>
                    <input type="text" class="form-control" id="perPin" placeholder="Pin code" name="perPin" required>
                </div>
            </div>
            <hr>

            <div class="row justify-content-center">
                <h3>Boarding Point Details</h3>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="areaOrBus">Area / Bus Name</label><span class="required">*</span>
                    <input type="text" class="form-control" id="areaOrBus" placeholder="Area / Bus Name" name="areaOrBus" required>
                </div>
                <div class="col">
                    <label for="BP">Boarding Point (If hostel, fill as HOSTEL.)</label><span class="required">*</span>
                    <input type="text" class="form-control" id="BP" placeholder="Boarding Point" name="BP" required>
                </div>
            </div>
            <hr>

            <div class="row justify-content-center">
                <h3>Guardian Details</h3>
            </div>
            <div class="row justify-content-center">
                <h5 style="color: red;">If you are Day Scholar, fill all Guardian details as NA.</h5>
            </div>

            <div class="row form-group">
                <div class="col">
                    <div class="row justify-content-center">
                        <h5>Local Guardian 1</h5>
                    </div>
                </div>
                <div class="col">
                    <div class="row justify-content-center">
                        <h5>Local Guardian 2</h5>
                    </div>
                </div>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="Gua1Name">Name</label><span class="required">*</span>
                    <input type="text" class="form-control" id="Gua1Name" placeholder="Name" name="gua1Name" required>
                </div>
                <div class="col">
                    <label for="Gua2Name">Name</label><span class="required">*</span>
                    <input type="text" class="form-control" id="Gua2Name" placeholder="Name" name="gua2Name" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="Gua1Pro">Profession/Occpation</label><span class="required">*</span>
                    <input type="text" class="form-control" id="Gua1Pro" placeholder=Profession/Occpation" name="gua1Pro" required>
                </div>
                <div class="col">
                    <label for="Gua2Pro">Profession/Occpation</label><span class="required">*</span>
                    <input type="text" class="form-control" id="Gua2Pro" placeholder="Profession/Occpation" name="gua2Pro" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="Gua1Age">Age</label><span class="required">*</span>
                    <input type="text" class="form-control" id="Gua1Age" placeholder="Age" name="gua1Age" required>
                </div>
                <div class="col">
                    <label for="Gua2Age">Age</label><span class="required">*</span>
                    <input type="text" class="form-control" id="Gua2Age" placeholder="Age" name="gua2Age" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="Gua1LLN">Landline Number</label><span class="required">*</span>
                    <input type="text" class="form-control" id="Gua1LLN" placeholder="Landline Number" name="gua1LLN" required>
                </div>
                <div class="col">
                    <label for="Gua2LLN">Landline Number</label><span class="required">*</span>
                    <input type="text" class="form-control" id="Gua2LLN" placeholder="Landline Number" name="gua2LLN" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="Gua1MN">Mobile Number</label><span class="required">*</span>
                    <input type="text" class="form-control" id="Gua1MN" placeholder="Mobile Number" name="gua1MN" required>
                </div>
                <div class="col">
                    <label for="Gua2MN">Mobile Number</label><span class="required">*</span>
                    <input type="text" class="form-control" id="Gua2MN" placeholder="Mobile Number" name="gua2MN" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="Gua1AddHo">Address - Home</label><span class="required">*</span>
                    <input type="text" class="form-control" id="Gua1AddHo" placeholder="Address - Home" name="gua1AddHo" required>
                </div>
                <div class="col">
                    <label for="Gua2AddHo">Address - Home</label><span class="required">*</span>
                    <input type="text" class="form-control" id="Gua2AddHo" placeholder="Address - Home" name="gua2AddHo" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col">
                    <label for="Gua1AddOf">Address - Office</label><span class="required">*</span>
                    <input type="text" class="form-control" id="Gua1AddOf" placeholder="Address - Office" name="gua1AddOf" required>
                </div>
                <div class="col">
                    <label for="Gua2AddOf">Address - Office</label><span class="required">*</span>
                    <input type="text" class="form-control" id="Gua2AddOf" placeholder="Address - Office" name="gua2AddOf" required>
                </div>
            </div>
            <hr>

            <div class="row justify-content-center">
                <h3>Photos/Certificate Upload</h3>
            </div>
            <div class="row justify-content-center">
                <h5 style="color: red;">Upload Photos/Certificate in JPEG format.</h5>
            </div>
        
            <div class="row form-group">
                <div class="col">
                    <label for="studentPhoto">Student Photo</label><span class="required">*</span>
                    <input type="file" class="form-control-file" id="studentPhoto" name="studentPhoto" required>
                </div>
                <div class="col">
                    <label for="fatherPhoto">Father Photo</label><span class="required">*</span>
                    <input type="file" class="form-control-file" id="fatherPhoto" name="fatherPhoto" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col">
                    <label for="motherPhoto">Mother Photo</label><span class="required">*</span>
                    <input type="file" class="form-control-file" id="motherPhoto" name="motherPhoto" required>
                </div>
                <div class="col">
                    <label for="aadharPhoto">Aadhaar Photo</label><span class="required">*</span>
                    <input type="file" class="form-control-file" id="aadharPhoto" name="aadhaarPhoto" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col">
                    <label for="cc">Community Certificate</label>
                    <input type="file" class="form-control-file" id="cc" name="cc">
                </div>
                <div class="col">
                    <label for="tenC">10th Certificate</label><span class="required">*</span>
                    <input type="file" class="form-control-file" id="tenC" name="tenC" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col">
                    <label for="tweC">12th Certificate</label><span class="required">*</span>
                    <input type="file" class="form-control-file" id="tweC" name="tweC" required>
                </div>
                <div class="col">
                    <label for="allOd">Allotment Order (If Counselling)</label>
                    <input type="file" class="form-control-file" id="allOd" name="allOd">
                </div>
            </div>
            <div class="row form-group">
                <div class="col">
                    <label for="passC">Passport (If Available)</label>
                    <input type="file" class="form-control-file" id="passC" name="passC">
                </div>
            </div>

            <div class="row form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Submit</button>
            </div>

        </form>
    </div>



    </body>
</html>