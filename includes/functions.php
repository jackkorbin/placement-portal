<?php

    function check_input( $value ) {
		/* $magic_quotes_active = get_magic_quotes_gpc();
		$new_enough_php = function_exists( "mysql_real_escape_string" ); // i.e. PHP >= v4.3.0
		if( $new_enough_php ) { // PHP v4.3.0 or higher
			// undo any magic quote effects so mysql_real_escape_string can do the work
			if( $magic_quotes_active ) { $value = stripslashes( $value ); }
			
		} else { // before PHP v4.3.0
			// if magic quotes aren't already on then add slashes manually
			if( !$magic_quotes_active ) { $value = addslashes( $value ); }
			// if magic quotes are active, then the slashes already exist
		}
        */
        $value = htmlentities($value);
      // $value = mysql_real_escape_string( $value );
       
		return $value;
	}
	
	function getuserProfileDetails($rollnum){
	
		
		$query = "SELECT * FROM studentsdata WHERE rollnum = '{$rollnum}' LIMIT 1" ;
		$result = mysql_query($query);
		
		$array = mysql_fetch_array($result);

		return $array;
		
	}
	
	/*
	
	function saveUserProfile( $rollnum,$name,$CGPA,$age,$sex,$qualifications,$institute,$alternareEmailid,$currentSemester){
	
		
		$query = "INSERT INTO studentsdata (rollnum ,name ,CGPA,institute ,age ,sex ,alternareEmailid ,CurrnetSemester,isProfileComplete  ) 
					VALUES ( '{$rollno}','{$name}','{$CGPA}','{$institute}','{$Age}','{$Sex}','{$alternareEmailid}','{$currentSemester}','1'  ) ";
		$result = mysql_query($query);
		
		$array = mysql_fetch_array($result);

		return $array;
		
	}
    
    */
	
	function updateUserProfile( $rollnum,$name,$birthDate,$sex,$alternateEmail,$currentsem,$institute,$cgpa,$education,$technicalExp,$projects, $areaofint){
	
		$currenttime = date('Y-m-d');
        $currenttime = date("M jS, Y", strtotime($currenttime));
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
                modified_on = '{$currenttime}'
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
		
        if(strlen($rollnum) == 10 ){
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
        } else {
            return 0;
        }
    }
	
    function get_announcements(){
        $query = "SELECT * FROM announcements WHERE isActive = 1";
		$result = mysql_query($query);
		
		return $result;
    }
	

    function get_companies(){
        $query = "SELECT * FROM companies WHERE isDeleted = 0";
		$result = mysql_query($query);
		
		return $result;
    }

    function checkappliedornot($companyid,$rollnum){
        $query = "SELECT * FROM relationship WHERE StuRollNum = '{$rollnum}' AND companyid = '{$companyid}'";
        $result = mysql_query($query);
        $array = mysql_fetch_array($result);
        if (mysql_num_rows($result)==1){
            
            if( $array['isActive'] == 1 ){
                return 1; // Applied.
            }
            else {
                return 2; // unapplied but not First time.. has applied earlier
            }
            
        }
        else {
            return 0; // unnapplid and First time entry
        }
    }
	/*
	
	
	function getCompanyList(){
		$query = " SELECT * FROM companies WHERE isDeleted = 0";
		$result = mysql_query($query);
		return $result;
	}	
	
	
	function addCompany($companyid,$name,$description,$CGPA){
		
		$query = " INSERT INTO companies ( companyid,name,description ,mincgpa,isActive  ) VALUES ( '{companyid}','{$name}', '{$description}','{$CGPA}','1' ) ";
		$result = mysql_query($query);
		if($result){
			//added
		}
		else {
			//failed
		}
	}
	
	function applyToCompany(  $StuRollNum, $companyid){
		$query = " INSERT INTO relationship ( StuRollNum,companyid ,isActive  ) VALUES ( '{$StuRollNum}', '{$companyid}','1' ) ";
		$result = mysql_query($query);
		if($result){
			//applied
		}
		else {
			//failed
		}
	}
	
	function unapplyToCompany( $companyid, $StuRollNum ){
		$query = " DELETE FROM relationship WHERE StuRollNum = '.$StuRollNum.' and companyid = '.$companyid.' ";
		$result = mysql_query($query);
		if($result){
			//unapplied
		}
		else {
			//failed
		}
	}
	
	function UpdateCompanyDetails($companyid,$name,$description,$mincgpa){
		$query = " UPDATE relationship SET (name,description,mincgpa)  = ('{$name}','{$description}','{$mincgpa}') WHERE companyid= '.$companyid.' ";
		$result = mysql_query($query);
		if($result){
			//unapplied
		}
		else {
			//failed
		}
	
	}
	
	function removeComapny($companyid){
		
		$query = " DELETE FROM companies WHERE companyid= '.$companyid.' ";
		$result = mysql_query($query);
		if($result){
			//unapplied
		}
		else {
			//failed
		}

	}
	
	function AddAnnouncements($annid ,$anntext){
		
		$query = " INSERT INTO announcements ( annid,anntext ) VALUES ( '{$annid}','{$anntext}' ) ";
		$result = mysql_query($query);
		if($result){
			//unapplied
		}
		else {
			//failed
		}
	
	}
	
	function delAnnouncements($annid){
		
		$query = " DELETE FROM announcements WHERE annid='.$annid.'";
		$result = mysql_query($query);
		if($result){
			//unapplied
		}
		else {
			//failed
		}
	}
	
	function Addadmin($Sturollnum){
	
		$query = " INSERT INTO adminlogin (Sturollnum, isActive ) VALUES ('{$Sturollnum}','1') ";
		$result = mysql_query($query);
		if($result){
			//unapplied
		}
		else {
			//failed
		}
	
	}
	
	function RemoveAdmin($Sturollnum){
	
		$query = " DELETE FROM adminlogin WHERE Sturollnum = '.$Sturollnum.'";
		$result = mysql_query($query);
		if($result){
			//unapplied
		}
		else {
			//failed
		}
	
	}
    */

?>
