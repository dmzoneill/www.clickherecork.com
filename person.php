
<!-- RANDOM USER -->
<?php if (isset($random_user)) { ?>
<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
  <tr>
    <td class="catHead" height="28"><span class="cattitle"><?php printf($lang['About_user'], $random_user['username']); ?></span></td>
  </tr>
  <tr>
    <td class="row1" align="left" width="100%">
      <span class="gensmall">
<?php printf($lang['Viewing_user_profile'], '<a href="' . append_sid($phpbb_root_path . 'profile.php?mode=viewprofile&amp;u=' . $random_user['user_id']). '"><b>' . $random_user['username'] . '</b></a>'); ?><br />
      </span>
<?php if ($random_user['user_avatar_type'] > 0) { ?>
<table>
<tr>
<td valign="top"><?php echo phpbb_avatar_image($random_user['user_avatar_type'], $random_user['user_avatar']); ?></td>
<td valign="top">
<?php } ?>
<span class="gensmall">
<?php echo $lang['Joined']; ?>: <?php
$since = intval((time() - $random_user['user_regdate']) / 86400);
if ($since == 0) {
echo 'today';
} elseif ($since == 1) {
echo '1 day';
} else {
echo $since . ' ' . $lang['Days'];
} ?><br />
<?php echo $lang['Posts']; ?>: <?php echo $random_user['user_posts']; ?><br />
<?php echo $lang['Location']; ?>: <?php echo $random_user['user_from']; ?><br />
</span>
<?php if ($random_user['user_avatar_type'] > 0) { ?>
</td>
</tr>
</table>
<?php } ?>
    </td>
  </tr>
</table>
<br>
<?php } ?>
<!-- RANDOM USER -->