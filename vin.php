<?php

if($vin_case){
$case = $vin_case;
}
if($vin_name){
$name = vin_name;
}

include("connect.php");

switch($case){

default:

$filename = "http://www.4q.cc/vin/index.php";

$fp = fopen($filename, 'r' );

$buffer = "";

while (!feof($fp)) {
   $buffer .= fgets($fp, 4096);
   
}

$remove = explode("!--start",$buffer);
$remove = explode("script-->",$remove[1]);
$remove = explode("<!--end",$remove[1]);
rawurlencode($remove[0]);

$sql = $stream->do_query("insert into vin values('','$remove[0]')","one");

fclose( $fp );

var_dump(gd_info());


break;


case "show":


$sql = $stream->do_query("select * from vin","array");
$r = rand(1,count($sql));

$sql = $stream->do_query("select * from vin where id=$r","array");

for($r=0;$r<count($sql);$r++){
$tmp = $sql[$r];
$id = $tmp[0];
$vin = $tmp[1];

if($name){
$vin = eregi_replace("Vin Diesel","$name",$vin);
$yup = "($name)";
}


print "<br><br><center><h2>Random Vin Diesel $yup</h2><table border=1 cellpadding=5 width=500><tr><td><font size=2 face=verdana>$vin </font></td></tr></table><form action=vin.php?case=show method=post><input type=text name=name value='Daniel Doran'><input type=submit value='Use name'></form>";

}

break;

}

?>
