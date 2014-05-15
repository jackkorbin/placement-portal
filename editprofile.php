<?php session_start(); ?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php
    if(isset($_SESSION["name"])){
        $message = "<font color='#447fc8'>Update Profile</font>";
        $pc = 1;
        $name = $_SESSION["name"];
        $rollnum = $_SESSION["rollnum"];
        
        $details = getuserProfileDetails($rollnum);
        
        $name = check_input($details['name']);
        $birthDate = check_input($details['birthdate']);
        $sex = check_input($details['sex']);
        $alternateEmail = check_input($details['alternateEmail']);
        $currentsem = check_input($details['currentSemester']);
        $institute = check_input($details['institute']);
        $cgpa = check_input($details['cgpa']);
        $education = check_input($details['education']); 
        $technicalExp = check_input($details['technicalExperience']);
        $projects = check_input($details['projects']);
        $areaofint = check_input($details['areaOfIntrest']);
        
        if(isset($_POST['updateprofile'])){
            $name = check_input($_POST['name']);
            $birthDate = check_input($_POST['birthdate']);
            $sex = check_input($_POST['sex']); 
            $alternateEmail = check_input($_POST['alternateEmail']);
            $currentsem = check_input($_POST['currentsem']);
            $institute = check_input($_POST['institute']);
            $cgpa = check_input($_POST['cgpa']);
            $education = check_input($_POST['education']);
            $technicalExp = check_input($_POST['technicalExp']);
            $projects = check_input($_POST['projects']);
            $areaofint = check_input($_POST['areaofint']);
           
           updateUserProfile($rollnum,$name,$birthDate,$sex,$alternateEmail,$currentsem,$institute,$cgpa,$education,$technicalExp,$projects, $areaofint);
           
           
       }
        
            
    }
    else if(isset($_SESSION["rollnum"])){
        $message = "Complete your Profile to proceed";
        $pc = 0;
        $rollnum = $_SESSION["rollnum"];
        $name = "";
        $birthDate = "";
        $sex = ""; 
        $alternateEmail = "";
        $currentsem = "";
        $institute = "";
        $cgpa = "";
        $education = "sdfsdf"; 
        $technicalExp = "";
        $projects = "";
        $areaofint = "";
        
        if(isset($_POST['updateprofile'])){
            $name = check_input($_POST['name']);
            $birthDate = check_input($_POST['birthdate']);
            $sex = check_input($_POST['sex']); 
            $alternateEmail = check_input($_POST['alternateEmail']);
            $currentsem = check_input($_POST['currentsem']);
            $institute = check_input($_POST['institute']);
            $cgpa = check_input($_POST['cgpa']);
            $education = check_input($_POST['education']);
            $technicalExp = check_input($_POST['technicalExp']);
            $projects = check_input($_POST['projects']);
            $areaofint = check_input($_POST['areaofint']);
           
           saveUserProfile($rollnum,$name,$birthDate,$sex,$alternateEmail,$currentsem,$institute,$cgpa,$education,$technicalExp,$projects, $areaofint);
           
           
       }
        
    }
    else {
        header("Location:index.php");
        exit;
    }

    if(isset($_GET['message'])){
               $message = $_GET['message'];
                $message = "<font color='#447fc8'>".$message."</font>";
           }
    
    

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Profile</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
      
      
      
      <style>
        body {
            background-color:#eeeeee;
            background:#333 url(images/campus818901.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            
        }

      </style>
      
  </head>
  <body>
    
    
        
        
      
      
        <header class="navbar navbar-fixed-top mydashboardpageheader">
            <div class="container">
                <p class="navbar-brand mdb-p-header">Hi <font color="#447fc8">
                    <?php if( $pc == 0 ) echo $rollnum; else echo $name; ?>
                    </font></p>
                

                <button class="navbar-toggle" data-toggle="collapse" data-target=".mybuttonid" style="background-color:black;">
                    <span class="icon-bar" style="background-color:white;"></span>
                    <span class="icon-bar" style="background-color:white;"></span>
                    <span class="icon-bar" style="background-color:white;"></span>
                </button>

                 <div class="collapse navbar-collapse mybuttonid"> 
                    <ui class="nav navbar-nav navbar-right">
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
              
              <div class="col-md-4 ">
                  <div class="thumbnail mpp-divs">
                    
                      
                            
                              <div class="form-group">
                                  <label class="mpp-labelname">Name</label>
                                  <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="<?php echo $name ; ?>">
                              </div>
                          
                          
                              <div class="form-group">
                                  <label class="mpp-labelname">Birth date</label>
                                <input type="date" name="birthdate" class="form-control" id="" placeholder="" value="<?php echo $birthDate ; ?>">
                              </div>
                          
                              <div class="form-group">
                                  <label class="mpp-labelname">Sex</label>
                                    <select class="form-control" name="sex" >
                                      <option <?php if($sex == "Male") {echo "selected"; }?> >Male</option>
                                      <option <?php if($sex == "Female") {echo "selected"; }?> >Female</option>
                                      <option>Other</option>
                                    </select>
                              </div>
                          
                              <div class="form-group"  >
                                  <label class="mpp-labelname"> Alternate Email id</label>
                                <input type="email" class="form-control" name="alternateEmail" placeholder="Alternate Email" value="<?php echo $alternateEmail ; ?>">
                              </div>
                          
                              <div class="form-group">
                                  <label class="mpp-labelname">Institute</label>
                                <select class="form-control" name="institute">
                                  <option <?php if($institute == "IIITA") {echo "selected"; }?>>IIITA</option>
                                  <option <?php if($institute == "RGIT") {echo "selected"; }?>>RGIT</option>
                                </select>
                              </div>
                          
                              <div class="form-group">
                                  <label class="mpp-labelname">Current semester</label>
                                <select class="form-control" name="currentsem">
                                  <option <?php if($currentsem == 1) {echo "selected"; }?>>1</option>
                                  <option <?php if($currentsem == 2) {echo "selected"; }?>>2</option>
                                  <option <?php if($currentsem == 3) {echo "selected"; }?>>3</option>
                                  <option <?php if($currentsem == 4) {echo "selected"; }?>>4</option>
                                  <option <?php if($currentsem == 5) {echo "selected"; }?>>5</option>
                                  <option <?php if($currentsem == 6) {echo "selected"; }?>>6</option>
                                  <option <?php if($currentsem == 7) {echo "selected"; }?>>7</option>
                                  <option <?php if($currentsem == 8) {echo "selected"; }?>>8</option>
                                </select>
                              </div>
                              <div class="form-group">
                                  <label class="mpp-labelname">CGPA</label>
                                  <input type="text" name="cgpa" class="form-control" id="" placeholder="Avrage till now" value="<?php echo $cgpa ; ?>">
                              </div>
                          
                        
                      
                  </div>
              </div>
              <div class="col-md-4 ">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="thumbnail mpp-divs">
                              <img class="img-responsive thumbnail vpp-customimg" src="images/pp.jpg">
                              <a href=""><div class="mpp-chngepic">Change your photo</div></a>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="thumbnail mpp-divs">
                              <div class="form-group">
                                    <a href="#" class="btn btn-block btn-lg btn-danger">
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
                                            else echo 'Complete Profile ';
                                        ?>">
                                      
                                  
                                  
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
              <!--
              <div class="col-md-6 ">
                  <div class="thumbnail mpp-academic">
                    <p>Academic details</p>
                  </div>
              </div>
              <div class="col-md-12 ">
                  <div class="thumbnail mpp-advanced">
                    <p>Advanced Details</p>
                  </div>
              </div>
                -->
              
          </div>
          </form>
      </div>
      
      


         
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>  
      
      <script>
        
          $(document).ready(function(){
              $('#epp-submitbtn').click(function(){
                  $('#epp-form').submit();
              });
          });
          
      </script>
     
    
  </body>
</html>