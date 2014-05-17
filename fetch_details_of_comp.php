<?php session_start(); ?>
<?php

    if(isset($_SESSION["name"])){
        $name = $_SESSION["name"];
        $rollnum = $_SESSION['rollnum'];
        $user = 'student';
        
    }
    else if(isset($_SESSION["rollnum"])){
        header("Location:editprofile.php");
        exit;
    }
    else if( isset($_SESSION["Adminrollnum"]) ){
        $user = 'admin';
        $rollnum = $_SESSION["Adminrollnum"];
    }
    else {
        header("Location:index.php");
        exit;
    }
?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/connection.php"); ?>

<?php

    $comid = $_POST['id'];

    $query = "SELECT * FROM companies WHERE id= '".$comid."'";
    $result = mysql_query($query);
    $details = mysql_fetch_array($result);

        $name = check_input($details['name']);
        $link = check_input($details['link']);
        $jobProfile = check_input($details['jobProfile']); 
        $lastDate = check_input($details['lastDate']);
        $mincgpa = check_input($details['mincgpa']);
        $description = check_input($details['description']);

        $query = "SELECT * FROM relationship WHERE companyid = '{$comid}' AND isDeleted = 0";
        $result = mysql_query($query);
        $appliedUsers = mysql_num_rows($result);


    echo '
                            <div class="mdb-company-modal-container">
                                    <div class="mdb-modal-name ">
                                        <a href="" >'.$name.'</a>
                                        <button class="close" aria-hidden="true" data-dismiss="modal">
                                            <span class="glyphicon glyphicon-remove" ></span>
                                        </button>
                                    </div>
                                    
                                    <div class="mdb-modal-content">
                                        
                                        <div class="row">
                                            
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                      <label class="vpp-labelname">Min CGPA</label>
                                                      <div class="vpp-content-text">'.$mincgpa.'</div>
                                                </div>
                                            </div>
                                            
                                             <div class="col-sm-6">
                                                <div class="form-group">
                                                      <label class="vpp-labelname">Last date to Apply</label>
                                                      <div class="vpp-content-text">'.$lastDate.'</div>
                                                </div>
                                              </div>
                                              
                                              <div class="col-sm-6"> 
                                                  <div class="form-group">
                                                      <label class="vpp-labelname">Discription</label>
                                                      <div class="vpp-content-text">'.$description.'</div>
                                                  </div>
                                              </div>
                                            
                                              <div class="col-sm-6">
                                                  <div class="form-group">
                                                      <label class="vpp-labelname">Applied users</label>
                                                      <div class="vpp-content-text">'.$appliedUsers.'</div>
                                                  </div>
                                              </div>
                                            
                                              
                                              
                                              <div class="col-sm-6">
                                                  <div class="form-group">
                                                      <label class="vpp-labelname">job profile offered</label>
                                                      <div class="vpp-content-text">'.$jobProfile.'</div>
                                                  </div>
                                              </div>
                                              <div class="col-sm-6">
                                                  <div class="form-group">
                                                      <label class="vpp-labelname">Link</label>
                                                      <div class="vpp-content-text">
                                                          <a href="'.$link.'" target="_blank">'.$link.'</a>
                                                      </div>
                                                  </div>
                                              </div>
                                            
                                    </div>
                                </div>
                            </div> ';

?>