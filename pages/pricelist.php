<td width="*" valign="top" bgcolor="#FFFFFF">

			  <table bgcolor="#FEFEFE" cellpadding="0" cellspacing="0" border="0"><tr><td>
           
			
			<fieldset>
<legend><strong> <?php print $language['prices']; ?> </strong></legend>
Click Here Prices Summary <br> <br>

Minimum Charge of €1 	(30mins) <br>
Hourly Rate of €2  	(3.3cent per min) <br> <br>

All day €10  <br>
(8 am – 12 midnight)<br> 
<br>

Scanning is free, PC usage charges apply. <br>
Print & Photocopying €0.10 per page. <br> <br>
 <br>
Assisted Scanning €0.50 per page.

<?php

$prices = "Computer Useage - 2.00 per hour |
All Day/Night Rate - 10.00 |
Printing : Colour - 1.00 per sheet |
Printing : Black And White - 10 cent per sheet |
PhotoCopying,,.10 cent per sheet |
Faxing - Price Depends On Volume/Destination |
Floppy Disc - 1.00 Each |  
CD-R  700 mb - 2.00 CD Sleeve Included |
DVD+R 4.3 gb - 4.00 CD Sleeve Included |
Scanning - Usuage Of Pc Min Charge Applies |
Assisted Scanning/Burning - 1.00 Per Item
";

$prices = explode("|",$prices);

for($r=0;$r<count($prices);$r++){
$temp = explode("-",$prices[$r]);
print "$temp[0] - $temp[1] <br>";
}

?>


 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</fieldset> 
			</td></tr></table>
            
			</td>