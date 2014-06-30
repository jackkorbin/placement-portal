<?php session_start(); ?>
<?php
    
   
    $files = $_SESSION['array'];
    
        
    
?>



<?php                   
    //echo $files[1];
    $zipname = 'file.zip';
    $zip = new ZipArchive;
    $zip->open($zipname, ZipArchive::CREATE);
    foreach ($files as $file) {
      $zip->addFile($file);
    }
    $zip->close();

    header('Content-Type: application/zip');
    header('Content-disposition: attachment; filename=resumes.zip');
   // header('Content-Length: ' . filesize($zipfilename));
    readfile($zipname);
    
 
?>