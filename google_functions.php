<?php
// phpcs:ignoreFile
// jscpd:ignore-start

include "nusoap.php";

/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable */ /** @psalm-suppress UndefinedGlobalVariable */ $term_p = $term;
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $cssinclude = 1; 
$key = googlekey();
/* @phpstan-ignore-line */ /** @psalm-suppress UnusedVariable, UndefinedGlobalVariable */ /** @psalm-suppress UnusedVariable, UndefinedGlobalVariable */ $end = $start + 10;
$results = 10;
/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedGlobalVariable, RiskyTruthyFalsyComparison */ /** @psalm-suppress UndefinedGlobalVariable, RiskyTruthyFalsyComparison */ if($start ? $start=$start : $start=0);	
/** @psalm-suppress RiskyTruthyFalsyComparison, UnusedVariable */ /** @psalm-suppress RiskyTruthyFalsyComparison, UnusedVariable */ if($start ? $t=$start : $t=0);
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
	
/* @phpstan-ignore-line */ /** @psalm-suppress TooManyArguments */ /** @psalm-suppress TooManyArguments */ $soapclient = new soapclient("http://api.google.com/GoogleSearch.wsdl","wsdl");
$soapoptions = 'urn:GoogleSearch';
$result = $soapclient->call("doGoogleSearch", $params);
$num = "{$result['estimatedTotalResultsCount']}";

if($start>$num){
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $beg = "";
}
else {
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $beg = "<a href='google.php?start=$end&term=$term_p'>Next 10</a>";
}
if($previous>-1){
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $pre = "<a href='google.php?start=$previous&term=$term_p'>Previous 10</a> |";
}
else {
/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $pre = "";
}



		/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $t = $start;
	foreach($result['resultElements'] as $v){
	
  		$title      = $v['title'];
   		/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $url        = $v['URL'];
		/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $urlsnip    = substr($v['URL'],0,90);
   		/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $snippet    = $v['snippet'];
		/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $summary    = $v['summary'];
		/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $cachedSize = $v['cachedSize'];
		/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $relatedInformationPresent = $v['relatedInformationPresent'];
		/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $hostName = $v['hostName'];
		/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $directoryCategory = $v['directoryCategory'];
		/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $directoryTitle = $v['directoryTitle'];
		
   		if(strlen($title)>5){
   			/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $t++;   
			/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $results .= "<table cellpadding=0 cellspacing=0 border=0><tr><td valign=top> $t. </td>";
			/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $results .= "<td>";
			/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $results .= "<a href=\"{$url}\">{$title}</a><br>";
			/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $results .= " - {$snippet}<br><font color='green'>";
			/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $results .= "{$urlsnip} ... - ";
			/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $results .= "{$cachedSize}";
			//echo $results .= "{$relatedInformationPresent} - "; 
			//echo $results .= "{$hostName} - ";
			//echo $results .= "{$directoryCategory} - ";
			//echo $results .= "{$directoryTitle}";
			/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $results .= "</font><br><br></td></tr></table>\n";
   		}
   		else {
   			continue;
   		}
   	}
	



/** @psalm-suppress MissingReturnType */ /** @psalm-suppress MissingReturnType */ function google_footer(){
	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $google = 1;	
	include("footer.php"); 
}	



// google numbers
/** @psalm-suppress MissingReturnType, MissingParamType */ /** @psalm-suppress MissingReturnType, MissingParamType */ function number($num){
	if(strlen("$num")<8){
		while(strlen("$num")<8){
			$num = "0$num";
		}
	}
	return $num;
}


// google spell check
/** @psalm-suppress MissingReturnType */ /** @psalm-suppress MissingReturnType */ function google_spell(){
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
/** @psalm-suppress MissingReturnType */ /** @psalm-suppress MissingReturnType */ function googlekey(){
	$google_key = array("qiXT/blQFHINGoMLNyWbpd7lmPUAmCVg","VnAEDgNQFHKmr7x5N/IZOlqJVXVIMpN8","ndLXmIRQFHKzFbIgCpeK9bxgFI10KLQS","CPnVXBFQFHLHEyAREs8K65fll1twh7BN","gnLaV59QFHJjvXr1heP8agWh4xFa5INL","nGFNCXxQFHJiIheIdGeXp2VOsngw/WVs","di7Sd3lQFHKZmzi/btrkrz0bu6DFgXJP","Myh++PhQFHIb071+CBwiNDIjJYLPwItQ");
	$key = rand(0,count($google_key)-1);
	$key = $google_key[$key];
	return $key;
}




// show top 5 searches
/** @psalm-suppress MissingReturnType */ /** @psalm-suppress MissingReturnType */ function google_top5(){

	global $stream;

	$alot = $stream->do_query("select * from `google` order by hits DESC","array"); // codespell:ignore alot
	/* @phpstan-ignore-line */ /** @psalm-suppress UndefinedVariable */ /** @psalm-suppress UndefinedVariable */ $result .= "Top five searches : <br>";
	
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



// top 5 ralated, updates as searches // codespell:ignore ralated
/** @psalm-suppress MissingReturnType */ /** @psalm-suppress MissingReturnType */ function google_exists(){
	
	global $stream,$term_p;
	$key = googlekey();
	
	$exists = $stream->do_query("select * from `google` where term like '%$term_p%'","array");
	for($i=0;$i<count($exists);$i++){
		$tmp = $exists[$i];
		$id = $tmp[0];
		/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $key_u = $tmp[1];
    	/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $term_u = $tmp[2];
		/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $timer = $tmp[3];
		$hits = $tmp[4];
		$hits = $hits + 1;
		$hits = number($hits);
		/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $existss = $stream->do_query("update `google` set hits='$hits' where id='$id'","one");
	}
	/** @psalm-suppress InvalidOperand */ /** @psalm-suppress InvalidOperand */ if(!count($exists)>0){  	
		$numg = number(1);
		/** @psalm-suppress UnusedVariable */ /** @psalm-suppress UnusedVariable */ $search_tracker = $stream->do_query("INSERT INTO `google` VALUES ('', '$key', '$term_p', NOW(),'$numg')","one");
	}
	
}

?>
<?php // jscpd:ignore-end ?>
