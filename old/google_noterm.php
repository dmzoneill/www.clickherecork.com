<?php

// no term given


include("functions.php");  
include("header.php"); 
print "<!------- google noterm // ------->\n";
print "<td align=right width='100%' valign='top' bgcolor='#FFFFFF'>";
print "<img src=\"images/powered_by_google.gif\">";
print "<form name='search' method='post' action='google.php'>
<input type='text' name='term' value='$term_p'>
<input type='submit' alt='Search' value='Google'>
</form>";
print "<table bgcolor='#FEFEFE' cellpadding='0' cellspacing='0' border='0'><tr><td>
<fieldset><legend><strong><h3>Google Search Results</h3></strong></legend>";

print "<table width=641 align=left cellpadding=5 cellspacing=0 border=0><tr><td align=left>";
	echo "<h4>Try entering a search term!</h4></td></tr>";
print "<!------- google noterm // ------->\n";


?>