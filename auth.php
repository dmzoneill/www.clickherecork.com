<?php 
define('IN_PHPBB',true); 

$phpbb_root_path = "/home/sites/www.clickherecork.com/web/phpBB2/"; // set path to phpBB files 
include($phpbb_root_path . 'extension.inc'); 
include($phpbb_root_path . 'common.'.$phpEx); 

// 
// Start session management 
// 
$userdata = session_pagestart($user_ip, PAGE_LOGIN); // initiate session 
init_userprefs($userdata); // load user prefs 
// 
// End session management 
// 
$page_title = "Title of Page Goes Here"; 


$userid = $userdata['user_id']; 
$sql = "SELECT * FROM " . USER_GROUP_TABLE . " WHERE user_id = '$userid'"; 
$result = $db->sql_query($sql); 
$isauth = 0; 
while ($row = $db->sql_fetchrow($result)) 
{ 
if ($row['group_id'] == 'insert_group_id_here' || $row['group_id'] == 'insert_group_id_here') 
{ 
$isauth = 1; 
} 
} 




if($userdata['session_logged_in']) 
{ // user is logged in 

include($phpbb_root_path . 'includes/page_header.'.$phpEx); 
if ($isauth == '1') 
{ 
print "fed";
} 
else 
{ 
message_die(GENERAL_ERROR, "You do not have permission to access this page"); 
} 
} 
else 
{ 
print "login";
} 

include($phpbb_root_path . 'includes/page_tail.'.$phpEx); 

?> 
