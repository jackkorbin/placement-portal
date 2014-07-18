<?php session_start(); ?>

<?php require('includes/basichtmlheader.php'); ?>
<title>Companies Register Here</title>
<?php require('includes/basichtmlheader2.php'); ?>
<?php

    if(isset($_SESSION['company'])){
        $company = 1;
    }
    else {
        $company = 0;
    }
        
    if( isset($_GET['msg']) ){
        $msg = $_GET['msg'];
    }
    else {
        $msg = '';
    }


?>


<header class="navbar navbar-fixed-top mydashboardpageheader">
    <div class="container">
        <p class="navbar-brand mdb-p-header">Fill <font color="#447fc8">JNF Here</font></p>
        <div class="collapse navbar-collapse mybuttonid"> 
            <ui class="nav navbar-nav navbar-right">
                <?php if($company){ echo '<li><a href="fill_jnf.php" class="mdb-menutext-active">Fill JNF</a></li>
                <li><a href="company_dashboard.php" class="mdb-menutext">My Dashboard</a></li>
                <li><a href="logout.php" class="mdb-menutext">Logout</a></li>'; } ?>
            </ui>
        </div>
    </div>
</header> 
      
  <div class="container mpp-contentdiv">

      <div class='mpp-compl-profl text-center'>
            <?php echo $msg; ?>
      </div>
    

      <form action="submit_jnf.php" method="post" role="form" id="jnf-form">
          <div class="row">
              
              
              <div class="col-md-12">
                <div class="thumbnail mpp-divs row">
             
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="mpp-labelname">Organization*</label>
                        <input type=text name="Organization" class="form-control" rows="4" id="" placeholder="Organization">
                      </div>
                      <div class="form-group">
                        <label class="mpp-labelname">Nature of Buisness*</label>
                        <textarea name="Buisness" class="form-control" rows="1" id="" placeholder="Nature of Buisness"></textarea>
                      </div>
                      <div class="form-group">
                        <label class="mpp-labelname">Name*</label>
                        <input name="Name" class="form-control" rows="3" id="" placeholder="Name" >
                      </div>
                      
                    </div>
                    
                    <div class="col-sm-6">
                      
                      <div class="form-group">
                        <label class="mpp-labelname">Designation*</label>
                        <input type="text" name="Designation" class="form-control" rows="3" id="" placeholder="Designation" >
                      </div>
                      <div class="form-group">
                        <label class="mpp-labelname">Contact number*</label>
                        <input name="contact_number" class="form-control" rows="3" id="" placeholder="Contact number" >
                      </div>
                      <div class="form-group">
                        <label class="mpp-labelname">Email id*</label>
                        <input name="email" class="form-control" rows="3" id="" placeholder="email id" >
                      </div>
                    </div>
                     
                  </div>  
              </div>
                <div class="col-md-6 ">
                      <div class="thumbnail mpp-divs">
                         <div class="form-group">
                              <label class="mpp-labelname">Intrested in : </label>
                                <select class="form-control" name="intrestedin" >
                                  <option value="Btech" selected >B.tech</option>
                                  <option value="Mtech" >M.tech</option>
                                  <option value="Both" >Both</option>
                                </select>
                          </div>

                          <div class="form-group">
                              <label class="mpp-labelname">Minimum Cuttoff CGPA (If any) :</label>
                            <input type=number name="CGPA" class="form-control" id="" placeholder="Minimum Cuttoff CGPA">
                          </div>

                          <div class="form-group">
                              <label class="mpp-labelname">Any elegiblity Critera : </label>
                            <textarea rows=5 type=text name="elegiblity" class="form-control" id="" placeholder="Any elegiblity Critera"></textarea>
                          </div>
                      </div>
                  </div>
              
              
              
              
              <div class="col-md-6">
                <div class="thumbnail mpp-divs">
            
                      <div class="form-group">
                        <label class="mpp-labelname">Infrastructural Requirements</label>
                        <textarea name="Infrastructural" class="form-control" rows="3" id="" placeholder="If any, Please mention."></textarea>
                      </div>
                      
                      
                  </div>  
                  
                  <div class="thumbnail mpp-divs">
            
                      <div class="form-group">
                        <label class="mpp-labelname">Do you have a service agreement/ bond?</label>
                        <textarea name="agreement" class="form-control" rows="3" id="" placeholder="if yes, please specify value & period"></textarea>
                      </div>
                      
                      

                      
                      
                      
                      
                      
                  </div>  
              </div>
              
              <div class="col-md-12">
                <div class="thumbnail mpp-divs row">
            
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="mpp-labelname">Job Profile*</label>
                        <textarea name="Profile" class="form-control" rows="1" id="" placeholder="job Profile"></textarea>
                      </div>
                      <div class="form-group">
                        <label class="mpp-labelname">Basic salary*</label>
                        <input type=number name="salary" class="form-control" id="" placeholder="In Rs">
                      </div>

                      <div class="form-group">
                        <label class="mpp-labelname">Allowance*</label>
                        <textarea rows=1 type=text name="Allowance" class="form-control" id="" placeholder="Allowance"></textarea>
                      </div>
                      <div class="form-group">
                        <label class="mpp-labelname">Perks</label>
                        <textarea rows=1 type=text name="Perks" class="form-control" id="" placeholder="Perks"></textarea>
                      </div>
                      <div class="form-group">
                        <label class="mpp-labelname">Location*</label>
                        <textarea rows=3 type=text name="Location" class="form-control" id="" placeholder="Name of city/place or office address"></textarea>
                      </div>
                      <div class="form-group">
                        <label class="mpp-labelname">Tentative Date of Joining</label>
                        <input rows=3 type=date name="Joining" class="form-control" id="" placeholder="Tentative Date of Joining">
                      </div>
                    </div>
                    
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="mpp-labelname">Insurance Plans*</label>
                        <textarea name="Insurance" class="form-control" rows="1" id="" placeholder="Insurance Plans"></textarea>
                      </div>
                      <div class="form-group">
                        <label class="mpp-labelname">CTC*</label>
                        <input type=text name="CTC" class="form-control" id="" placeholder="CTC">
                      </div>

                      <div class="form-group">
                        <label class="mpp-labelname">Do you give stock options?</label>
                        <textarea rows=4 type=text name="stock" class="form-control" id="" placeholder="If yes please give details"></textarea>
                      </div>
                      <div class="form-group">
                        <label class="mpp-labelname">Any other facility besides the package?</label>
                        <textarea rows=4 type=text name="facility" class="form-control" id="" placeholder="Mention here"></textarea>
                      </div>
                        <div class="form-group">
                            <label class="mpp-labelname">Accomodation </label>
                            <select class="form-control" name="accomodation" >
                              <option value="Yes" selected >Yes</option>
                              <option value="no">No</option>
                              <option Value="Partial">Partial</option>
                            </select>
                      </div>
                    </div>
                    
                    
                      
                  </div>  
              </div>
              
              
              
              </form>
              <div class="col-md-12">
                  <div class="thumbnail mpp-divs row">
                      <div class="col-sm-4">
                          <button class="btn btn-success btn-signin" id="btn" name="btn" value="">submit</button>
                      </div>
            
                      <div class="col-sm-7" id="error">
                          
                      </div>
                  </div>
              </div>
              
          </div>
      
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
      
      $('button[name=btn]').click(function(e){
          e.preventDefault();
          check_jnf();
      });
  });
    
