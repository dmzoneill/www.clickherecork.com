<!-- RECENT -->
<?php if (isset($recent)) { ?>
<table width="100%" cellpadding="3" cellspacing="1" border="0">
  <tr>
    <td align="left" width="100%">
      <span class="gensmall">
<?php for ($i = 0; $i < count($recent); $i++) { ?>
<?php echo create_date($board_config['default_dateformat'], $recent[$i]['post_time'], $board_config['board_timezone']); ?> <a href="<?php echo append_sid($phpbb_root_path . 'profile.php?mode=viewprofile&amp;u=' . $recent[$i]['user_id']); ?>"  class="tab"><?php echo $recent[$i]['username']; ?></a><br /><img src="<?php echo $phpbb_root_path; ?>templates/subSilver/images/icon_latest_reply.gif" border="0" align="absmiddle" /> <a href="<?php echo append_sid($phpbb_root_path . 'viewtopic.php?p=' . $recent[$i]['post_id'] . '#' . $recent[$i]['post_id']); ?>"  class="tab"><b><?php echo $recent[$i]['topic_title']; ?><?php if ($recent[$i]['topic_trimmed']) { echo '...'; } ?></b></a><br />
<?php } ?>
      </span>
    </td>
  </tr>
</table>
<br>
<?php } ?>
<!-- RECENT -->
