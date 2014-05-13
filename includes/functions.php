<?php
	/*
	function getuserProfileDetails($rollno){
	
		$rollno = "'".$rollno."'";
		$query = "SELECT * FROM studentsdata WHERE rollno = ".$rollno." WHERE isDeleted = 0 LIMIT 1" ;
		$result = mysql_query($query);
		
		$array = mysql_fetch_array($result);

		return $array;
		
	}
	
	
	
	function saveUserProfile( $rollnum,$name,$CGPA,$age,$sex,$qualifications,$institute,$alternareEmailid,$currentSemester){
	
		
		$query = "INSERT INTO studentsdata (rollnum ,name ,CGPA,institute ,age ,sex ,alternareEmailid ,CurrnetSemester,isProfileComplete  ) 
					VALUES ( '{$rollno}','{$name}','{$CGPA}','{$institute}','{$Age}','{$Sex}','{$alternareEmailid}','{$currentSemester}','1'  ) ";
		$result = mysql_query($query);
		
		$array = mysql_fetch_array($result);

		return $array;
		
	}
	
	function updateUserProfile( $rollno,$name,$cgpa,$age,Sex,qualifications,$institute,$alternareEmailid,$currentSemester){
	
		
		$query = "UPDATE studentsdata SET (name ,CGPA,institute ,age ,sex ,alternareEmailid ,CurrnetSemester ) 
					= ('{$name}','{$CGPA}','{$institute}','{$Age}','{$Sex}','{$alternareEmailid}','{$currentSemester}'  ) WHERE rollno = '.$rollno.'";
		$result = mysql_query($query);
		if($result){
			//added
		}
		else {
			//failed
		}
		
	}
	
	*/
	function authenticateUser( $rollnum,$pass ) {
        
        $_SESSION = array();
		
        if(strlen($rollnum) == 10 ){
			     $_SESSION['name']= $rollnum;
                
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
