<?php session_start(); ?>

<?php require('includes/basichtmlheader.php'); ?>
<title>Companies Register Here</title>
<?php require('includes/basichtmlheader2.php'); ?>
<?php
        
    if( isset($_POST['register']) ){
        $organization = check_input($_POST['organization']);
        $contact = check_input($_POST['contact']);
        $designation = check_input($_POST['designation']);
        $email = check_input($_POST['email']);
        $password = check_input($_POST['password']);
        $repasword = check_input($_POST['repasword']);
        
        if( strlen($password) > 3 && $password == $repasword && strlen($organization) > 2 && strlen($contact) > 2 && strlen($email) > 2){
            $result = register_company( $organization,$contact,$designation,$email,$password );
            if($result){
                header("Location:register_company.php?msg=done");
                exit;
            }
            else {
                //header("Location:register_company.php?msg=Something went wrong.");
                //exit;
            }
        }
        else {
            header("Location:register_company.php?msg=Please Fill properly");
            exit;
        }
    }
    
    if( $_GET['msg'] == 'done' ){
        $msg = "<font color='black'>Registered Successfully. Wait for Admin Approval.</font>";
    }
    else if( isset($_GET['msg']) ){
        $msg = $_GET['msg'];
    }
    else {
        $msg = '';
    }
    

?>


<header class="navbar navbar-fixed-top mydashboardpageheader">
    <div class="container">
        <p class="navbar-brand mdb-p-header">Companies <font color="#447fc8">Register Here</font></p>
    </div>
</header> 
      
  <div class="container mpp-contentdiv">

      <div class='mpp-compl-profl text-center'>
      <?php
                echo $msg;
        ?>
      </div>
    

      <form action="register_company.php" method="post" role="form" id="epp-form">
          <div class="row">
              <div class="col-md-6">
                <div class="thumbnail mpp-divs">
             
                     <div class="form-group">
                          <label class="mpp-labelname">Organization</label>
                        <input type=text name="organization" class="form-control" rows="4" id="" placeholder="Organization">
                      </div>
                        <div class="form-group">
                          <label class="mpp-labelname">contact</label>
                        <input name="contact" class="form-control" rows="3" id="" placeholder="Contact number" >
                      </div>
                      <div class="form-group">
                          <label class="mpp-labelname">designation</label>
                        <textarea name="designation" class="form-control" rows="1" id="" placeholder="Designation"></textarea>
                      </div>
                      
                      
                  </div>  
              </div>
                
              
              
              <div class="col-md-6 ">
                  <div class="thumbnail mpp-divs">
                     <div class="form-group">
                          <label class="mpp-labelname">email</label>
                        <input type=email name="email" class="form-control" rows="4" id="" placeholder="Your Email address">
                      </div>

                      <div class="form-group">
                          <label class="mpp-labelname">password</label>
                        <input type=password name="password" class="form-control" id="" placeholder="Password">
                      </div>
                      
                      <div class="form-group">
                          <label class="mpp-labelname">Confirm password</label>
                        <input type=password name="repasword" class="form-control" id="" placeholder="Re-type Password">
                      </div>
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="thumbnail mpp-divs">
                     <input type=submit class="btn btn-success btn-signin" name=register  value ="Register">
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
<link rel=stylesheet href="js/jquery-ui-1.10.4.custom/css/flick/jquery-ui-1.10.4.custom.min.css">
<script src="js/jquery-ui-1.10.4.custom/js/jquery-ui-1.10.4.custom.min.js"></script>
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
      
      $("#filter-date").datepicker({
                dateFormat: 'yy-mm-dd'
        });
  });


</script>

    
  </body>
</html>