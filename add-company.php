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
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/connection.php"); ?>

<?php 
    
    $name = $_POST['name'];
    $description = $_POST['description'];
    $lastdate = $_POST['lastdate'];
    $mincgpa = $_POST['mincgpa'];
    $jobprofile = $_POST['jobprofile'];
    $link = $_POST['link'];
    $date = date("Y-m-d");
    
    $query = "INSERT INTO companies 
            (name,description,mincgpa,lastDate,jobProfile,link,isActive,isDeleted,added_on,added_by) 
            VALUES 
            ('{$name}','{$description}','{$mincgpa}','{$lastdate}','{$jobprofile}','{$link}','1','0','{$date}','{$rollnum}') ";
   
    $result = mysql_query($query);
    if($result){
        header("Location:admin-dashboard.php?done");
        exit;
    }
    else {
        header("Location:admin-dashboard.php?error");
        exit;
    }
        


?>