<?php
/***************************************************************************
 *                         lang_bbcode.php [Bulgarian]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_bbcode.php,v 1.3 2001/12/18 01:53:26 psotfx Exp $
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
 
/*************************************************************************** 
*                     Bulgarian translation (��������� ������)
*                              ------------------- 
*     begin                : Thu Dec 06 2001
*     last update          : Fri Jan 11 2001  
*     by                   : Boby Dimitrov (���� ��������) 
*     email                : boby@azholding.com 
****************************************************************************/ 

  
$faq[] = array("--","���������");
$faq[] = array("����� � BBCode?", "BBCode � ��������� ������������� �� HTML. ���� ������ �� �������� BBCode ��� ������ ��������� ��� �� �� �������� �� ����������������. ����� ����, ������ �� ��������� BBCode �� ������ ��������� �� ������� �� ������ �� ���������. BBCode ������� ����� �� HTML, ��������� �� ������, ����� �� ��������� � ��������� ����� (��� ����: [���]), � �� � &lt; � &gt;. ����� ���� BBCode �������� ��-����� ������� ��� ����� �� ���� ����� � ��� � � �������. � ���������� �� ������ �� ������, � �������� �� ��� ����� ��������� �� �������� �� BBCode � ������ ��������� (���� �������� � subSilver). ������� ����, ��� �� ����� ������� � BBCode, ���� �������� �� �� ���� �������.");

$faq[] = array("--","����������� �� �����");
$faq[] = array("��� �� ������� ���, ������ � ��������� �����?", "BBCode ������� ������, ����� ���������� ����� � ����� �� ��������� ����� �� ������. ���� ����� �� �������� ������: <ul><li>�� �� ��������� ����� ���, ��������� <b>[b][/b]</b>, �������� <br /><br /><b>[b]</b>�������!<b>[/b]</b><br /><br />�� �� ������� ���� <b>�������!</b></li><li>�� ��������� �����, ��������� <b>[u][/u]</b>, ��������: <br /><br /><b>[u]</b>����� ����!<b>[/u]</b><br /><br />�� �� ������� ���� <u>����� ����!</u></li><li>�� �� ��������� ����� ������, ���������  <b>[i][/i]</b>, ��������: <br /><br />���� � <b>[i]</b>���������!<b>[/i]</b><br /><br />�� �� ������� ���� ���� � <i>���������!</i></li></ul>");
$faq[] = array("��� �� ������� ����� ��� ������� �� ������?", "�� �� ��������� ����� ��� ������� �� ������, ��������� ���� �� ��������� ��-���� ������. ������ �������, �� ����� � ������� �� ������ ������� �� �������� � ��������� �� �����������.<ul><li>�� �� ������� ����� �� �����, ��������� <b>[color=][/color]</b>. ������ �� ��� �� �������� ����� �� ����� (�����. �������, �����, �����, �.�.), ��� �� �������� ����� ���� ���������������� �������� (����. #FFFFFF, #000000). ������: �� �� ��������� ������ �����, ������ �� ��������:<br /><br /><b>[color=red]</b>�������!<b>[/color]</b><br /><br />���<br /><br /><b>[color=#FF0000]</b>�������!<b>[/color]</b><br /><br />� ����� �� ������� <span style=\"color:red\">Hello!</span></li><li>��������� �� ������� �� ������ ����� �� ������� �����, � ������� �� <b>[size=][/size]</b>. ���� ��� ������ �� ������, ����� ������ ������, �� � �������������� �� ���������� �����, ����������� ������� �� ������ � �������, ��������� �� 1 (������� ����� �����, �� ���� �� �� �����) �� 29 (������� �����). ������: <br /><br /><b>[size=9]</b>�����<b>[/size]</b><br /><br /> �� �� ������� ���� <span style=\"font-size:9px\">�����</span><br /><br />������ <br /><br /><b>[size=24]</b>�������!<b>[/size]</b><br /><br />�� � <span style=\"font-size:24px\">�������!</span></li></ul>");
$faq[] = array("���� �� �� ���������� ����������� ������?", "��, ������� ��, �� ������. ��������, �� �� ���������� ���������� �� �����, ������ �� ��������:<br /><br /><b>[size=18][color=red][b]</b>�������� ��!<b>[/b][/color][/size]</b><br /><br />����� �� �� �������� ���� <span style=\"color:red;font-size:18px\"><b>�������� ��!</b></span><br /><br />������� ����, �� ������������ ������������ �������� �� ������������� ������. ���������, ��� ������ �� �� ������� ���� �������� �� ��������� ��������, �� ������. ��������, ������� ��� � ����������:<br /><br /><b>[b][u]</b>���� � ������!<b>[/b][/u]</b>");

