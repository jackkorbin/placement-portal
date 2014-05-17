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
        $text = $_POST['text'];

        if( strlen($text)  > 3 ){
        $query = "INSERT INTO announcements (ann_text,isActive,isDeleted,added_on) VALUES ('{$text}', '1' ,'0', NOW() )";
         $result = mysql_query($query);
        }
        else {
            echo "error";
        }
        

?>