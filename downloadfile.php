<?php session_start(); ?>




<?php                   
    $content = $_POST['content'];
    $compname = $_POST['compname'];

    echo $content;
    header('Content-type: text/plain');
    header("Content-disposition: attachment; filename='students_applied_to_".$compname.".txt'");
 
?>