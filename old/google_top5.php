<?php
// top 5 searches
print "<!------- google top5 // ------->\n";
print "<table width=641 bgcolor='#FEFEFE' cellpadding='0' cellspacing='0' border='0'><tr><td width=70% align=left>";
$alot = $stream->do_query("select * from `google` order by hits DESC","array");
	print "Top five searches : <br>";
	for($i=0;$i<count($alot);$i++){
	$tmp = $alot[$i];
	$id = $tmp[0];
	$key_u = $tmp[1];
    $term_u = $tmp[2];
	$timer = $tmp[3];
	$hits = $tmp[4];
	print "<a href='google.php?term=$term_u'>$term_u</a>";
	if($i>4){
	break;
	}
	print ", ";
	}

print "</td>";
print "<td width=30% align=right><img src=\"images/powered_by_google.gif\">";
print "<form name='search' method='post' action='google.php'>
<input type='text' name='term' value='$term_p'>
<input type='submit' alt='Search' value='Google'>
</form></td></tr></table><br>";
print "<!------- google top5 // ------->\n";

?>