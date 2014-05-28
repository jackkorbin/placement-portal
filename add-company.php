<?php session_start(); ?>
<?php

    if(isset($_SESSION['Adminrollnum'])){
        $rollnum = $_SESSION['Adminrollnum'];
    }
    else {
        header("Location:index.php");
        exit;
    }
?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>

<?php 
    
    $name = $_POST['name'];
    $description = $_POST['description'];
    $lastdate = $_POST['lastdate'];
    $mincgpa = $_POST['mincgpa'];
    $jobprofile = $_POST['jobprofile'];
    $link = $_POST['link'];
    $date = date("Y-m-d");


    $value = add_company($name,$description,$lastdate,$mincgpa,$jobprofile,$link,$date);
    
    if($value == 1 ){
        
        notify_user(MAIL_TO1,$name,$description,$lastdate,$mincgpa,$jobprofile,$link);
        notify_user(MAIL_TO2,$name,$description,$lastdate,$mincgpa,$jobprofile,$link);
        
        $id = mysql_insert_id();
        $value = admin_action_logger($rollnum,'add','company',$id);
        if ($value == 0) {
            echo mysql_error();
        }

        header("Location:admin-dashboard.php?done");
        exit;
    }
    else {
        header("Location:admin-dashboard.php?error");
        exit;
    }
        


?>