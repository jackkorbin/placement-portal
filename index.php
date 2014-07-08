<?php session_start(); ?>

<?php
	
	$result = isset($_SESSION['rollnum']);
		if($result){
			header("Location:mydashboard.php");
            exit;
		}

    $result = isset($_SESSION['company']);
		if($result){
			header("Location:company_dashboard.php");
            exit;
		}
        
?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>


<?php

    if( isset($_GET['msg']) ){
        if( $_GET['msg'] == 0 )
        $message = "Invalid Rollnum or Password";
    }
    else {
        $message="";
    }
	
	
	if(isset($_POST['signin'])){
		
		$usern = strtolower($_POST['rollnum']);
		$pas = $_POST['password'];
		
		$result = authenticateUser( $usern , $pas );
        if($result == 1){
             header("Location:mydashboard.php");
             exit;
        }
        else if( $result == 2) {
            header("Location:editprofile.php");
            exit;
        }
        else {
            header("Location:index.php?msg=0");
            exit;
        }
        
        
		
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
                    <div class="btn-container">
                        <input type="submit" name="signin" class="btn btn-primary btn-signin" value="Sign In">
                    </div>
                    <div class="btn-container">
                        <button name="register" class="btn btn-danger btn-signin comp-register-toggle">Companies Login here</button>
                    </div>
                </div>
            </form>
        </div>
      
        <div class="comp-container">
            <div class="row signinrowheading">
                <p>Companies Login <font color="#447fc8">Here</font></p>
            </div>
            <form role="form" action="index.php" method="post">
                <div class="row signinmiddle">

                          <div class="form-group">
                            <input type="email" class="form-control formfix" id="company_email" placeholder="Email" name="comp_email">
                          </div>
                          <div class="form-group">
                            <input type="password" class="form-control formfix" id="comp_pass" placeholder="Password" name="comp_password">
                          </div>
                          <font color="red"><u></u></font>
                    
                </div>
                <div class="signinfooter">
                    <div class="btn-container">
                        <a href="#" class="btn btn-success btn-signin" onClick="company_login()">Login</a>
                    </div>
                    <div class="btn-container">
                        <a href='register_company.php' class="btn btn-primary btn-signin ">Register Here</a>
                    </div>
                    <div class="btn-container">
                        <button class="btn btn-danger btn-signin back-toggle">Back</button>
                    </div>
                </div>
            </form>
        </div>
      
       
        <footer class="navbar navbar-fixed-bottom signinpagefooterbaap">
            <b class="small signinpagefooter" data-in-effect="wobble" data-out-effect="bounce" >Placement Portal By </b><a href="https://www.facebook.com/tanuj304" target="_blank" class="jack-link" data-in-effect="wobble" data-out-effect="wobble">Jack korbin</a>
        </footer>


  
    
    
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>  
<script src="js/jquery.autogrow.js"></script>
<link href="js/textillate-master/animate.css" rel="stylesheet">
<script src="js/textillate-master/jquery.lettering.js"></script>
<script src="js/textillate-master/jquery.textillate.js"></script>
    
<script>
    
    $(document).ready(function(){
        
        $('.comp-input textarea').autogrow();
        
        $('.singinbar').delay(600).slideDown(200);
        $('.signinpagefooterbaap').delay(2000).animate({
            'bottom':'0px'
        },200);
        
        /*
         $('.jack-link, .signinpagefooter').textillate({
            loop: true
         });
        */
            
        
        
        
        $('.comp-register-toggle').click(function(e){
            e.preventDefault();
            $('.singinbar').slideUp(200);
            $('.comp-container').delay(400).slideDown(200);
            $('.signinpagefooterbaap').delay(400).animate({
            'bottom':'-100px'
            },200);
        });
        $('.back-toggle').click(function(e){
            e.preventDefault();
            $('.comp-container').slideUp(200);
            $('.signinpagefooterbaap').animate({
            'bottom':'0px'
            },200);
            $('.singinbar').delay(400).slideDown(200);
            
        });
    
    });
    
    function company_login(){
        var password = $('#comp_pass').val();
        var email = $('#company_email').val();
        if( email.length < 3 ){
            exit;
        }
        if( password.length < 2 ){
            exit;
        }
        $.ajax({
            type:'POST',

            url:'validate_comp.php',

            data:{
                pass : password,
                email : email
            },
            success: function(app){
               var app = +(app); // to convert to number
               if(app === 1){
                   window.location.replace('company_dashboard.php');
               }
               else if (app === 2) {
                   $('.row.signinmiddle u').html('Please wait for Admin Approval.');
               }
               else {
                   $('.row.signinmiddle u').html('Invalid username or Password.');
               }
               

            }

        });
    }
    
    
</script>
    
    
  </body>
</html>