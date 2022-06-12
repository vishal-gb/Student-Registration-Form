<?php
    require 'dbconnect.php';
    session_start();

    if (isset($_POST['submit']))
    {
        $clginfo = $_POST['clginfo'];
        $name = $_POST['name'];
        $initial = $_POST['initial'];
        $section = $_POST['section'];
        $rollno = $_POST['rollno'];
                

        


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


        $sql = "INSERT INTO information VALUES ('$clginfo', '$name', '$initial', '$section',
            '$rollno', '$studentphoto', '$fatherphoto', '$motherphoto', '$aadharphoto', '$communitycert', '$tenthcert',
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

        <form action="viewpdf.php" method="post" enctype="multipart/form-data">
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
    

            <div class="row form-group">
                <div class="col">
                    <label for="rollno">Roll Number</label><span class="required">*</span>
                    <input type="text" class="form-control" id="rollno" placeholder="Roll No." name="rollno" required>
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