<?php session_start(); ?>
<?php
  

    if(isset($_SESSION["name"])){
        $name = $_SESSION["name"];
        $rollnum = $_SESSION['rollnum'];
    }
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


            while($array = mysql_fetch_array($result)) {
                
                $companyid = $array['id'];
                $comid = "'".$companyid."'";
                //$app = checkappliedornot($companyid,$rollnum);
                //$checkdate = checklastdate($companyid);
                //$ap =  "'".$app."'";
                $publ = checkpublished($companyid);
                if($publ == 1){
                    $pub = "Unpublish";
                    $type = "btn-success";
                }
                else if($publ == 0) {
                    $pub = "Publish";
                    $type = "btn-info";
                }
                else {
                    $pub = "Error";
                    $type = "btn-default";
                }

                $com = '<div class="row" id = "div'.$companyid.'">
                <div class="thumbnail mdb-company-div">
                    <div class="mdb-company-name text-center">
                        <a href="" data-toggle="modal" data-target="#com-rm-modal" onClick="javascript:fetch_details_of_comp('.$comid.');">Organization : ';
                $com .= $array['organization'];
               
                $com .= '</font></a></div><div class="mdb-company-content unapproved"><span class="mdb-appliedusers">Designation : 
                            <font color="#447fc8">';
                $com .= $array['designation'];
                $com .= '</font></span><span class="mdb-appliedusers pull-right">Contact :
                            <font color="#447fc8">';
                $com .= $array['contact'];
                
                $com .= '</font></a></div><div class="mdb-company-content unapproved"><span class="mdb-appliedusers">Email : 
                            <font color="#447fc8">';
                $com .= $array['email'];
                $com .= '</font></span><span class="mdb-appliedusers pull-right">Added on :
                            <font color="#447fc8">';
                $com .= format_date($array['added_on']);
                
                
                $com .= ' 
                </font></span></div><div class="mdb-company-footer">
                <div class="row">
                    <div class="col-xs-3 text-center">
                        <a href="approve_company.php?id='.$companyid.' " onClick="return confirm(\'Are you sure that you have added details before approving this company?\')"  class="btn btn-primary company-btn">
                            Approve
                        </a>
                    </div>
                    <div class="col-xs-3 text-center">
                        <button class="editbtn btn btn-success company-btn" id = "editbtn '.$companyid.'"data-toggle="modal" data-target="#com-rm-modal-edit" onClick="javascript:edit_comp('.$comid.');">
                            Fill details
                        </button>
                    </div>
                    <div class="col-xs-3 ">
                        <button class="btn '.$type.' company-btn pull-left" id="'.$companyid.'" onClick="javascript:publish_comp('.$comid.');">
                            '.$pub.'
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

        if($com == 1){
            echo '<div class="thumbnail mdb-company-div">
                    <div class="mdb-company-content text-center">
                        <span class="mdb-appliedusers">No Companies to Show.</span>
                    </div>
                  </div>';
        }

?>