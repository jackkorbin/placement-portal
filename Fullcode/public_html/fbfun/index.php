<?php
    require 'fb-list/facebook.php';
?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link href="bootstrap.min.css" rel="stylesheet">


   
      
      
      
      
      
  </head>
  <body>
      
      <div class="jumbotron">
        
   
<?php
    $facebook = new Facebook(array(
        'appId' => '665377053516515',
        'secret' => 'f8f1e0623baafc8273ad0934bacb6e07'
    ));

    $user = $facebook->getUser();

    if ( $user == 0 ){
        
        
        
        $login = $facebook->getLoginUrl();
        echo '<a href='.$login.' class="btn btn-primary">Login with facebook</a>';
        
    }
    else{
        echo" You are logged in using fb ";
        try {
         $api = $facebook->api('/me'); //Will return array about_me
       // $api = $facebook->api('me/feed','POST',array(
       //     link => 'www,lykooz.com',
       //     message => 'Check'
      //  ));
        echo $api;
        }
        catch (FacebookApiException $e) {
            error_log($e);
            $user = null;
          }
        
        
        echo "<a href='logout.php'>Logout</a> ";
    }



?>
    
    
      </div>
    
      
       
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>  
    
    
  </body>
</html>