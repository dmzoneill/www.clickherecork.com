<?php include("header.php"); 
include("connect.php");
// member .php

print "<h4>Pc Report</h4><a href='index.php'>Main Menu</a> >> <a href='pcreport.php'>Pc Reports</a><hr>"; 
print "<h6><div><a href=\"javascript:sweeptoggle('contract')\">Contract All</a> | <a href=\"javascript:sweeptoggle('expand')\">Expand All</a></div></h6>";

$sub = "<h5 onClick=\"expandcontent(this, 'sc2')\" style=\"cursor:hand; cursor:pointer\"><span class=\"showstate\"></span>Reports Status  [click to expand]</h5>
<div id=\"sc2\" class=\"switchcontent\">";

switch($report){

default:



?>
<h5 onClick="expandcontent(this, 'sc1')" style="cursor:hand; cursor:pointer"><span class="showstate"></span>Report Problem  [click to expand]</h5>
<div id="sc1" class="switchcontent">
<table cellpadding=2 cellspacing=0 border=0 width=800>
<tr><td colspan=17><a name='morn'></a><h5>Fill out pc fault report</h5></td></tr>
</table>
<table cellpadding=5><form action="pcreport.php?report=addreport" method="post" enctype="multipart/form-data" name="email" target="_self">

<tr><td>Employee name</td><td><input name="rstaff" type="text" value=""></td></tr>
<tr><td>Subject</td><td><input name="rsubject" type="text" value="Mouse Broken"></td></tr>
<tr><td>Pc No.</td><td>
<?php
print "<select name='rcomp'>";
for($i=1;$i<51;$i++){
print "<option value=\"$i\">Com $i</option>\n";
}
print "</select>";
print "</td></tr>";
?>
<tr><td>Message</td><td><textarea name="rmsg" cols="70" rows="15">


</textarea></td></tr>
<tr><td>Finished</td><td><input name="rsend" type="submit" value="Add Report"> <input name="reset" type="reset" value="Clear Message"></td></tr>
</form>
</table>

</div>


<?php

print $sub;

$sql = $stream->do_query("SELECT * FROM `clickpcreports` order by id desc","array");

print "<table cellpadding=2 cellspacing=0 border=0 width=800>";
print "<tr><td colspan=17><a name='morn'></a><h5>Recent  Reports</h5></td></tr>";
print "</table>";
print "<table cellpadding=2 cellspacing=0 border=0 width=800>";
print "<tr><td>ID No</td><td>Employee</td><td>Subject</td><td>Com</td><td>Date</td><td>Options</td></tr>";
print "<tr><td colspan=6><hr></td></tr>";

for($r=0;$r<count($sql);$r++){
//id  rstaff  rsub  rcom  rmsg  rrep  rmesg  
$tmp = $sql[$r];
$id = $tmp[0];
$rstaff = $tmp[1];
$rsub = $tmp[2];
$rcom = $tmp[3];
$rmsg = $tmp[4];
$rrep = date("d-m-Y",$tmp[5]);
$rmesg  = $tmp[6];

print "<tr><td><a href='pcreport.php?report=editreport&id=$id'>$id</a></td><td>$rstaff</td><td>$rsub</td><td>$rcom</td><td>$rrep</td><td><a href='pcreport.php?report=editreport&id=$id'>Edit / Reply</a></td></tr>";

}
print "</table>";

?>




<?php

break;


case "addreport":
print $sub;

if(($rstaff) && ($rsubject) && ($rmsg) && ($rcomp)){

$rrep = time();

$sql = $stream->do_query("INSERT INTO `clickpcreports` ( `id` , `rstaff` , `rsub` , `rcom` , `rmsg` , `rrep` , `rmesg` ) VALUES ('0', '$rstaff', '$rsubject', '$rcomp', '$rmsg', '$rrep', '')","one");
print "Report Logged";
}
else {
print "Please Fill in all details required.. Click Back on your borwser.";
}

break;



case "delreport":
print $sub;

break;


case "editreport":
print $sub;

if($update){

	$sql = $stream->do_query("update clickpcreports set rstaff='$rstaff', rsub='$rsubject', rcom='$rcomp', rmsg='$rmsg', rmesg='$rmsg' where id='$update'","one");
	print "Report Updated.<br><br>";
}

$sql = $stream->do_query("SELECT * FROM `clickpcreports` where id='$id'","array");

print "<table cellpadding=2 cellspacing=0 border=0 width=800>";
print "<tr><td colspan=17><a name='morn'></a><h5>Edit This Report</h5></td></tr>";
print "</table>";

for($r=0;$r<count($sql);$r++){
//id  rstaff  rsub  rcom  rmsg  rrep  rmesg  
$tmp = $sql[$r];
$id = $tmp[0];
$rstaff = $tmp[1];
$rsub = $tmp[2];
$rcom = $tmp[3];
$rmsg = $tmp[4];
$rrep = date("d-m-Y",$tmp[5]);
$rmesg  = $tmp[6];
?>

<table cellpadding=5><form action="pcreport.php?report=editreport&update=<?php print "$id"; ?>" method="post" enctype="multipart/form-data" name="editreport" target="_self">

<tr><td>Employee name</td><td><input name="rstaff" type="text" value="<?php print "$rstaff"; ?>"></td></tr>
<tr><td>Subject</td><td><input name="rsubject" type="text" value="<?php print "$rsub"; ?>"></td></tr>
<tr><td>Pc No.</td><td>
<?php
print "<select name='rcomp'>";
for($i=1;$i<51;$i++){
print "<option value='$i' ";
if($i==$rcom){
	print "selected";
}
print ">Com $i</option>\n";
}
print "</select>";
print "</td></tr>";
?>
<tr><td>Message</td><td><textarea name="rmsg" cols="70" rows="8">
<?php print "$rmsg"; ?>

</textarea></td></tr>
<tr><td>Reply Message</td><td><textarea name="rmsg" cols="70" rows="8">
<?php print "$rmesg"; ?>

</textarea></td></tr>
<tr><td>Finished</td><td><input name="rsend" type="submit" value="Edit Report"> <input name="reset" type="reset" value="Clear Message"></td></tr>
</form>
</table>
<?php
}

break;

}

print "</div>";

include("footer.php"); ?>