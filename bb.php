<?php
###############################################################################
##                                                                           ##
## phpBB Fetch All - A modification to phpBB that displays data from the     ##
##                   forum on any page of a website.                         ##
## ------------------------------------------------------------------------- ##
## A portal example file.                                                    ##
##                                                                           ##
###############################################################################
##                                                                           ##
## Authors: Volker 'Ca5ey' Rattel <webmaster@phpbbfetchall.com>              ##
##          http://www.phpbbfetchall.com/                                    ##
##                                                                           ##
## This file is free software; you can redistribute it and/or modify it      ##
## under the terms of the GNU General Public License as published  by the    ##
## Free Software Foundation; either version 2, or (at your option) any later ##
## version.                                                                  ##
##                                                                           ##
## This file is distributed in the hope that it will be useful, but WITHOUT  ##
## ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or     ##
## FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for  ##
## more details.                                                             ##
##                                                                           ##
###############################################################################

//
// This path points to the directory where phpBB is installed. Do
// not enter an URL here. The path must end with a trailing
// slash.
//
// Examples:
// forum in /aaa/bbb/ccc/ and script in /aaa/bbb/ccc/
// --> $phpbb_root_path = './';
// forum in /aaa/bbb/ccc/ and script in /aaa/bbb/
// --> $phpbb_root_path = './ccc/';
// forum in /aaa/bbb/ccc/ and script in /aaa/bbb/ddd/
// --> $phpbb_root_path = '../ccc/';
//

$phpbb_root_path = './phpBB2/';

define ('IN_PHPBB', true);

if (!file_exists($phpbb_root_path . 'extension.inc'))
{
	die ('<tt><b>phpBB Fetch All:</b>
		$phpbb_root_path is wrong and does not point to your forum.</tt>');
}

//
// phpBB related files
//

include_once ($phpbb_root_path . 'extension.inc');
include_once ($phpbb_root_path . 'common.' . $phpEx);
include_once ($phpbb_root_path . 'includes/bbcode.' . $phpEx);

//
// Fetch All related files - we do need all these because the portal is a
// huge example
//

include_once ($phpbb_root_path . 'mods/phpbb_fetch_all/common.' . $phpEx);
include_once ($phpbb_root_path . 'mods/phpbb_fetch_all/stats.' . $phpEx);
include_once ($phpbb_root_path . 'mods/phpbb_fetch_all/users.' . $phpEx);
include_once ($phpbb_root_path . 'mods/phpbb_fetch_all/polls.' . $phpEx);
include_once ($phpbb_root_path . 'mods/phpbb_fetch_all/posts.' . $phpEx);
include_once ($phpbb_root_path . 'mods/phpbb_fetch_all/forums.' . $phpEx);

//
// start session management
//

$userdata = session_pagestart($user_ip, PAGE_INDEX);
init_userprefs($userdata);

//
// since we are demonstrating span pages we need to set the page offset
//

if (isset($HTTP_GET_VARS['start']) or isset($HTTP_POST_VARS['start']))
{
	$CFG['posts_span_pages_offset'] = isset($HTTP_GET_VARS['start'])
	? $HTTP_GET_VARS['start'] : $HTTP_POST_VARS['start'];
	if (!intval($CFG['posts_span_pages_offset']))
	{
		$CFG['posts_span_pages_offset'] = 0;
	}
}

// fetch new posts since last visit
$new_posts = phpbb_fetch_new_posts();

// fetch user online, total posts, etc
$stats = phpbb_fetch_stats();

// fetch online users
$online = phpbb_fetch_online_users();

// fetch five users by total posts
$top_poster = phpbb_fetch_top_poster();

// fetch a random user
$random_user = phpbb_fetch_random_user();

// fetch forum structure
$forums = phpbb_fetch_forums();

// fetch user of a specific group
// This function is disabled because fetching without a specific
// user group can produces a lot of results (all registered users)
// and this may result in an internal server error. If you want to
// use this feature please specify the group id.
#$member = phpbb_fetch_users();

// fetch a poll
$poll = phpbb_fetch_poll();

// fetch a single topic by topic id
// You will need to specify a certain topic id to use this function.
// The first post of that topic will be displayed in a box to the upper right.
#$topic = phpbb_fetch_topics();

// fetch latest postings
$CFG['posts_trim_topic_number'] = 25;
$recent = phpbb_fetch_posts(null, POSTS_FETCH_LAST);

// fetch postings
$CFG['posts_trim_topic_number'] = 0;
$CFG['posts_span_pages']        = true;
$news = phpbb_fetch_posts();

//
// disconnect from the database
//

phpbb_disconnect();

@reset($HTTP_POST_VARS);

?>