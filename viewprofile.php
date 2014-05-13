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
                <p class="navbar-brand mdb-p-header">Hi <font color="#447fc8">Jack Korbin</font></p>

                <button class="navbar-toggle" data-toggle="collapse" data-target=".mybuttonid" style="background-color:black;">
                    <span class="icon-bar" style="background-color:white;"></span>
                    <span class="icon-bar" style="background-color:white;"></span>
                    <span class="icon-bar" style="background-color:white;"></span>
                </button>

                 <div class="collapse navbar-collapse mybuttonid"> 
                    <ui class="nav navbar-nav navbar-right">
                        <li><a href="mydashboard.php" class="mdb-menutext">My Dashboard</a></li>
                        <li><a href="viewprofile.php" class="mdb-menutext-active">view profile</a></li>
                         <li><a href="index.php" class="mdb-menutext">Logout</a></li>
                    </ui>
                </div>
            </div>
        </header> 
      
      <div class="container mpp-contentdiv">
          <div class="row">
              
              <div class="col-md-4 ">
                  <div class="thumbnail mpp-divs">
                            
                              <div class="form-group">
                                  <label class="vpp-labelname">Name</label>
                                  <div class="vpp-content-text">jack</div>
                              </div>
                      
                              <div class="form-group">
                                  <label class="vpp-labelname">Roll num</label>
                                  <div class="vpp-content-text">IIT2013113</div>
                              </div>
                          
                              <div class="form-group">
                                  <label class="vpp-labelname">Birth Date</label>
                                  <div class="vpp-content-text">1st Feb 1996</div>
                              </div>
                          
                              <div class="form-group">
                                  <label class="vpp-labelname">Sex</label>
                                  <div class="vpp-content-text">Male</div>
                              </div>
                          
                              <div class="form-group">
                                  <label class="vpp-labelname"> Alternate Email id</label>
                                  <div class="vpp-content-text">jackkorbin@gmail.com</div>
                              </div>
                          
                              <div class="form-group">
                                  <label class="vpp-labelname">Institute</label>
                                  <div class="vpp-content-text">IIITA</div>
                              </div>
                          
                              <div class="form-group">
                                  <label class="vpp-labelname">Current semester</label>
                                  <div class="vpp-content-text">1st sem</div>
                              </div>
                              <div class="form-group">
                                  <label class="vpp-labelname">CGPA</label>
                                  <div class="vpp-content-text">8.9</div>
                              </div>
                      
                  </div>
              </div>
              <div class="col-md-4 ">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="thumbnail mpp-divs">
                              <img class="img-responsive thumbnail vpp-customimg" src="images/pp.jpg">
                              
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="thumbnail mpp-divs">
                              <div class="form-group">
                                    <a href="#" class="btn btn-block btn-lg btn-danger">
                                        Download your Current resume 
                                        <span class="glyphicon glyphicon-cloud-download"></span>
                                    </a>
                              </div>
                            </div>
                      </div>
                      
                      <div class="col-md-12 text-center">
                          <div class="thumbnail mpp-divs">
                              <div class="form-group">
                                  <a href="editprofile.php" class="btn btn-block btn-lg btn-primary">
                                      Edit your Profile <span class="glyphicon glyphicon-cog"></span>
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
                                <label class="vpp-labelname">Education</label>
                                <div class="vpp-content-text">
                                    I did my schooling from MIT university and den got into harvard by having a 
                                    total emorality rate of 602.<br>Now i am in IIITA.
                                 </div>
                              </div>
                          
                              <div class="form-group">
                                <label class="vpp-labelname">Technical Experience</label>
                                <div class="vpp-content-text">
                                    I did my schooling from MIT <br>university and den got into harvard by having a 
                                    total emorality rate of 602 Now i am in IIITA.
                                 </div>
                              </div>
                          
                              <div class="form-group">
                                <label class="vpp-labelname">Projects</label>
                                <div class="vpp-content-text">
                                    I did my schooling from MIT university and den got into harvard <br>by having a 
                                    total emorality rate of 602.Now i am in IIITA.
                                 </div>
                              </div>
                              <div class="form-group">
                                <label class="vpp-labelname">Area of Intrest</label>
                                <div class="vpp-content-text">
                                    I did my schooling from MIT university and den got into harvard by having a 
                                    total emorality <br>rate of 602.<br>Now i am in IIITA.
                                 </div>
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