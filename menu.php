 <?php 
 if((!$image)&&(!$term)&&($wkdisgood!="map")){
 ?>
 <td width="220" valign="top" bgcolor="#FFFFFF">
 
<fieldset>
<legend><strong><?php print $language['mainmenu']; ?> <img alt='clickhere' src="images/topicarrow.gif"> &nbsp; </strong></legend>
	<table width="100%"  border="0" cellspacing="0" cellpadding="2">
		 <?php
		 
		menupages("menu");

		 ?>
		 
	</table>           
</fieldset> 
<br> <a target="_blank" href="http://www.irelandoffline.org/survey" title="Link to IrelandOffline Survey"><img src="http://www.irelandoffline.org/images/surveys.jpg" alt="Link to IrelandOffline Survey" width="88" height="31" border="0"/></a>
<br><br>

		 <?php
		 
		include("adsenseimg.php");

		 ?>
		 

<fieldset>
<legend>
<strong><?php print $language['sitelogin']; ?> <img alt='clickhere' src="images/topicarrow.gif"> &nbsp; </strong></legend>
<?php include("login.php"); ?>
</fieldset> 
<br><br>


<fieldset>
<legend>
<strong><?php print $language['polls']; ?> <img alt='clickhere' src="images/topicarrow.gif"> &nbsp; </strong></legend>
<?php include("poll.php"); ?>
</fieldset> 
<br><br>

	 
	 <fieldset>
		<legend>
			<strong>
				<?php print $language['whosonline']; ?> <img alt='clickhere' src="images/topicarrow.gif"> &nbsp; </strong></legend>
				<?php include("online.php"); ?>
	</fieldset> 



     	
            </td>
			<?php
			}
			?>