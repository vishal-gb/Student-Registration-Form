<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
// database connection
include('config.php');

$added = false;


//Add  new student code 

if(isset($_POST['submit'])){
	$Initial = $_POST['Intial'];
	$Name = $_POST['Name'];
	$Course = $_POST['Course'];
	$Department = $_POST['Department'];
	$Batch = $_POST['Batch'];
	$Roll_No = $_POST['Roll_No'];
	$A_U_NO = $_POST['A_U_NO'];
	$Section = $_POST['Section'];
	$Gender = $_POST['Gender'];
	$Food = $_POST['Food'];
	$Blood_Group = $_POST['Blood_group'];
	$Aadhaar_No = $_POST['Aadhaar_No'];
	$Student_Mail_ID = $_POST['Student_Mail_ID'];
	$Date_of_Birth = $_POST['Date_of_Birth'];
	$Caste = $_POST['Caste'];
	$Community = $_POST['Community'];
	$Community_Others = $_POST['Community_Others'];
        $Parent_Annual_Income = $_POST['Parent_Annual_Income'];
	$Religion = $_POST['Religion'];
	$Nationality = $_POST['Nationality'];
	$Mother_Tongue = $_POST['Mother_Tongue'];
	$Member_Of = $_POST['Member_Of'];
	$Date_Of_Admission = $_POST['Date_Of_Admission'];
	$Admission_Allotment = $_POST['Admission_Allotment'];
	$Sports_Admission1 = $_POST['Sports_Admission1'];
	$Sports_Admission2 = $_POST['Sports_Admission2'];
	$Overall_Rank = $_POST['Overall_Rank'];
	$Community_Rank = $_POST['Community_Rank'];
	$Sports_Admission3 = $_POST['Sports_Admission3'];
	$Game_Name = $_POST['Game_Name'];
	$Medium_Of_Instruction = $_POST['Medium_Of_Instruction'];
	$CasteMedium_Of_Instruction_Others = $_POST['Medium_Of_Instruction_Others'];
	$Country_Name = $_POST['Country_Name'];
	$passport_number = $_POST['passport_number'];
	$passport_expiry = $_POST['passport_expiry'];
	$visa_number = $_POST['visa_number'];
	$type_of_visa = $_POST['type_of_visa'];
	$visa_expiry = $_POST['visa_expiry'];
	$tenth_school = $_POST['10_school'];
	$tenth_board = $_POST['10_board'];
	$tenth_reg = $_POST['10_reg'];
	$tenth_yearofpassing = $_POST['10_yearofpassing'];
	$tenth_markpercent = $_POST['10_markpercent'];
	$twelveth_school = $_POST['12_school'];
	$twelveth_board = $_POST['12_board'];
	$twelveth_reg = $_POST['12_reg'];
	$twelveth_yearofpassing = $_POST['12_yearofpassing'];
	$twelveth_markpercent = $_POST['12_markpercent'];
	$max_mathmarks = $_POST['max_mathmarks'];
	$obtained_mathmarks = $_POST['obtained_mathmarks'];
        $percent_mathmarks = $_POST['percent_mathmarks'];
	$max_physicsmarks = $_POST['max_physicsmarks'];
	$obtained_physicsmarks = $_POST['obtained_physicsmarks'];
	$percent_physicsmarks = $_POST['percent_physicsmarks'];
	$max_chemistrymarks = $_POST['max_chemistrymarks'];
	$obtained_chemistrymarks = $_POST['obtained_chemistrymarks'];
	$percent_chemistrymarks = $_POST['percent_chemistrymarks'];
	$max_totalmarks = $_POST['max_totalmarks'];
	$obtained_totalmarks = $_POST['obtained_totalmarks'];
	$percent_totalmarks = $_POST['percent_totalmarks'];
	$father_name = $_POST['father_name'];
	$mother_name = $_POST['mother_name'];
	$father_qualification = $_POST['father_qualification'];
	$mother_qualification = $_POST['mother_qualification'];
	$father_occupation = $_POST['father_occupation'];
	$mother_occupation = $_POST['mother_occupation'];
	$father_addressofcompany = $_POST['father_addressofcompany'];
        $mother_addressofcompany = $_POST['mother_addressofcompany'];
	$father_designation = $_POST['father_designation'];
	$mother_designation = $_POST['mother_designation'];
	$father_mail = $_POST['father_mail'];
	$mother_mail = $_POST['mother_mail'];
	$father_countrycode = $_POST['father_countrycode'];
	$mother_countrycode = $_POST['mother_countrycode'];
	$father_stdcode = $_POST['father_stdcode'];
	$mother_stdcode = $_POST['mother_stdcode'];
	$father_landline = $_POST['father_landline'];
	$mother_landline = $_POST['mother_landline'];
	$father_moblie = $_POST['father_mobile'];
	$mother_mobile = $_POST['mother_mobile'];
	$residence_doorno = $_POST['residence_doorno'];
	$permanent_doorno = $_POST['permanent_doorno'];
	$residence_streetname = $_POST['residence_streetname'];
	$permanent_streetname = $_POST['permanent_streetname'];$Initial = $_POST['Intial'];
	$residence_area = $_POST['residence_area'];
	$permanent_area = $_POST['permanent_area'];
	$residence_city = $_POST['residence_cityr'];
	$permanent_city = $_POST['permanent_city'];
	$residence_district = $_POST['residence_district'];
	$permanent_district = $_POST['permanent_district'];
	$residence_country = $_POST['residence_country'];
	$permanent_country = $_POST['permanent_country'];
	$residence_state = $_POST['residence_state'];
	$permanent_state = $_POST['permanent_state'];
	$residence_pincode = $_POST['residence_pincode'];
	$permanent_pincode = $_POST['permanent_pincode'];
	$dayscholar_area = $_POST['dayscholar_area'];
	$dayscholar_boardingpoint = $_POST['dayscholar_boardingpoint'];
	$guardian1_name = $_POST['guardian1_name'];
	$guardian2_name = $_POST['guardian2_name'];
        $guardian1_occupation = $_POST['guardian1_occupation'];
	$guardian2_occupation = $_POST['guardian2_occupation'];
	$guardian1_age = $_POST['guardian1_age'];
	$guardian2_age = $_POST['guardian2_age'];
	$guardian1_dob = $_POST['guardian1_dob'];
	$guardian2_dob = $_POST['guardian2_dob'];
	$guardian1_landline = $_POST['guardian1_landline'];
	$guardian2_landline = $_POST['guardian2_landline'];
	$guardian1_mobile = $_POST['guardian1_mobile'];
	$guardian2_mobile = $_POST['guardian2_mobile'];
	$guardian1_homeaddress = $_POST['guardian1_homeaddress'];
	$guardian2_homeaddress = $_POST['guardian2_homeaddress'];
	$guardian1_officeaddress = $_POST['guardian1_officeaddress'];
	$guardian2_officeaddress = $_POST['guardian2_officeaddress'];
	$student_photo = $_POST['student_photo'];
	$father_photo = $_POST['father_photo'];
	$mother_photo = $_POST['mother_photo'];
        $aadhaar_photo = $_POST['aadhaar_photo'];
	$community_certificate = $_POST['community_certificate'];
	$tenth_certificate = $_POST['10_certificate'];
	$twelveth_certificate = $_POST['12_certificate'];

	//image upload

	$msg = "";
	$image = $_FILES['image']['name'];
	$target = "upload_images/".basename($image);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

  	$insert_data = "INSERT INTO student_data(Initial, Name, Course, Department, Batch, Roll_No, A_U_NO, Section, Gender, Food, Blood_Group, Aadhaar_No, Student_MailID, Date_of_Birth, Caste, Community, Community_Others,Parent_Annual_Income,Religion,Nationality ,Mother_Tongue, Member_Of, Date_Of_Admission, Admission_Allotment, Sports_Admission1, Sports_Admission2, Overall_Rank, Community_Rank,Sports_Admission3, Game_Name, Medium_Of_Instruction, Medium_Of_Instruction_Others, Country_Name, passport_number, passport_expiry, visa_number, type_of_visa, visa_expiry,tenth_school, tenth_board, tenth_reg, tenth_yearofpassing, tenth_markpercent, twelveth_school, twelveth_board, twelveth_reg, twelveth_yearofpassing, twelveth_markpercent,max_mathmarks, obtained_mathmarks, percent_mathmarks, max_physicsmarks, obtained_physicsmarks, percent_physicsmarks, max_chemistrymarks, obtained_chemistrymarks, percent_chemistrymarks, max_totalmarks,obtained_totalmarks, percent_totalmarks, father_name, mother_name, father_qualification, mother_qualification, father_occupation, mother_occupation,father_addressofcompany, mother_addressofcompany, father_designation, mother_designation, father_mail, mother_mail, father_countrycode, mother_countrycode,father_stdcode, mother_stdcode, father_landline, mother_landline, father_moblie, mother_mobile, residence_doorno, permanent_doorno,residence_streetname, permanent_streetname, residence_area, permanent_area, residence_city, permanent_city, residence_district, permanent_district,residence_country, permanent_country, residence_state, permanent_state, residence_pincode, permanent_pincode, dayscholar_area, dayscholar_boardingpoint,guardian1_name, guardian2_name, guardian1_occupation, guardian2_occupation, guardian1_age, guardian2_age, guardian1_dob, guardian2_dob,guardian1_landline, guardian2_landline, guardian1_mobile, guardian2_mobile, guardian1_homeaddress, guardian2_homeaddress, guardian1_officeaddress, guardian2_officeaddress,student_photo, father_photo, mother_photo, aadhaar_photo, community_certificate, tenth_certificate, twelveth_certificate) VALUES ('$u_card','$u_f_name','$u_l_name','$u_father','$u_aadhar','$u_birthday','$u_gender','$u_email','$u_phone','$u_state','$u_dist','$u_village','$u_police','$u_pincode','$u_mother','$u_family','$u_staff_id','$image',NOW())";
  	$run_data = mysqli_query($con,$insert_data);

  	if($run_data){
		  $added = true;
  	}else{
  		echo "Data not insert";
  	}

}

?>