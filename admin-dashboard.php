<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin dashboard</title>

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
                        <li><a href="admin-dashboard.php" class="mdb-menutext-active">My Dashboard</a></li>
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
                    <div class="mdb-heading">Apply to <font color="#447fc8">Companies</font></div>
                      
                          <div class="row">

                              <div class="col-lg-6">
                                  <div class="form-group-option">
                                        <div class="mdb-show-label">Show</div>
                                        <select class="form-control mdb-select">
                                          <option selected>All</option>
                                          <option  >Active</option>
                                          <option>Inactive</option>
                                        </select>
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                  <button class="btn btn-primary company-btn a-add-btn" data-toggle="modal" data-target="#com-rm-modal-add">
                                      Add Company
                                  </button>
                              </div>

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
                                            <div class="col-xs-3 ">
                                                <button class="btn btn-info company-btn pull-left" data-toggle="modal" data-target="#com-rm-modal">
                                                    Read more
                                                </button>
                                            </div>
                                            <div class="col-xs-3 text-center">
                                                <a href="students-list.php" class="btn btn-success company-btn">
                                                    Students list
                                                </a>
                                            </div>
                                            <div class="col-xs-3 text-center">
                                                <button class="btn btn-success company-btn" data-toggle="modal" data-target="#com-rm-modal-edit">
                                                    Edit
                                                </button>
                                            </div>
                                            <div class="col-xs-3 ">
                                                <button class="btn btn-danger company-btn pull-right" data-toggle="modal" data-target="#com-rm-modal-remove">
                                                    Remove
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                            <div class="col-xs-3 ">
                                                <button class="btn btn-info company-btn pull-left" data-toggle="modal" data-target="#com-rm-modal">
                                                    Read more
                                                </button>
                                            </div>
                                            <div class="col-xs-3 text-center">
                                                <a href="students-list.php" class="btn btn-success company-btn">
                                                    Students list
                                                </a>
                                            </div>
                                            <div class="col-xs-3 text-center">
                                                <button class="btn btn-success company-btn" data-toggle="modal" data-target="#com-rm-modal-edit">
                                                    Edit
                                                </button>
                                            </div>
                                            <div class="col-xs-3 ">
                                                <button class="btn btn-danger company-btn pull-right" data-toggle="modal" data-target="#com-rm-modal-remove">
                                                    Remove
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                            <div class="col-xs-3 ">
                                                <button class="btn btn-info company-btn pull-left" data-toggle="modal" data-target="#com-rm-modal">
                                                    Read more
                                                </button>
                                            </div>
                                            <div class="col-xs-3 text-center">
                                                <a href="students-list.php" class="btn btn-success company-btn">
                                                    Students list
                                                </a>
                                            </div>
                                            <div class="col-xs-3 text-center">
                                                <button class="btn btn-success company-btn" data-toggle="modal" data-target="#com-rm-modal-edit">
                                                    Edit
                                                </button>
                                            </div>
                                            <div class="col-xs-3 ">
                                                <button class="btn btn-danger company-btn pull-right" data-toggle="modal" data-target="#com-rm-modal-remove">
                                                    Remove
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                            <div class="col-xs-3 ">
                                                <button class="btn btn-info company-btn pull-left" data-toggle="modal" data-target="#com-rm-modal">
                                                    Read more
                                                </button>
                                            </div>
                                            <div class="col-xs-3 text-center">
                                                <a href="students-list.php" class="btn btn-success company-btn">
                                                    Students list
                                                </a>
                                            </div>
                                            <div class="col-xs-3 text-center">
                                                <button class="btn btn-success company-btn" data-toggle="modal" data-target="#com-rm-modal-edit">
                                                    Edit
                                                </button>
                                            </div>
                                            <div class="col-xs-3 ">
                                                <button class="btn btn-danger company-btn pull-right" data-toggle="modal" data-target="#com-rm-modal-remove">
                                                    Remove
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
                       <div class="form-group">
                          <textarea class="form-control" rows="3" id="" placeholder="New Announcement.."></textarea>
                           <button class="btn btn-success a-add-ann-btn">Add</button>
                      </div>
                      <ul class="list-group">
                          <li class="list-group-item">This is first Announcemnrnt and this is made by jackkorbin
                              <br><span class="small mdb-ann-time">-4th April 2013</span>
                              <span class="small mdb-ann-time pull-right"><a href="">Delete</a></span>
                          </li>
                          <li class="list-group-item">This is first Announcemnrnt and its to say that u suck
                            <br><span class="small mdb-ann-time">-4th April 2013</span>
                              <span class="small mdb-ann-time pull-right"><a href="">Delete</a></span>
                          </li>
                          <li class="list-group-item">This is first Announcemnrnt
                            <br><span class="small mdb-ann-time">-4th April 2013</span>
                              <span class="small mdb-ann-time pull-right"><a href="">Delete</a></span>
                          </li>
                          <li class="list-group-item">This is first Announcemnrnt and this is made by jackkorbin
                            <br><span class="small mdb-ann-time">-4th April 2013</span>
                              <span class="small mdb-ann-time pull-right"><a href="">Delete</a></span>
                          </li>
                          <li class="list-group-item">This is first Announcemnrnt
                            <br><span class="small mdb-ann-time">-4th April 2013</span>
                              <span class="small mdb-ann-time pull-right"><a href="">Delete</a></span>
                          </li>
                          <li class="list-group-item">This is first Announcemnrnt and this is made by jackkorbin
                            <br><span class="small mdb-ann-time">-4th April 2013</span>
                              <span class="small mdb-ann-time pull-right"><a href="">Delete</a></span>
                          </li>
                      </ul>
                  </div>
              </div> <!-- end of announcmnts div -->
                  
          </div><!-- end of middle content of whole page -->
      </div><!-- end of container -->

      
      <!-- MODALSSS / POPUPS -->
      
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
                                    
                                
              
            </div>
          </div>
        </div>
       </div>
      
      
      
      <!-- com-rm-modal company Edit modal div-->
        <div class="modal fade" id="com-rm-modal-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              
                    <div class="mdb-company-modal-container">
                        <div class="mdb-modal-name ">
                            <a href="" >Edit Facebook Details</a>
                            <button class="close" aria-hidden="true" data-dismiss="modal">
                                <span class="glyphicon glyphicon-remove" ></span>
                            </button>
                        </div>

                        <div class="mdb-modal-content">

                            <div class="row">
                                
                                <div class="col-sm-6">
                                      <div class="form-group">
                                          <label class="mpp-labelname">Name</label>
                                          <input type="text" class="form-control" id="" placeholder="Newname..">
                                      </div>
                                      <div class="form-group">
                                          <label class="mpp-labelname">Min CGPA</label>
                                          <input type="number" class="form-control" id="" placeholder="Min CGPA required">
                                      </div>
                                      <div class="form-group">
                                        <label class="mpp-labelname">Last Date to apply</label>
                                        <input type="date" class="form-control" id="" placeholder="">
                                      </div>
                                      <div class="form-group">
                                          <label class="mpp-labelname">Link</label>
                                          <input type="text" class="form-control" id="" placeholder="http://www...">
                                      </div>
                                  </div>

                                  <div class="col-sm-6">
                                      <div class="form-group">
                                          <label class="mpp-labelname">Discription</label>
                                          <textarea class="form-control" rows="6" id="" placeholder="Write Description"></textarea>
                                      </div>
                                      <div class="form-group">
                                          <label class="mpp-labelname">Job Profile offered</label>
                                          <textarea class="form-control" rows="4" id="" placeholder="Job profile.."></textarea>
                                      </div>
                                     
                                  </div>
                                
                                

                                 

                        </div>
                    </div><!-- modal content container ending -->
                        <div class="mdb-modal-footer">
                                <button class="btn btn-success btn-block mdb-modal-btn" id="apply">
                                    Update
                                </button>
                        </div>
                   </div>
          </div>
        </div>
       </div>
      
      
      
      <!-- com-rm-modal company ADD modal div-->
        <div class="modal fade" id="com-rm-modal-add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              
                    <div class="mdb-company-modal-container">
                        <div class="mdb-modal-name ">
                            <a href="" >ADD company</a>
                            <button class="close" aria-hidden="true" data-dismiss="modal">
                                <span class="glyphicon glyphicon-remove" ></span>
                            </button>
                        </div>

                        <div class="mdb-modal-content">

                            <div class="row">
                                
                                <div class="col-sm-6">
                                     <div class="form-group">
                                          <label class="mpp-labelname">Name</label>
                                          <input type="number" class="form-control" id="" placeholder="Name of the Company">
                                      </div>
                                    
                                      <div class="form-group">
                                          <label class="mpp-labelname">Min CGPA</label>
                                          <input type="number" class="form-control" id="" placeholder="Min CGPA required">
                                      </div>
                                    
                                      <div class="form-group">
                                        <label class="mpp-labelname">Last Date to apply</label>
                                        <input type="date" class="form-control" id="" placeholder="">
                                      </div>
                                    
                                      <div class="form-group">
                                          <label class="mpp-labelname">Link</label>
                                          <input type="text" class="form-control" id="" placeholder="http://www...">
                                      </div>
                                    
                                </div>

                                <div class="col-sm-6">
                                    
                                      <div class="form-group">
                                          <label class="mpp-labelname">Discription</label>
                                          <textarea class="form-control" rows="6" id="" placeholder="Write Description"></textarea>
                                      </div>
                                    
                                      <div class="form-group">
                                          <label class="mpp-labelname">Job Profile offered</label>
                                          <textarea class="form-control" rows="5" id="" placeholder="Job profile.."></textarea>
                                      </div>
                                    
                                     
                                </div>
                                
                                

                        </div>
                    </div><!-- modal content container ending -->
                        <div class="mdb-modal-footer">
                                <button class="btn btn-primary btn-block mdb-modal-btn" id="apply">
                                    Add Company
                                </button>
                        </div>
                   </div>
          </div>
        </div>
       </div>
      
      
       <!-- com-rm-modal company Remove modal div-->
        <div class="modal fade" id="com-rm-modal-remove" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              
                    <div class="mdb-company-modal-container">
                        <div class="mdb-modal-name ">
                            <a href="" >Remove Facebook</a>
                            <button class="close" aria-hidden="true" data-dismiss="modal">
                                <span class="glyphicon glyphicon-remove" ></span>
                            </button>
                        </div>

                        <div class="mdb-modal-content">

                            Are you Sure You want to remove this company?
                    </div><!-- modal content container ending -->
                        <div class="mdb-modal-footer">
                                <button class="btn btn-danger btn-block mdb-modal-btn" id="apply">
                                    Remove
                                </button>
                        </div>
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