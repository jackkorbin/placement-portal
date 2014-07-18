<?php session_start(); ?>


<?php require('includes/basichtmlheader.php'); ?>
<?php require('includes/basichtmlheader2.php'); ?>   
        
<?php

    if(isset($_GET['id'])){
        $id = check_input($_GET['id']);
    }
    else {
        header("Location:index.php");
        exit;
    }

    $jnf = get_jnf_byid($id);

?>



      
<header class="navbar navbar-fixed-top mydashboardpageheader">
    <div class="container">
        <p class="navbar-brand mdb-p-header"><font color="#447fc8"><?php echo $jnf['Organization']; ?></font></p>

        <?php include('includes/buttonheader.php'); ?>

         <div class="collapse navbar-collapse mybuttonid"> 
            <ui class="nav navbar-nav navbar-right">
                <li><a href="view_jnf_list.php" class="mdb-menutext">View JNFs</a></li>
                <li><a href="admin_dashboard.php" class="mdb-menutext">Admin Panel</a></li>
                <li><a href="mydashboard.php" class="mdb-menutext">My Dashboard</a></li>
                <li><a href="viewprofile.php" class="mdb-menutext">view profile</a></li>
                <li><a href="logout.php" class="mdb-menutext">Logout</a></li>
            </ui>
        </div>
    </div>
</header> 
      
      
 <div class="container mpp-contentdiv">

      <div class='mpp-compl-profl text-center'>
            <?php  ?>
      </div>
    

          <div class="row">
              
              
              <div class="col-md-12">
                <div class="thumbnail mpp-divs row">
             
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="mpp-labelname">Organization*</label>
                        <div class="vpp-content-text"><?php echo $jnf['Organization']; ?></div>
                      </div>
                      <div class="form-group">
                        <label class="mpp-labelname">Nature of Buisness*</label>
                        <div class="vpp-content-text"><?php echo $jnf['buisness']; ?></div>
                      </div>
                      <div class="form-group">
                        <label class="mpp-labelname">Name*</label>
                        <div class="vpp-content-text"><?php echo $jnf['name']; ?></div>
                      </div>
                      
                    </div>
                    
                    <div class="col-sm-6">
                      
                      <div class="form-group">
                        <label class="mpp-labelname">Designation*</label>
                        <div class="vpp-content-text"><?php echo $jnf['designation']; ?></div>
                      </div>
                      <div class="form-group">
                        <label class="mpp-labelname">Contact number*</label>
                        <div class="vpp-content-text"><?php echo $jnf['contact_number']; ?></div>
                      </div>
                      <div class="form-group">
                        <label class="mpp-labelname">Email id*</label>
                        <div class="vpp-content-text"><?php echo $jnf['email']; ?></div>
                      </div>
                    </div>
                     
                  </div>  
              </div>
                <div class="col-md-6 ">
                      <div class="thumbnail mpp-divs">
                         <div class="form-group">
                              <label class="mpp-labelname">Intrested in : </label>
                                <div class="vpp-content-text"><?php echo $jnf['intrestedin']; ?></div>
                          </div>

                          <div class="form-group">
                              <label class="mpp-labelname">Minimum Cuttoff CGPA (If any) :</label>
                             <div class="vpp-content-text"><?php echo $jnf['cgpa']; ?></div>
                          </div>

                          <div class="form-group">
                              <label class="mpp-labelname">Any elegiblity Critera : </label>
                            <div class="vpp-content-text"><?php echo $jnf['elegiblity']; ?></div>
                          </div>
                      </div>
                  </div>
              
              
              
              
              <div class="col-md-6">
                <div class="thumbnail mpp-divs">
            
                      <div class="form-group">
                        <label class="mpp-labelname">Infrastructural Requirements</label>
                        <div class="vpp-content-text"><?php echo $jnf['infrastructural']; ?></div>
                      </div>
                      
                      
                  </div>  
                  
                  <div class="thumbnail mpp-divs">
            
                      <div class="form-group">
                        <label class="mpp-labelname">Do you have a service agreement/ bond?</label>
                        <div class="vpp-content-text"><?php echo $jnf['agreement']; ?></div>
                      </div>
                      
                      

                      
                      
                      
                      
                      
                  </div>  
              </div>
              
              <div class="col-md-12">
                <div class="thumbnail mpp-divs row">
            
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="mpp-labelname">Job Profile*</label>
                        <div class="vpp-content-text"><?php echo $jnf['profile']; ?></div>
                      </div>
                      <div class="form-group">
                        <label class="mpp-labelname">Basic salary*</label>
                        <div class="vpp-content-text"><?php echo $jnf['salary']; ?></div>
                      </div>

                      <div class="form-group">
                        <label class="mpp-labelname">Allowance*</label>
                        <div class="vpp-content-text"><?php echo $jnf['allowance']; ?></div>
                      </div>
                      <div class="form-group">
                        <label class="mpp-labelname">Perks</label>
                        <div class="vpp-content-text"><?php echo $jnf['perks']; ?></div>
                      </div>
                      <div class="form-group">
                        <label class="mpp-labelname">Location*</label>
                        <div class="vpp-content-text"><?php echo $jnf['location']; ?></div>
                      </div>
                      <div class="form-group">
                        <label class="mpp-labelname">Tentative Date of Joining</label>
                        <div class="vpp-content-text"><?php echo $jnf['Joining']; ?></div>
                      </div>
                    </div>
                    
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="mpp-labelname">Insurance Plans*</label>
                        <div class="vpp-content-text"><?php echo $jnf['insurance']; ?></div>
                      </div>
                      <div class="form-group">
                        <label class="mpp-labelname">CTC*</label>
                        <div class="vpp-content-text"><?php echo $jnf['ctc']; ?></div>
                      </div>

                      <div class="form-group">
                        <label class="mpp-labelname">Do you give stock options?</label>
                        <div class="vpp-content-text"><?php echo $jnf['stock']; ?></div>
                      </div>
                      <div class="form-group">
                        <label class="mpp-labelname">Any other facility besides the package?</label>
                        <div class="vpp-content-text"><?php echo $jnf['facility']; ?></div>
                      </div>
                        <div class="form-group">
                            <label class="mpp-labelname">Accomodation </label>
                            <div class="vpp-content-text"><?php echo $jnf['accomodation']; ?></div>
                      </div>
                    </div>
                    
                    
                      
                  </div>  
              </div>
              
              
              
            
              
          </div>
      
  </div>

<?php require('includes/footerscriptjs.php'); ?>  
<link rel=stylesheet href="js/jquery-ui-1.10.4.custom/css/flick/jquery-ui-1.10.4.custom.min.css">
<script src="js/jquery-ui-1.10.4.custom/js/jquery-ui-1.10.4.custom.min.js"></script>

    
  </body>
</html>
      
            