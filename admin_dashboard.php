<?php session_start(); ?>

<?php
    if(isset($_SESSION['Adminrollnum'])){
        $admin = "yes";
        $rollnum = $_SESSION['Adminrollnum'];
    }
    else {
        header("Location:index.php");
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
                <?php if($admin == "yes"){ echo '<li><a href="admin_dashboard.php" class="mdb-menutext-active">Admin Page</a></li>'; } ?>
                <li><a href="mydashboard.php" class="mdb-menutext">My Dashboard</a></li>
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
          <div class="mdb-company thumbnail">
            <div class="mdb-heading">Apply to <font color="#447fc8">Companies</font></div>
                <div class="row">
                      <div class="col-lg-4">
                          <div class="form-group-option" >
                                <div class="mdb-show-label">Show</div>
                                <select class="form-control mdb-select" id="filterselect">
                                  <option selected value="Active">Active</option>
                                  <option value="All" >All</option>
                                  <option value="Inactive">Inactive</option>
                                </select>
                          </div>
                      </div>
                      <div class="col-lg-4">
                          <button class="btn btn-primary company-btn a-add-btn" data-toggle="modal" data-target="#com-rm-modal-add">
                              Add Company
                          </button>
                      </div>
                      <div class="col-lg-4">
                          <a href="manage_admin.php" class="btn btn-danger company-btn a-add-btn">
                              Manage Admins
                          </a>
                      </div>
                </div>
                <div id="Ajaxcompanies">
                    <img src="images/loading.gif" width="100%">
                </div>
                <div class="mdb-viewmore" onclick="javascript:fetch_companies('admin')" id="loadmore">
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
          <form action = "add_company.php" method= "post">
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
                                        <input name="lastdate" type="text" class="form-control" id="lastdate" title="eg - 2014-05-23 15:00" value="YYYY-MM-DD hh:mm">
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
<script> 
fetchannouncements('admin'); 
fetch_companies('admin');
$(document).ready(function(){
      $('#filterselect').change(function(){
          resetcounter();
          fetch_companies('admin');
      });
    $('input[id=lastdate]').tooltip({'trigger':'focus'});
    
});
    
    
</script>
    
    
  </body>
</html>