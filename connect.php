<?php



$fcwhost = "localhost"; //216.26.131.80 
$fcwusername = "dave"; 
$fcwpassword2 = "megadude"; 
$fcwdb_name = "dave1";
$fcwdb_type = "mysql";



include($path."db_".$fcwdb_type.".php");
$stream = new db;
$stream->connect();

