<?php 

ob_start('ob_gzhandler');
if(!$pageview){ $pageview = "about"; }		
$wkdisgood = $pageview;
$image = $img;
if($HTTP_COOKIE_VARS["clicksize"]){ $cssinclude = $HTTP_COOKIE_VARS["clicksize"];}
else { $cssinclude = 1; }
if($REMOTE_HOST=="lovejoy.w3.org"){ include("haha.html"); exit; }

$f1 = $mailage;
$f2 = $fname;
$f3 = $femail;
$f4 = $fmessage;
$f5 = $subject; 
$f6 = $recp;
 
if(!$term){
@include("bb.php"); 
}
@include("functions.php");  
@include("header.php"); 
@include("menu.php"); 
@include("pages/page.php"); 
@include("footer.php"); 

?>
