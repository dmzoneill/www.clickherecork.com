<td width="*" valign="top" bgcolor="#FFFFFF">
		
			  <table bgcolor="#FEFEFE" cellpadding="0" cellspacing="0" border="0"><tr><td>
           
			
			<fieldset>
<legend><strong> <?php print $language['gallery']; ?> </strong></legend>
<h4>Click Here Picture Gallery</h4>
<a href='index.php?pageview=news'>Prize giveaway results</a><br><br>

<?php
$dir = "/home/sites/www.clickherecork.com/web/images/clickimages/";


if($image){
$fpen = explode(".",$image);
$fpen = $fpen[0];
$hi = fopen("$dir$fpen.txt","r");
$text = fread($hi,999999);
fclose($hi);
print "<h4><a href=index.php?pageview=images>Show Main Menu</a></h4><fieldset><legend><strong>Viewing $image</strong></legend>";
$dir = "/home/sites/www.clickherecork.com/web/images/clickimages/";
print "<img width=640 src='http://www.clickherecork.com/images/clickimages/$image' border=0><br>$text";
print "</fieldset><br> ";
}



print "<br><fieldset><legend><strong>Prize Giving 20th May</strong></legend>";


if (is_dir($dir)) {
   if ($dh = opendir($dir)) {
   $t=0;
   print "<table cellpadding=0 cellspacing=0 border=0 width=450>";
       while (($file = readdir($dh)) !== false) {
	   if(stristr($file,"tn")){
           
		   if($t%2<1){
		   print "<tr>";
		   }
		   $file_link = explode(".",$file);
		   $file_link = explode("_",$file_link[0]);
		   
			$hi = fopen("$dir$file_link[1].txt","r");
			$text = fread($hi,999999);
			fclose($hi);
		   echo "<td width=225><br><a href='index.php?pageview=images&img=$file_link[1].jpg'><img src='http://www.clickherecork.com/images/clickimages/$file' alt='Click To Enlarge!' border=0></a><br>$text</td>";
			 if($t%2>0){
		   print "</tr>";
		   }
		$t++;
		  }
       }
       closedir($dh);
	   print "</table>";
   }
}

?>

</fieldset> 

</fieldset> 
			</td></tr></table>
            
			</td>