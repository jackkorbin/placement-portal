<?php session_start(); ?>

<?php
	
	$result = isset($_SESSION['rollnum']);
		if(!$result){
			header("Location:index.php");
            exit;
		}
        else {
            $rollnum = $_SESSION['rollnum'];
        }
?>

<?php
		$name = $_FILES['pp']['name'];
		$size = $_FILES['pp']['size'];
		$type = $_FILES['pp']['type'];
		$tmpname = $_FILES['pp']['tmp_name'];
		$maxsize = 2000000;
		$ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));	   
                                 
		$location = "profile_pictures/".$rollnum.".jpg"; 
		
		if( $ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'gif'){
			if( $size < $maxsize ) {
				$result = move_uploaded_file($tmpname,$location);
					if($result){
						$message = "Successfully Uploaded";
						header("Location:editprofile.php?message=Profile pic changed");
						exit;
					}
			 
			}
		
		}else {
			$message="cannot upload";	
			header("Location:editprofile.php?message=Cannot Upload");
						exit;
			}
			
			
		
	
	
?>