<?php


function number($num){


if(strlen("$num")<8){

	while(strlen("$num")<8){
		$num = "0$num";
	}
}

return $num;
}

print number(5);
print "<br>";
print number(53);
print "<br>";
print number(15);
print "<br>";
print number(22);
print "<br>";
print number(456);
print "<br>";
print number(565434);

?>