$faq[] = array("--","������ � ���");
$faq[] = array("��� �� ������� � ������� �� ���������", "��� ��� ������ �� ��������� �� ������ - ��� � ��� �����.<ul><li>������ ���������� ������� � ����� �� ������, �� ����������, �� ������ �� �����������, �� ����� ���������� �� ������ ��� ������ ��������� � � �������� � �������� <b>[quote=\"\"][/quote]</b>. ���� ����� ��������� �� ��������, ���� ��������� ������ �� ������. ��������, ��� ������ �� �������� ����, �� �������� �� ��������:<br /><br /><b>[quote=\"����\"]</b>��� ��������� ������, ����� ���� � �������<b>[/quote]</b><br /><br />� �������� ��� ��������� ���� �� �� ������� <b>���� ������:</b>. �� ���������� �� ��������� ����� �� ������ � ������� (��� ����: \"����\")!</li><li>������ ����� ��������� �� ������� ������ ��� �� ��������� ������. �� �� �������� �� ���� �����, ������ ��������� ������ � �������� <b>[quote][/quote]</b>. � �������� ��� ��������� ���� �� �� ������� ���� <b>�����:</b>.</li></ul>");
$faq[] = array("��� �� ������� ��� ��� ���� ����� � ��������� ������ � ����������� ��?", "��� ������ �� ��������� ��������� ��� ��� ���� �����, �������� ��������� ������ � ����������� ��, ������ �� ��������� ������ � �������� <b>[code][/code]</b>, �������� <br /><br /><b>[code]</b>echo \"���� � ���\";<b>[/code]</b><br /><br />�������������, ���������� � �������� <b>[code][/code]</b> �� �������.");

$faq[] = array("--","�������");
$faq[] = array("��� �� ������� ���������� ������?", "BBCode �������� ��� ���� �������: ���������� � ��������. �� ��������, �� �� ������ ���� � HTML. ������������� ������ ������� ���� ��� ���� �������� �� �������, ���������� � �������� �� ������ �����. �� �� ��������� ���������� ������, ��������� <b>[list][/list]</b> � ����������� ����� ��� �� ������� � <b>[*]</b>. ��������, �� �� ��������� ������ � �������� �� �������, ������ �� �������� ������� ���������:<br /><br /><b>[list]</b><br /><b>[*]</b>�������<br /><b>[*]</b>�����<br /><b>[*]</b>�����<br /><b>[/list]</b><br /><br />���� �� �������� ������� ������:<ul><li>�������</li><li>�����</li><li>�����</li></ul>");
$faq[] = array("��� �� ������� �������� ������?", "������ ��� ������, ����������, �� ���� ����� ����� �� ���� ��������� � �������� �� ����� ���. ��������� <b>[list=1][/list]</b>, �� �� ��������� ��������� ������, ��� <b>[list=a][/list]</b> �� ������� ������. ���� ���� � ������������� �������, �������� �� ��������� � <b>[*]</b>. ������:<br /><br /><b>[list=1]</b><br /><b>[*]</b>��� �� ����������<br /><b>[*]</b>���� ��� ��������<br /><b>[*]</b>������ ���������, ������ �����<br /><b>[/list]</b><br /><br />�� �������� ��������:<ol type=\"1\"><li>��� �� ����������</li><li>���� ��� ��������</li><li>������ ���������, ������ �����</li></ol>��� ������ ������� ������, ��������� ���� ���������:<br /><br /><b>[list=a]</b><br /><b>[*]</b>����� �������<br /><b>[*]</b>����� �������<br /><b>[*]</b>����� �������<br /><b>[/list]</b><br /><br />� �� ��������:<ol type=\"a\"><li>����� �������</li><li>����� �������</li><li>����� �������</li></ol>");

