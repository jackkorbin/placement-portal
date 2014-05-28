<?php //require_once('info.php'); ?>

<?php


// General + USER functions -->


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
                return 1;
            }
            else{
                return 0;
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
            return 1;
        }
        else{
            return 0;
        }
	}
	
	function authenticateUser( $rollnum,$pass ) {
        $_SESSION = array();

        if(strlen($rollnum) == 10 ){ // This check is temporary, this will be soon replaced by the Authentication From the MAIL.
            $_SESSION['rollnum']= $rollnum;
            $query = " SELECT * FROM adminlogin WHERE admRollNum = '{$rollnum}' AND isDeleted = 0 LIMIT 1";
            $result = mysql_query($query);
            if( mysql_num_rows($result) == 1 ) { // check if this is admin? if yes.. make its session!
               $value = add_login_admin_logger($rollnum);
               if( $value == 1 ){
                   $_SESSION['Adminrollnum']= $rollnum;
               }
            }

            $result = checkisProfileComplete($rollnum);
            if($result){
                 return 1;
            }
            else{
                return 0;
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
        else {
            return 0;
        }
    }
	
    function get_companies($value,$rollnum,$start,$end){
        
        if($value == 'Applied'){
            
            $query = "SELECT * FROM companies WHERE id IN (SELECT companyid FROM relationship WHERE StuRollNum = '".$rollnum."' AND isDeleted = '0') ORDER BY id ORDER BY id DESC LIMIT {$start},{$end} ";
            $result = mysql_query($query);
            return $result;
        }
        else if($value == 'Unapplied'){
             
            $query = "SELECT * FROM companies WHERE id NOT IN (SELECT companyid FROM relationship WHERE StuRollNum = '".$rollnum."' AND isDeleted = '0') ORDER BY id DESC LIMIT {$start},{$end} ";          
            $result = mysql_query($query);
            return $result;
        }
        else if($value == 'Inactive'){
            $date = date("Y-m-d");
            $query = "SELECT * FROM companies WHERE isDeleted = 0 AND lastDate < ".$date." ORDER BY id DESC LIMIT {$start},{$end} ";
            $result = mysql_query($query);
            return $result;
        }
        else if($value == 'Active'){
            $date = date("Y-m-d");
            $query = "SELECT * FROM companies WHERE (isDeleted = 0 AND lastDate >= ".$date." ) ORDER BY id DESC LIMIT {$start},{$end} ";
            $result = mysql_query($query);
            //echo $query;
            return $result;
        }
        else if($value == 'All'){
            $query = "SELECT * FROM companies WHERE isDeleted = 0 ORDER BY id DESC LIMIT {$start},{$end} ";
            $result = mysql_query($query);
            return $result;
        }
        else {
            $query = "SELECT * FROM companies WHERE isDeleted = 2 ORDER BY id DESC LIMIT {$start},{$end} ";
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


    
//Admin typical Functions -->

    function get_students_list($id){
        $query = "SELECT * FROM studentsdata WHERE rollnum IN (SELECT StuRollNum FROM relationship WHERE isDeleted = 0 AND companyid = '{$id}'  )";
        $result = mysql_query($query);
        return $result;
    }

    function add_company($name,$description,$lastdate,$mincgpa,$jobprofile,$link,$rollnum){
    
        $query = "INSERT INTO companies (name,description,mincgpa,lastDate,jobProfile,link,isActive,isDeleted,added_by) VALUES ('{$name}','{$description}','{$mincgpa}','{$lastdate}','{$jobprofile}','{$link}','1','0','{$rollnum}') ";
        $result = mysql_query($query);
        
        if($result){
            return 1;
        }
        else {
            return 0;
        }
    
    }

    function update_company($id,$name,$description,$lastdate,$mincgpa,$jobprofile,$link,$rollnum){
    
        $query = "UPDATE companies SET name = '{$name}',
                                        description = '{$description}',
                                        link = '{$link}',
                                        jobProfile = '{$jobprofile}',
                                        lastDate = '{$lastdate}',
                                        mincgpa = '{$mincgpa}',
                                        modified_by = '{$rollnum}'
                                        WHERE id= '".$id."'";
        $result = mysql_query($query);
        
            if($result){
                return 1;
            }
            else {
                return 0;
            }
    
    }

    function del_company($name,$description,$lastdate,$mincgpa,$jobprofile,$link,$rollnum){
    
        $query = "UPDATE companies SET isDeleted = '1' , modified_by = '{$rollnum}' WHERE id = '{$id}' ";
        $result = mysql_query($query);
        
        if($result){
            return 1;
        }
        else {
            return 0;
        }
    
    }

    function add_announcement($text,$rollnum){
    
        $query = "INSERT INTO announcements (ann_text,isActive,isDeleted,added_by) VALUES ('{$text}', '1' ,'0','{$rollnum}' )";
        $result = mysql_query($query);
        
            if($result){
                return 1;
            }
            else {
                return 0;
            }
    
    }

    function del_announcement($id,$rollnum){
    
        $query = "UPDATE announcements SET isDeleted = '1' , modified_by = '{$rollnum}' WHERE id = '{$id}' ";
		$result = mysql_query($query);
        
            if($result){
                return 1;
            }
            else {
                return 0;
            }
    
    }

    function get_admin_list() {
        $query = "SELECT * FROM adminlogin WHERE isDeleted = 0";
        $result = mysql_query($query);
        return $result;
    }

    function del_admin($id,$rollnum){
        $query = "UPDATE adminlogin SET isDeleted = '1' , modified_by = '{$rollnum}' WHERE id = '{$id}' ";
        $result = mysql_query($query);
        if( $result ) {
            return 1;
        }
        else {
            return 0;
        }
    }

    function add_admin($rollnumto,$rollnumby){
        if( strlen($rollnumto) != 10 ){
            return 0;
        }
        else {
            $query = "SELECT * FROM adminlogin WHERE admRollNum = '{$rollnumto}' AND isDeleted = 0 LIMIT 1";
            $result = mysql_query($query);
            if( mysql_num_rows($result) != 1 ){
                $query = "INSERT INTO adminlogin (admRollNum,isActive,isDeleted,added_by ) VALUES ('{$rollnumto}',1,0,'{$rollnumby}') ";
                $result = mysql_query($query);
                if( $result ) {
                    return 2;
                }
                else {
                    return 1;
                }
            }else {
                return 3;
            }
            
        }
    }

//Mail functions -->


    function notify_user($to,$name,$description,$lastdate,$mincgpa,$jobprofile,$link){
        
        
        $subject = "Placement Portal Update: ".$name." is visiting our campus now!";
        $body = $name." is Visiting our campus. About ".$name." : ".$description." , For more information visit ".$link.".
        job profile offered by company is ".$jobprofile.".Min cgpa required to apply is ".$mincgpa." and last date to apply is ".$lastdate.".
        To apply go to iiitapp.iiita.ac.in.";
        
        sendmail ( $to,$subject,$body);
            
     }

    function sendmail($to,$subject,$body){
                
        $header = "From: ".$MAIL_FROM."\r\n";
       // $header.= "MIME-Version: 1.0\r\n"; 
        $header.= "MIME-Version: 1.0\r\n"; 
        $header.= "Content-Type: text/plain; charset=utf-8\r\n"; 
        $header.= "X-Priority: 1\r\n"; 

        mail($to, $subject, $body, $header);

    }

//LOGGER functions -->


    function add_login_admin_logger($rollnum){
          $db_select = mysql_select_db(DB_name2);
            if (!$db_select) {
                die("Database selection failed: " . mysql_error());
                return 0;
            }
            else {
                if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                    $ip = $_SERVER['HTTP_CLIENT_IP'];
                } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                } else {
                    $ip = $_SERVER['REMOTE_ADDR'];
                }
                
                $query = "INSERT INTO loginlogger (admrollnum,ip_address) VALUES ('{$rollnum}','{$ip}')";
                $result = mysql_query($query);
                if($result){
                    $db_select = mysql_select_db(DB_name);
                    if (!$db_select) {
                        die("Database selection failed: " . mysql_error());
                        return 0;
                    }
                    else {
                        return 1;
                    }
                }
                else {
                    return 0;
                }
                 
            }

    }

    function admin_action_logger($rollnum,$action,$matter,$matterid){
          $db_select = mysql_select_db(DB_name2);
            if (!$db_select) {
                die("Database selection failed: " . mysql_error());
                return 0;
            }
            else {
                if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                    $ip = $_SERVER['HTTP_CLIENT_IP'];
                } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                } else {
                    $ip = $_SERVER['REMOTE_ADDR'];
                }

                $query = "INSERT INTO actionlogger (by_rollnum,matter,matter_id,action,ip_address) VALUES
                ('{$rollnum}','{$matter}','{$matterid}','{$action}','{$ip}')";
                $result = mysql_query($query);
                if($result){
                    $db_select = mysql_select_db(DB_name);
                    if (!$db_select) {
                        die("Database selection failed: " . mysql_error());
                        return 0;
                    }
                    else {
                        return 1;
                    }
                }
                else {
                    return 0;
                }

            }

    }



?>
