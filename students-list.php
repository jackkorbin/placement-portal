<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Students-list</title>

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
                <p class="navbar-brand mdb-p-header">Hi <font color="#447fc8">Admin</font></p>

                <button class="navbar-toggle" data-toggle="collapse" data-target=".mybuttonid" style="background-color:black;">
                    <span class="icon-bar" style="background-color:white;"></span>
                    <span class="icon-bar" style="background-color:white;"></span>
                    <span class="icon-bar" style="background-color:white;"></span>
                </button>

                 <div class="collapse navbar-collapse mybuttonid"> 
                    <ui class="nav navbar-nav navbar-right">
                        <li><a href="admin-dashboard.php" class="mdb-menutext">My Dashboard</a></li>
                         <li><a href="admin-login.php" class="mdb-menutext">Logout</a></li>
                    </ui>
                </div>
            </div>
        </header> 
      
      <!-- middle content -->
      <div class="container mdb-contentdiv">
          <div class="row">
              
              <div class="col-sm-8 " > <!-- start of companies div -->
                  <div class="mdb-company thumbnail">
                    <div class="mdb-heading">Students applied to <font color="#447fc8">Facebook</font></div>
                      
                          <div class="row">

                              <div class="col-lg-6">
                                  <div class="form-group-option">
                                        <div class="mdb-show-label">Show</div>
                                        <select class="form-control mdb-select">
                                          <option selected>All</option>
                                          <option  >IIITA</option>
                                          <option>RGIT</option>
                                        </select>
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                  <a href="admin-dashboard.php" class="btn btn-primary a-add-btn">
                                      Back to Companies
                                  </a>
                              </div>

                            </div>
                          
                      
                            <div class="row">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name &nbsp<span class="glyphicon glyphicon-sort gly-sort"></span></th>
                                            <th>Roll num &nbsp<span class="glyphicon glyphicon-sort gly-sort"></span></th>
                                            <th>CGPA &nbsp<span class="glyphicon glyphicon-sort gly-sort"></span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><a href="studentprofile.php?rol=IIT2013113" target="_blank">Jack</a></td>
                                            <td>IIT2013113</td>
                                            <td>3.5</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><a href="studentprofile.php?rol=IIT2013113" target="_blank">Korbin</a></td>
                                            <td>IIT2014197</td>
                                            <td>9.9</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><a href="studentprofile.php?rol=IIT2013113" target="_blank">Jack</a></td>
                                            <td>IIT2014197</td>
                                            <td>9.9</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td><a href="studentprofile.php?rol=IIT2013113" target="_blank">Jack</a></td>
                                            <td>IIT2013113</td>
                                            <td>3.5</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><a href="studentprofile.php?rol=IIT2013113" target="_blank">Jack</a></td>
                                            <td>IIT2014197</td>
                                            <td>9.9</td>
                                        </tr>
                                        
                                    </tbody>
                                   
                                </table>
                            </div>
                      
                      
                          
                            
                          
                          
                          
                          
                      
                          
                  </div>
              </div><!-- end of col-sm-8 means end of companies div -->
              
              
              <div class="col-sm-4 " > <!-- start of announcmnts div -->
                  <div class="mdb-students-list thumbnail">
                      <div class="mdb-heading"><font color="#447fc8">Download</font></div>
                          <a href="#" class="btn btn-block btn-md btn-danger sl-custom-btn">
                              Download whole List &nbsp<span class="glyphicon glyphicon-cloud-download"> </span>
                          </a>
                          <a href="#" class="btn btn-block btn-md btn-success sl-custom-btn">
                              Download all CVs as RAR &nbsp<span class="glyphicon glyphicon-cloud-download"></span>
                          </a>
                  </div>
              </div> <!-- end of announcmnts div -->
                  
          </div><!-- end of middle content of whole page -->
      </div><!-- end of container -->

      
      
         
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>  
      <script>
          
          $(document).ready(function(){
                $('#apply').click(function(){  
                    var app = $('#apply').text();
                    if( app === "Apply" ){
                        $('#apply').html('unapply');
                    }
                   if( app === 'unapply' ){
                       $('#apply').html('Apply');
                    }

                });
          });
          
      </script>
    
    
  </body>
</html>