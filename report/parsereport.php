<?php
// parsereport.php

include("connect.php");

$shit = explode(".",$file);
$shit = explode("-",$shit[0]);

$yday = $shit[0];
$ymon = $shit[1];
$yyear = $shit[2];

if($file){

$filename = "reports/$file" ;
  $dataFile = fopen( $filename, "r" ) ;

  if ( $dataFile )
  {
   while (!feof($dataFile)) 
   {
       $buffer = fgets($dataFile, 1024);
	   if(stristr($buffer,"****")){
	   	continue;
	   }
	   else if (stristr($buffer,"#")){
	   	continue;
	   }
	   else if (stristr($buffer,"End Total")){
	   	continue;
	   }
	   else {
	   
	   eregi_replace("\"","",$buffer);
	   
	   $buffer = explode("|",$buffer);
	   $trans = explode(",",$buffer[0]);
	   $goodies = explode(",",$buffer[1]);
	   $price = explode(",",$buffer[2]);
	   
	   // trans buffer
	   $pc = substr($trans[0],3,8);
	   $starttime = $trans[1];
	   $endtime = $trans[2];
	   $totaltime = $trans[3];
	   
	   // goodies buffer
	   $black = $goodies[0];
	   $color = $goodies[1];
	   $envel = $goodies[2];
	   $floppy = $goodies[3];
	   $cdr = $goodies[4];
	   $some = $goodies[5];
	   
	   // total
	   $gru = explode(":",$price[0]);
	   $group = $gru[0];
	   $pcprice = substr($gru[1],1,7);
	   $totalprice = substr($price[1],2,7);
	   
	   if($pc==""){
	   continue;
	   }
	   
      $sql = $stream->do_query("INSERT INTO `clicksales` ( `id` , `rday` , `rmonth` , `ryear` , `pc` , `starttime` , `endtime` , `totaltime` , `black` , `color` , `envelop` , `floppy` , `cdr` , `sum` , `group` , `pcprice` , `totalprice` ) VALUES ('', '$yday', '$ymon', '$yyear', '$pc', '$starttime', '$endtime', '$totaltime', '$black', '$color', '$envel', '$floppy', '$cdr', '$some', '$group', '$pcprice', '$totalprice')","one");
	  
	   }
   }
   echo "Done<br>";

   fclose($dataFile);
  }
  else
  {
   die( "fopen failed for $filename" ) ;
  }
}
else {
 print "eh?";
}

?>