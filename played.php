<?php

include("connect.php");

$prog = $stream->do_query("select * from winamp","array");

for($r=0;$r<count($prog);$r++){

$tmp = $prog[$r];
$id = $tmp[0];
$song = $tmp[1];
$song = stripslashes(rawurldecode($song));
$song = eregi_replace("\""," ",$song);
$song = eregi_replace("'"," ",$song);
$song = eregi_replace("\("," - ",$song);
$song = eregi_replace("\)"," ",$song);
$song = explode("-",$song);
for($t=0;$t<count($song);$t++){
if($t>0){
print " - <font color='green'>$song[$t]</font>"; 
}
else {
print "<font color='orange'>$song[$t]</font>"; 
}
}
print "<br>";
}


?>

