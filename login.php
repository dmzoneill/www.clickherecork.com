
<!-- LOGIN -->

<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
  <tr>
    <td class="catHead" height="28"><span class="cattitle"><?php echo $lang['Login']; ?></span></td>
  </tr>
  <tr>
    <td class="row1" align="center" width="100%">
<table align="center">
<tr>
<td>
<form action="<?php echo $phpbb_root_path; ?>login.php" method="post" target="_top">
<span class="gensmall">
<?php print $language['username']; ?>:<br />
<input type="text" name="username" size="20" maxlength="40" value="" /><br />
 <?php print $language['password']; ?>:<br />
<input type="password" name="password" size="20" maxlength="25" /><br />
<input type="checkbox" name="autologin" /> <?php echo $lang['Log_me_in']; ?>
<br />&nbsp;<br />
<input type="hidden" name="redirect" value="<?php echo $PHP_SELF; ?>" /> 
<input type="hidden" name="sid" value="<?php echo $userdata['session_id']; ?>" />
<input type="hidden" name="outside" value="1" />
<div align="center"><input type="submit" class="mainoption" name="login" value="<?php echo $lang['Login']; ?>" />
<br />&nbsp;<br />
<a href="<?php echo append_sid($phpbb_root_path . 'profile.php?mode=sendpassword'); ?>"><?php echo $lang['Forgotten_password']; ?></a></div>
</span>
</form>
</td>
</tr>
</table>
    </td>
  </tr>
</table>
<br />
<!-- LOGIN -->
