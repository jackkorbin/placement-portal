<?php session_start(); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php

    if(isset($_SESSION["name"])){
        $name = $_SESSION["name"];
        $rollnum = $_SESSION['rollnum'];
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
<?php
    
    $com_id = $_POST['id'];
    $app = checkappliedornot($com_id,$rollnum);

    if( $app == 0 ){ // currently --> apply
        $query = "INSERT INTO relationship ( StuRollNum,companyid,isActive,isDeleted ) VALUES ( '{$rollnum}','{$com_id}','1','0' ) ";
        $result = mysql_query($query);
        if ($result){
            echo '1';
        }
        else {
            echo mysql_error();
        }
        
    }
    else if ( $app == 1 ){ // currently --> unapply
        $query = "UPDATE relationship SET isDeleted = 1 WHERE StuRollNum = '{$rollnum}' AND companyid = '{$com_id}'";
        $result = mysql_query($query);
         if ($result){
            echo '0';
        }
        else {
            echo mysql_error();
        }
        
    } 
    else {
        
    }
?>