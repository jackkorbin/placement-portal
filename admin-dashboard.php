<?php session_start(); ?>
<?php
    if(isset($_SESSION['Adminrollnum'])){
        $rollnum = $_SESSION['Adminrollnum'];
    }
    else {
        header("Location:admin-login.php");
        exit;
    }
?>


<?php require('includes/basichtmlheader.php'); ?>
<title>welcome Admin</title>
<?php require('includes/basichtmlheader2.php'); ?>
    
    
        
<header class="navbar navbar-fixed-top mydashboardpageheader">
    <div class="container">
        <p class="navbar-brand mdb-p-header">Hi <font color="#447fc8">Admin <?php echo $rollnum; ?></font></p>
        <?php include('includes/buttonheader.php'); ?>
         <div class="collapse navbar-collapse mybuttonid"> 
            <ui class="nav navbar-nav navbar-right">
                <li><a href="admin-dashboard.php" class="mdb-menutext-active">My Dashboard</a></li>
                <li><a href="logout.php" class="mdb-menutext">Logout</a></li>
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
                          <div class="form-group-option" >
                                <div class="mdb-show-label">Show</div>
                                <select class="form-control mdb-select" id="filterselect">
                                  <option selected value="Active">Active</option>
                                  <option value="All" >All</option>
                                  <option value="Applied">Inactive</option>
                                </select>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <button class="btn btn-primary company-btn a-add-btn" data-toggle="modal" data-target="#com-rm-modal-add">
                              Add Company
                          </button>
                      </div>
                </div>
                <div id="Ajaxcompanies">
                    <img src="images/loading.gif" width="100%">
                </div>
                <div class="mdb-viewmore" onclick="javascript:fetch_companies()" id="loadmore">
                  Load more
                </div>
            </div>
      </div><!-- end of col-sm-8 means end of companies div -->


      <div class="col-sm-4 " > <!-- start of announcmnts div -->
          <div class="mdb-announcements thumbnail">
            <div class="mdb-heading">New <font color="#447fc8">Announcements</font></div>
               <div class="form-group">
                  <textarea class="form-control" rows="3" id="announcement" placeholder="New Announcement.."></textarea>
                   <button class="btn btn-success a-add-ann-btn" onclick="javascript:add_announc();">Add</button>
               </div>
               <ul class="list-group" id="ann_list">
                  <img src="images/loading.gif" width="100%">
                  <!--
                  <li class="list-group-item">This is first Announcemnrnt and this is made by jackkorbin
                      <br><span class="small mdb-ann-time">-4th April 2013</span>
                      <span class="small mdb-ann-time pull-right"><a href="">Delete</a></span>
                  </li> -->
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
      <div id="readmore">

      </div>
    </div>
  </div>
</div>
     
<!-- com-rm-modal company Edit modal div-->
<div class="modal fade" id="com-rm-modal-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div id="editcomp">

        </div>
    </div>
</div>
</div>
     
<!-- com-rm-modal company ADD modal div-->
<div class="modal fade" id="com-rm-modal-add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <form action = "add-company.php" method= "post">
                <div class="mdb-company-modal-container">
                    <div class="mdb-modal-name ">
                        <a href="#">Add Company</a>
                        <button class="close" aria-hidden="true" data-dismiss="modal">
                            <span class="glyphicon glyphicon-remove" ></span>
                        </button>
                    </div>
                    <div class="mdb-modal-content">
                            <div class="row">
                                <div class="col-sm-6">
                                     <div class="form-group">
                                          <label class="mpp-labelname">Name</label>
                                          <input name="name" type="text" class="form-control" placeholder="Name of the Company">
                                      </div>
                                      <div class="form-group">
                                          <label class="mpp-labelname">Min CGPA</label>
                                          <input name="mincgpa" type="text" class="form-control" id="" placeholder="Min CGPA required">
                                      </div>
                                      <div class="form-group">
                                        <label class="mpp-labelname">Last Date to apply</label>
                                        <input name="lastdate" type="date" class="form-control" id="" placeholder="">
                                      </div>
                                      <div class="form-group">
                                          <label class="mpp-labelname">Link</label>
                                          <input name="link" type="text" class="form-control" id="" placeholder="http://www...">
                                      </div>
                                </div>
                                <div class="col-sm-6">
                                      <div class="form-group">
                                          <label class="mpp-labelname" >Discription</label>
                                          <textarea name="description" class="form-control" rows="6" id="" placeholder="Write Description"></textarea>
                                      </div>
                                      <div class="form-group">
                                          <label class="mpp-labelname" >Job Profile offered</label>
                                          <textarea name="jobprofile" class="form-control" rows="5" id="" placeholder="Job profile.."></textarea>
                                      </div>
                                </div>

                           </div>
                    </div><!-- modal content container ending -->
                    <div class="mdb-modal-footer">
                        <input type="submit" value ="Add Company" class="btn btn-primary btn-block mdb-modal-btn">      
                    </div>
               </div>
            </form>
      </div>
    </div>
</div> 
      
<!-- com-rm-modal company Remove modal div-->
<div class="modal fade" id="com-rm-modal-remove" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div id="removecomp">
        
      </div>
    </div>
  </div>
</div>   
    
<?php require('includes/footerscriptjs.php'); ?> 
<script src="js/dashboard.script.js"></script> 
<script> fetchannouncements_admin(); </script>
    
    
  </body>
</html>