$faq[] = array("--", "������");
$faq[] = array("Linking to another site", "BBCode �������� ������� �������� ������ �� ��������� �� ������ (URL) ��� �����������.<ul><li>������� �� ��� �������� �������� <b>[url=]�����[/url]</b>, ���� ���������� ������ ���� ����� = �� �������� ������, �������� � �������� ��� ������. ��������, �� �� ��������� ������ ��� phpBB.com, ������ �� ��������: <br /><br /><b>[url=http://www.phpbb.com/]</b>�������� phpBB!<b>[/url]</b><br /><br />���� �� �������� �������� ������: <a href=\"http://www.phpbb.com/\" target=\"_blank\">Visit phpBB!</a>. ����������, �� �������� �� ������ � ��� ��������, ���� �� ����������� �� ���� ��������������� �� �������� �� ��������� ��������.</li><li>��� ������ �� �������� ������ ������, ���� ����� ������ ����:<br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br /><br />���� �� �������� �������� ������: <a href=\"http://www.phpbb.com/\" target=\"_blank\">http://www.phpbb.com/</a></li><li>����� ����, phpBB ������� �������, �������� <i>��������� ������</i>, ����� ����������� ������ �������� ���������� URL-�� � ����������� �� � �� ������ ��� ��������� ������. ���� ����� �� ��������� ������ ��� ���� http://. ��������, ��� �������� www.phpbb.com ��� ������ ���������, ����������� �� �� �������� �������� <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a></li><li>������ ���� � �� ���� ��������. ������ �� �������� ������:<br /><br /><b>[email]</b>no.one@domain.adr<b>[/email]</b><br /><br />����� �� ��������� � <a href=\"emailto:no.one@domain.adr\">no.one@domain.adr</a> ��� ������ ������ �� �������� no.one@domain.adr � ����������� �� � ������ ����������� �� ���� ����������� � ����-������.</li></ul>����� ��� ������ BBCode ������, ������ �� ���������� �� ������� �����������, �������� <b>[url][img][/img][/url]</b> (��� ��-����), <b>[url][b][/b][/url]</b>, � �.�.. ���������, ��� ������ �� �� ������� ���� �������� �� ��������� ��������, �� ������. ��������:<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/url][/img]</b><br /><br />� <u>����������</u> ���������, ����� ���� �� ������ �� ����������� �� ����������� �� �� ������������, ���� �� ������ ����������!");

$faq[] = array("--", "��������� �� ����������� � �����������");
$faq[] = array("��� �� ������ �������� ��� ����������� ��?", "BBCode ������� ��� �� ��������� �� ����������� ��� ��������� ��. ������� ��� ����� ����� ����, �������� � ���� ���: ����� ����������� �� ��������� ����� ��� ������ �������� � �����������, � �����, ����������, ����� ������ �� ��������, ������ �� �� ������ � �������� (�� ���� ������ �� � ����� �� ��������� ��, ������ �� � ������ �� ����� ��� ������). � �������� ������ ���� ����� �� ��������� ���������� �� ������� �� ������ (�������� ���� ������� �� ������ ����� � ���������� ������ ������ �� phpBB). �� �� �������� ����������� � ����������� ��, ������ �� ��������� URL-�� ��� ���������� � ���� <b>[img][/img]</b>. ������: <br /><br /><b>[img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br />����� ������� � �������� ������, ������ �� ��������� ���� �� �������� � ��� �� ������: <b>[url][/url]</b> ��� �������. ���� ���������<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br /><br />�� ������:<br /><br /><a href=\"http://www.phpbb.com/\" target=\"_blank\"><img src=\"templates/subSilver/images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /></a><br />");

$faq[] = array("--", "����� �������");
$faq[] = array("���� �� �� ������� ��� ������?", "��. �� ��������� ���� ������� �� � �������� � phpBB 2.0. ���-�������� �� ������ ����� � ���������� ������ ������ �� phpBB");

//
// This ends the BBCode guide entries
//

?>