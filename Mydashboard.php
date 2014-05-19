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

<?php require('includes/basichtmlheader.php'); ?>
<title>My Dashboard</title>
<?php require('includes/basichtmlheader2.php'); ?>
    
        
        
      
      
<header class="navbar navbar-fixed-top mydashboardpageheader">
    <div class="container">
        <p class="navbar-brand mdb-p-header">Hi <font color="#447fc8"><?php echo $name; ?></font></p>
        <?php include('includes/buttonheader.php'); ?>
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
             
              <ul class="list-group" id="ann_list">
                  <img src="images/loading.gif" width="100%">
              </ul>

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

         
    
<?php require('includes/footerscriptjs.php'); ?>    
<script src="js/dashboard.script.js"></script>          
<script>  fetchannouncements_student(); </script>
    
        
    
  </body>
</html>