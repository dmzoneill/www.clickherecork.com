<?php

// google spell check
print "<!------- google spell // ------->\n";
do_spell($term_p, $spell);
if ($spell[0]) {
	print "<tr><td align=left><font color=red>Did you mean </font><a href=\"google.php/?term=".$spell."\">".$spell."</a>?</td><td align=right>$pre $beg</td></tr>";
}
else {
	if($num>10){
		print "<tr><td colspan=2 align=right>$pre $beg</td></tr>";
	}
}
print "<!------- google spell // ------->\n";

?>