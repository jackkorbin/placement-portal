<?php

require("info.php");

$dbh1 = mysql_connect(server,username,pass); 
if (!$dbh1) {
   die("Database connection failed: " . mysql_error());
}
mysql_select_db(DB_name, $dbh1);



$dbh2 = mysql_connect(server2,username2,pass2, true); 
if (!$dbh2) {
   die("Database connection failed: " . mysql_error());
}
mysql_select_db(DB_name2, $dbh2);



?>