<?php

include "nusoap.php";

$term_p = $term;
$cssinclude = 1; 
$key = googlekey();
$end = $start + 10;
$results = 10;
if($start ? $start=$start : $start=0);	
if($start ? $t=$start : $t=0);
if($term_p ? $term_p=$term_p : $term_p="");
$previous = $start - 10;




?>