<?php include("header.php"); ?>
<?php 

print "<h4>Click Panel</h4><hr>";

print "<table cellpadding=2 cellspacing=0 border=0 width=1000>";
print "<tr><td colspan=17><h6><div><a href=\"javascript:sweeptoggle('contract')\">Contract All</a> | <a href=\"javascript:sweeptoggle('expand')\">Expand All</a></div></h6></td></tr>";
print "</table>";


	$content[0] = "Note : <br>The figures provided by this web page are only an estimate.<br><br> 
				The actual figures are fairly accurate but they may vary due to any of the following<br><br>
				1. Customer Decides to leave after one minute due to problem (no charge obviously)<br>
				2. User error from staff inputting wrong figures for prints etc.<br>
				3. Loyalty Cards effectivley void some transactions.<br> 4. ETC";
	$content[1] = "Note : <br>The member database is the members which orignally took part in the click here prize giving.<br> 
				From here you can email these members";
	$content[2] = "Note : <br>The news management system controls the news on the main page of click here cork<br>
				From here you can add / edit & delete news topics<";		
	$content[3] = "Note : <br>The PcRepairs section is a catalogue of pc repairs.<Br> Firstly reported by staff members and the updates added to the status of the the problem.";	


	$red[0] =  "<a href='sales.php'>Sales Analysis</a>,Sales Analysis";
	$red[1] =  "<a href='memberdb.php'>Member Database</a>,Member Database"; 
	$red[2] =  "<a href='updatenews.php'>News Updater</a>,News Updater"; 
	$red[3] =  "<a href='pcreport.php'>PC Repairs</a>,PC Repairs";


for($t=0;$t<count($red);$t++){

	$fed = explode(",",$red[$t]);
	print "<h5 onClick=\"expandcontent(this, 'sc$t')\" style=\"cursor:hand; cursor:pointer\"><span class=\"showstate\"></span>$fed[1] [click to expand]</h5><div id=\"sc$t\" class=\"switchcontent\">";
	print "&nbsp;&nbsp;&nbsp;&nbsp; <img src='http://www.clickherecork.com/images/arrows.gif'>&nbsp;&nbsp; $fed[0] <br><br>&nbsp;&nbsp;&nbsp;&nbsp; <table width=600 cellspacing=0 border=0 bgcolor=000000><tr><td><table cellpadding=5 width=100% height=100% border=0 bgcolor=ffffff><tr><td> $content[$t] </td></tr></table></td></tr></table><br>";
	print "</div>";

}

print "<br>";

include("footer.php"); 


?>