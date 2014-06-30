<?php


// General + USER functions -->


    function check_input( $value ) {
        $value = addslashes(htmlentities($value));
		return $value;
	}

    function format_date($str) {
                $month = array(" ", "Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sep", "Oct", "Nov", "Dec");
                $y = explode(' ', $str);
                $x = explode('-', $y[0]);
                $date = "";    
                $m = (int)$x[1];
                $m = $month[$m];
                $st = array(1, 21, 31);
                $nd = array(2, 22);
                $rd = array(3, 23);
                if(in_array( $x[2], $st)) {
                        $date = $x[2].'st';
                }
                else if(in_array( $x[2], $nd)) {
                        $date .= $x[2].'nd';
                }
                else if(in_array( $x[2], $rd)) {
                        $date .= $x[2].'rd';
                }
                else {
                        $date .= $x[2].'th';
                }
                $date .= ' ' . $m . ' ' . $x[0];
                
            //for Time ->
                $x = explode(':', $y[1]);
                $t = 'am';
                if( $x[0] > 12 ){
                    $x[0] -= 12;
                    $t = 'pm';
                }
                $date .= ', '.$x[0].':'.$x[1].' '.$t;
 
                    
                return $date;
    }
	
	function getuserProfileDetails($rollnum){
	   global $dbh1;
		$query = "SELECT * FROM studentsdata WHERE rollnum = '{$rollnum}' LIMIT 1" ;
		$result = mysql_query($query,$dbh1);
		
		$array = mysql_fetch_array($result);

		return $array;
	}
    
    function check_all_fields( $name,$birthDate,$alternateEmail,$cgpa ){
          
        if(is_numeric($cgpa) && 0 < $cgpa && $cgpa <= 10 && strlen($name) > 3 && $birthDate != NULL && strlen($alternateEmail) > 5 ){
            return 1;
        }
        else {
            return 0;
        }
        
    }
	
	function saveUserProfile( $rollnum,$name,$birthDate,$sex,$alternateEmail,$currentsem,$institute,$cgpa,$education,$technicalExp,$projects, $areaofint){
	   global $dbh1;
        
        $result = check_all_fields( $name,$birthDate,$alternateEmail,$cgpa );
        if($result == 0){ 
            header("Location:editprofile.php?message=Please Fill All Details Properly");
            exit;
        } 
        else {
            $query = "INSERT INTO studentsdata
                    (name,birthdate,sex,alternateEmail,currentSemester,institute,cgpa,
                    education,technicalExperience,projects,areaOfIntrest, modified_on,rollnum,isProfileComplete,isActive,added_on) 
                    VALUES ('{$name}','{$birthDate}','{$sex}','{$alternateEmail}','{$currentsem}','{$institute}',
                    '{$cgpa}','{$education}','{$technicalExp}','{$projects}','{$areaofint}', '{$currenttime}','{$rollnum}','1','1',NOW())";

            $result = mysql_query($query,$dbh1);

            if ($result) {
                return 1;
            }
            else{
                return 0;
            }
        }
	}
    
	function updateUserProfile( $rollnum,$name,$birthDate,$sex,$alternateEmail,$currentsem,$institute,$cgpa,$education,$technicalExp,$projects, $areaofint,$halfsubmit){
	
		//$currenttime = date('Y-m-d');
       // $currenttime = date("M jS, Y", strtotime($currenttime));
        global $dbh1;
        
        
            if( $halfsubmit == 0 ){
                    $result = check_all_fields( $name,$birthDate,$alternateEmail,$cgpa );
                    if ($result == 1) {
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
                    }
                    else {
                        header("Location:editprofile.php?message=Please Fill All Details Properly");
                        exit;
                    }
            }
            else {
                $query = "UPDATE studentsdata SET 
                        education='{$education}',
                        technicalExperience='{$technicalExp}',
                        projects='{$projects}',
                        areaOfIntrest='{$areaofint}',
                        modified_on = NOW()
                        WHERE rollnum = '{$rollnum}' ";
            }
            $result = mysql_query($query,$dbh1);

            if (mysql_affected_rows($dbh1) == 1) {
                return 1;
            }
            else{
                return 0;
            }
        
	}

    function validate_comp($email,$pass){
        global $dbh1;
        $query = " SELECT * FROM companies WHERE email = '$email' AND password = '$pass' AND approved = 1 LIMIT 1";
        $result = mysql_query($query,$dbh1);
        $query = " SELECT * FROM companies WHERE email = '$email' AND password = '$pass' LIMIT 1";
        $result2 = mysql_query($query,$dbh1);
        if( mysql_num_rows($result2) == 1 ) {
            
            if( mysql_num_rows($result) == 1 ) {
                $result = mysql_fetch_array($result);
                $_SESSION['company'] = $result['id'];
                return 1; // approved!
            }
            else {
                return 2; // unapproved
            }
        }
        else {
            return 0; // not exist
        }
        
    }

    function get_company_by_id($id){
        global $dbh1;
        $query = " SELECT * FROM companies WHERE id = '$id' LIMIT 1";
        $result2 = mysql_query($query,$dbh1);
        return mysql_fetch_array($result2);
    }
	
	function authenticateUser( $rollnum,$pass ) {
        global $dbh1;
        $_SESSION = array();

        if(strlen($rollnum) == 10 && strlen($pass) > 2 ){ // This check is temporary, this will be soon replaced by the Authentication From the MAIL.
            
            if(LDAP_LOGIN == true){
                $value = authenticate_user_LDAP($rollnum,$pass);
                if($value){
                    $_SESSION['rollnum']= $rollnum;
                    $query = " SELECT * FROM adminlogin WHERE admRollNum = '{$rollnum}' AND isDeleted = 0 LIMIT 1";
                    $result = mysql_query($query,$dbh1);
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
                        return 2; // not complete
                    }
                }
                else {
                    return 0;
                }
                
            }
            else {
            
                $_SESSION['rollnum']= $rollnum;
                $query = " SELECT * FROM adminlogin WHERE admRollNum = '{$rollnum}' AND isDeleted = 0 LIMIT 1";
                $result = mysql_query($query,$dbh1);
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
                    return 2;
                }
            }
        }
        else {
           // $message = "invalid Rollnum or Password";
            return 0;
        }
	}


