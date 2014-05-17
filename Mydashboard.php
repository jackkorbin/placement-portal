<?php session_start(); ?>
<?php

    if(isset($_SESSION["name"])){
        $name = $_SESSION["name"];
        $rollnum = $_SESSION['rollnum'];
    }
    else if(isset($_SESSION["rollnum"])){
        header("Location:editprofile.php");
        exit;
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
                <p class="navbar-brand mdb-p-header">Hi <font color="#447fc8"><?php echo $name; ?></font></p>

                <button class="navbar-toggle" data-toggle="collapse" data-target=".mybuttonid" style="background-color:black;">
                    <span class="icon-bar" style="background-color:white;"></span>
                    <span class="icon-bar" style="background-color:white;"></span>
                    <span class="icon-bar" style="background-color:white;"></span>
                </button>

                 <div class="collapse navbar-collapse mybuttonid"> 
                    <ui class="nav navbar-nav navbar-right">
                        <li><a href="mydashboard.php" class="mdb-menutext-active">My Dashboard</a></li>
                        <li><a href="viewprofile.php" class="mdb-menutext">view profile</a></li>
                         <li><a href="logout.php" class="mdb-menutext">Logout</a></li>
                    </ui>
                </div>
            </div>
        </header> 
      
      <!-- middle content -->
      <div class="container mdb-contentdiv">
          <div class="row">
              
              <div class="col-sm-8 " > <!-- start of companies div -->
                  <div class="mdb-company thumbnail" >
                    <div class="mdb-heading">Apply to <font color="#447fc8">Companies</font></div>
                      
                          <div class="form-group-option" >
                                <div class="mdb-show-label">Show</div>
                                <select class="form-control mdb-select" id="filterselect">
                                  <option selected value="Active">Active</option>
                                  <option value="All" >All</option>
                                  <option value="Applied">Applied</option>
                                  <option value="Unapplied">Unapplied</option>
                                </select>
                          </div>
                      
                      
                          
                      
                            
                      <!-- company --
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
                          
                          
                          -->
                            <div id="Ajaxcompanies">
                                <img src="images/loading.gif" width="100%">
                            </div>
                          
                          
                          
                         
                      
                      
                            
                          
                          
                          
                          
                      
                      <div class="mdb-viewmore">
                        Load more
                      </div>
                  </div>
              </div><!-- end of col-sm-8 means end of companies div -->
              
              
              <div class="col-sm-4 " > <!-- start of announcmnts div -->
                  <div class="mdb-announcements thumbnail">
                    <div class="mdb-heading">New <font color="#447fc8">Announcements</font></div>
                      <ul class="list-group">
                          
                          <?php

                                $result=get_announcements();
                                $ann =1;
                                while($array = mysql_fetch_array($result)) {

                                    $ann = '<li class="list-group-item">';
                                    $ann .= $array['ann_text'];
                                    $ann .= '<br><span class="small mdb-ann-time">-';
                                    $ann .= $array['added_on'];
                                    $ann .= '</span></li>';
                                    echo $ann;
                                    //date("M jS, Y", strtotime("2011-01-05"));

                                }
                            if($ann == 1){
                                    echo '<li class="list-group-item">No announcements to Show.</li>';
                                }

                          
                          ?>
                          
                          <!-- ann
                            <li class="list-group-item">This is first Announcemnrnt
                            <br><span class="small mdb-ann-time">-4th April 2013</span>
                          </li>

                                -->
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
              
                        <div id="readmore">
                           
                        </div>
                
          </div>
        </div>

         
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>  
            
<script>
          
    
      $(document).ready(function(){
            
          $('#filterselect').change(function(){
              var value = $(this).find("option:selected").attr("value");
              fetch_companies(value);
          });


      });
    
    
// 1. to apply and unapply using ajax and change text on button also
          
    function applytoggle(comid){
        
	    $('#'+comid).addClass('btn-danger');  
        $('#'+comid).html('Wait..');
        
            $.ajax({
                type:'POST',

                url:'applytoggle.php',

                data:{
                id : comid
                },
                success: function(app){
                  
                    var app = +(app);
                   if(app === 1){
                       $('#'+comid).removeClass('btn-success');
                       $('#'+comid).removeClass('btn-danger');
                       $('#'+comid).addClass('btn-primary');
                       $('#'+comid).html('Unapply');
                      
                   }
                   else if (app === 0) {
                       $('#'+comid).removeClass('btn-primary');
                       $('#'+comid).removeClass('btn-danger');
                       $('#'+comid).addClass('btn-success');
                       $('#'+comid).html('Apply');
                    }
                    else {
                        $('#'+comid).removeClass('btn-danger');
                        $('#'+comid).addClass('btn-danger');
                        $('#'+comid).html('Reload Page');
                    }

                }

            });
     }
 // 2. to fetch and filter companies in mydashboard main content.  
    function fetch_companies(value){
    
       $('#Ajaxcompanies').html('<img src="images/loading.gif" width="100%">');
        $.ajax({
                type:'POST',

                url:'fetch_companies.php',

                data:{
                value : value
                },
                success: function(data){
                    $('#Ajaxcompanies').html(data);
                }

            });
    }
    fetch_companies('Active');
    
 //3. to fetch read more information inside read more.         
    function fetch_details_of_comp(comid){
        $('#readmore').html('<img src="images/loading.gif" width="100%">');
        
        $.ajax({
            type : 'POST',
            url : 'fetch_details_of_comp.php',
            data : {
                id : comid
            },
            success : function(data){
                $('#readmore').html(data);
            }
        });
    }
    
</script>
    
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
    
  </body>
</html>