<?php session_start(); ?>
<?php

    if(isset($_SESSION['Adminrollnum'])){
        $rollnum = $_SESSION['Adminrollnum'];
    }
    else {
        header("Location:index.php");
        exit;
    }
?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>

<?php

    $comid = $_POST['id'];
    $id = "'".$comid."'";

    $details = get_company_details($comid);

    $name = check_input($details['name']);
    $link = check_input($details['link']);
    $jobProfile = check_input($details['jobProfile']); 
    $lastDate = check_input($details['lastDate']);
    $mincgpa = check_input($details['mincgpa']);
    $description = check_input($details['description']);


    echo '<form action= "update_comp.php" method = "POST">
        <div class="mdb-company-modal-container">
            <div class="mdb-modal-name ">
                <a href="" >Edit '.$name.' Details</a>
                <button class="close" aria-hidden="true" data-dismiss="modal">
                    <span class="glyphicon glyphicon-remove" ></span>
                </button>
            </div>
                
                <input type="hidden" class="form-control" name = "id" placeholder="Newname.." value="'.$comid.'">
                
            <div class="mdb-modal-content">

                <div class="row">

                    <div class="col-sm-6">
                          <div class="form-group">
                              <label class="mpp-labelname">Name</label>
                              <input type="text" class="form-control" name = "name" placeholder="Newname.." value="'.$name.'">
                          </div>
                          <div class="form-group">
                              <label class="mpp-labelname">Min CGPA</label>
                              <input type="text" class="form-control" name = "mincgpa" placeholder="Min CGPA required" value="'.$mincgpa.'">
                          </div>
                          <div class="form-group">
                            <label class="mpp-labelname">Last Date to apply</label>
                            <input type="text" class="form-control" name = "lastdate" placeholder="YYYY-MM-DD hh:mm" value="'.$lastDate.'">
                          </div>
                          <div class="form-group">
                              <label class="mpp-labelname">Link</label>
                              <input type="text" class="form-control" name = "link" placeholder="http://www..." value="'.$link.'">
                          </div>
                      </div>

                      <div class="col-sm-6">
                          <div class="form-group">
                              <label class="mpp-labelname">Discription</label>
                              <textarea class="form-control" rows="6" name = "description" placeholder="Write Description">'.$description.'</textarea>
                          </div>
                          <div class="form-group">
                              <label class="mpp-labelname">Job Profile offered</label>
                              <textarea class="form-control" rows="4" name = "jobprofile" placeholder="Job profile..">'.$jobProfile.'</textarea>
                          </div>

                      </div>





                </div>
            </div>
            <div class="mdb-modal-footer">
                    <button type="input" class="btn btn-success btn-block mdb-modal-btn" id="apply">
                        Update
                    </button>
            </div>
       </div> 
       </form>';

?>