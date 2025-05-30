<?php
/***************************************************************************
 *                         lang_bbcode.php [english]
 *                            -------------------
 *   begin                : Monday Apr 22, 2002
 *   copyright            : (C) 2002 Gil Osher and the Chaotic Goat
 *   email                : dolfin@rpg.org.il
 *
 *   $Id: lang_bbcode.php,v 1.1.2.2 2002/11/14 14:00:11 psotfx Exp $
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/
 
// 
// To add an entry to your BBCode guide simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your BBCode guide entries, if you absolutely must then escape them ie. \"something\"
//
// The BBCode guide items will appear on the BBCode guide page in the same order they are listed in this file
//
// If just translating this file please do not alter the actual HTML unless absolutely necessary, thanks :)
//
// In addition please do not translate the colours referenced in relation to BBCode any section, if you do
// users browsing in your language may be confused to find they're BBCode doesn't work :D You can change
// references which are 'in-line' within the text though.
//
  
$faq[] = array("--","������");
$faq[] = array("�� �� BBCode?", "BBCode ���� ���� ������ �� ��� HTML. �� ��� ���� ������ � BBCode ������� ������ ����� ��-��� �����. ����� ���� ����� �� � BBCode ������ ������� ���� ����� ������. BBCode ������� ���� ������ �� HTML, ����� ������ ���� ������� ������� [ � ] ������ � &lt; � &gt; ��� ���� ����� ����� ���� �� ��� ���� ����. ��� ������ �� ��� ����� ���� ������ BBCode ��������� ����� ��� ���� ��-��� ���� ���� ��� ������ ����� ������. ����� �� �� ���� ����� �� ������ ��� ����.");

$faq[] = array("--","����� ����");
$faq[] = array("��� ����� ������ �������, ������ �� �� �� ����", "BBCode ���� ���� �������� ����� �� ����� ����� ��� �����. �� ����� ������ �����: <ul><li>��� ������ ��� ���� ��� ���� ���� <b>[b][/b]</b>, ������ <br /><br /><b>[b]</b>����<b>[/b]</b><br /><br />���� � <b>����</b></li><li>��� ���� �� ���� <b>[u][/u]</b>, ������:<br /><br /><b>[u]</b>���� ���<b>[/u]</b><br /><br />���� � <u>���� ���</u></li><li>��� ����� ���� ����� � <b>[i][/i]</b>, ������<br /><br />�� <b>[i]</b>����!<b>[/i]</b><br /><br />���� ��� �� <i>����!</i></li></ul>");
$faq[] = array("��� ����� �� ��� ����� �� �� �����", "��� ����� �� ��� �� ���� ����� ��� ���� ������ ����� �����. ��� �� ������ �� ���� ����� ���� ������ ������� �� ������: <ul><li>����� ��� ����� ���� ��-��� ������ ���� <b>[color=][/color]</b>. ���� ����� �� �� ��� ����� (�������) (������: red, blue, yellow, ���') �� �������� ������ ���������, ������: #FFFFFF, #000000. ������, ��� ����� ���� ���� ���� ������ � <br /><br /><b>[color=red]</b>����!<b>[/color]</b><br /><br />�� �<br /><br /><b>[color=#FF0000]</b>����!<b>[/color]</b><br /><br />����� ����� <span style=\"color:red\">����!</span></li><li>����� ���� ����� ���� ���� ���� ��-��� ����� � <b>[size=][/size]</b>. �� �� ���� ������ �� ��� ����� �� ������ ������ ���� ���� ������ �� ���� ����� ��������, ������ � 1 (��-�� ���� ��� ���� �� ��) �� 29 (���� ����). ������:<br /><br /><b>[size=9]</b>���<b>[/size]</b><br /><br />���� � <span style=\"font-size:9px\">���</span><br /><br />������ �:<br /><br /><b>[size=24]</b>���!<b>[/size]</b><br /><br />����� <span style=\"font-size:24px\">���!</span></li></ul>");
$faq[] = array("��� ��� ���� ���� ��� �����?", "��, ����� ���� ����, ������, ��� ���� �� ����� ��� �� ����� ����:<br /><br /><b>[size=18][color=red][b]</b>����� ���!<b>[/b][/color][/size]</b><br /><br />�� ����� <span style=\"color:red;font-size:18px\"><b>����� ���!</b></span><br /><br />����� ������ �� ������� �� ����� ���� ���� ����� ��! ���� �� �� ���� ��, ������ ����� ��� ����� ������ ����� �����. ������ ���� ���� �����:<br /><br /><b>[b][u]</b>�� �� ����<b>[/b][/u]</b>");

$faq[] = array("--","����� ����� ���� �����");
$faq[] = array("����� ���� �������", "���� ��� ����� ��� ���� ���� ����, �� ����� �� ������.<ul><li>����� ����� ��������� ������ ��� ����� ������ ���� ��� ���� �� ����� ������ ������ ����� ������ ���� ���� <b>[quote=\"\"][/quote]</b>. ���� �� ������ �� ���� �� ����� ��� �� �� ��� ��� ������� ������! ������, ��� ���� ���� ���� ��� ���� ����� ���, �����:<br /><br /><b>[quote=\"���� �����\"]</b>����� ����� ����� ��� ���� ���<b>[/quote]</b><br /><br />����� ���� ����� ��������, ���� ����� ���: ���� ����� �����. ���� �� ���� <b>����</b> ����� ������ \"\" ���� ��� �� �� ���� ����, �� �� ������.</li><li>����� ����� ��� ����� ����� �� ����. ��� ������ ��� ���� �� ����� ���� <b>[quote][/quote]</b>. ������ ������ �� ���� ����, �����: ���� ����� ����.</li></ul>");
$faq[] = array("���� ��� �� ���� �����", "�� ������ ����� ���� ��� �� ����� �� ��� ������ ���� �����, ������ ���� ���� Courier �� ����� �� ����� ����� <b>[code][/code]</b> ������<br /><br /><b>[code]</b>echo \"This is some code\";<b>[/code]</b><br /><br />�� �������� ���� ����� <b>[code][/code]</b> ����� ������ ��� ���-��.");

$faq[] = array("--","����� ������");
$faq[] = array("����� ����� �� ������", "BBCode ���� ���� ���� ������, �� ������ �������. �� ���� ������� � HTML ����. ����� �� ������ ����� �� ���� ������ ��� ���� ��� ���� ���� ������ �� ��� ��� �����. ��� ����� ����� �� ������ ����� � <b>[list][/list]</b> ����� �� ���� ��-��� ����� � <b>[*]</b>. ������ ��� ���� �� ������ ������� ���� ���� ������ �:<br /><br /><b>[list]</b><br /><b>[*]</b>����<br /><b>[*]</b>����<br /><b>[*]</b>����<br /><b>[/list]</b><br /><br />�� ���� �� ������ ����:<ul><li>����</li><li>����</li><li>����</li></ul>");
$faq[] = array("����� ����� ������", "���� ���� �� �����, ����� ������ ���� �� ����� �� �� ����� ���� �� ����. ��� ����� ����� ������ ������� � <b>[list=1][/list]</b> ��� ����� ����� ������ ��� ������ �� �������� <b>[list=a][/list]</b> ������ ������� (�������). ��� ������ ��� ������ ������ �������� ��-��� ����� � <b>[*]</b>. ������:<br /><br /><b>[list=1]</b><br /><b>[*]</b>���� �����<br /><b>[*]</b>����� ��� ���<br /><b>[*]</b>���� �� ���� ����� ����<br /><b>[/list]</b><br /><br />���� �� ������ ����:<ol type=\"1\"><li>���� �����</li><li>����� ��� ���</li><li>���� �� ���� ����� ����</li></ol>���� ������ ������� ����� �:<br /><br /><b>[list=a]</b><br /><b>[*]</b>������ ������� �������<br /><b>[*]</b>������ ������� �����<br /><b>[*]</b>������ ������� �������<br /><b>[/list]</b><br /><br />����<ol type=\"a\"><li>������ ������� �������</li><li>������ ������� �����</li><li>������ ������� �������</li></ol>");

$faq[] = array("--", "������ �������");
$faq[] = array("����� ���� ���", "� BBCode �� phpBB ���� ����� �� �� ����� ����� �������.<ul><li>���� ������� ��� ������ ����� <b>[url=][/url]</b>, �� ����� ���� ���� �r the = ����� ����� �� ��� ������ ������. ������, ����� � phpBB.com ����� ��:<br /><br /><b>[url=http://www.phpbb.com/]</b>���� �� phpBB!<b>[/url]</b><br /><br />�� ���� �� ������ ���, <a href=\"http://www.phpbb.com/\" target=\"_blank\">���� �� phpBB!</a> ��� ���� �� ������� ���� ����� ��� ��� ������� ���� ������ ����� �������� ������.</li><li>�� ������ ������� ���� ���� ������, ���� ����� ��� ����� ��:<br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br /><br />�� ���� �� ������ ���, <a href=\"http://www.phpbb.com/\" target=\"_blank\">http://www.phpbb.com/</a></li><li>����� phpBB ��� ����� <i>������� ������</i>, �� ����� �� ����� ������ ��� ���� ����� ���� ����� �� ����� http://. ������, ����� www.phpbb.com ���� ������ ���, ���� �������� � <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a> ���� ������ ������.</li><li>���� ���� ����� ���� ������ ���\"�, ���� ����� ����� ����� �����, ������:<br /><br /><b>[email]</b>no.one@domain.adr<b>[/email]</b><br /><br />��� ���� <a href=\"emailto:no.one@domain.adr\">no.one@domain.adr</a> �� ����� ����� �� no.one@domain.adr ������ ��� ��� �������� ���� ������.</li></ul>��� �� ��� � BBCode ���� ����� ������� ����� ��� �� ���, ������ <b>[img][/img]</b> (���� ���� ���), <b>[b][/b]</b>, ���'. ����� ������ ����� �� ���� �� ����� ���� ������ ������� ����, ������:<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/url][/img]</b><br /><br />�� <u>��</u> ���� ����� ������ ������ ������, �� ��� ��.");

$faq[] = array("--", "���� ������ �������");
$faq[] = array("����� ����� ������", "� BBCode �� phpBB ���� �� ��� ������ ������ ������� ���. ��� ����� ������ ���� ����� ���� ������� ��� ���; ���� ������� �� ������ ���� ������ �������� ������� ����� ������ ������� ����� ����� ����� ����� �� �������� (��� ����� ����� ����� ����� �� �� ����� ��� ������, ��� �� ��� ���� ��� �������!). ��� ���� ��� ��� ����� ������ ������� � phpBB (�� ������� ���� ������ ������ ������ ���� �� phpBB). ��� ����� ����� �� ����� �� ������ ������ �� ������ ���� <b>[img][/img]</b>. ������:<br /><br /><b>[img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br />��� ������ ���� �� ����� ���� ���� ����� �� ������ ����� <b>[url][/url]</b>, ������: <br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br /><br />����:<br /><br /><a href=\"http://www.phpbb.com/\" target=\"_blank\"><img src=\"templates/subSilver/images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /></a><br />");

$faq[] = array("--", "�������� �����");
$faq[] = array("��� ���� ������ ���� ����?", "��, ������ ��� ������ � phpBB 2.0. ��� ����� ����� ��� BBCode ������� ����� ������ ����.");

//
// This ends the BBCode guide entries
//

?>