<?php session_start(); ?>
<?php
    if( isset($_POST['user']) ){
        
        if( $_POST['user'] == "admin" ){
            $user = "admin";
        }
        else if ( $_POST['user'] == "student" ) {
            $user = "student";
        }
        else {
            $user = "null";
        }
        
    }

    if(isset($_SESSION["name"])){
        $name = $_SESSION["name"];
        $rollnum = $_SESSION['rollnum'];
    }
/*
    else if(isset($_SESSION["rollnum"])){
        header("Location:editprofile.php");
        exit;
    }
    else if( isset($_SESSION["Adminrollnum"]) ){
        $user = 'admin';
        $rollnum = $_SESSION["Adminrollnum"];
    }
*/
    else {
        header("Location:index.php");
        exit;
    }
?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>

<?php

    $value = $_POST['value'];
    $start = $_POST['num'];
    $end = $_POST['inc'];
   // num = 2

    $result=get_companies($value,$rollnum,$start,$end);

    $com = 1;

    if($result){

        if($user == 'student'){ // user = student!

            while($array = mysql_fetch_array($result)) {

                $companyid = $array['id'];
                $comid = "'".$companyid."'";
                $app = checkappliedornot($companyid,$rollnum);
                $checkdate = checklastdate($companyid);
                $checkcgpa =  checkcgpa($companyid,$rollnum);
                $ap =  "'".$app."'";
                $lastdate = $array['lastDate'];
                $lastdate = format_date($lastdate);

                $com = '<div class="row">
                <div class="thumbnail mdb-company-div">
                    <div class="mdb-company-name text-center">
                        <a href="" >';
                $com .= $array['name'];
                $com .= '</a></div><div class="mdb-company-content"><span class="mdb-appliedusers">Last date to apply : 
                            <font color="#447fc8">';
                $com .= $lastdate;
                $com .= '</font></span><span class="mdb-appliedusers pull-right">Min CGPA :
                            <font color="#447fc8">';
                $com .= $array['mincgpa'];
                $com .= '</font></span></div><div class="mdb-company-footer"><div class="row"><div class="col-xs-6 ">
                                <button class="btn btn-danger company-btn pull-left" data-toggle="modal" data-target="#com-rm-modal" onClick= "javascript:fetch_details_of_comp('.$comid.');">
                                    Read more
                                </button></div><div class="col-xs-6 ">';
                if( $checkdate == 1 ){
                    
                    if( $checkcgpa == 1 ){

                            if ( $app == 1 ){
                                $com .= '<button class="btn btn-primary company-btn 
                                pull-right" id="'.$companyid.'" onClick="javascript:applytoggle('.$comid.');">';
                                $com .= 'Unapply</button>';
                            }

                            else if ($app == 0){
                                $com .= '<button class="btn btn-success company-btn 
                                pull-right" id="'.$companyid.'" onClick="javascript:applytoggle('.$comid.');">';
                                $com .= 'Apply</button>';
                            }
                            else {
                                $com .= '<button class="btn btn-danger company-btn 
                                pull-right" id="'.$companyid.'" onClick="javascript:applytoggle('.$comid.');">';
                                $com .= 'Reload page</button>';
                            }
                    } else {
                        $com .= '<button class="btn btn-default company-btn pull-right" >';
                        $com .= 'Low CGPA</button>';
                    }
                    
                }
                else {
                    $com .= '<button class="btn btn-default company-btn pull-right" >';
                        $com .= 'Last Date Passed</button>';
                }

                $com .= '</div></div></div></div></div>';

               echo $com;

            }
            
        }else if ( $user = "admin" ) { // user = admin
            while($array = mysql_fetch_array($result)) {
                
                $companyid = $array['id'];
                $comid = "'".$companyid."'";
                //$app = checkappliedornot($companyid,$rollnum);
                //$checkdate = checklastdate($companyid);
                //$ap =  "'".$app."'";
                $name = $array['name'];
                $lastdate = $array['lastDate'];
                $lastdate = format_date($lastdate);

                $com = '<div class="row" id = "div'.$companyid.'">
                <div class="thumbnail mdb-company-div">
                    <div class="mdb-company-name text-center">
                        <a href="" >';
                $com .= $name;
                $com .= '</a></div><div class="mdb-company-content"><span class="mdb-appliedusers">Last date to apply : 
                            <font color="#447fc8">';
                $com .= $lastdate;
                $com .= '</font></span><span class="mdb-appliedusers pull-right">Min CGPA :
                            <font color="#447fc8">';
                $com .= $array['mincgpa'];
                $com .= ' 
                </font></span></div><div class="mdb-company-footer">
                <div class="row">
                    <div class="col-xs-3 ">
                        <button class="btn btn-info company-btn pull-left" data-toggle="modal" data-target="#com-rm-modal" onClick="javascript:fetch_details_of_comp('.$comid.');">
                            Read more
                        </button>
                    </div>
                    <div class="col-xs-3 text-center">
                        <a href="students_list.php?name='.$name.'&&id='.$companyid.'" class="btn btn-success company-btn">
                            Students list
                        </a>
                    </div>
                    <div class="col-xs-3 text-center">
                        <button class="editbtn btn btn-success company-btn" id = "editbtn '.$companyid.'"data-toggle="modal" data-target="#com-rm-modal-edit" onClick="javascript:edit_comp('.$comid.');">
                            Edit
                        </button>
                    </div>
                    <div class="col-xs-3 ">
                        <button class="btn btn-danger company-btn pull-right" data-toggle="modal" data-target="#com-rm-modal-remove" onClick= "javascript:fetch_remove_comp('.$comid.');">
                            Remove
                        </button>
                    </div>
                </div>
                ';



                $com .= '</div></div></div>';

               echo $com;

            }

        }
    }

        if($com == 1){
            echo '<div class="thumbnail mdb-company-div">
                    <div class="mdb-company-content text-center">
                        <span class="mdb-appliedusers">No Companies to Show.</span>
                    </div>
                  </div>';
        }

?>