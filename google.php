<?php
// phpcs:ignoreFile
// jscpd:ignore-start
include ("nusoap.php");
include ("connect.php");

	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ if(!$term){
	$term = "Chat";
	}
	$term_p = $term;
	$cssinclude = 1; 
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $key = googlekey();
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ $end = $start + 10;
	$resultss = 10;
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable, RiskyTruthyFalsyComparison */ if($start ? $start=$start : $start=0);	
	/** @psalm-suppress RiskyTruthyFalsyComparison */ if($start ? $t=$start : $t=0);
	/* @phpstan-ignore-line */ /** @psalm-suppress RiskyTruthyFalsyComparison */ if($term_p ? $term_p=$term_p : $term_p="");
	$previous = $start - 10;
	$num_array = array();
	$google_vars = array();



/** @psalm-suppress MissingReturnType */ function browser(){
	global $start;
	global $previous;
	global $term_p;
	global $end;
	global $num_array;
	
	
	/** @psalm-suppress EmptyArrayAccess */ if($start>$num_array[0]){
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
	return "$pre $beg";
}




/** @psalm-suppress MissingReturnType */ function googlekey(){
	$google_key = array("qiXT/blQFHINGoMLNyWbpd7lmPUAmCVg","VnAEDgNQFHKmr7x5N/IZOlqJVXVIMpN8","ndLXmIRQFHKzFbIgCpeK9bxgFI10KLQS","CPnVXBFQFHLHEyAREs8K65fll1twh7BN","gnLaV59QFHJjvXr1heP8agWh4xFa5INL","nGFNCXxQFHJiIheIdGeXp2VOsngw/WVs","di7Sd3lQFHKZmzi/btrkrz0bu6DFgXJP","Myh++PhQFHIb071+CBwiNDIjJYLPwItQ");
	$key = rand(0,count($google_key)-1);
	$key = $google_key[$key];
	return $key;
}	










/** @psalm-suppress MissingReturnType, MissingParamType */ function do_spell( $term_p, &$spell ){

	global $term_p;
	$key = googlekey();
    
    $params = array('key' => $key, 'phrase' => $term_p,);
	/* @phpstan-ignore-line */ /** @psalm-suppress TooManyArguments */ $soapclient = new soapclient("http://api.google.com/GoogleSearch.wsdl","wsdl");
	$soapoptions = 'urn:GoogleSearch';
    $spell = $soapclient->call('doSpellingSuggestion', $params, $soapoptions);
    $err = $soapclient->getError();

    if ($err){
        print("<br>An error occurred!<br>");
        print(" Error: $err<br>\n");
        return false;
    }
}









/** @psalm-suppress MissingReturnType */ function google_top5(){

	global $stream;

	/** @psalm-suppress UndefinedClass */ $alot = $stream->do_query("select * from `google` order by hits DESC","array"); // codespell:ignore alot
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedVariable */ $result .= "Top five searches : <br>";
	
	for($i=0;$i<count($alot);$i++){ // codespell:ignore alot
		$tmp = $alot[$i]; // codespell:ignore alot
		/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $id = $tmp[0];
		/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $key_u = $tmp[1];
    	$term_u = $tmp[2];
		/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $timer = $tmp[3];
		/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $hits = $tmp[4];
		$result .= "<a href='google.php?term=$term_u'>$term_u</a>";
		if($i>4){
			break;
		}
		$result .=  ", ";
	}

	return $result;
}





/** @psalm-suppress MissingReturnType, MissingParamType */ function number($num){
	if(strlen("$num")<8){
		while(strlen("$num")<8){
			$num = "0$num";
		}
	}
	return $num;
}





/** @psalm-suppress MissingReturnType */ function google_exists(){
	
	global $stream,$term_p;
	$key = googlekey();
	
	/** @psalm-suppress UndefinedClass */ $exists = $stream->do_query("select * from `google` where term like '%$term_p%'","array");
	for($i=0;$i<count($exists);$i++){
		$tmp = $exists[$i];
		$id = $tmp[0];
		/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $key_u = $tmp[1];
    	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $term_u = $tmp[2];
		/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $timer = $tmp[3];
		$hits = $tmp[4];
		$hits = $hits + 1;
		$hits = number($hits);
		/** @psalm-suppress UnusedVariable, UndefinedClass */ /** @psalm-suppress UnusedVariable */ $existss = $stream->do_query("update `google` set hits='$hits' where id='$id'","one");
	}
	/** @psalm-suppress InvalidOperand */ if(!count($exists)>0){  	
		$numg = number(1);
		/** @psalm-suppress UnusedVariable, UndefinedClass */ /** @psalm-suppress UnusedVariable */ $search_tracker = $stream->do_query("INSERT INTO `google` VALUES ('', '$key', '$term_p', NOW(),'$numg')","one");
	}
	
}




/** @psalm-suppress MissingReturnType */ function google_search(){
	
	global $num_array;
	global $term;
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ global $cssinclude; 
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ global $end;
	global $resultss;
	global $start;	
	global $t;
	global $term_p;
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ global $previous;
	global $google_vars;
	$term_p = $term;
	$key = googlekey();

	$params = array(
		'key' => $key,
		'q' => $term_p,
		'start' => $start,
		'maxResults' => $resultss,
		'filter' => false,
		'restrict' => '',
		'safeSearch' => false,
		'lr' => '',
		'ie' => '',
		'oe' => '');
		
	/* @phpstan-ignore-line */ /** @psalm-suppress TooManyArguments */ $soapclient = new soapclient("http://api.google.com/GoogleSearch.wsdl","wsdl");
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $soapoptions = 'urn:GoogleSearch';
	$result = $soapclient->call("doGoogleSearch", $params);
	$num = "{$result['estimatedTotalResultsCount']}";
	array_push($num_array,$num);
	array_push($google_vars,"{$result['estimatedTotalResultsCount']}","{$result['searchComments']}","{$result['estimateIsExact']}","{$result['resultElements']}","{$result['startIndex']}","{$result['endIndex']}","{$result['searchTips']}","{$result['directoryCategories']}","{$result['searchTime']}");

if($num>0){
	foreach($result['resultElements'] as $v){

  		$title      = $v['title'];
   		$url        = $v['URL'];
		$urlsnip    = $v['URL'];
   		$snippet    = $v['snippet'];
		/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $summary    = $v['summary'];
		$cachedSize = $v['cachedSize'];
		/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $relatedInformationPresent = $v['relatedInformationPresent'];
		/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $hostName = $v['hostName'];
		/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $directoryCategory = $v['directoryCategory'];
		/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $directoryTitle = $v['directoryTitle'];
		
   		if(strlen($title)>5){
   			$t++;   
			/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedVariable */ $results .= "<table cellpadding=0 cellspacing=0 border=0><tr><td width=30 valign=top>$t.</td>";
			$results .= "<td>";
			$results .= "<a href=\"{$url}\">{$title}</a><br>";
			$results .= " - {$snippet}<br><font color='green'>";
			$results .= "{$urlsnip} - ";
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
	/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedVariable */ return $results;
}
else {
return "No results";
}	
}	


/** @psalm-suppress MissingReturnType, MissingParamType */ function view_info($num){
	global $google_vars,$term_p;
	
	for($j=0;$j<count($google_vars);$j++){
		/** @psalm-suppress NoValue, EmptyArrayAccess */ $estimatedTotalResultsCount      = $google_vars[0];
   		/** @psalm-suppress NoValue, UnusedVariable, EmptyArrayAccess */ /** @psalm-suppress UnusedVariable */ $searchComments        = $google_vars[1];
		/** @psalm-suppress NoValue, UnusedVariable, EmptyArrayAccess */ /** @psalm-suppress UnusedVariable */ $estimateIsExact    = $google_vars[2];
   		/** @psalm-suppress NoValue, UnusedVariable, EmptyArrayAccess */ /** @psalm-suppress UnusedVariable */ $resultElements    = $google_vars[3];
		/** @psalm-suppress NoValue, EmptyArrayAccess */ $startIndex    = $google_vars[4];
		/** @psalm-suppress NoValue, EmptyArrayAccess */ $endIndex = $google_vars[5];
		/** @psalm-suppress NoValue, UnusedVariable, EmptyArrayAccess */ /** @psalm-suppress UnusedVariable */ $searchTips = $google_vars[6];
		/** @psalm-suppress NoValue, EmptyArrayAccess */ $searchTime = $google_vars[8];
	}
	if($num==1){
		/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedVariable */ $txt = "Results $startIndex - $endIndex of about $estimatedTotalResultsCount for \"$term_p\". ($searchTime s) ";
	}
	if($num==2){
		$txt = "<form name='search' method='post' action='google.php'><img src=\"images/powered_by_google.gif\"><br><input type='text' name='term' value='$term_p'><input type='submit' alt='Search' value='Google'></form>";
	}
	if($num==3){
		$txt = "<form name='search' method='post' action='google.php'><input type='text' name='term' value='$term_p'><input type='submit' alt='Search' value='Google'><br><img src=\"images/powered_by_google.gif\"></form>";
	}
	/* @phpstan-ignore-line */ /** @psalm-suppress PossiblyUndefinedVariable */ return $txt;
}



$result = google_search();
google_exists();
ob_start('ob_gzhandler');
@include("functions.php");  
@include("header.php"); 
@include("menu.php"); 

?>

<td width="*" valign="top" bgcolor="#FFFFFF">
		
			  <table bgcolor="#FEFEFE" cellpadding="0" cellspacing="0" border="0"><tr><td>
           
			
			<fieldset>
<legend><strong> Google Search Results </strong></legend>

<?php

print "<table width=\"640\"  border=\"0\" cellpadding=\"3\">";

print "<tr><td>";
print view_info(1);
print "</td><td>";
print "";
print "</td></tr>";
  
print "<tr><td width=60%>";
print google_top5();
print "</td><td width=40% align=right>";
print view_info(2);
print "</td></tr>";

print "<tr bgcolor='#dddddd'><td colspan=2 align=right>";
print browser();
print "</td></tr>";

print "<tr><td colspan=2>";
do_spell($term_p, $spell);
	if ($spell[0]) {
		print "Did you mean <b><a href=\"google.php?term=".$spell."\">".$spell."</a></b>? ";
	}
print "</td></tr>";

print "<tr><td colspan=2>";
print $result;
print "</td></tr>";

print "<tr bgcolor='#dddddd'><td colspan=2 align=right>";
print browser();
print "</td></tr>";

print "<tr><td colspan=2 align=right>";
print view_info(3);
print "</td></tr>";



print "</table>";
?>
</fieldset> 
			</td></tr></table>
            
			</td>

<?php
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $google = 1;
@include("footer.php"); 
	
?>	
<?php // jscpd:ignore-end ?>
