<?php session_start(); ?>
<?php


    if(isset($_SESSION['Adminrollnum'])  && isset($_GET['id']) ){
         
        $rollnum = $_SESSION['Adminrollnum'];
        $admin = "yes";
        $compname = $_GET['name'];
        $id = $_GET['id'];
      
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
                <?php if($admin == "yes"){ echo '<li><a href="view_jnf_list.php" class="mdb-menutext">View JNFs</a></li>'; } ?>
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

      <div class="col-sm-8 " > <!-- start of companies div -->
          <div class="mdb-company thumbnail">
                <div class="mdb-heading">Students applied to <font color="#447fc8"><?php echo $compname; ?></font>
                </div>
                <div class="row ST-mdb-select">
                  <a href="admin_dashboard.php" class="btn btn-primary ST-a-add-btn">
                      Back to Companies
                  </a>
                </div>       
                <div class="row">
                    <table id= "myTable" class="table table-striped tablesorter">
                        <thead>
                            <tr>
                                <th><span class="glyphicon glyphicon-list gly-sort"></span></th>
                                <th>Name <span class="glyphicon glyphicon-sort gly-sort"></span></th>
                                <th>Roll num <span class="glyphicon glyphicon-sort gly-sort"></span></th>
                                <th>CGPA <span class="glyphicon glyphicon-sort gly-sort"></span></th>
                                <th>Institute <span class="glyphicon glyphicon-sort gly-sort"></span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php require('includes/studentlistcode.php'); ?>
                        </tbody>
                    </table>
                </div>
          </div>
      </div><!-- end of col-sm-8 means end of companies div -->

      <div class="col-sm-4 " > <!-- start of announcmnts div -->
          <div class="mdb-students-list thumbnail">
              <div class="mdb-heading"><font color="#447fc8">Download</font></div>
                <form action="downloadfile.php" method="post">
                    <input type="hidden" value="<?php echo $content; ?>" name="content">
                    <input type="hidden" value="<?php echo $compname; ?>" name="compname">
                    <button type="input"  class="btn btn-block btn-md btn-danger sl-custom-btn">
                        Download whole List as Text<span class="glyphicon glyphicon-cloud-download gly-sort"> </span>
                    </button>
                </form>
                <a href="downloadresumeallzip.php" class="btn btn-block btn-md btn-success sl-custom-btn">
                      Download all CVs as ZIP <span class="glyphicon glyphicon-cloud-download gly-sort"></span>
                </a>
          </div>
      </div> <!-- end of announcmnts div -->

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