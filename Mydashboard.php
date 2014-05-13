<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My dashboard</title>

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
                        <li><a href="mydashboard.php" class="mdb-menutext-active">My Dashboard</a></li>
                        <li><a href="viewprofile.php" class="mdb-menutext">view profile</a></li>
                         <li><a href="index.php" class="mdb-menutext">Logout</a></li>
                    </ui>
                </div>
            </div>
        </header> 
      
      <!-- middle content -->
      <div class="container mdb-contentdiv">
          <div class="row">
              
              <div class="col-sm-8 " > <!-- start of companies div -->
                  <div class="mdb-company thumbnail">
                    <div class="mdb-heading">Apply to <font color="#447fc8">Companies</font></div>
                      
                          <div class="form-group-option">
                                <div class="mdb-show-label">Show</div>
                                <select class="form-control mdb-select">
                                  <option selected>Active</option>
                                  <option  >All</option>
                                  <option>Applied</option>
                                  <option>Unapplied</option>
                                </select>
                          </div>
                      
                      
                          
                            <div class="row">
                                <div class="thumbnail mdb-company-div">
                                    <div class="mdb-company-name text-center">
                                        <a href="" >Facebook</a>
                                    </div>
                                    
                                    
                                    <div class="mdb-company-content">
                                        <span class="mdb-appliedusers">Last date to apply : 
                                            <font color="#447fc8">8-2-2014</font>
                                        </span>
                                        <span class="mdb-appliedusers pull-right">Min CGPA :
                                            <font color="#447fc8">8.5</font>
                                        </span>
                                    </div>
                                    <div class="mdb-company-footer">
                                        
                                        <div class="row">
                                            <div class="col-xs-6 ">
                                                <button class="btn btn-danger company-btn pull-left" data-toggle="modal" data-target="#com-rm-modal">
                                                    Read more
                                                </button>
                                            </div>
                                            <div class="col-xs-6 ">
                                                <button class="btn btn-success company-btn pull-right" id="apply">
                                                    Apply
                                                </button>
                                            </div>
                                        </div>
                                        

                                        
                                    </div>
                                </div>
                            </div>
                          
                          
                          
                          
                           <div class="row">
                                <div class="thumbnail mdb-company-div">
                                    <div class="mdb-company-name text-center">
                                        <a href="" >Google</a>
                                    </div>
                                    <div class="mdb-company-content">
                                        <span class="mdb-appliedusers">Last date to apply : 
                                            <font color="#447fc8">8-2-2014</font>
                                        </span>
                                        <span class="mdb-appliedusers pull-right">Min CGPA :
                                            <font color="#447fc8">8.5</font>
                                        </span>
                                    </div>
                                    <div class="mdb-company-footer">
                                        
                                        <div class="row">
                                            <div class="col-xs-6 ">
                                                <button class="btn btn-danger company-btn pull-left" data-toggle="modal" data-target="#com-rm-modal">
                                                    Read more
                                                </button>
                                            </div>
                                            <div class="col-xs-6 ">
                                                <button class="btn btn-success company-btn pull-right" id="apply">
                                                    Apply
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                          <div class="row">
                                <div class="thumbnail mdb-company-div">
                                    <div class="mdb-company-name text-center">
                                        <a href="" >Microsoft</a>
                                    </div>
                                    <div class="mdb-company-content">
                                        <span class="mdb-appliedusers">Last date to apply : 
                                            <font color="#447fc8">8-2-2014</font>
                                        </span>
                                        <span class="mdb-appliedusers pull-right">Min CGPA :
                                            <font color="#447fc8">8.5</font>
                                        </span>
                                    </div>
                                    <div class="mdb-company-footer">
                                        
                                        <div class="row">
                                            <div class="col-xs-6 ">
                                                <button class="btn btn-danger company-btn pull-left" data-toggle="modal" data-target="#com-rm-modal">
                                                    Read more
                                                </button>
                                            </div>
                                            <div class="col-xs-6 ">
                                                <button class="btn btn-success company-btn pull-right" id="apply">
                                                    Apply
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                      
                      
                            <div class="row">
                                <div class="thumbnail mdb-company-div">
                                    <div class="mdb-company-name text-center">
                                        <a href="" >Nasa</a>
                                    </div>
                                    <div class="mdb-company-content">
                                        <span class="mdb-appliedusers">Last date to apply : 
                                            <font color="#447fc8">8-2-2014</font>
                                        </span>
                                        <span class="mdb-appliedusers pull-right">Min CGPA :
                                            <font color="#447fc8">8.5</font>
                                        </span>
                                    </div>
                                    <div class="mdb-company-footer">
                                        
                                        <div class="row">
                                            <div class="col-xs-6 ">
                                                <button class="btn btn-danger company-btn pull-left" data-toggle="modal" data-target="#com-rm-modal">
                                                    Read more
                                                </button>
                                            </div>
                                            <div class="col-xs-6 ">
                                                <button class="btn btn-success company-btn pull-right" id="apply">
                                                    Apply
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                          
                          
                          
                      
                      <div class="mdb-viewmore">
                        View more
                      </div>
                  </div>
              </div><!-- end of col-sm-8 means end of companies div -->
              
              
              <div class="col-sm-4 " > <!-- start of announcmnts div -->
                  <div class="mdb-announcements thumbnail">
                    <div class="mdb-heading">New <font color="#447fc8">Announcements</font></div>
                      <ul class="list-group">
                          <li class="list-group-item">This is first Announcemnrnt and this is made by jackkorbin
                              <br><span class="small mdb-ann-time">-4th April 2013</span>
                          </li>
                          <li class="list-group-item">This is first Announcemnrnt
                            <br><span class="small mdb-ann-time">-4th April 2013</span>
                          </li>
                          <li class="list-group-item">This is first Announcemnrnt
                            <br><span class="small mdb-ann-time">-4th April 2013</span>
                          </li>
                          <li class="list-group-item">This is first Announcemnrnt and this is made by jackkorbin
                            <br><span class="small mdb-ann-time">-4th April 2013</span>
                          </li>
                          <li class="list-group-item">This is first Announcemnrnt
                            <br><span class="small mdb-ann-time">-4th April 2013</span>
                          </li>
                          <li class="list-group-item">This is first Announcemnrnt and this is made by jackkorbin
                            <br><span class="small mdb-ann-time">-4th April 2013</span>
                          </li>
                      </ul>
                      <div class="mdb-viewmore">Load more</div>
                  </div>
              </div> <!-- end of announcmnts div -->
                  
          </div><!-- end of middle content of whole page -->
      </div><!-- end of container -->

      <!-- com-rm-modal company read more modal div-->
        <div class="modal fade" id="com-rm-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              
                                <div class="mdb-company-modal-container">
                                    <div class="mdb-modal-name ">
                                        <a href="" >Facebook</a>
                                        <button class="close" aria-hidden="true" data-dismiss="modal">
                                            <span class="glyphicon glyphicon-remove" ></span>
                                        </button>
                                    </div>
                                    
                                    <div class="mdb-modal-content">
                                        
                                        <div class="row">
                                            
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                      <label class="vpp-labelname">Min CGPA</label>
                                                      <div class="vpp-content-text">8.5</div>
                                                </div>
                                            </div>
                                            
                                             <div class="col-sm-6">
                                                <div class="form-group">
                                                      <label class="vpp-labelname">Last date to Apply</label>
                                                      <div class="vpp-content-text">4-2-2014</div>
                                                </div>
                                              </div>
                                              
                                              <div class="col-sm-6"> 
                                                  <div class="form-group">
                                                      <label class="vpp-labelname">Discription</label>
                                                      <div class="vpp-content-text">
                                                          Description...<br>hello this is Google.. 
                                                          calling all creeps and division 
                                                          to the world of the goo and i am jack korbin.
                                                          Description...<br>hello this is Google.. 
                                                          calling all creeps and division 
                                                          to the world of the goo and i am jack korbin.
                                                          Description...<br>hello this is Google.. 
                                                          calling all creeps and division 
                                                          to the world of the goo and i am jack korbin.
                                                      </div>
                                                  </div>
                                              </div>
                                            
                                              <div class="col-sm-6">
                                                  <div class="form-group">
                                                      <label class="vpp-labelname">Applied users</label>
                                                      <div class="vpp-content-text">127</div>
                                                  </div>
                                              </div>
                                            
                                              
                                              
                                              <div class="col-sm-6">
                                                  <div class="form-group">
                                                      <label class="vpp-labelname">job profile offered</label>
                                                      <div class="vpp-content-text">software developer, system analyst </div>
                                                  </div>
                                              </div>
                                              <div class="col-sm-6">
                                                  <div class="form-group">
                                                      <label class="vpp-labelname">Link</label>
                                                      <div class="vpp-content-text">
                                                          <a href="https://www.facebook.com" target="_blank">www.facebook.com</a>
                                                      </div>
                                                  </div>
                                              </div>
                                            
                                    </div>
                                </div><!-- modal content container ending -->
                                    <div class="mdb-modal-footer">
                                            <button class="btn btn-success btn-block mdb-modal-btn" id="apply">
                                                Apply
                                            </button>
                                    </div>
                                
              
            </div>
          </div>
        </div>

         
    
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