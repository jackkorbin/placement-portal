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
        $id = $_GET['id'];

        $result = approve_company($id);

        
        
        if($result){
            
            header("Location:admin_dashboard.php?updated");
            exit;
        }
        else {
            header("Location:admin_dashboard.php?error");
            exit;
        }




?>