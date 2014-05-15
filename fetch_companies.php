<?php session_start(); ?>
<?php

    if(isset($_SESSION["name"])){
        $name = $_SESSION["name"];
        $rollnum = $_SESSION['rollnum'];
    }
    else if(isset($_SESSION["rollnum"])){
        header("Location:editprofile.php");
        exit;
    }
    else {
        header("Location:index.php");
        exit;
    }
?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/connection.php"); ?>

<?php
                            $value = $_POST['value'];

                            $result=get_companies($value,$rollnum);
                                
                            $com = 1;
                            if($result){

                                    while($array = mysql_fetch_array($result)) {

                                        $companyid = $array['id'];
                                        $comid = "'".$companyid."'";
                                        $app = checkappliedornot($companyid,$rollnum);
                                        $checkdate = checklastdate($companyid);
                                        $ap =  "'".$app."'";

                                        $com = '<div class="row">
                                        <div class="thumbnail mdb-company-div">
                                            <div class="mdb-company-name text-center">
                                                <a href="" >';
                                        $com .= $array['name'];
                                        $com .= '</a></div><div class="mdb-company-content"><span class="mdb-appliedusers">Last date to apply : 
                                                    <font color="#447fc8">';
                                        $com .= $array['lastDate'];
                                        $com .= '</font></span><span class="mdb-appliedusers pull-right">Min CGPA :
                                                    <font color="#447fc8">';
                                        $com .= $array['mincgpa'];
                                        $com .= '</font></span></div><div class="mdb-company-footer"><div class="row"><div class="col-xs-6 ">
                                                        <button class="btn btn-danger company-btn pull-left" data-toggle="modal" data-target="#com-rm-modal" onClick="javascript:fetch_details_of_comp('.$comid.');">
                                                            Read more
                                                        </button></div><div class="col-xs-6 ">';
                                        if( $checkdate == 1 ){

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
                                                $com .= '<button class="btn btn-red company-btn 
                                                pull-right" id="'.$companyid.'" onClick="javascript:applytoggle('.$comid.');">';
                                                $com .= 'Reload page</button>';
                                            }
                                        }

                                        $com .= '</div></div></div></div></div>';

                                       echo $com;

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