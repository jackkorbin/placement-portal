<?php session_start(); ?>

<?php


    if(isset($_SESSION['Adminrollnum'])){
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
<title>Admin Manager</title>
<?php require('includes/basichtmlheader2.php'); ?>
<?php
        
    if( isset($_GET['msg']) ){
        $msg = $_GET['msg'];
    }
    else {
        $msg = "";
    }
    
    if( isset($_GET['msgg']) ){
        $msgg = $_GET['msgg'];
    }
    else {
        $msgg = "";
    }

//Add Admin -->
    if( isset($_POST['submit']) ){
        $rollnumto = check_input($_POST['admrollnum']);
        $value = add_admin($rollnumto,$rollnum);
        if( $value == 0 ){
            header("Location:manage_admin.php?msg=Invalid Rollnum");
            exit;
        }
        else if( $value == 3 ){
            header("Location:manage_admin.php?msg=Already Exist");
            exit;
        }
        else if ( $value == 2 ) {
            
            $result = admin_action_logger($rollnum,'add','admin',$rollnumto);
            if ($result == 0) {
                echo mysql_error();
            }
            
            header("Location:manage_admin.php?msg=Added");
            exit;
        }
        else {
            header("Location:manage_admin.php?msg=Error");
            exit;
        }
    }

//Delete admin -->
    if( isset($_GET['delete']) ){
        $id = $_GET['delete'];
        $value = del_admin($id,$rollnum);
        if( $value == 0 ){
            header("Location:manage_admin.php?msgg=Error");
            exit;
        }
        else if( $value == 1 ){
            
            $value = admin_action_logger($rollnum,'delete','admin',$id);
            if ($value == 0) {
                echo mysql_error();
            }
            
            header("Location:manage_admin.php?msgg=Deleted");
            exit;
        }
    }


?>
    
    
<header class="navbar navbar-fixed-top mydashboardpageheader">
    <div class="container">
        <p class="navbar-brand mdb-p-header">Hi <font color="#447fc8">Admin <?php echo $rollnum; ?></font></p>

        <?php include('includes/buttonheader.php'); ?>

         <div class="collapse navbar-collapse mybuttonid"> 
            <ui class="nav navbar-nav navbar-right">
                <?php if($admin == "yes") echo '<li><a href="admin-dashboard.php" class="mdb-menutext">Admin Page</a></li>';  ?>
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
                <div class="mdb-heading">Manage <font color="#447fc8">Admins</font>
                </div>
              
                <div class="errormsg"><?php echo $msgg; ?></div>
              
              
                <div class="row">
                    <table id= "myTable" class="table table-striped tablesorter">
                        <thead>
                            <tr>
                                <th>ID<span class="glyphicon glyphicon-sort gly-sort"></span></th>
                                <th>Roll num <span class="glyphicon glyphicon-sort gly-sort"></span></th>
                                <th>DELETE <span class="glyphicon glyphicon-sort gly-sort"></span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php require('includes/adminlistcode.php'); ?>
                        </tbody>
                    </table>
                </div>
          </div>
      </div><!-- end of col-sm-8 means end of companies div -->

      <div class="col-sm-4 " > <!-- start of announcmnts div -->
          <div class="mdb-announcements thumbnail">
              <div class="mdb-heading">Add <font color="#447fc8">Admin</font></div>
                
                <div class="row">
                    <form action="manage_admin.php" method="post">
                        <div class="col-sm-12 form-group">
                            <input type="text" name="admrollnum" class="form-control" id="" placeholder="Enter Admin Rollnum" >
                        </div>
                        <div class="col-sm-12 ">
                          <input type = "submit" value = "Add Admin" class="btn btn-primary btn-block" name="submit">
                        </div> 
                    </form>
                </div>
              <div class="errormsg"><?php echo $msg; ?></div>
              
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