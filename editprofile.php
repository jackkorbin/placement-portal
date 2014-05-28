<?php session_start(); ?>

<?php require('includes/basichtmlheader.php'); ?>
<title>Edit Profile</title>
<?php require('includes/basichtmlheader2.php'); ?>
<?php require('includes/editprofileheader.php'); 

    if( isset($_SESSION["Adminrollnum"])  ) {
        $admin = "yes";
    }
    else {
        $admin = "no";
    }

?>  
<header class="navbar navbar-fixed-top mydashboardpageheader">
    <div class="container">
        <p class="navbar-brand mdb-p-header">Hi <font color="#447fc8">
            <?php if( $pc == 0 ) echo $rollnum; else echo $name; ?>
            </font>
        </p>
        <?php include('includes/buttonheader.php'); ?>
        <div class="collapse navbar-collapse mybuttonid"> 
            <ui class="nav navbar-nav navbar-right">
                <?php if($admin == "yes") echo '<li><a href="admin_dashboard.php" class="mdb-menutext">Admin Page</a></li>';  ?>
                <li><a href="mydashboard.php" class="mdb-menutext">My Dashboard</a></li>
                <li><a href="viewprofile.php" class="mdb-menutext">view profile</a></li>
                <li><a href="logout.php" class="mdb-menutext">Logout</a></li>
            </ui>
        </div>
    </div>
</header> 
      
  <div class="container mpp-contentdiv">

      <div class='mpp-compl-profl text-center'>
          <?php echo $message; ?>
      </div>
    

      <form action="editprofile.php" method="post" role="form" id="epp-form">
          <div class="row">
              <div class="col-md-4">
                    <?php include 'includes/edit_view_toggle.php' ; ?>
              </div>
                
              
              <div class="col-md-4 ">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="thumbnail mpp-divs">
                              <img class="img-responsive thumbnail vpp-customimg" src="profile_pictures/<?php 
                                               if( file_exists('profile_pictures/'.$rollnum.'.jpg') ) 
                                                   echo $rollnum.".jpg"; 
                                                else echo "defaultpp.jpg"; 
                                               ?>">
                              <a href="#"><div class="mpp-chngepic" id="changepptext">Change your photo</div></a>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="thumbnail mpp-divs">
                              <div class="form-group">
                                    <a href="#" class="btn btn-block btn-lg btn-danger" id="uploadresumebtn" title="Only PDF allowed"  >
                                        Upload your resume 
                                        <span class="glyphicon glyphicon-cloud-upload"></span>
                                    </a>
                              </div>
                            </div>
                      </div>
                      
                      <div class="col-md-12 text-center">
                          <div class="thumbnail mpp-divs">
                              <div class="form-group">
                                  <input type="submit" class="btn btn-block btn-lg btn-primary" name="updateprofile"
                                         value="<?php if( $pc == 1 )
                                                echo 'Update Profile ';
                                            else echo 'Complete Profile '; ?>
                                   ">
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              
              <div class="col-md-4 ">
                  <div class="thumbnail mpp-divs">
                     <div class="form-group">
                          <label class="mpp-labelname">Education</label>
                        <textarea name="education" class="form-control" rows="4" id="" placeholder="Write about your education.."><?php echo $education ; ?></textarea>
                      </div>

                      <div class="form-group">
                          <label class="mpp-labelname">Technical Experience</label>
                        <textarea name="technicalExp" class="form-control" rows="4" id="" placeholder="write about your technical experience.."><?php echo $technicalExp ; ?></textarea>
                      </div>

                      <div class="form-group">
                          <label class="mpp-labelname">Projects</label>
                        <textarea name="projects" class="form-control" rows="3" id="" placeholder="what projects hav you worked on?"><?php echo $projects ; ?></textarea>
                      </div>
                      <div class="form-group">
                          <label class="mpp-labelname">Area of Intrest</label>
                        <textarea name="areaofint" class="form-control" rows="3" id="" placeholder="Write about your Area of intrest.." ><?php echo $areaofint ; ?></textarea>
                      </div>
                  </div>
              </div>
              
          </div>
      </form>
  </div>
      
      <form action="uploadpp.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="pp" id="chooseprofilepic" >
      </form>
      
      <form action="uploadcv.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="cv" id="choosecv" >
      </form>


<?php require('includes/footerscriptjs.php'); ?>    
<script>

  $(document).ready(function(){


      $('#changepptext').click(function(){
        $('#chooseprofilepic').click();
      });
      $('#chooseprofilepic').change(function(){
          this.form.submit();
      });
      $('#uploadresumebtn').click(function(){
        $('#choosecv').click();
      });
      $('#choosecv').change(function(){
          this.form.submit();
      });
      $('#uploadresumebtn').tooltip();
  });


</script>

    
  </body>
</html>