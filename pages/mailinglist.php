<td width="*" valign="top" bgcolor="#FFFFFF">

			  <table bgcolor="#FEFEFE" cellpadding="0" cellspacing="0" border="0"><tr><td>
           
<?php

switch($case){

default:
print "<fieldset><legend><strong>$language['mailinglist']</strong></legend>";
print "<br><br><table cellpadding=0 cellspacing=0 border=0 width=600>";
print "<tr><td colspan=2><font class='maintext'>MAILING LIST:<br>
If you would like to join the mailing list, please enter your email address in the box,and then click submit <br><form action='index.php?pagename=mailinglist' name='mailing1' method='post'>";
print "</td></tr><tr><td><font class='maintext'>E-mail address:</td><td valign=top><input type=text name='join_email' value='somedude@dude.com' onFocus=\"this.value=''\"></td></tr>";
print "<tr><td valign=top></td><td valign=top><br><br><input type=submit value='Submit'></td></tr>";
print "</form></table></fieldset>";
break;



case "add":
$sql = $stream->do_query("insert into clickdb values('','$fname$lname','$password','$fname','$lname','$addy','$email','$phone','$misc','$mailed')","one");
break;


case "register":
$sql = $stream->do_query("update clickdb set misc=1 where id=$id","one");
break;


case "deregister":
$sql = $stream->do_query("update clickdb set misc=0 where id=$id","one");

break;


case "remove":
$sql = $stream->do_query("delete from clickdb where id=$id","one");
break;

}
?>

			</td></tr></table>
            
			</td>