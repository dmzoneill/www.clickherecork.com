<?php


$handle = fopen("http://www.4q.cc/vin", "r");

$crap = fread($handle,filesize($handle));

print $crap;
/*$shit = explode("start random content script",$crap);
$shit2 = explode("end random content script",$shit[1]);

print $shit2[0];
*/

?>