var i = 0;

function check_jnf(e){
    
   if( $('input[name=Organization]').val() < 2 ) {
       $('#error').html('Please enter a Valid Organization');
       exit;
   }else if( $('textarea[name=Buisness]').val() < 3 ) {
       $('#error').html('Please enter a Valid Buisness nature.');
       exit;
   }else if( $('textarea[name=contact_details]').val() < 2 ) {
       $('#error').html('Please provide contact details');
       exit;
   }else if( $('input[name=email]').val() < 3 ) {
       $('#error').html('Please enter Email');
       exit;
   }else if( $('input[name=Name]').val() < 1 ) {
       $('#error').html('Please write Name');
       exit;
   }else if( $('input[name=Designation]').val() < 3 ) {
       $('#error').html('Please write Designation.');
       exit;
   }else if( $('input[name=contact_number]').val() < 3 ) {
       $('#error').html('Please enter correct Contact number.');
       exit;
   }else if( $('textarea[name=Profile]').val() < 3 ) {
       $('#error').html('Please Enter job Profile.');
       exit;
   }else if( $('input[name=salary]').val() < 3 ) {
       $('#error').html('Basic salary Should only be a number.');
       exit;
   }else if( $('input[name=Allowance]').val() < 3 ) {
       $('#error').html('Please mention the Allowance.');
       exit;
   }else if( $('textarea[name=Location]').val() < 3 ) {
       $('#error').html('Please enter a Correct Location.');
       exit;
   }else if( $('textarea[name=Insurance]').val() < 3 ) {
       $('#error').html('Please enter a Correct Location.');
       exit;
   }else if( $('input[name=Location]').val() < 3 ) {
       $('#error').html('Please enter a Correct Location.');
       exit;
   }else if( $('input[name=Location]').val() < 3 ) {
       $('#error').html('Please enter a Correct Location.');
       exit;
   }else {
       
       if( i == 1 ){
           $('#jnf-form').submit();
       }
       else {
           alert('Once submitted, you cannot change the details. Kindly Confirm Once again the Details you have filled.');
           i = 1;
       }
   }
    

}


</script>



    
  </body>
</html>