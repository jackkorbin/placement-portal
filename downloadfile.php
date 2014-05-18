<?php session_start(); ?>
<?php

    if(isset($_SESSION['Adminrollnum'])){
        $rollnum = $_SESSION['Adminrollnum'];
        
    }
    else
    {
        header("Location:admin-login.php");
        exit;
    }
?>



<?php                   
    $content = $_POST['content'];
    $compname = $_POST['compname'];

    echo $content;
    header('Content-type: text/plain');
    header("Content-disposition: attachment; filename='students_applied_to_".$compname.".txt'");
 
?>