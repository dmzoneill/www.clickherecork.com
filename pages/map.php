<td width="*" valign="top" bgcolor="#FFFFFF">
		
			  <table bgcolor="#FEFEFE" cellpadding="0" cellspacing="0" border="0"><tr><td>
           
			
			<fieldset>
<legend><strong> <?php print $language['map']; ?> </strong></legend>
 <center><div id="map" style="width: 630px; height: 500px"></div>
    <script type="text/javascript">
 function loadMap() {	
    // google markerss
	
    var map = new GMap(document.getElementById("map"));
	map.addControl(new GLargeMapControl());
	map.addControl(new GMapTypeControl());
    map.centerAndZoom(new GPoint(-8.469000, 51.896827), 2);
	
//var base = new GShape();
//base.type = circle;
//base.anchor = new GPoint(-8.469000, 51.896827);  // longitude,latitude
//base.radius = 0.0273548;  // degrees of latitude

	<?php
			
		require_once("connect.php");
		$mint = "select * from googlemarkers where opt='1'";
		$sql = $stream->do_query($mint,"array");
		
	for($h=0;$h<count($sql);$h++){

		$tmp = $sql[$h];
		$id = $tmp[0];
		$point = $tmp[1];
		$details = $tmp[2];
		$iconnum = $h +1;
		
			print "var icon$iconnum = new GIcon();\n";
			print "icon$iconnum.image = \"http://www.clickherecork.com/mapimg/marker$iconnum.png\";\n";
			print "icon$iconnum.shadow = \"http://www.clickherecork.com/mapimg/shadow.png\";\n";
			print "icon$iconnum.iconSize = new GSize(12, 20);\n";
			print "icon$iconnum.shadowSize = new GSize(22, 20);\n";
			print "icon$iconnum.iconAnchor = new GPoint(6, 20);\n";
			print "icon$iconnum.infoWindowAnchor = new GPoint(5, 1);\n";
			
			print "var marker$iconnum = new GMarker(new GPoint($point), icon$iconnum);\n";
			print "map.addOverlay(marker$iconnum);\n";
			print "GEvent.addListener(marker$iconnum, \"click\", function() {\n";
    		print "marker$iconnum.openInfoWindowHtml(\"<div align=left>$details</div>\");\n";
 			print " });\n\n";
			
	}
	
		$mint2 = "select * from googlemarkers where opt='0'";
		$sql2 = $stream->do_query($mint2,"array");
		
	for($y=0;$y<count($sql2);$y++){

		$tmp2 = $sql2[$y];
		$id = $tmp2[0];
		$point = $tmp2[1];
		$details = $tmp2[2];
		$iconnum = $y +1;
		
			print "var icons$iconnum = new GIcon();\n";
			print "icons$iconnum.image = \"http://www.clickherecork.com/mapimg/mm_20_red.png\";\n";
			print "icons$iconnum.shadow = \"http://www.clickherecork.com/mapimg/mm_20_shadow.png\";\n";
			print "icons$iconnum.iconSize = new GSize(12, 20);\n";
			print "icons$iconnum.shadowSize = new GSize(22, 20);\n";
			print "icons$iconnum.iconAnchor = new GPoint(6, 20);\n";
			print "icons$iconnum.infoWindowAnchor = new GPoint(5, 1);\n";
			
			print "var markers$iconnum = new GMarker(new GPoint($point), icons$iconnum);\n";
			print "map.addOverlay(markers$iconnum);\n";
			print "GEvent.addListener(markers$iconnum, \"click\", function() {\n";
    		print "markers$iconnum.openInfoWindowHtml(\"<div align=left>$iconnum | $details</div>\");\n";
 			print " });\n\n";
			
	}
	
	print "}";
	print "setTimeout(\"loadMap()\",2000);\n";
	
	print " </script><div align=left>\n";
	
	print "<h5>Click On the red balloons for information</h5><table width=100% border=0 cellpaddin=5><tr>";
	
	$mint = "select * from googlemarkers where opt='1'";
		$sql = $stream->do_query($mint,"array");
		
	for($h=0;$h<count($sql);$h++){

		$tmp = $sql[$h];
		$id = $tmp[0];
		$point = $tmp[1];
		$details = $tmp[2];
		$iconnum = $h +1;
		
		if($h%2<1){
			print "</tr><tr>";
		}
			
			if(stristr($details,"<br>")){
				$details = explode("<br>",$details);
				$details = $details[0];
			}
			
			print "<td valign=top><img src=\"http://www.clickherecork.com/mapimg/icon$iconnum.png\"> $details</td>";
			
	}
	
	
	
	?>
	</table>
    </div>
</fieldset> 
			</td></tr></table>
            
			</td>