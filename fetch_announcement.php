<?php session_start(); ?>
<?php

    if( isset($_POST['user']) ){
        $user = $_POST['user'];
    }
    else {
        header("Location:index.php");
        exit;
    }
?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>

<?php

        $query = "SELECT * FROM announcements WHERE isDeleted = 0 ORDER BY id DESC";
		$result = mysql_query($query);
        $ann =1;

        while($array = mysql_fetch_array($result)) {
            
            $id = "'".$array['id']."'";
            $ann = '<li class="list-group-item" id="ann'.$array['id'].'">';
            $ann .= $array['ann_text'];
            $ann .= '<br><span class="small mdb-ann-time">-';
            $ann .= $array['added_on'];
            $ann .= '</span>';
            if($_POST['user'] == 'admin'){
                $ann .= '<span class="small mdb-ann-time pull-right"><a href="#" onClick="javascript:del_ann('.$id.')" >Delete</a></span>';
            }
            $ann .= '</li>';
            echo $ann;
            //date("M jS, Y", strtotime("2011-01-05"));

        }
    if($ann == 1){
            echo '<li class="list-group-item">No announcements to Show.</li>';
        }


  ?>