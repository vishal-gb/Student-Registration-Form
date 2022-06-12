<?php
    require 'dbconnect.php';
    mysqli_select_db($scon, 'crud');
    if(isset($_POST['export'])){
    $sql = "select * from information";
    $setRec = mysqli_query($scon, $sql);
    $columnHeader = '';
    $columnHeader = "College Name" . "\t" ."Name" . "\t" . "Initial" . "\t" . "Section" . "\t"."Gender" . "\t" . "Course" . "\t" .
        "Food" . "\t"."Department" . "\t" . " Blood Group" . "\t" . "Batch" . "\t"." Aadhaar Number" . "\t" . "Roll Number" . "\t" . "Student Phone Number" ."\t"."Student E-mail".
        "\t"."Date of Birth" . "\t" . "Caste" . "\t" . "Community" . "\t"."Annual Parent Income" . "\t" . "Religion" . "\t" . "Nationality* " . "\t"."Mother Tongue" . "\t" . "Members of" . "\t" . "Date of Adminssion" .
        "\t"."Admission Allotment" . "\t" . "Admission Type" . "\t" . " Admission Category" . "\t"."Overall Rank" . "\t" . "Community Rank" . "\t" . "Sports Admission" . "\t"."If Yes Specify the Game" . "\t" . "Medium of Instruction" . "\t" . "NRI / Foreign Student" .
        "\t"."If Yes Passport Number" . "\t" . "Passport - Date of Expiry" . "\t" . "Visa Number" . "\t"."Type of Visa" . "\t" . "Visa - Date of Expiry" . "\t" . "10th / Equivalent School / College". "\t"."10th / Equivalent Board / University" . "\t" . "10th / Equivalent Reg.No" . "\t" . "10th / Equivalent Degree" .
        "\t"."10th / Equivalent Specialization" . "\t" . "10th / Equivalent Year of passing" . "\t" . "10th / Equivalent % of Marks" . "\t"."10th / Equivalent Class" . "\t" . "10th / Equivalent Grade" . "\t" . "12th / Equivalent School / College" . "\t"."Board / University" . "\t" . "Reg.No" . "\t" . "Degree" .
        "\t"."Specialization" . "\t" . "Year of passing" . "\t" . "% of Marks" . "\t"."Class" . "\t" . "Grade" . "\t" . "Diploma School / College" . "\t"."Board / University" . "\t" . "Reg.No" . "\t" . "Degree" .
        "\t"."Specialization" . "\t" . "Year of passing" . "\t" . "% of Marks" . "\t"."Class" . "\t" . "Grade" . "\t" . "UG School / College" . "\t"."Board / University" . "\t" . "Reg.No" . "\t" . "Degree" .
        "\t"."Specialization" . "\t" . "Year of passing" . "\t" . "% of Marks" . "\t"."Class" . "\t" . "Grade" . "\t" . "PG School / College" . "\t"."Board / University" . "\t" . "Reg.No" . "\t" . "Degree" .
        "\t"."Specialization" . "\t" . "Year of passing" . "\t" . "% of Marks" . "\t". "Class" . "\t" . "Grade" . "\t" . "Maths Maximum Marks" . "\t"."Marks Obtained" . "\t" . "% of Marks" . "\t" . "Physics Maximum Marks" .
        "\t"."Marks Obtained" . "\t" . "% of Marks" . "\t" . "Chemistry Maximum Marks" . "\t"."Marks Obtained" . "\t" . "% of Marks" . "\t" . "Total Maximum Marks" . "\t"."Marks Obtained" . "\t" . "% of Marks" . "\t" . " Father's Name" .
        "\t"." Mother's Name" . "\t" . "Father's Qualification" . "\t" . "Mother's Qualification" . "\t"."Father's Occupation" . "\t" . "Mother's Occupation*" . "\t" . "Father's Address of Firm / Company" . "\t"."Mother's Address of Firm / Company" . "\t" . "Father's Designation" . "\t" . "Mother's Designation" .
        "\t"." Father's Mail-ID" . "\t" . " Mother's Mail-ID" . "\t" . " Father's Country Code" . "\t"." Mother's Country Code" . "\t" . " Father's STD Code" . "\t" . " Mother's STD Code" . "\t"." Father's Land Line Number" . "\t" . " Mother's Land Line Number" . "\t" . " Father's Mobile Number" .
        "\t"." Mother's Mobile Number" . "\t" . "Residential Address  Plot / Door No" . "\t" . "Permanent Address  Plot / Door No" . "\t"."Residential Address Street Name" . "\t" . "Permanent Address Street Name" . "\t" . "Residential Address Area" . "\t"."Permanent Address Area" . "\t" . "Residential Address City" . "\t" . "Permanent Address City" . "\t"."Residential Address District" . "\t" . "Permanent Address District" . "\t" . "Residential Address Country" . "\t"."Permanent Address Country" . "\t" . "Residential Address State" . "\t" . "Permanent Address State" . "\t"."Residential Address Pin code " . "\t" . "Permanent Address Pin code " . "\t" . "Area / Bus Name" .
        "\t"."Boarding Point" . "\t" . "Local Guardian 1 Name" . "\t" . "Local Guardian 2 Name" . "\t"."Local Guardian 1 Profession/Occupation" . "\t" . "Local Guardian 2 Profession/Occupation" . "\t" . "Local Guardian 1 Age" . "\t"."Local Guardian 2 Age" . "\t" . "Local Guardian 1 Landline Number" . "\t" . "Local Guardian 2 Landline Number" .
        "\t"."Local Guardian 1 Mobile Number" . "\t" . "Local Guardian 2 Mobile Number" . "\t" . "Local Guardian 1 Address - Home" . "\t"."Local Guardian 2 Address - Home" . "\t" . "Local Guardian 1 Address - Office" . "\t" . "Local Guardian 2 Address - Office" . "\t". "Student Photo". "\t". "Father Photo". "\t". "Mother Photo". "\t". "Aadhaar Photo". "\t". "Community Photo". "\t". "10th Certificate Photo". "\t". "Student Photo". "\t". "12th Certificate Photo". "\t". "Allotment Order". "\t". "Passport(If Available)";
    $setData = '';
    while    ($rec = mysqli_fetch_row($setRec)) {
        $rowData = '';
        foreach ($rec as $value) {
            $value = '"' . $value . '"' . "\t";
            $rowData .= $value;
        }
        $setData .= trim($rowData) . "\n";
    }

    header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=User_Detail.xls");
    header("Pragma: no-cache");
    header("Expires: 0");

    echo ucwords($columnHeader) . "\n" . $setData . "\n";
    }
    ?>


