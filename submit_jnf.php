<?php session_start(); ?>
<?php

    if(isset($_SESSION['company'])){
        $comid = $_SESSION['company'];
    }
    else {
        $comid = 0;
    }
?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>

<?php 
        $Organization = check_input($_POST['Organization']);
        $Buisness = check_input($_POST['Buisness']);
        $contact_details = check_input($_POST['contact_details']);
        $Name = check_input($_POST['Name']);
        $Designation = check_input($_POST['Designation']);
        $contact_number = check_input($_POST['contact_number']);
        $email = check_input($_POST['email']);
        $intrestedin = check_input($_POST['intrestedin']);
        $CGPA = check_input($_POST['CGPA']);
        $elegiblity = check_input($_POST['elegiblity']);
        $Infrastructural = check_input($_POST['Infrastructural']);
        $agreement = check_input($_POST['agreement']);
        $Profile = check_input($_POST['Profile']);
        $salary = check_input($_POST['salary']);
        $Allowance = check_input($_POST['Allowance']);
        $Perks = check_input($_POST['Perks']);
        $Location = check_input($_POST['Location']);
        $Joining = check_input($_POST['Joining']);
        $Insurance = check_input($_POST['Insurance']);
        $CTC = check_input($_POST['CTC']);
        $stock = check_input($_POST['stock']);
        $facility = check_input($_POST['facility']);
        $accomodation = check_input($_POST['accomodation']);
        


        $result = submit_jnf($Organization,$Buisness,$contact_details,$Name,$Designation,$contact_number,$email,$intrestedin,$CGPA,$elegiblity,$Infrastructural,$agreement,$Profile,$salary,$Allowance,$Perks,$Location,$Joining,$Insurance,$CTC,$stock,$facility,$accomodation,$comid);

        
        
        if($result){
            
            header("Location:fill_jnf.php?msg=Submitted");
            exit;
        }
        else {
            header("Location:fill_jnf.php?msg=Something went Wrong! Please Try again");
            exit;
        }




?>