<?php session_start(); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php

    if(isset($_SESSION["Adminrollnum"])){
        $rollnum = $_SESSION['Adminrollnum'];
    }
    else {
        header("Location:index.php");
        exit;
    }
?>

<?php 
    $comid = $_POST['id'];

    $result = del_company($id,$rollnum);

    
    if($result){
        
        $value = admin_action_logger($rollnum,'Remove','company',$comid);
        if ($value == 0) {
            echo mysql_error();
        }
        else {
            echo 'done';
        }
    }
?>
