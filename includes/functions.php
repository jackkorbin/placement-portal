<?php
	
	function getuserProfileDetails(rollno){
	
		$rollno = "'".$rollno."'";
		$query = "SELECT * FROM studentsdata WHERE rollno = ".$rollno." WHERE isDeleted = 0 LIMIT 1" ;
		$result = mysql_query($query);
		
		$array = mysql_fetch_array($result);

		return $array;
		
	}
	
	
	
	function saveUserProfile( $rollno,$name,CGPA,Age,Sex,qualifications,$institute,$alternareEmailid,$currentSemester){
	
		
		$query = "INSERT INTO studentsdata (rollnum ,name ,CGPA,institute ,age ,sex ,alternareEmailid ,CurrnetSemester,isProfileComplete  ) 
					VALUES ( '{$rollno}','{$name}','{$CGPA}','{$institute}','{$Age}','{$Sex}','{$alternareEmailid}','{$currentSemester}','1'  ) ";
		$result = mysql_query($query);
		
		$array = mysql_fetch_array($result);

		return $array;
		
	}
	
	function updateUserProfile( $rollno,$name,CGPA,Age,Sex,qualifications,$institute,$alternareEmailid,$currentSemester){
	
		
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
	
	
	function authenticateUser( $rollnum,$pass ) {
	
		return 1;
		
	}
	
	
	
	
	
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

?>
