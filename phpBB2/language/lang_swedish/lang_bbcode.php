<?php
/***************************************************************************
 *                         lang_bbcode.php [Swedish]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_bbcode.php,v 1.1.2.2 2002/11/14 14:00:15 psotfx Exp $
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

//  *************************************
//  First, original Swedish translation by:
//	
//	Marcus Svensson
//      admin@world-of-war.com
//      http://www.world-of-war.com
//	-------------------------------------
// 	Jan�ke R�nnblom
//	jan-ake.ronnblom@skeria.skelleftea.se
//	-------------------------------------
//	Bruce
//	bruce@webway.se
//	-------------------------------------
//      Jakob Persson
//      jakob.persson@iname.com
//      http://www.jakob-persson.com
//
//  *************************************
//  Maintained and kept up-to-date by:
//  
//  Jonathan Gulbrandsen (Virtuality)
//  virtuality@carlssonplanet.com
//  http://www.carlssonplanet.com
//  *************************************
//

// CONTRIBUTORS:
//	 Add your details here if wanted, e.g. Name, username, email address, website
// XXXX-XX-XX  Orginal translation to Swedish by Marcus Svensson, Jan�ke R�nnblom, Bruce and Jakob Persson
// 2003-07-31  Virtuality aka Jonathan Gulbrandsen (virtuality@carlssonplanet.com)        - updated to 2.0.5
// 2003-08-12  Virtuality aka Jonathan Gulbrandsen (virtuality@carlssonplanet.com)        - updated to 2.0.6
// 2005-01-31  Virtuality aka Jonathan Gulbrandsen (virtuality@carlssonplanet.com)        - updated to 2.0.11

// 
// To add an entry to your BBCode guide simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your BBCode guide entries, if you absolutely must then escape them ie. \"something\";
//
// The BBCode guide items will appear on the BBCode guide page in the same order they are listed in this file
//
// If just translating this file please do not alter the actual HTML unless absolutely necessary, thanks :)
//
// In addition please do not translate the colours referenced in relation to BBCode any section, if you do
// users browsing in your language may be confused to find they're BBCode doesn't work :D You can change
// references which are 'in-line' within the text though.
//

$faq[] = array("--","Introduktion");
$faq[] = array("Vad �r BBCode?", "BBCode �r en speciell implementation av HTML. Om du kan anv�nda BBCode best�ms av administrat�ren (du kan ocks� hindra anv�ndningen av BBCode i det aktuella meddelandet n�r du skapar det). BBCode i sig �r snarlikt HTML, taggar �r omg�rdade/inneslutna i hakparanteser [ och ] i st�llet f�r &lt; och &gt; och BBCode ger st�rre kontroll �ver hur vad och hur n�gonting visas. Beroende p� mallen du anv�nder s� kanske du uppt�cker att l�gga till BBCode till dina inl�gg har gjorts mycket enklare genom en klickningsbart gr�nssnitt ovanf�r meddelande delen i inl�ggs formul�ret. �ven om det nya BBcode interfacet �r mycket anv�ndbart kommer du nog att finna f�ljande guide praktisk.");

$faq[] = array("--","Text Formatering");
$faq[] = array("Hur man skapar fetstilad, kursiv och understruken text","BBCode inlkluderar taggar f�r att snabbt l�ta dig �ndra den grundl�ggande stilen p� texten. Det utf�rs p� f�ljande s�tt: <ul><li>F�r att g�ra en bit text fetstilad omg�rda den med <b>[b][/b]</b>, ex. <br /><br /><b>[b]</b>Hej<b>[/b]</b><br /><br />blir <b>Hej</b></li><li>F�r understrykning anv�nd <b>[u][/u]</b>, till exempel:<br /><br /><b>[u]</b>God Morgon<b>[/u]</b><br /><br />blir <u>God Morgon</u></li><li>F�r att kursivera text anv�nd <b>[i][/i]</b>, ex.<br /><br />Det h�r �r <b>[i]</b>Suver�nt!<b>[/i]</b><br /><br />skulle bli Det h�r �r <i>Suver�nt!</i></li></ul>");
$faq[] = array("Hur man �ndrar f�rgen eller storleken p� texten", "F�r att �ndra f�rgen eller storleken p� din text kan du anv�nda f�ljande taggar. Kom ih�g att utskriften beror p� bes�karens browser och system: <ul><li>F�r att �ndra f�rgen p� en text omg�rdar du den med <b>[color=][/color]</b>. Du kan ange antingen ett namn p� en f�rg (ex. red, blue, yellow, etc.) eller alternativt hexadecimal v�rdet f�r en f�rg, ex. #FFFFFF, #000000. T.ex. f�r att skapa r�d text kan du anv�nda:<br /><br /><b>[color=red]</b>Hej!<b>[/color]</b><br /><br />eller<br /><br /><b>[color=#FF0000]</b>Hej!<b>[/color]</b><br /><br />kommer b�da att skriva ut <span style=\"color:red\">Hej!</span></li><li>F�r att �ndra text storleken g�r man p� ett liknande s�tt, <b>[size=][/size]</b>. Den h�r taggen �r beroende p� mallen som du anv�nder men det rekommenderade formatet �r ett numeriskt v�rde som representerar text storleken i pixlar, fr�n 1 (s� liten s� att du knappt ser den) upp till 29 (v�ldigt stor). T.ex:<br /><br /><b>[size=9]</b>LITEN<b>[/size]</b><br /><br />blir vanligtvis <span style=\"font-size:9px\">LITEN</span><br /><br />medan:<br /><br /><b>[size=24]</b>ENORM!<b>[/size]</b><br /><br />blir <span style=\"font-size:24px\">ENORM!</span></li></ul>");
$faq[] = array("Kan jag kombinera formatterings taggar?", "Jovisst kan du det, f�r att t.ex. dra uppm�rksamheten �t dig kan du skriva:<br /><br /><b>[size=18][color=red][b]</b>TITTA P� MIG!<b>[/b][/color][/size]</b><br /><br />det skulle skriva ut <span style=\"color:red;font-size:18px\"><b>TITTA P� MIG!</b></span><br /><br />Vi rekommenderar dock inte att du skriver ut mycket text p� det h�r viset! Kom ih�g att det �r upp till dig, f�rfattaren av ett meddelande att se till att taggarna �r st�ngda p� r�tt vis. T.ex. att g�ra f�ljande �r fel:<br /><br /><b>[b][u]</b>Det h�r �r fel<b>[/b][/u]</b>");

$faq[] = array("--","Citering och utskrift av f�rbest�md formatering");
$faq[] = array("Citering av text i svar", "Det finns tv� s�tt du kan citera text p�, med en referens eller utan en.<ul><li>N�r du anv�nder Citera funktionen f�r att svara p� ett inl�gg p� forumet s� borde du l�gga m�rke till att inl�ggets text har lagts till i meddelande rutan omg�rdat av ett <b>[quote=\"\"][/quote]</b> block. Den h�r metoden ger dig m�jligheten att citera via en referens till en person eller vad du nu v�ljer! F�r att t.ex. citer en bit av vad Mr. Blobby skrev skall du skriva:<br /><br /><b>[quote=\"Mr. Blobby\"]</b>Texten som Mr. Blobby skrev skulle vara h�r<b>[/quote]</b><br /><br />Utskriften skulle automatiskt l�gga till Mr. Blobby skrev: f�re texten. Kom ih�g att du <b>m�ste</b> ha med citationstecken \"\" runt namnet du citerar, det �r inte valbart.</li><li>Den andra metoden till�ter dig att citera i princip vad som helst. F�r att g�ra det h�r omg�rda texten med <b>[quote][/quote]</b> taggar. N�r du visar meddelandet skrivs det helt enkelt ut, Citat: framf�r texten.</li></ul>");
$faq[] = array("Utskrift av f�rbest�md bredd p� text", "Om du vill skriva ut en bit kod eller vad som helst som kr�ver att texten bibeh�ller sitt ursprungliga format, t.ex. Courier text font s� borde du omg�rda texten med <b>[code][/code]</b> taggar, t.ex.<br /><br /><b>[code]</b>echo \"Det h�r �r en bit kod\";<b>[/code]</b><br /><br />All formatering inom <b>[code][/code]</b> taggarna �r bibeh�llen n�r du senare visar det.");

$faq[] = array("--","Skapa listor");
$faq[] = array("Skapa en icke ordnad lista", "BBCode st�djer 2 typer av listor, icke ordnad och ordnand lista. De �r i princip samma som HTML motsvarigheterna. En icke ordnand lista skriver ut varje f�rem�l i listan efter varandra indraget med en kula. F�r att skapa en icke ordnad lista anv�nder du <b>[list][/list]</b> och definerar varje f�rem�l av listan genom att anv�nda <b>[*]</b>. Till expempel f�r att lista dina favorit f�rger kan du skriva:<br /><br /><b>[list]</b><br /><b>[*]</b>R�d<br /><b>[*]</b>Bl�<br /><b>[*]</b>Gul<br /><b>[/list]</b><br /><br />Det skulle skriva ut f�ljande lista:<ul><li>R�d</li><li>Bl�</li><li>Gul</li></ul>");
$faq[] = array("Skapa en ordnand lista", "Den andra typen av lista, en ordnad lista ger dig kontroll �ver vad som skall skrivas ut innan varje f�rem�l. F�r att skapa en ordnad lista kan du skriva <b>[list=1][/list]</b> f�r att skapa en numrerad lista eller alternativt <b>[list=a][/list]</b> f�r att skapa en alfabetisk lista. Precis som med den icke ordnade listan specificerar man f�rem�len i listan med <b>[*]</b>. Till exempel:<br /><br /><b>[list=1]</b><br /><b>[*]</b>G� till butiken<br /><b>[*]</b>K�p en ny dator<br /><b>[*]</b>Sv�r �t datorn n�r den krashar<br /><b>[/list]</b><br /><br />kommer att skriva ut f�ljande:<ol type=\"1\"><li>G� till butiken</li><li>K�p en ny dator</li><li>Sv�r �t datorn n�r den krashar</li></ol>Och f�r en alfabetisk lista skall du anv�nda:<br /><br /><b>[list=a]</b><br /><b>[*]</b>Det f�rsta m�jliga svaret<br /><b>[*]</b>Det andra m�jliga svaret<br /><b>[*]</b>Det tredje m�jliga svaret<br /><b>[/list]</b><br /><br />blir<ol type=\"a\"><li>Det f�rsta m�jliga svaret</li><li>Det andra m�jliga svaret</li><li>Det tredje m�jliga svaret</li></ol>");

$faq[] = array("--", "Skapa L�nkar");
$faq[] = array("L�nka till en annan sida", "phpBB BBCode st�djer ett antal olika s�tt att skapa URIs, Uniform Resource Indicators mer k�nda som URLs.<ul><li>De f�rsta s�ttet anv�nder <b>[url=][/url]</b> taggen, allt du �n skriver in efter = tecknet kommer att tolkas som URL och g�ra s� att du kan skriva in t.ex. en text mellan taggarna. F�r att t.ex. l�nka till phpBB.com kan du anv�nda:<br /><br /><b>[url=http://www.phpbb.com/]</b>Bes�k phpBB!<b>[/url]</b><br /><br />Det h�r skriver ut f�ljande l�nk, <a href=\"http://www.phpbb.com/\" target=\"_blank\">Bes�k phpBB!</a> Du kommer att m�rka att l�nken �ppnas i ett nytt f�nster s� att anv�ndaren kan forts�tta anv�nda forumet om de s� �nskar.</li><li>Om du vill att URLen sj�lv skall visas som l�nk kan du skriva::<br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br /><br />Det skulle skriva ut f�ljnade l�nk, <a href=\"http://www.phpbb.com/\" target=\"_blank\">http://www.phpbb.com/</a></li><li>Det finns �ven en funktion som kallas <i>Magiska L�nkar</i>, det kommer att automatiskt att g�ra om en URL till en l�nk utan att du varken beh�ver specificera n�gra taggar eller http://. Om du till exempel skriver www.phpbb.com i ditt meddelande s� kommer det automatiskt bli <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a> n�r inl�gget visas.</li><li>Samma sak g�ller email adresser, du kan antingen skriva in:<br /><br /><b>[email]</b>no.one@domain.adr<b>[/email]</b><br /><br />vilket skulle skriva ut <a href=\"emailto:no.one@domain.adr\">no.one@domain.adr</a> eller s� kan du bara skriva no.one@domain.adr i ditt meddelande och s� kommer det att automatiskt bli konverterat n�r inl�gget visas.</li></ul>Precis som med alla andra BBCode taggar kan du omg�rda URLs runt andra taggar t.ex. <b>[img][/img]</b> (se n�sta del), <b>[b][/b]</b>, etc. Precis som med formaterings taggarna s� �r det upp till dig att se till att taggarna �ppnas och st�ngs i r�tt ordning, till exempel:<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/url][/img]</b><br /><br />�r <u>inte</u> korrekt och kan leda till att ditt inl�gg blir borttaget s� var f�rsiktig.");

$faq[] = array("--", "Visa bilder i inl�gg");
$faq[] = array("L�gg till en bild i ett inl�gg", "phpBB BBCode har �ven en tag f�r att visa bilder i dina inl�gg. Tv� v�ldigt viktiga saker b�r kommas ih�g n�r man anv�nder den h�r taggen; m�nga anv�ndare uppskattar inte stora m�ngder av bilder i inl�gg och i andra hand att bilden du vill visa m�ste finnas tillg�nglig p� internet (den kan allts� inte bara finnas p� din dator, om du inte k�r en webserver!). Det finns f�r tillf�llet inte n�got s�tt att spara bilder lokalt med phpBB (alla dessa fr�gor f�rv�ntas bli �tg�rdade i n�sta utg�va av phpBB). F�r att visa en bild m�ste du omg�rda URLen som pekar mot bilden med <b>[img][/img]</b> taggar. Till exempel:<br /><br /><b>[img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br />Du kan �ven omg�rda en bild med <b>[url][/url]</b> taggarna om du s� �nskar, t.ex<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br /><br />skulle skriva ut:<br /><br /><a href=\"http://www.phpbb.com/\" target=\"_blank\"><img src=\"templates/subSilver/images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /></a><br />");

$faq[] = array("--", "Andra fr�gor");
$faq[] = array("Kan jag l�gga till mina egna taggar?", "Nej, tyv�rr inte i phpBB 2.0. Vi unders�ker m�jligheterna att erbjuda skr�ddarsydda BBCode taggar i n�sta stora version");

//
// This ends the BBCode guide entries
//

?>