<!-- ONLINE USERS -->
<?php if (isset($online)) { ?>
<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
  <tr>
    <td class="catHead" height="28"><span class="cattitle"><?php echo $lang['Who_is_Online']; ?></span></td>
  </tr>
  <tr>
    <td class="row1" align="left" width="100%">
      <span class="gensmall">
<?php for ($i = 0; $i < count($online); $i++) { ?>
<a href="<?php echo append_sid($phpbb_root_path . 'profile.php?mode=viewprofile&amp;u=' . $online[$i]['user_id']); ?>"><?php echo $online[$i]['username']; ?></a><?php if ($i < count($online) - 1) { ?>, <?php } ?>
<?php } ?>
<?php if ($i) { ?>, <?php } ?>
<?php if ($stats['user_online'] - $i == 1) { printf($lang['Guest_user_total'], $stats['user_online'] - $i); }
 else { printf($lang['Guest_users_total'], $stats['user_online'] - $i); } ?>
      </span>
    </td>
  </tr>
</table>
<br />
<?php } ?>
<!-- ONLINE USERS -->