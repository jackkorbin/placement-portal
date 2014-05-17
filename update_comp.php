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
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $link = $_POST['link'];
        $jobprofile = $_POST['jobprofile'];
        $lastdate = $_POST['lastdate'];
        $mincgpa = $_POST['mincgpa'];

        $query = "UPDATE companies SET name = '{$name}',
                                        description = '{$description}',
                                        link = '{$link}',
                                        jobProfile = '{$jobprofile}',
                                        lastDate = '{$lastdate}',
                                        mincgpa = '{$mincgpa}' WHERE id= '".$id."'";
        $result = mysql_query($query);
        
        if($result){
            header("Location:admin-dashboard.php?updated");
            exit;
        }
        else {
            header("Location:admin-dashboard.php?error");
            exit;
        }




?>