<?php include("header.php"); 
include("connect.php");
// member .php


print "<h4>Member database</h4><a href='index.php'>Main Menu</a> >> <a href='memberdb.php'>Member Database</a><hr>"; 

print "<h6><div><a href=\"javascript:sweeptoggle('contract')\">Contract All</a> | <a href=\"javascript:sweeptoggle('expand')\">Expand All</a></div></h6>";
?>
<h5 onClick="expandcontent(this, 'sc1')" style="cursor:hand; cursor:pointer"><span class="showstate"></span>Send Email [click to expand]</h5>
<div id="sc1" class="switchcontent">

<table cellpadding=5><form action="memberdb.php" method="post" enctype="multipart/form-data" name="email" target="_self">

<tr><td>Sender</td><td><input name="from" type="text" value="Click Here Internet Cafe"></td></tr>
<tr><td>Sender Reply Address</td><td><input name="sender" type="text" value="services@clickherecork.com"></td></tr>
<tr><td>Subject</td><td><input name="ssubject" type="text" value="Click Here Latest"></td></tr>
<tr><td>Message</td><td><textarea name="msg" cols="70" rows="15">
Please remove this text.

All mails sent using this form will use the following format regarless of what you type in here.
---------------------------------------------
Hello <firstname>,

<your message as typed here>

Yours truly,
<sender>

</textarea></td></tr>
<tr><td>Finished</td><td><input name="send" type="submit" value="Send Email to All members"> <input name="reset" type="reset" value="Clear Message"></td></tr>
</form>
</table>

</div>
<h5 onClick="expandcontent(this, 'sc2')" style="cursor:hand; cursor:pointer"><span class="showstate"></span>Show Members [click to expand]</h5>
<div id="sc2" class="switchcontent">
<?php
//id  username  password  fname  lname  address  email  phone  misc  mailed  mailenc 
$sql = $stream->do_query("SELECT * FROM `clickdb`","array");

print "<table cellpadding=2 cellspacing=0 border=0 width=1000>";
print "<tr><td colspan=17><a name='morn'></a><h5>Members</h5></td></tr>";
print "</table>";
print "<table cellpadding=2 cellspacing=0 border=0 width=1000>";
print "<tr><td>ID No</td><td>First Name</td><td>Surname</td><td>Address</td><td>Email</td><td>Phone</td></tr>";
print "<tr><td colspan=17><hr></td></tr>";

for($r=0;$r<count($sql);$r++){

$tmp = $sql[$r];
$id = $tmp[0];
$username = $tmp[1];
$password = $tmp[2];
$fname = $tmp[3];
$lname = $tmp[4];
$address = $tmp[5];
$email = $tmp[6];
$phone = $tmp[7];
$misc = $tmp[8];
$mailed  = $tmp[9];
$enc = $tmp[10];


print "<tr><td>$id</td><td>$fname</td><td>$lname</td><td>$address</td><td>$email</td><td>$phone</td></tr>";

}

print "<tr><td colspan=17><hr></td></tr>";
print "<tr><td colspan=17><a name='even'></a><h5>Evening Shift</h5></td></tr>";
print "</table>";

?>
</div>


<?php include("footer.php"); ?>