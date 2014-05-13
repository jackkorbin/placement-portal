<?php

require("info.php");

//1. create a database connection
	$result = mysql_connect(server,username,pass);
	if($result) {
		
	}
	
//2. select a database to use
	$result = mysql_select_db(DB_name);
	if($result) {
		
	}
?>