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


$params = array(
	'key' => $key,
	'q' => $term_p,
	'start' => $start,
	'maxResults' => $results,
	'filter' => false,
	'restrict' => '',
	'safeSearch' => false,
	'lr' => '',
	'ie' => '',
	'oe' => '');
	
$soapclient = new soapclient("http://api.google.com/GoogleSearch.wsdl","wsdl");
$soapoptions = 'urn:GoogleSearch';
$result = $soapclient->call("doGoogleSearch", $params);
$num = "{$result['estimatedTotalResultsCount']}";

if($start>$num){
$beg = "";
}
else {
$beg = "<a href='google.php?start=$end&term=$term_p'>Next 10</a>";
}
if($previous>-1){
$pre = "<a href='google.php?start=$previous&term=$term_p'>Previous 10</a> |";
}
else {
$pre = "";
}



		$t = $start;
	foreach($result['resultElements'] as $v){
	
  		$title      = $v['title'];
   		$url        = $v['URL'];
		$urlsnip    = substr($v['URL'],0,90);
   		$snippet    = $v['snippet'];
		$summary    = $v['summary'];
		$cachedSize = $v['cachedSize'];
		$relatedInformationPresent = $v['relatedInformationPresent'];
		$hostName = $v['hostName'];
		$directoryCategory = $v['directoryCategory'];
		$directoryTitle = $v['directoryTitle'];
		
   		if(strlen($title)>5){
   			$t++;   
			$results .= "<table cellpadding=0 cellspacing=0 border=0><tr><td valign=top> $t. </td>";
			$results .= "<td>";
			$results .= "<a href=\"{$url}\">{$title}</a><br>";
			$results .= " - {$snippet}<br><font color='green'>";
			$results .= "{$urlsnip} ... - ";
			$results .= "{$cachedSize}";
			//echo $results .= "{$relatedInformationPresent} - "; 
			//echo $results .= "{$hostName} - ";
			//echo $results .= "{$directoryCategory} - ";
			//echo $results .= "{$directoryTitle}";
			$results .= "</font><br><br></td></tr></table>\n";
   		}
   		else {
   			continue;
   		}
   	}
	



function google_footer(){
	$google = 1;	
	include("footer.php"); 
}	



// google numbers
function number($num){
	if(strlen("$num")<8){
		while(strlen("$num")<8){
			$num = "0$num";
		}
	}
	return $num;
}


// google spell check
function google_spell(){
    global $soapclient;
    global $soapoptions;
	global $key;
	global $term_p;
    
    $params = array('key' => $key,'phrase' => $term_p,);
    $spell = $soapclient->call('doSpellingSuggestion', $params, $soapoptions);
    $err = $soapclient->getError();

    if($err){
        print("<br>An error occurred!<br>");
        print(" Error: $err<br>\n");
        return false;
    }

    return $spell[0];
}


// google key
function googlekey(){
	$google_key = array("qiXT/blQFHINGoMLNyWbpd7lmPUAmCVg","VnAEDgNQFHKmr7x5N/IZOlqJVXVIMpN8","ndLXmIRQFHKzFbIgCpeK9bxgFI10KLQS","CPnVXBFQFHLHEyAREs8K65fll1twh7BN","gnLaV59QFHJjvXr1heP8agWh4xFa5INL","nGFNCXxQFHJiIheIdGeXp2VOsngw/WVs","di7Sd3lQFHKZmzi/btrkrz0bu6DFgXJP","Myh++PhQFHIb071+CBwiNDIjJYLPwItQ");
	$key = rand(0,count($google_key)-1);
	$key = $google_key[$key];
	return $key;
}




// show top 5 searches
function google_top5(){

	global $stream;

	$alot = $stream->do_query("select * from `google` order by hits DESC","array");
	$result .= "Top five searches : <br>";
	
	for($i=0;$i<count($alot);$i++){
		$tmp = $alot[$i];
		$id = $tmp[0];
		$key_u = $tmp[1];
    	$term_u = $tmp[2];
		$timer = $tmp[3];
		$hits = $tmp[4];
		$result .= "<a href='google.php?term=$term_u'>$term_u</a>";
		if($i>4){
			break;
		}
		$result .=  ", ";
	}

	return $result;
}



// top 5 ralated, updates as searches
function google_exists(){
	
	global $stream,$term_p;
	$key = googlekey();
	
	$exists = $stream->do_query("select * from `google` where term like '%$term_p%'","array");
	for($i=0;$i<count($exists);$i++){
		$tmp = $exists[$i];
		$id = $tmp[0];
		$key_u = $tmp[1];
    	$term_u = $tmp[2];
		$timer = $tmp[3];
		$hits = $tmp[4];
		$hits = $hits + 1;
		$hits = number($hits);
		$existss = $stream->do_query("update `google` set hits='$hits' where id='$id'","one");
	}
	if(!count($exists)>0){  	
		$numg = number(1);
		$search_tracker = $stream->do_query("INSERT INTO `google` VALUES ('', '$key', '$term_p', NOW(),'$numg')","one");
	}
	
}

?>