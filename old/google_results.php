<?php

// google results

print "<!------- google results // ------->\n";
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
			echo "<tr><td valign=top> $t. </td>";
			echo "<td>";
			echo "<a href=\"{$url}\">{$title}</a><br>";
			echo " - {$snippet}<br><font color='green'>";
			echo "{$urlsnip} ... - ";
			echo "{$cachedSize}";
			//echo "{$relatedInformationPresent} - "; 
			//echo "{$hostName} - ";
			//echo "{$directoryCategory} - ";
			//echo "{$directoryTitle}";
			echo "</font><br><br></td></tr>\n";
   		}
   		else {
   			continue;
   		}
   	}
	
	if($num>10){
		print "<tr><td align=right></td><td align=right>$pre $beg</td></tr>";
	}
print "<!------- google results // ------->\n";	
?>	