//LDAP
    function authenticate_user_LDAP( $uid, $pwd ) {
            if ($pwd) {
                    $ds = ldap_connect("172.31.1.42");
                    ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);
                    $a = ldap_search($ds, "dc=iiita,dc=ac,dc=in", "uid=$uid" );
                    $b = ldap_get_entries( $ds, $a );
                    $dn = $b[0]["dn"];
                    $ldapbind=@ldap_bind($ds, $dn, $pwd);
                    if ($ldapbind) {
                            return 1;
                    } else {
                            return 0;
                    }
                    ldap_close($ds);
            } else {
                    return 0;
            }
    }

    function checkisProfileComplete($rollnum){
        global $dbh1;
        $query = "SELECT isProfileComplete , name FROM studentsdata WHERE rollnum = '{$rollnum}'";
        $result = mysql_query($query,$dbh1);
        
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
        global $dbh1;
        if($value == 'Applied'){
            
            $query = "SELECT * FROM companies WHERE id IN (SELECT companyid FROM relationship WHERE StuRollNum = '".$rollnum."' AND isDeleted = '0' AND isActive = 1 ) ORDER BY id DESC LIMIT {$start},{$end} ";
            $result = mysql_query($query,$dbh1);
            return $result;
        }
        else if($value == 'Unapplied'){
             
            $query = "SELECT * FROM companies WHERE id NOT IN (SELECT companyid FROM relationship WHERE StuRollNum = '".$rollnum."' AND isDeleted = '0' AND isActive = 1) ORDER BY id DESC LIMIT {$start},{$end} ";          
            $result = mysql_query($query,$dbh1);
            return $result;
        }
        else if($value == 'Inactive'){
            $query = "SELECT * FROM companies WHERE ( isDeleted = 0 AND lastDate < NOW() AND isActive = 1 ) ORDER BY id DESC LIMIT {$start},{$end} ";
            $result = mysql_query($query,$dbh1);
            return $result;
        }
        else if($value == 'Active'){
            $query = "SELECT * FROM companies WHERE (isDeleted = 0 AND lastDate > NOW() AND isActive = 1 ) ORDER BY id DESC LIMIT {$start},{$end} ";
            $result = mysql_query($query,$dbh1);
           // echo $query;
            return $result;
        }
        else if($value == 'Published'){
            $query = "SELECT * FROM companies WHERE isDeleted = 0 AND isActive = 1 ORDER BY id DESC LIMIT {$start},{$end} ";
            $result = mysql_query($query,$dbh1);
            return $result;
        }
        else if($value == 'Unpublished'){
            $query = "SELECT * FROM companies WHERE isDeleted = 0 AND isActive = 0 ORDER BY id DESC LIMIT {$start},{$end} ";
            $result = mysql_query($query,$dbh1);
            return $result;
        }
        else if($value == 'ALL'){
            $query = "SELECT * FROM companies WHERE approved = 1 ORDER BY id DESC LIMIT {$start},{$end} ";
            $result = mysql_query($query,$dbh1);
            return $result;
        }
        else if($value == 'All'){
            $query = "SELECT * FROM companies WHERE approved = 1 AND isActive = 1 ORDER BY id DESC LIMIT {$start},{$end} ";
            $result = mysql_query($query,$dbh1);
            return $result;
        }
        else if($value == 'Unapproved'){
            $query = "SELECT * FROM companies WHERE approved = 0 ORDER BY id DESC LIMIT {$start},{$end} ";
            $result = mysql_query($query,$dbh1);
            return $result;
        }
        else {
            $query = "SELECT * FROM companies WHERE isDeleted = 2 ORDER BY id DESC LIMIT {$start},{$end} ";
            $result = mysql_query($query,$dbh1);
            return $result;
        }
    }

    function fetch_announcements() {
        global $dbh1;
        $query = "SELECT * FROM announcements WHERE isDeleted = 0 ORDER BY id DESC";
		$result = mysql_query($query,$dbh1);
        if($result){
            return $result;
        }
        else {
            return 0;
        }
    }

    function get_company_details($comid){
        global $dbh1;
        $query = "SELECT * FROM companies WHERE id= {$comid}";
        $result = mysql_query($query,$dbh1);
        $details = mysql_fetch_array($result);
        return $details;
    }

    function applied_users($comid){
        global $dbh1;
        $query = "SELECT * FROM relationship WHERE companyid = '{$comid}' AND isDeleted = 0";
        $result = mysql_query($query,$dbh1);
        $appliedUsers = mysql_num_rows($result);
        return $appliedUsers;
    }

    function checkappliedornot($companyid,$rollnum){
        global $dbh1;
        $query = "SELECT * FROM relationship WHERE StuRollNum = '{$rollnum}' AND companyid = '{$companyid}' AND isDeleted = '0'";
        $result = mysql_query($query,$dbh1);
        $array = mysql_query($query,$dbh1);
        if (mysql_num_rows($result) == 1 ){
            return 1; // Applied.
        }
        else {
            return 0; // unnapplid 
        }
    }

    function checkcgpa($companyid,$rollnum){
        global $dbh1;
        $query = " SELECT cgpa FROM studentsdata WHERE rollnum = '{$rollnum}' LIMIT 1";
        $result1 = mysql_query($query,$dbh1);
        
        $query = " SELECT mincgpa FROM companies WHERE id = '{$companyid}' LIMIT 1";
        $result2 = mysql_query($query,$dbh1);
        
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
        global $dbh1;
        $query = "SELECT lastDate FROM companies WHERE id = '".$companyid."' AND lastDate > NOW() LIMIT 1";
        $result = mysql_query($query,$dbh1);
        $array = mysql_fetch_array($result);
        //$result = mysql_num_rows($array);
        if ( $array ){
            
            return 1; // allowed.
            
        }
        else {
            return 0; // not allowed 
        }
    }

    function apply_to_company($rollnum,$com_id){
        global $dbh1;
        $query = "INSERT INTO relationship ( StuRollNum,companyid,isActive,isDeleted,added_on ) VALUES ( '{$rollnum}','{$com_id}','1','0',NOW() ) ";
        $result = mysql_query($query,$dbh1);
        if ($result){
            return 1;
        }
        else {
            return 0;
        }
    }

    function unapply_to_company($rollnum,$com_id){
        global $dbh1;
        $query = "UPDATE relationship SET isDeleted = 1 , modified_on = NOW() WHERE StuRollNum = '{$rollnum}' AND companyid = '{$com_id}'";
        $result = mysql_query($query,$dbh1);
        if ($result){
            return 1;
        }
        else {
            return 0;
        }
    }

    function submit_jnf($Organization,$Buisness,$contact_details,$Name,$Designation,$contact_number,$email,$intrestedin,$CGPA,$elegiblity,$Infrastructural,$agreement,$Profile,$salary,$Allowance,$Perks,$Location,$Joining,$Insurance,$CTC,$stock,$facility,$accomodation,$comid){
        global $dbh1;
        $query = "INSERT INTO jnf ( organization,buisness,contact_details,name,designation,contact_number,email,intrestedin,cgpa,elegiblity,infrastructural,agreement,profile,salary,allowance,perks,location,joining,insurance,ctc,stock,facility,accomodation,isActive,isDeleted,added_on,company_id ) VALUES ( '$Organization','$Buisness','$contact_details','$Name','$Designation','$contact_number','$email','$intrestedin','$CGPA','$elegiblity','$Infrastructural','$agreement','$Profile','$salary','$Allowance','$Perks','$Location','$Joining','$Insurance','$CTC','$stock','$facility','$accomodation',1,0,NOW(),$comid ) ";
        $result = mysql_query($query,$dbh1);
        if ($result){
            return 1;
        }
        else {
            return 0;
        }
    
    }

    
