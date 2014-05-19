<?php session_start(); ?>
<?php

    if(isset($_GET['rollnum'])){
        $rollnum = $_GET['rollnum'];
    }
    else if( isset($_SESSION['rollnum']) ){
        $rollnum = $_SESSION['rollnum'];
    }
    else
    {
        header("Location:index.php");
        exit;
    }
?>



<?php                   
    
    $file = 'student_resumes/'.$rollnum.'.pdf';
    readfile($file);

    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=".$file);
    header("Content-Type: application/zip");
    header("Content-Transfer-Encoding: binary");

    // read the file from disk
    
 
?>