<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="pragma" content="no-cache">
<link rel="shortcut icon" href="favicon.ico" >
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="http://www.clickherecork.com/phpBB2/templates/Avalanche/<?php print "css" . $cssinclude .".css"; ?>" type="text/css">
<title><?php print $language['title']; ?> - <?php print menupages("pagetitle"); ?></title>
<script src="http://maps.google.com/maps?file=api&v=1&key=ABQIAAAAOWSqm-gflo5Oe69a5Fac9BQUaeVtcehquuQJ1WtCi8w_36HUJhRNOjPcKWs7QX0JyjLhi9rDLFaBbg" type="text/javascript"></script>
  
</head>
<body>


<a name="top"></a>
<table class="bodyline" cellspacing="0" cellpadding="0" border="0" align="center">
	<tr>
		<td class="back_1_1">&nbsp;</td>
		<td class="back_1_2">&nbsp;</td>
		<td class="back_1_3">
		<?php print $language['textsize']; ?> : 
			<a href='size.php?css_size=1' class="tab"><?php print $language['default']; ?></a> |
	<a href='size.php?css_size=2' class="tab"><?php print $language['medium']; ?></a> |
	<a href='size.php?css_size=3' class="tab"><?php print $language['large']; ?></a>
		
		</td>
		
		
		<td class="back_1_3">
		
		
		</td>
		
		<td class="back_1_3">
		
				
		</td>
		<td class="back_1_6">&nbsp;</td>
		<td class="back_1_7">&nbsp;</td>
	</tr>
</table>
<table class="bodyline" cellspacing="0" cellpadding="0" border="0" align="center">
	<tr>
		<td class="back_2_1">&nbsp;</td>
		<td class="back_2_2"></td>
		<td class="back_2_4">&nbsp;</td>
		<td class="back_2_5" align="right" valign="top">

			<fieldset>
<legend><strong><?php print "Google " .$language['search']; ?></strong></legend>
<table cellpadding=0 width=100% cellspacing=0 border=0><tr><td align=right>
<form name='search' method='post' action='google.php'>
<input type='text' name='term' value='Chat'>
<input type='submit' alt='Search' value='<?php print "Google " .$language['search']; ?>'>
</form></td></tr></table>
</fieldset> 

<?php
if(stristr($HTTP_USER_AGENT,"MSIE")){
?>
<a target="_self" href="#" onClick="this.style.behavior='url(#default#homepage)';
this.setHomePage('http://www.yoursite.com');" class="tab">Set Homepage</a> | 
<a target="_self" href="#" onClick="if(document.all) window.external.AddFavorite(window.document.location,window.document.title)" class="tab">Add Bookmark</a>
<?php
}
?>		
		</td>
		<td class="back_2_6">&nbsp;</td>
		<td class="back_2_7"></td>
	</tr>
</table>
<table class="bodyline" cellspacing="0" cellpadding="0" border="0" align="center">
	<tr>
		<td class="back_3_1">&nbsp;</td>
		<td class="back_3_2" colspan="5">

			<table cellpadding="0" cellspacing="0" width="100%">
				<tr>
					<td class="tab_space_1"></td>
					<td class="active_button"><a href="index.php" style="color: #f3a625;" class="tab"><?php print $language['home']; ?></a></td>
					<td class="active_button"><a href="phpBB2/memberlist.php" class="tab"><?php print $language['memberslist']; ?></a></td>
					<td class="active_button"><a href="phpBB2/groupcp.php" class="tab"><?php print $language['usergroups']; ?></a></td>
					<td class="active_button"><a href="phpBB2/profile.php?mode=editprofile" class="tab"><?php print $language['profile']; ?></a></td>
					<td class="active_button"><a href="phpBB2/index.php" class="tab"><?php print $language['Forum']; ?></a></td>
					<td class="tab_space_2">&nbsp;</td>
				</tr>
			</table>
			<table cellpadding="0" cellspacing="0" width="100%">
				<tr>
					<td class="link_back_1">&nbsp;</td>
					<td class="link_back_2"></td>
					<td class="link_back_2" align="left">
						<?php print $language['language']; ?> : 
	<a href='size.php?lang_act=irish&pageview=<?php print $wkdisgood; ?>' class="tab">Gaeilge </a> <img alt='clickhere' src="images/flags/ireland.gif">
	<a href='size.php?lang_act=english&pageview=<?php print $wkdisgood; ?>' class="tab">English</a> <img alt='clickhere' src="images/flags/england.gif"> 
	<a href='size.php?lang_act=french&pageview=<?php print $wkdisgood; ?>' class="tab">Français</a> <img alt='clickhere' src="images/flags/french.gif">
	<a href='size.php?lang_act=polish&pageview=<?php print $wkdisgood; ?>' class="tab">Polski</a> <img alt='clickhere' src="images/flags/polish.gif"> 
	<a href='size.php?lang_act=portuguese&pageview=<?php print $wkdisgood; ?>' class="tab">Português</a> <img alt='clickhere' src="images/flags/portuguese.gif"> 
	<a href='size.php?lang_act=lithuanian&pageview=<?php print $wkdisgood; ?>' class="tab">Lietuviskai</a> <img alt='clickhere' src="images/flags/lithuania.gif"> 
	</a>
					</td>
					<td class="link_back_3">&nbsp;</td>
				</tr>
			</table>
			<table cellpadding="0" cellspacing="0" width="100%">
				<tr>
					<td><span style="font-size: 4px;">&nbsp;</span></td>
					<td class="link_back_5"><span style="font-size: 4px;">&nbsp;</span></td>
				</tr>
			</table>

		</td>
		<td class="back_3_7">&nbsp;</td>
	</tr>
</table>
<table class="bodyline" cellspacing="0" cellpadding="0" border="0" align="center">
	<tr>
		<td class="back_4_1"></td>
		<td class="back_4_2" colspan="5">
		<br />

<table width="100%" cellpadding="0" cellspacing="0">
	<tr>
		<th class="thLeft"><img alt='clickhere' src="http://www.clickherecork.com/phpBB2/templates/Avalanche/images/thLeft.gif" width="30"/></th>
		<th width="100%"><a href='http://www.clickherecork.com/phpBB2/login.php' class="tab"><?php print $language['login']; ?></a> | <a href='http://www.clickherecork.com/phpBB2/profile.php?mode=register' class="tab"><?php print $language['register']; ?></a> | <a href='http://www.clickherecork.com' class="tab"><?php print $language['home']; ?></a> </th>
		<th class="thRight"><img alt='clickhere' src="http://www.clickherecork.com/phpBB2/templates/Avalanche/images/thRight.gif" width="30"/></th>
	</tr>
</table>
<table width="100%" cellspacing="0" cellpadding="5" border="0" align="center">
	<tr>
		<td width="100%" class="cat" align="left">
			

<table width="680" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="680" align="left" valign="top"><table border="0" cellpadding="10" cellspacing="1">
        <tr>