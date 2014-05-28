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
        $id = $_POST['id'];
        $query = "UPDATE announcements SET isDeleted = '1' WHERE id = '{$id}' ";
		$result = mysql_query($query);
        if($result) {
            $value = admin_action_logger($rollnum,'delete','announcement',$id);
            if ($value == 0) {
                echo mysql_error();
            }
        }
        


  ?>