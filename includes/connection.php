<?php

require("info.php");

//1. create a database connection
	$connection = mysql_connect(server,username,pass);
	if (!$connection) {
	   die("Database connection failed: " . mysql_error());
    }
	
//2. select a database to use
	$db_select = mysql_select_db(DB_name,$connection);
	if (!$db_select) {
        die("Database selection failed: " . mysql_error());
    }
?>