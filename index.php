<?php session_start(); ?>

<?php
	
	$result = isset($_SESSION['rollnum']);
		if($result){
			header("Location:mydashboard.php");
            exit;
		}
?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/connection.php"); ?>

<?php
	
	$message="";
	
	
	if(isset($_POST['signin'])){
		
		$usern = strtoupper($_POST['rollnum']);
		$pas = $_POST['password'];
		
		$message = authenticateUser( $usern , $pas );
        
        
		
	}
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IIITA placement portal</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
      
      
      
      <style>
          body{
            background:#333 url(images/campus818901.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
          }
      </style>
      
  </head>
  <body>
   

    
    
    
        <header class="navbar navbar-fixed-top signinpageheaderbaap">
            <div class="container">
                <p class="signinpageheader">IIITA Placement Portal</p>
            </div>
        </header> 
        
      
        
        <div class="singinbar">
            <div class="row signinrowheading">
                <p>Sign in to <font color="#447fc8">Portal</font></p>
            </div>
            <form role="form" action="index.php" method="post">
                <div class="row signinmiddle">

                          <div class="form-group">
                            <input type="text" class="form-control formfix" id="exampleInputEmail1" placeholder="Username" name="rollnum">
                          </div>
                          <div class="form-group">
                            <input type="password" class="form-control formfix" id="exampleInputPassword1" placeholder="Password" name="password">
                          </div>
                          <font color="red"><?php echo $message; ?></font>
                    
                </div>
                
                <div class="signinfooter">
                    <input type="submit" name="signin" class="btn btn-primary btn-signin" value="Sign In">
                </div>
            </form>
        </div>
      
        
        <footer class="navbar navbar-fixed-bottom signinpagefooterbaap">
            <p class="small signinpagefooter">Placement Portal By <a href="https://www.facebook.com/tanuj304" target="_blank">Jack korbin</a></p>
        </footer> 
  
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>  
    
    
  </body>
</html>