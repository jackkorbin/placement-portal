<?php session_start(); ?>
<?php
    
    if( isset($_SESSION["Adminrollnum"])  ) {
        $admin = "yes";
    }
    else {
        $admin = "no";
    }
    
    if(isset($_SESSION["name"])){
        $name = $_SESSION["name"];
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
<title>View profile</title>
<?php require('includes/basichtmlheader2.php'); ?>
<?php $rollnum = $_SESSION["rollnum"]; ?>
<?php require('includes/viewprofile0.php'); ?>        
        




      
<header class="navbar navbar-fixed-top mydashboardpageheader">
    <div class="container">
        <p class="navbar-brand mdb-p-header">Hi <font color="#447fc8"><?php echo $name; ?></font></p>

        <?php include('includes/buttonheader.php'); ?>

         <div class="collapse navbar-collapse mybuttonid"> 
            <ui class="nav navbar-nav navbar-right">
                <?php if($admin == "yes"){ echo '<li><a href="view_jnf_list.php" class="mdb-menutext">View JNFs</a></li>'; } ?>
                <?php if($admin == "yes"){ echo '<li><a href="admin_dashboard.php" class="mdb-menutext">Admin Panel</a></li>'; } ?>
                <li><a href="mydashboard.php" class="mdb-menutext">My Dashboard</a></li>
                <li><a href="viewprofile.php" class="mdb-menutext-active">view profile</a></li>
                <li><a href="logout.php" class="mdb-menutext">Logout</a></li>
            </ui>
        </div>
    </div>
</header> 
      
      
<?php require('includes/viewprofile1.php'); ?>
      
  <div class="col-md-12">
      <div class="thumbnail mpp-divs">
          <div class="form-group">
                <a href="downloadresume.php" class="btn btn-block btn-lg btn-danger" >
                    Download your Current resume 
                    <span class="glyphicon glyphicon-cloud-download"></span>
                </a>
          </div>
        </div>
  </div>

  <div class="col-md-12 text-center">
      <div class="thumbnail mpp-divs">
          <div class="form-group">
              <a href="editprofile.php" class="btn btn-block btn-lg btn-primary">
                  Edit your Profile <span class="glyphicon glyphicon-cog"></span>
              </a>
          </div>
      </div>
  </div>

<?php require('includes/viewprofile2.php'); ?>
      
            