<?php session_start(); ?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php

    if(isset($_SESSION["Adminrollnum"])){
        $rollnum = $_SESSION['Adminrollnum'];
    }
    else {
        header("Location:index.php");
        exit;
    }
?>

<?php 
    $comid = $_POST['id'];
    $id = "'".$comid."'";


echo '
                  <div class="mdb-company-modal-container">
                        <div class="mdb-modal-name ">
                            <a href="" >Remove this Company</a>
                            <button class="close" aria-hidden="true" data-dismiss="modal">
                                <span class="glyphicon glyphicon-remove" ></span>
                            </button>
                        </div>

                        <div class="mdb-modal-content">
                            Are you Sure You want to remove this company?
                        </div>
                        <div class="mdb-modal-footer">
                                <button class="btn btn-danger btn-block mdb-modal-btn" onClick="javascript:remove_comp('.$id.')" data-dismiss="modal">
                                    Remove
                                </button>
                        </div>
                   </div> ';
?>