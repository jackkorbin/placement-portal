<?php session_start(); ?>

<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>

<?php
        $email = check_input( $_POST['email'] );
        $pass = check_input( $_POST['pass'] );

        $result = validate_comp($email,$pass);
        
        echo $result;


  ?>