//Admin typical Functions -->

    function register_company( $organization,$contact,$designation,$email,$password ){
        global $dbh1;
        $query = "INSERT INTO companies (organization,contact,designation,email,password,isActive,isDeleted,added_on) VALUES 
        ('$organization','$contact','$designation','$email','$password','0','0',NOW()) ";
        $result = mysql_query($query,$dbh1);
        
        if($result){
            return 1;
        }
        else {
            return 0;
        }
    }

    function get_students_list($id){
        global $dbh1;
        $query = "SELECT * FROM studentsdata WHERE rollnum IN (SELECT StuRollNum FROM relationship WHERE isDeleted = 0 AND companyid = '{$id}'  )";
        $result = mysql_query($query,$dbh1);
        return $result;
    }

    function checkpublished($com_id){
        global $dbh1;
        $query = "SELECT * FROM companies WHERE id = ".$com_id." LIMIT 1";
        $result = mysql_query($query,$dbh1);
        $result = mysql_fetch_array($result);
        if($result['isActive'] == 1 ){
            return 1;
        }
        else if( $result['isActive'] == 0 ){
            return 0;
        }
        else {
            return 2;
        }
        
    }
    function publish_company($com_id){
        global $dbh1;
        $query = "UPDATE companies SET isActive = 1 WHERE id= '{$com_id}'";
        $result = mysql_query($query,$dbh1);
        return $result;
    }
    function unpublish_company($com_id){
        global $dbh1;
        $query = "UPDATE companies SET isActive = 0 WHERE id= '{$com_id}'";
        $result = mysql_query($query,$dbh1);
        return $result;
    }

    function approve_company($id){
        global $dbh1;
        $query = "UPDATE companies SET approved = 1 WHERE id= '{$id}'";
        $result = mysql_query($query,$dbh1);
        return $result;
    }

    function add_company($name,$description,$lastdate,$mincgpa,$jobprofile,$link,$rollnum){
        global $dbh1;
        $query = "INSERT INTO companies (name,description,mincgpa,lastDate,jobProfile,link,isActive,isDeleted,added_by,added_on) VALUES ('{$name}','{$description}','{$mincgpa}','{$lastdate}','{$jobprofile}','{$link}','1','0','{$rollnum}',NOW()) ";
        $result = mysql_query($query,$dbh1);
        
        if($result){
            return 1;
        }
        else {
            return 0;
        }
    
    }

    function update_company($id,$name,$description,$lastdate,$mincgpa,$jobprofile,$link,$rollnum){
        global $dbh1;
        $query = "UPDATE companies SET name = '{$name}',
                                        description = '{$description}',
                                        link = '{$link}',
                                        jobProfile = '{$jobprofile}',
                                        lastDate = '{$lastdate}',
                                        mincgpa = '{$mincgpa}',
                                        modified_by = '{$rollnum}'
                                        WHERE id= '".$id."'";
        $result = mysql_query($query,$dbh1);
        
            if($result){
                return 1;
            }
            else {
                return 0;
            }
    
    }

    function del_company($id,$rollnum){
        global $dbh1;
        $query = "UPDATE companies SET isDeleted = '1' , modified_by = '{$rollnum}' WHERE id = '{$id}' ";
        $result = mysql_query($query,$dbh1);
        
        if($result){
            return 1;
        }
        else {
            return 0;
        }
    
    }

    function add_announcement($text,$rollnum){
        global $dbh1;
        $query = "INSERT INTO announcements (ann_text,isActive,isDeleted,added_by,added_on) VALUES ('{$text}', '1' ,'0','{$rollnum}',NOW() )";
        $result = mysql_query($query,$dbh1);
        
            if($result){
                return 1;
            }
            else {
                return 0;
            }
    
    }

    function del_announcement($id,$rollnum){
        global $dbh1;
        $query = "UPDATE announcements SET isDeleted = '1' , modified_by = '{$rollnum}' WHERE id = '{$id}' ";
		$result = mysql_query($query,$dbh1);
        
            if($result){
                return 1;
            }
            else {
                return 0;
            }
    
    }

    function get_admin_list() {
        global $dbh1;
        $query = "SELECT * FROM adminlogin WHERE isDeleted = 0 ORDER BY id DESC";
        $result = mysql_query($query,$dbh1);
        return $result;
    }

    function del_admin($id,$rollnum){
        global $dbh1;
        $query = "UPDATE adminlogin SET isDeleted = '1' , modified_by = '{$rollnum}' WHERE id = '{$id}' ";
        $result = mysql_query($query,$dbh1);
        if( $result ) {
            return 1;
        }
        else {
            return 0;
        }
    }

    function add_admin($rollnumto,$rollnumby){
        global $dbh1;
        if( strlen($rollnumto) != 10 ){
            return 0;
        }
        else {
            $query = "SELECT * FROM adminlogin WHERE admRollNum = '{$rollnumto}' AND isDeleted = 0 LIMIT 1";
            $result = mysql_query($query,$dbh1);
            if( mysql_num_rows($result) != 1 ){
                $query = "INSERT INTO adminlogin (admRollNum,isActive,isDeleted,added_by,added_on ) VALUES ('{$rollnumto}',1,0,'{$rollnumby}',NOW()) ";
                $result = mysql_query($query,$dbh1);
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

    function get_jnf_list(){
        global $dbh1;
        $query = "SELECT * FROM jnf WHERE isDeleted = 0 ORDER BY id DESC";
        $result = mysql_query($query,$dbh1);
        return $result;
    }

    function get_jnf_byid($id){
        global $dbh1;
        $query = "SELECT * FROM jnf WHERE isDeleted = 0 AND id = '$id' LIMIT 1";
        $result = mysql_query($query,$dbh1);
        $array = mysql_fetch_array($result);
        return $array;
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
        global $dbh2;
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        $query = "INSERT INTO loginlogger (admrollnum,ip_address) VALUES ('{$rollnum}','{$ip}')";
        $result = mysql_query($query,$dbh2);
        if($result){
            return 1;
        }
        else {
            return 0;
        }
    }

    function admin_action_logger($rollnum,$action,$matter,$matterid){
        global $dbh2;
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        $query = "INSERT INTO actionlogger (by_rollnum,matter,matter_id,action,ip_address) VALUES
        ('{$rollnum}','{$matter}','{$matterid}','{$action}','{$ip}')";
        $result = mysql_query($query,$dbh2);
        if($result){
            return 1;
        }
        else {
            return 0;
        }
    }



?>
