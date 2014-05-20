<?php

    function check_input( $value ) {
		
        $value = addslashes(htmlentities($value));
       
		return $value;
	}
	
	function getuserProfileDetails($rollnum){
	
		
		$query = "SELECT * FROM studentsdata WHERE rollnum = '{$rollnum}' LIMIT 1" ;
		$result = mysql_query($query);
		
		$array = mysql_fetch_array($result);

		return $array;
		
	}
	
	
	
	function saveUserProfile( $rollnum,$name,$birthDate,$sex,$alternateEmail,$currentsem,$institute,$cgpa,$education,$technicalExp,$projects, $areaofint){
	
		
        if(strlen($name) == 0){ 
            header("Location:editprofile.php?message=Name cannot be Empty");
            exit;
        } 
        else {
            $query = "INSERT INTO studentsdata
                    (name,birthdate,sex,alternateEmail,currentSemester,institute,cgpa,
                    education,technicalExperience,projects,areaOfIntrest, modified_on,rollnum,isProfileComplete,isActive,added_on) 
                    VALUES ('{$name}','{$birthDate}','{$sex}','{$alternateEmail}','{$currentsem}','{$institute}',
                    '{$cgpa}','{$education}','{$technicalExp}','{$projects}','{$areaofint}', '{$currenttime}','{$rollnum}','1','1',NOW())";

            $result = mysql_query($query);

            if ($result) {
                $_SESSION['name'] = $name;
                header("Location:mydashboard.php");
                exit;
            }
            else{
                header("Location:editprofile.php?message=Error");
                exit;
            }
        }
        
		
	}
    
    
	
	function updateUserProfile( $rollnum,$name,$birthDate,$sex,$alternateEmail,$currentsem,$institute,$cgpa,$education,$technicalExp,$projects, $areaofint){
	
		//$currenttime = date('Y-m-d');
       // $currenttime = date("M jS, Y", strtotime($currenttime));
		$query = "UPDATE studentsdata SET 
                name='{$name}',
                birthdate='{$birthDate}',
                sex='{$sex}',
                alternateEmail='{$alternateEmail}',
                currentSemester='{$currentsem}',
                institute='{$institute}',
                cgpa='{$cgpa}',
                education='{$education}',
                technicalExperience='{$technicalExp}',
                projects='{$projects}',
                areaOfIntrest='{$areaofint}',
                modified_on = NOW()
                WHERE rollnum = '{$rollnum}' ";
		$result = mysql_query($query);
        
        if (mysql_affected_rows() == 1) {
            header("Location:editprofile.php?message=Updated");
            exit;
        }
        else{
            header("Location:editprofile.php?message=Error");
            exit;
        }
        
		
	}
	
	
	function authenticateUser( $rollnum,$pass ) {
        
       
        $_SESSION = array();
		
        if(strlen($rollnum) == 10 ){ // This check is temporary, this will be soon replaced by the Authentication From the MAIL.
			     $_SESSION['rollnum']= $rollnum;
            
                $result = checkisProfileComplete($rollnum);
            
                
                if($result){
                    
                     header("Location:mydashboard.php");
                     exit;
                }
                else{
                    header("Location:editprofile.php");
                    exit;
                }
                
               
            }
        else {
            $message = "invalid rollnum";
            return $message;
        }
        
            
		
	}
    function authenticateAdmin( $rollnum , $pass ){
        
        
        //start new session -->
        $_SESSION = array();
		
        if(strlen($rollnum) == 10 ){ // This check is temporary, this will be soon replaced by the Authentication From the MAIL.
			     $_SESSION['Adminrollnum']= $rollnum;
                     header("Location:admin-dashboard.php");
                     exit;
            }
        else {
            $message = "invalid rollnum";
            return $message;
        }
        
    }


    function checkisProfileComplete($rollnum){
        $query = "SELECT isProfileComplete , name FROM studentsdata WHERE rollnum = '{$rollnum}'";
        $result = mysql_query($query);
        
        if (mysql_num_rows($result) == 1){
            $fuser = mysql_fetch_array($result);
            if( $fuser['isProfileComplete'] == 0 ){
                return 0;
            }
            else if ( $fuser['isProfileComplete'] == 1 ){
                $_SESSION['name'] = $fuser['name'];
                return 1;
            }
        } 
        else {
            return 0;
        }
    }
	
   
	

    function get_companies($value,$rollnum,$start,$end){
        
        if($value == 'Applied'){
            
            $query = "SELECT * FROM companies WHERE id IN (SELECT companyid FROM relationship WHERE StuRollNum = '".$rollnum."' AND isDeleted = '0') ORDER BY id LIMIT {$start},{$end} ";
            
            $result = mysql_query($query);
            
            return $result;
            
            
        }
        else if($value == 'Unapplied'){
             
            $query = "SELECT * FROM companies WHERE id NOT IN (SELECT companyid FROM relationship WHERE StuRollNum = '".$rollnum."' AND isDeleted = '0') LIMIT {$start},{$end} ";
            
            $result = mysql_query($query);
            
            return $result;
        }
        else if($value == 'Inactive'){
            $date = date("Y-m-d");
            $query = "SELECT * FROM companies WHERE isDeleted = 0 AND lastDate < ".$date." LIMIT {$start},{$end} ";
            $result = mysql_query($query);

            return $result;
        }
        else if($value == 'Active'){
            $date = date("Y-m-d");
            $query = "SELECT * FROM companies WHERE (isDeleted = 0 AND lastDate >= ".$date." ) LIMIT {$start},{$end} ";
            $result = mysql_query($query);
            //echo $query;
            return $result;
        }
        else if($value == 'All'){
            $query = "SELECT * FROM companies WHERE isDeleted = 0 LIMIT {$start},{$end} ";
            $result = mysql_query($query);

            return $result;
        }
        else {
            $query = "SELECT * FROM companies WHERE isDeleted = 2 LIMIT {$start},{$end} ";
            $result = mysql_query($query);

            return $result;
        }
    }

    function checkappliedornot($companyid,$rollnum){
        $query = "SELECT * FROM relationship WHERE StuRollNum = '{$rollnum}' AND companyid = '{$companyid}' AND isDeleted = '0'";
        $result = mysql_query($query);
        $array = mysql_fetch_array($result);
        if (mysql_num_rows($result) == 1 ){
            return 1; // Applied.
        }
        else {
            return 0; // unnapplid 
        }
    }

    
    function checkcgpa($companyid,$rollnum){
        $query = " SELECT cgpa FROM studentsdata WHERE rollnum = '{$rollnum}' LIMIT 1";
        $result1 = mysql_query($query);
        
        $query = " SELECT mincgpa FROM companies WHERE id = '{$companyid}' LIMIT 1";
        $result2 = mysql_query($query);
        
        $array1 = mysql_fetch_array($result1);
        $array2 = mysql_fetch_array($result2);
        
        if ( $array1['cgpa'] >= $array2['mincgpa'] ){
            return 1; // Applicable.
        }
        else {
            return 0; // unnapplicable
        }
    }

    function checklastdate($companyid){
        $date = date("Y-m-d");
        $query = "SELECT lastDate FROM companies WHERE id = '".$companyid."' LIMIT 1";
        $result = mysql_query($query);
        $array = mysql_fetch_array($result);
        if ( $array['lastDate'] >= $date ){
            
            return 1; // allowed.
            
        }
        else {
            return 0; // not allowed 
        }
    }


    function get_students_list($id){
        $query = "SELECT * FROM studentsdata WHERE rollnum IN (SELECT StuRollNum FROM relationship WHERE isDeleted = 0 AND companyid = '{$id}'  )";
        $result = mysql_query($query);
        return $result;
    }

?>
