<?php
    include ('fb-list/facebook.php');
     $facebook = new facebook(array(
        'appId' => '665377053516515',
        'secret' => 'f8f1e0623baafc8273ad0934bacb6e07'
    ));
    
    
    $facebook->destroySession();
    
    header('Location:index.php');
    exit;
?>