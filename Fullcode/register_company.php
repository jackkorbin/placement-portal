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
        
        if( strlen($password) > 4 && $password == $repasword && strlen($organization) > 1 && strlen($contact) > 2 && strlen($email) > 2 &&  check_company_email($email)){
            $result = register_company( $organization,$contact,$designation,$email,$password );
            if($result){
                header("Location:register_company.php?msg=1");
                exit;
            }
            else {
                //header("Location:register_company.php?msg=Something went wrong.");
                //exit;
            }
        }
        else {
            header("Location:register_company.php?msg=0");
            exit;
        }
    }
    
    if( isset($_GET['msg']) ){
        if( $_GET['msg'] == 1 ){
            $msg = "<font color='#447fc8'>Registered Successfully.Please wait for admin approval.</font>";
        }
        else if ( $_GET['msg'] == 0 ){
            $msg = "<font color='red'>Email already Exist.</font>";
        }
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
      
      </div>
    

      <form action="register_company.php" method="post" role="form" id="register-form">
          <div class="row">
              <div class="col-md-6">
                <div class="thumbnail mpp-divs">
                      <div class="form-group">
                          <label class="mpp-labelname">Name</label>
                          <input type=text name="name" class="form-control" rows="4" id="" placeholder="Organization">
                      </div>
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
                          <label class="mpp-labelname">Email address</label>
                        <input type="email" name="email" class="form-control" rows="4" id="" placeholder="Your Email address">
                      </div>

                      <div class="form-group">
                          <label class="mpp-labelname">Password</label>
                        <input type=password name="password" class="form-control" id="" placeholder="Password">
                      </div>
                      
                      <div class="form-group">
                          <label class="mpp-labelname">Confirm password</label>
                        <input type=password name="repasword" class="form-control" id="" placeholder="Re-type Password">
                      </div>
                      <div class="form-group company-register-button">
                        <button class="btn btn-success btn-signin" name="register" onClick="check_fields();">Register</button>
                      </div>
                  </div>
              </div>
              
              
              
              <div class="col-md-9">
                  <div class="thumbnail mpp-divs">
                     
                         <span id="error">
                             <?php
                                    if( $msg != '' ){
                                        echo $msg;
                                    }else {
                                        echo '<font color="#447fc8">please fill and save all the information, your account will be allowed to login after verification.</font>';
                                    }
                            ?>
                             
                         </span>
                      
                  </div>
              </div>
          </div>
      </form>
  </div>


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
      
      $('button[name=register]').click(function(e){
          e.preventDefault();
          check_fields();
      });
      

  });

function check_fields(){     
  
    
   if( $('input[name=organization]').val().length < 1 ) {
       $('#error').html('Please enter a Valid Organization');
      
   }else if( $('input[name=contact]').val().length != 10 ) {
       $('#error').html('Please enter a Valid contact number.');
       
   }else if( $('textarea[name=designation]').val().length < 2 ) {
       $('#error').html('Please provide a valid designation');
       
   }else if( $('input[name=email]').val().length < 3 ) {
       $('#error').html('Please enter Email');
      
   }else if( $('input[name=password]').val() < 5 ) {
       $('#error').html('Password should be atleast 5 digits');
      
   }else if( $('input[name=password]').val() != $('input[name=repasword]').val() ) {
       $('#error').html('Passwords dont match.');
      
   }else {
        $('#register-form').submit();
      
   }
}
    

</script>

    
  </body>
</html>