<?php session_start(); ?>
<?php
    if(isset($_SESSION["name"])){
        $name = $_SESSION["name"];
    }
    else {
        header("Location:index.php");
        exit;
    }
?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/connection.php"); ?>

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
                <p class="navbar-brand mdb-p-header">Hi <font color="#447fc8"><?php echo $name ?></font></p>

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
          <div class="row">
              
              <div class="col-md-4 ">
                  <div class="thumbnail mpp-divs">
                    
                      <form class="" role="form">
                            
                              <div class="form-group">
                                  <label class="mpp-labelname">Name</label>
                                  <input type="text" class="form-control" id="name" placeholder="Name">
                              </div>
                          
                              <div class="form-group">
                                  <label class="mpp-labelname">Birth date</label>
                                <input type="date" class="form-control" id="" placeholder="">
                              </div>
                          
                              <div class="form-group">
                                  <label class="mpp-labelname">Sex</label>
                                    <select class="form-control">
                                      <option>Male</option>
                                      <option>Female</option>
                                      <option>Other</option>
                                    </select>
                              </div>
                          
                              <div class="form-group">
                                  <label class="mpp-labelname"> Alternate Email id</label>
                                <input type="email" class="form-control" id="" placeholder="Alternate Email">
                              </div>
                          
                              <div class="form-group">
                                  <label class="mpp-labelname">Institute</label>
                                <select class="form-control">
                                  <option>IIITA</option>
                                  <option>RGIT</option>
                                </select>
                              </div>
                          
                              <div class="form-group">
                                  <label class="mpp-labelname">Current semester</label>
                                <select class="form-control">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                  <option>6</option>
                                  <option>7</option>
                                  <option>8</option>
                                </select>
                              </div>
                              <div class="form-group">
                                  <label class="mpp-labelname">CGPA</label>
                                  <input type="number" class="form-control" id="" placeholder="Avrage till now">
                              </div>
                          
                        </form>
                      
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
                                  <a href="#" class="btn btn-block btn-lg btn-primary">
                                      Update Profile <span class="glyphicon glyphicon-flash"></span>
                                  </a>
                                  
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 ">
                  <div class="thumbnail mpp-divs">
                       <form class="" role="form">
                      
                             <div class="form-group">
                                  <label class="mpp-labelname">Education</label>
                                <textarea class="form-control" rows="3" id="" placeholder="Write about your education.."></textarea>
                              </div>
                          
                              <div class="form-group">
                                  <label class="mpp-labelname">Technical Experience</label>
                                <textarea class="form-control" rows="3" id="" placeholder="write about your technical experience.."></textarea>
                              </div>
                          
                              <div class="form-group">
                                  <label class="mpp-labelname">Projects</label>
                                <textarea class="form-control" rows="3" id="" placeholder="what projects hav you worked on?"></textarea>
                              </div>
                              <div class="form-group">
                                  <label class="mpp-labelname">Area of Intrest</label>
                                <textarea class="form-control" rows="3" id="" placeholder="Write about your Area of intrest.."></textarea>
                              </div>
                          
                        </form>
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
      </div>
      
      


         
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>  
     
    
  </body>
</html>