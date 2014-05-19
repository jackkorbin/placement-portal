<?php session_start(); ?>
<?php

    if(isset($_SESSION['Adminrollnum'])){
        
        if( !(isset($_GET['rollnum'])) ){
            header("Location:index.php");
            exit;
        }
        else {          
            $rollnum = $_GET['rollnum'];
        }
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
        <p class="navbar-brand mdb-p-header"><font color="#447fc8">Jack Korbin</font></p>

        <?php include('includes/buttonheader.php'); ?>

         <div class="collapse navbar-collapse mybuttonid"> 
            <ui class="nav navbar-nav navbar-right">
                <li><a href="mydashboard.php" class="mdb-menutext">My Dashboard</a></li>
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
             