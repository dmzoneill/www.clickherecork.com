<?php

// upload report.php
// set up basic connection
$ftp_server = "clickherecork.com";
$ftp_user_name = "clickhere";
$ftp_user_pass = "neiller";
$dated = date("d-m-Y");
$destination_file = date("d-m-Y").".txt";
$source_file = date("d-m-Y").".txt";

$conn_id = ftp_connect($ftp_server); 

// login with username and password
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass); 

// check connection
if ((!$conn_id) || (!$login_result)) { 
       echo "FTP connection has failed! \n";
       echo "Attempted to connect to $ftp_server for user $ftp_user_name \n"; 
       exit; 
   } else {
       echo "Connected to $ftp_server, for user $ftp_user_name \n";
   }

ftp_pasv( $conn_id, 1);
print "Changed to passive ftp\n";

// In this example set the current directory to
// public_html

        if(ftp_chdir($conn_id,"report/reports/")){
print "Changed Directory\n";


// upload the file
$upload = ftp_put($conn_id, "$destination_file", "Z:\\$source_file", FTP_BINARY); 

// check upload status
if (!$upload) { 
       echo "FTP upload has failed!";
	  
   } else {
       echo "Uploaded $source_file to $ftp_server as $destination_file \n";
	    if($fpt = fopen("http://www.clickherecork.com/report/parsereport.php?file=$source_file",'r')){
	   $chunck = fread($fpt,234096);
	   print $chunck;
	   fclose($fpt);
	   }
	   else {
	   	print "eh?";
	   }
   }
}
else {
print "could not change directory\n";
}
// close the FTP stream 
ftp_close($conn_id); 

?>