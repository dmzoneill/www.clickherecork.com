<?php include("header.php"); 
include("connect.php");
// member .php

print "<h4>News Editor</h4><a href='index.php'>Main Menu</a> >> <a href='updatenews.php'>News</a><hr>"; 

print "<h6><div><a href=\"javascript:sweeptoggle('contract')\">Contract All</a> | <a href=\"javascript:sweeptoggle('expand')\">Expand All</a></div></h6>";
?>
<h5 onClick="expandcontent(this, 'sc1')" style="cursor:hand; cursor:pointer"><span class="showstate"></span>Add News [click to expand]</h5>
<div id="sc1" class="switchcontent">
<?php
 if($addnews){
  	//id  name  message  
 	$sql = $stream->do_query("insert into clicknews values('','$title','$msg')","one");
	print "News Added.<br><br>";
 
  }
?>
<table cellpadding=5><form action='updatenews.php?addnews=true' method='post' enctype='multipart/form-data' name='addnews' target='_self'>

<tr><td>Title Of News</td><td><input name='title' type='text' value='Click Here Internet Cafe'></td></tr>
<tr><td>Body of message</td><td><textarea name='msg' cols='70' rows='15'>

</textarea></td></tr>
<tr><td>Finished</td><td><input name='send' type='submit' value='Add news'> <input name='reset' type='reset' value='Clear Message'></td></tr>
</form>
</table>

</div>

<h5 onClick="expandcontent(this, 'sc2')" style="cursor:hand; cursor:pointer"><span class="showstate"></span>Edit News [click to expand]</h5>
<div id="sc2" class="switchcontent">

  <?php
  
  if($updatenews){
  	//id  name  message  
 	$sql = $stream->do_query("update clicknews set name='$title', message='$msg' where id='$updatenews'","one");
	print "Report Updated.<br><br>";
 
  }
 
  $sql = $stream->do_query("SELECT * FROM `clicknews` order by id desc","array");
  
  for($r=0;$r<count($sql);$r++){

$tmp = $sql[$r];
$id = $tmp[0];
$name = $tmp[1];
$msg = $tmp[2];

print "<table cellpadding=5><form action='updatenews.php?updatenews=$id' method='post' enctype='multipart/form-data' name='editnews' target='_self'>

<tr><td>Title Of News</td><td><input name='title' type='text' value='$name'></td></tr>
<tr><td>Body of message</td><td><textarea name='msg' cols='70' rows='15'>
$msg
</textarea></td></tr>
<tr><td>Finshed</td><td><input name='send' type='submit' value='Edit news'> <input name='reset' type='reset' value='Clear Message'></td></tr>
</form>
</table><br>
";

}

?>


</div>

<h5 onClick="expandcontent(this, 'sc3')" style="cursor:hand; cursor:pointer"><span class="showstate"></span>Delete News [click to expand]</h5>
<div id="sc3" class="switchcontent">


<?php
  
 
 if($delnews){
  	//id  name  message  
 	$sql = $stream->do_query("DELETE from clicknews where id=$delnews","one");
	print "News deleted.<br><br>";
 
  }
 
  $sql = $stream->do_query("SELECT * FROM `clicknews` order by id desc","array");
  
  for($r=0;$r<count($sql);$r++){

$tmp = $sql[$r];
$id = $tmp[0];
$name = $tmp[1];
$msg = $tmp[2];

print "<table width=600><tr><td width=400>$name </td><td width=200> <a href='updatenews.php?delnews=$id'>Delete this news post</a></td></tr></table>";

}

?>

</div>


<?php include("footer.php"); ?>