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
        $id = check_input($_POST['id']);
        $name = check_input($_POST['name']);
        $link = check_input($_POST['link']);
        $mincgpa = check_input($_POST['mincgpa']);
        $lastdate = check_input($_POST['lastdate']);
        $jobprofile = check_input($_POST['jobprofile']);
        $description = check_input($_POST['description']);

        $result = update_company($id,$name,$description,$lastdate,$mincgpa,$jobprofile,$link,$rollnum);

        
        
        if($result){
            
            $value = admin_action_logger($rollnum,'update','company',$id);
            if ($value == 0) {
                echo mysql_error();
            }
            
            header("Location:admin_dashboard.php?updated");
            exit;
        }
        else {
            header("Location:admin_dashboard.php?error");
            exit;
        }




?>