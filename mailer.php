<?php

print "Started";

include("connect.php");

$sql = $stream->do_query("select * from clickdb where mailed='0'","array");

print count($sql) . "<br>";

for($r=0;$r<count($sql);$r++){
$tmp = $sql[$r];
$id = $tmp[0];
$username = $tmp[1];
$password = $tmp[2];
$fname = ucwords($tmp[3]);
$lname = $tmp[4];
$address = $tmp[5];
$email = $tmp[6];
$phone = $tmp[7];
$mailed = $tmp[8];

$message = "
<html>
<head>
  <title>Click Here Internet Cafe</title>
</head>
<body>
  <p>Here are the upcoming events in May!</p>
  <table width=400 cellpadding=5>
<tr>
<td width=100%>
Hello $fname,<br>
Click Here Internet Cafe is delighted to inform you of our long awaited prize giving event.<br>
Click Here will be giving away holidays to Budapest, 10 Mini breaks to Kilalla Co. Mayo & many other prizes!!<br><br>
We are inviting you to come down and view the prize giving draw which will take place on the <b>20th of May @ 8pm</b>..<br><br>

Over the next year, Click Here will be rehosting the event every couple of months.<br>
You will be able to enter into these draws on our web site <a href=http://www.clickherecork.com>clickherecork.com</a><br>
So keep an eye on the site for up coming events and where to apply for entry!<br>

So <a href=http://www.clickherecork.com>Click Here</a> and find out whats happening.<br><br>
Happy browsing<br>
Click Here Internet Cafe

</td>
</tr>
  </table>
</body>
</html>
";

$subject = "Click Here Internet Cafe - Prize giveaway event!";
$headers = "From: Click Here Internet Cafe <services@clickherecork.com>" . "\r\n";
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "Reply-To: info@clickherecork.com" . "\r\n";
$address = "$email";

if(mail($address, $subject, $message, $headers)){
$sql2 = $stream->do_query("update clickdb set mailed='1' where id='$id'","one");
print "mailed $email successfuly<br>";
}
else {
print "failed!!";
}


}
?> 

<script language="JavaScript" type="text/javascript">
        setTimeout ("document.location.href='mailer.php?<?php print md5($time); ?>'", 500);
		</script>
