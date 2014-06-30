<?php session_start(); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php

    if(isset($_SESSION['Adminrollnum'])){
        $rollnum = $_SESSION['Adminrollnum'];
    }
    else {
        header("Location:index.php");
        exit;
    }
?>
<?php
    
    $com_id = $_POST['id'];
    $app = checkpublished($com_id);

    if( $app == 1 ){ // currently --> published
        $result = unpublish_company($com_id);
        if ($result){
            echo '1'; // this returns " Unpublished successfully"
        }
        else {
            echo mysql_error();
        }
        
    }
    else{ // currently --> unpublished
        $result = publish_company($com_id);
         if ($result){
            echo '0'; // this returns " published successfully"
        }
        else {
            echo mysql_error();
        }
        
    } 
   
?>