
<!-- POLL -->
<?php if (isset($poll)) { ?>
<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
  <tr>
    <td class="catHead" height="28">
    
<?php if (!$poll) { ?>
<span class="gensmall"><b>No poll at the moment.</b></span>
<?php } else { ?>
<span class="gensmall"><b><?php echo $poll['vote_text']; ?></b></span>
</td>
  </tr>
  <tr>
<td class="row1" align="center" width="100%">
<form method="post" action="<?php echo append_sid($phpbb_root_path . 'posting.php?t=' . $poll['topic_id']); ?>">
<table>
<?php for ($i = 0; $i < count($poll['options']); $i++) { ?>
<tr>
<td>
<input type="radio" name="vote_id" value="<?php echo $poll['options'][$i]['vote_option_id']; ?>">
</td>
<td>
<span class="gensmall"><?php echo $poll['options'][$i]['vote_option_text']; ?></span>
</td>
<td nowrap="nowrap">
<span class="gensmall">[&nbsp;<?php echo $poll['options'][$i]['vote_result']; ?>&nbsp;]</span>
</td>
</tr>
<?php } ?>
</table>
<?php if ($userdata['session_logged_in']) { ?>
<input type="submit" class="mainoption" name="submit" value="<?php echo $lang['Submit_vote']; ?>">
<input type="hidden" name="topic_id" value="<?php echo $poll['topic_id']; ?>">
<input type="hidden" name="mode" value="vote">
<?php } else { ?>
<span class="gensmall"><?php echo $lang['Rules_vote_cannot']; ?></span>
<?php } ?>
<br />
<span class="gensmall"><a href="<?php echo append_sid($phpbb_root_path . 'viewtopic.php?t=' . $poll['topic_id'] . '&amp;vote=viewresult'); ?>" class="tab"><?php echo $lang['View_results']; ?></a></span>
</form>
<?php } ?>
    </td>
  </tr>
</table>
<br />
<?php } ?>
<!-- POLL -->