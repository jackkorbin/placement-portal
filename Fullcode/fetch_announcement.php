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

		$result = fetch_announcements();
        $ann =1;
        

        while($array = mysql_fetch_array($result)) {
            
            $ann_date = $array['added_on'];
            $ann_date = format_date($ann_date);
            $id = "'".$array['id']."'";
            $ann = '<li class="list-group-item" id="ann'.$array['id'].'">';
            $ann .= $array['ann_text'];
            $ann .= '<br><span class="small mdb-ann-time">-';
            $ann .= $ann_date;
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