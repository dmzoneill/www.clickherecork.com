<?php

print "<!------- google exists // ------->\n";
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
print "<!------- google exists // ------->\n";
	
?>	