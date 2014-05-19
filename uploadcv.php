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
		$name = $_FILES['cv']['name'];
		$size = $_FILES['cv']['size'];
		$type = $_FILES['cv']['type'];
		$tmpname = $_FILES['cv']['tmp_name'];
		$maxsize = 2000000;
		$ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));  
                                 
		$location = "student_resumes/".$rollnum.".pdf"; 
		
		if( $ext == 'pdf'){
			if( $size < $maxsize ) {
				$result = move_uploaded_file($tmpname,$location);
					if($result){
						$message = "Successfully Uploaded";
						header("Location:editprofile.php?message=Resume successfully uploaded");
						exit;
					}
			 
			}
		
		}else {
			$message="cannot upload";	
			header("Location:editprofile.php?message=Cannot Upload resume");
						exit;
			}
			
			
		
	
	
?>