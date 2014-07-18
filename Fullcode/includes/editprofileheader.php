<?php
    //To update profile
    if(isset($_SESSION["name"])){  
        $message = "<font color='#447fc8'>Update Profile</font>";
        $pc = 1;
        $name = $_SESSION["name"];
        $rollnum = $_SESSION["rollnum"];
        
        $details = getuserProfileDetails($rollnum);
        
        $name = check_input($details['name']);
        $birthDate = check_input($details['birthdate']);
        $sex = check_input($details['sex']);
        $alternateEmail = check_input($details['alternateEmail']);
        $currentsem = check_input($details['currentSemester']);
        $institute = check_input($details['institute']);
        $cgpa = check_input($details['cgpa']);
        $education = check_input($details['education']); 
        $technicalExp = check_input($details['technicalExperience']);
        $projects = check_input($details['projects']);
        $areaofint = check_input($details['areaOfIntrest']);
        

         
        if(isset($_POST['updateprofile'])){
            $name = check_input($_POST['name']);
            $birthDate = check_input($_POST['birthdate']);
            $sex = check_input($_POST['sex']); 
            $alternateEmail = check_input($_POST['alternateEmail']);
            $currentsem = check_input($_POST['currentsem']);
            $institute = check_input($_POST['institute']);
            $cgpa = check_input($_POST['cgpa']);
            $education = check_input($_POST['education']);
            $technicalExp = check_input($_POST['technicalExp']);
            $projects = check_input($_POST['projects']);
            $areaofint = check_input($_POST['areaofint']);
            $phoneNum = check_input($_POST['phoneNum']);
            
            if( $pc == 0 || ALLOW_PROFILE_EDIT == true ){
                $halfsubmit = 0;
            }
            else {
                $halfsubmit = 1;
            }
           
            $value = updateUserProfile($rollnum,$name,$phoneNum,$birthDate,$sex,$alternateEmail,$currentsem,$institute,$cgpa,$education,$technicalExp,$projects, $areaofint,$halfsubmit); 
            if ($value == 1) {
                header("Location:viewprofile.php?message=Updated");
                exit;
            }
            else{
                header("Location:editprofile.php?message=Error");
                exit;
            }
       }    
    }
//To save profile first time
    else if(isset($_SESSION["rollnum"])){  
        $message = "Complete your Profile to proceed";
        $pc = 0;
        $rollnum = $_SESSION["rollnum"];
        $name = "";
        $birthDate = "";
        $sex = ""; 
        $alternateEmail = "";
        $currentsem = "";
        $institute = "";
        $cgpa = "";
        $education = ""; 
        $technicalExp = "";
        $projects = "";
        $areaofint = "";
        $phoneNum = "";
    
        if(isset($_POST['updateprofile'])){
            $name = check_input($_POST['name']);
            $birthDate = check_input($_POST['birthdate']);
            $sex = check_input($_POST['sex']); 
            $alternateEmail = check_input($_POST['alternateEmail']);
            $currentsem = check_input($_POST['currentsem']);
            $institute = check_input($_POST['institute']);
            $cgpa = check_input($_POST['cgpa']);
            $education = check_input($_POST['education']);
            $technicalExp = check_input($_POST['technicalExp']);
            $projects = check_input($_POST['projects']);
            $areaofint = check_input($_POST['areaofint']);
            $phoneNum = check_input($_POST['phoneNum']);
            
           
            $value = saveUserProfile($rollnum,$name,$phoneNum,$birthDate,$sex,$alternateEmail,$currentsem,$institute,$cgpa,$education,$technicalExp,$projects, $areaofint);
            if ($value == 1) {
                $_SESSION['name'] = $name;
                header("Location:editprofile.php?message=Updated");
                exit;
            }
            else{
                header("Location:editprofile.php?message=Error");
                exit;
            }
       }
    }
    else {
        header("Location:index.php");
        exit;
    }
    if(isset($_GET['message'])){
               $message = $_GET['message'];
                $message = "<font color='#447fc8'>".$message."</font>";
           }
?>