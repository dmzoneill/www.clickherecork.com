<?php
include("connect.php");

if(!$insert){
?>
<form action="insert.php?insert=true" method="post">
first name = <input name="fname" type="text"><br>
last name = <input name="lname" type="text"><br>
address = <input name="addy" type="text" value='@hotmail.com'><br>
email = <input name="email" type="text"><br>
phone = <input name="phone" type="text"><br>
misc = <input name="misc" type="text" value=0><br>
mailed = <input name="mailed" type="text" value=0><br>
<input type="submit" value="insert">
</form>
<?php
}
else {

?>
<form action="insert.php?insert=true" method="post">
first name = <input name="fname" type="text"><br>
last name = <input name="lname" type="text"><br>
address = <input name="addy" type="text"><br>
email = <input name="email" type="text" value='@hotmail.com'><br>
phone = <input name="phone" type="text"><br>
misc = <input name="misc" type="text" value=0><br>
mailed = <input name="mailed" type="text" value=0><br>
<input type="submit" value="insert">
</form><br><br>
<?php

$password = rand(0,500000);

print "$fname <br>";
print "$lname <br>";
print "$addy <br>";
print "$email <br>";
print "$phone <br>";
print "$misc <br>";
print "$mailed <br>";

$password = "$fname$password$lname";

print "$password <br>";
print "Checking stuff<br>";
print "inserting into the database<br>done!<br>";

$sql = $stream->do_query("insert into clickdb values('','$fname$lname','$password','$fname','$lname','$addy','$email','$phone','$misc','$mailed')","one");


}
?>