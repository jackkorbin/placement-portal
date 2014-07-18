<?php session_start(); ?>
<?php

    if(isset($_SESSION['Adminrollnum']) && isset($_GET['rollnum']) ){
        $rollnum = $_GET['rollnum'];
        $admin = "yes";
    }
    else
    {
        header("Location:index.php");
        exit;
    }
   
   
?>

<?php require('includes/basichtmlheader.php'); ?>
<title><?php echo $rollnum; ?></title>
<?php require('includes/basichtmlheader2.php'); ?>
<?php require('includes/viewprofile0.php'); ?>


<header class="navbar navbar-fixed-top mydashboardpageheader">
    <div class="container">
        <p class="navbar-brand mdb-p-header"><font color="#447fc8"><?php echo $rollnum; ?></font></p>

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
      
<?php require('includes/viewprofile1.php'); ?>
      
          <div class="col-md-12">
              <div class="thumbnail mpp-divs">
                  <div class="form-group">
                        <a href="downloadresume.php?rollnum=<?php echo $rollnum; ?>" class="btn btn-block btn-lg btn-danger">
                            Download resume 
                            <span class="glyphicon glyphicon-cloud-download"></span>
                        </a>
                  </div>
                </div>
          </div>
                       
<?php require('includes/viewprofile2.php'); ?>
             