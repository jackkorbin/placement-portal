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
        $text = check_input($_POST['text']);

        if( strlen($text)  > 3 ){
            
        $result = add_announcement($text,$rollnum);
        
            if( $result==1 ) {
                $id = mysql_insert_id();
                $value = admin_action_logger($rollnum,'add','announcement',$id);
                if ($value == 0) {
                    echo mysql_error();
                }
            }
            
        }
        else {
            echo mysql_error();
        }
        

?>