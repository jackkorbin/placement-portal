<?php session_start(); ?>
<?php


    if(isset($_SESSION['Adminrollnum']) ){
         
        $rollnum = $_SESSION['Adminrollnum'];
        $admin = "yes";
        
    }
    else
    {
        header("Location:index.php");
        exit;
    }

?>


<?php require('includes/basichtmlheader.php'); ?>
<title>List of students applied to <?php echo $compname; ?></title>
<?php require('includes/basichtmlheader2.php'); ?>
    
    
<header class="navbar navbar-fixed-top mydashboardpageheader">
    <div class="container">
        <p class="navbar-brand mdb-p-header">Hi <font color="#447fc8">Admin <?php echo $rollnum; ?></font></p>

        <?php include('includes/buttonheader.php'); ?>

         <div class="collapse navbar-collapse mybuttonid"> 
            <ui class="nav navbar-nav navbar-right">
                <?php if($admin == "yes"){ echo '<li><a href="view_jnf_list.php" class="mdb-menutext-active">View JNFs</a></li>'; } ?>
                <?php if($admin == "yes"){ echo '<li><a href="admin_dashboard.php" class="mdb-menutext">Admin Panel</a></li>'; } ?>
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

      <div class="col-sm-12 " > <!-- start of companies div -->
          <div class="mdb-company thumbnail">
                <div class="mdb-heading">All JNFs<font color="#447fc8"> Listed Below :</font>
                </div>
                      
                <div class="row">
                    <table id= "myTable" class="table table-striped tablesorter">
                        <thead>
                            <tr>
                                <th><span class="glyphicon glyphicon-list gly-sort"></span></th>
                                <th>Organization <span class="glyphicon glyphicon-sort gly-sort"></span></th>
                                <th>Name <span class="glyphicon glyphicon-sort gly-sort"></span></th>
                                
                                <th>Contact number <span class="glyphicon glyphicon-sort gly-sort"></span></th>
                                <th>Email <span class="glyphicon glyphicon-sort gly-sort"></span></th>
                                <th>Added on <span class="glyphicon glyphicon-sort gly-sort"></span></th>
                                <th>Link</th>
                            </tr>
                        </thead>
                        <tbody>
<?php require('includes/view_all_jnfs.php'); ?>
                        </tbody>
                    </table>
                </div>
          </div>
      </div><!-- end of col-sm-8 means end of companies div -->

   

  </div><!-- end of middle content of whole page -->
</div><!-- end of container -->
 
    
<?php require('includes/footerscriptjs.php'); ?> 
<script type="text/javascript" src="js/jquery.tablesorter.min.js"></script>
<script>
  $(document).ready(function(){
        $("#myTable").tablesorter();
  });
</script>
    
    
  </body>
</html>