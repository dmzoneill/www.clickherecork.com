<?php

include("connect.php");
$song = eregi_replace("\""," ",$song);
$song = eregi_replace("'"," ",$song);
$song  = stripslashes(rawurlencode($song));
$datef = time();


$prog = $stream->do_query("insert into winamp values('','$song','$datef')","one");


?>

