<?php include("header.php");

print "<h4>Sales Analysis</h4><a href='index.php'>Main Menu</a> >> <a href='monthly.php'>Monthly Analysis</a>";

?>
<hr>
<?php

// sales report .php

include("connect.php");

if(($month) && ($year)){

	print "<h3>Over view for the $month month of $year...</h3>";

	$sql = $stream->do_query("SELECT * FROM `clicksales` WHERE rmonth='$month' AND ryear='$year' order by id asc","array");

	if(count($sql)>0){

		print "<table cellpadding=2 cellspacing=0 border=0 width=1000>";
		print "<tr><td colspan=17><h6><div><a href=\"javascript:sweeptoggle('contract')\">Contract All</a> | <a href=\"javascript:sweeptoggle('expand')\">Expand All</a></div></h6></td></tr>";
		print "</table>";

		// Morning Overview
		print "<h5 onClick=\"expandcontent(this, 'sc1')\" style=\"cursor:hand; cursor:pointer\"><span class=\"showstate\"></span>Morning Overview [click to expand]</h5><div id=\"sc1\" class=\"switchcontent\">";
		print "<table cellpadding=2 cellspacing=0 border=0 width=1000>";
		print "<tr><td colspan=17><a name='morn'></a><h5>Morning Shift</h5></td></tr>";
		print "</table>";
		print "<table cellpadding=2 cellspacing=0 border=0 width=1000>";
		print "<tr><td><font color=red>Sales</td><td><font color=red>Day</td><td><font color=red>Month</td><td><font color=red>Year</td><td><font color=red>PC</td><td><font color=red>Start Time</td><td><font color=red>End Time</td><td><font color=red>Total Time</td><td><font color=red>Prints B</td><td><font color=red>Prints C</td><td><font color=red>Envelopes</td><td><font color=red>loppy</td><td><font color=red>CDR</td><td><font color=red>Other</td><td><font color=red>Group</td><td><font color=red>Price</td><td><font color=red>Total Price</td></tr>";


		$pctotal = 0;
		$alltotal = 0;
		$apctotal = 0;
		$aalltotal = 0;
		$gtime = 0;
		$morntotal=0;
		$gaming = 0;
		$siemens = 0;
		$t=0;
		$y=0;

		for($r=0;$r<count($sql);$r++){

			$tmp = $sql[$r];
			$id = $tmp[0];
			$day = $tmp[1];
			$month = $tmp[2];
			$year = $tmp[3];
			$pc = $tmp[4];
			$starttime = $tmp[5];
			$endtime = $tmp[6];
			$totaltime = $tmp[7];
			$black = $tmp[8];
			$color  = $tmp[9];
			$envelop = $tmp[10];
			$floppy  = $tmp[11];
			$cdr = $tmp[12];
			$sum  = $tmp[13];
			$group = $tmp[14];
			$pcprice = $tmp[15];
			$totalprice = $tmp[16];
			
			if($pc<38){
				$siemens = $siemens + $totalprice;
			}
			else {
				$gaming = $gaming + $totalprice;
			}
			
			$fed = explode(":",$starttime);
			$avgtime = explode(":",$totaltime);
			$avgtime = ($avgtime[0] * 60) + $avgtime[1];
			$gtime = $gtime + $avgtime;
				if($y>0){
					$argtime = $gtime / $y;
				}
			$fff = $stream->do_query("insert into clicktempcomp values ('','$pc')","one");
			$fff = $stream->do_query("insert into clicktemptime values ('','$fed[0]')","one");

			$y++;

			if($r%2>0){
				$bgcolor= "eeeeee";
			}
			else {
				$bgcolor= "dddddd";
			}
			

			$split = explode(":",$endtime);
			if(($split[0]>15) && ($t<1)){
				$apctotal = $pctotal;
				$aalltotal = $alltotal;
				$agtime = $gtime;

				print "<tr><td colspan=17><hr></td></tr>";
				print "<tr><td colspan=17><a name='mornbreak'></a><h6>Breakdown</h6>Average Visit Duration = ". $gtime . "mins total - <b>" . $argtime ." mins avg</b><br>Average Price = €". $alltotal . " euros total - <b> €" . $alltotal / $y ." avg</b><br></td></tr>";
				print "<tr><td colspan=17><hr></td></tr>";
				print "<tr bgcolor='$bgcolor'><td colspan=2>Total for Shift</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>€$pctotal</td><td>€$alltotal</td></tr>";
				print "<tr><td colspan=17><hr></td></tr>";
				print "</table><br><br><br><br><br><br>";
								
				print "</div>";
				// End Morning Overview	once 16:00 is reached in above if statement
				
				//	Start Evening Over View			
				print "<h5 onClick=\"expandcontent(this, 'sc2')\" style=\"cursor:hand; cursor:pointer\"><span class=\"showstate\"></span>Evening Overview [click to expand]</h5><div id=\"sc2\" class=\"switchcontent\">";
									
				print "<table cellpadding=2 cellspacing=0 border=0 width=1000>";
				print "<tr><td colspan=17><hr></td></tr>";
				print "<tr><td colspan=17><a name='even'></a><h5>Evening Shift</h5></td></tr>";
				print "</table>";
				print "<table cellpadding=2 cellspacing=0 border=0 width=1000>";
				print "<tr><td><font color=red>Sales</td><td><font color=red>Day</td><td><font color=red>Month</td><td><font color=red>Year</td><td><font color=red>PC</td><td><font color=red>Start Time</td><td><font color=red>End Time</td><td><font color=red>Total Time</td><td><font color=red>Prints B</td><td><font color=red>Prints C</td><td><font color=red>Envelopes</td><td><font color=red>Floppy</td><td><font color=red>CDR</td><td><font color=red>Other</td><td><font color=red>Group</td><td><font color=red>Price</td><td><font color=red>Total Price</td></tr>";

				$pctotal = 0;
				$alltotal = 0;
				$gtime = 0;
				$morntotal=0;
				$y=0;
				$t++;
			}

			$pctotal = $pctotal + $pcprice;
			$alltotal = $alltotal + $totalprice;

			print "<tr bgcolor='$bgcolor'><td>$id</td><td>$day</td><td>$month</td><td>$year</td><td>$pc</td><td>$starttime</td><td>$endtime</td><td>$totaltime</td><td>$black</td><td>$color</td><td>$envelop</td><td>$floppy</td><td>$cdr</td><td>$sum</td><td>$group</td><td>€$pcprice</td><td><font color=blue>€$totalprice</td></tr>";
		}

	$apctotal = $apctotal + $pctotal;
	$aalltotal = $aalltotal + $alltotal;

	print "<tr><td colspan=17><hr></td></tr>";
	print "<tr><td colspan=17><a name='evenbreak'></a><h6>Breakdown</h6>Average Visit Duration = ". $gtime . " mins total - <b>" . $argtime ." mins avg</b><br>Average Price = €". $alltotal . " euros total - <b> €" . $alltotal / $y ." avg</b><br></td></tr>";
	print "<tr><td colspan=17><hr></td></tr>";
	print "<tr bgcolor='$bgcolor'><td colspan=2>Total for Shift</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>€$pctotal</td><td>€$alltotal</td></tr>";
	print "<tr><td colspan=17><hr></td></tr>";
	print "</table><br><br><br><br><br><br>";
	
	print "</div>";
	//	END Evening Over View			
	
	//	Start Day Over View			
	print "<h5 onClick=\"expandcontent(this, 'sc3')\" style=\"cursor:hand; cursor:pointer\"><span class=\"showstate\"></span>Day Overview [click to expand]</h5><div id=\"sc3\" class=\"switchcontent\">";

	$agtime = $agtime + $gtime;
	$argtime =  $agtime / $r;
	$avgprice = $aalltotal / $r;
	print "<table cellpadding=2 cellspacing=0 border=0 width=1000>";
	print "<tr><td colspan=17><h6>Breakdown</h6>Average Visit Duration = ". $agtime . "mins total - <b>" . $argtime ." mins avg</b><br><br>";
	print "Average Sale Price = €". $avgprice ." avg</b></td></tr>";
	print "<tr><td colspan=17><hr></td></tr>";
	print "<tr bgcolor='$bgcolor'><td colspan=2><a name='day'></a>Total for Day</td><td width=100></td><td width=100></td><td width=100></td><td width=100></td><td width=100></td><td></td><td width=100></td><td></td><td></td><td></td><td></td><td></td><td></td><td width=60>€$apctotal</td><td width=75>€$aalltotal</td></tr>";
	print "<tr><td colspan=17><hr></td></tr>";
	print "</table>";

	print "</div>";
	//	END Day Over View			
	
	
	
	
	
	
	
	//	Start Sales Analysis			
	print "<h5 onClick=\"expandcontent(this, 'sc4')\" style=\"cursor:hand; cursor:pointer\"><span class=\"showstate\"></span>Sales Analysis [click to expand]</h5><div id=\"sc4\" class=\"switchcontent\">";
	//time usage breakdown
	print "<a name='anal'></a><h6>Busy Hours Analysis</h6>Results shown are the number of customers who request a pc per hour<br><br><table cellpadding=0 cellspacing=1 border=0 width=1000>";
	for($j=8;$j<24;$j++){
		if($j%2>0){
			$bgcolor= "ededed";
			$graph = "graph2.gif";
		}
		else {
			$bgcolor= "dcdcdc";
			$graph = "graph.gif";
		}
		if($j<10){
			$j = "0$j";
		}
		$sql3 = $stream->do_query("select * from clicktemptime where usertime=$j","array");
		print "<tr bgcolor=$bgcolor><td bgcolor=$bgcolor width=100 height=10>$j am / pm</td>";
		for($a=0;$a<count($sql3)/10;$a++){
			print "<td height=10 bgcolor=$bgcolor background='images/$graph'>&nbsp;&nbsp;</td>";
		}
		print "</tr>";
	}
	print "</table>";
	$ddd = count($stream->do_query("DELETE FROM `clicktemptime`","one"));
	//end time usage breakdown

	//pc usage breakdown
	print "<h6>PC Usage Breakdown</h6>Results shown are the number of customers who are given a specific number during the business day<br>";
	$usage = substr(($siemens / $aalltotal) * 100,0,6);	
	$usage2 = substr(($gaming / $aalltotal) * 100,0,6);	
	print "<h3>Old Pcs €$siemens [26 pcs] $usage%</h3>";
	print "<table cellpadding=0 cellspacing=1 border=0>";
	$l=0;
	for($k=1;$k<51;$k++){
		if($k%2>0){
			$bgcolor= "ededed";
			$graph = "graph2.gif";
		}
		else {
			$bgcolor= "dcdcdc";
			$graph = "graph.gif";
		}
		
		$sql3 = $stream->do_query("select * from clicktempcomp where pc=$k","array");
		
		print "<tr bgcolor=$bgcolor><td bgcolor=$bgcolor width=70 height=10>PC $k</td>";
		for($p=0;$p<count($sql3)/10;$p++){
			print "<td height=10 bgcolor=$bgcolor background='images/$graph' width=50> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>";
			$l++;
		}
		print "</tr>";
		if(($k>36) && ($k<38)){
			$l = $l * 10;
			print "</table><table cellpadding=0 cellspacing=1 border=0><tr><td></td><td colspan=8><b>Older Pcs, Total Usage = $l customers </b></td></tr></table><br><h3>Gaming Pcs €$gaming [13 pcs] $usage2%</h3><table cellpadding=0 cellspacing=1 border=0 width=1000>";
			$l=0;
		}
		if($k>49){
			$l = $l * 10;
			print "</table><table cellpadding=0 cellspacing=1 border=0 width=1000><tr><td></td><td colspan=8><b>Gaming Pcs, Total Usage = $l customers </b></td></tr>";
		}
	}
	print "</table>";
	$ddd = count($stream->do_query("DELETE FROM `clicktempcomp`","one"));
	//end pc usage breakdown
	print "</div>";
	// end Sales analysis

	}
	else {
		print "No Entries Found for [ $day - $month - $year ] ";
	}
}

include("footer.php");

?>