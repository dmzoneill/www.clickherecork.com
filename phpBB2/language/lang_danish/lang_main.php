<?php
/***************************************************************************
 *                            lang_main.php [Danish]
 *                              -------------------
 *     begin                : Sat Jan 03 2002
 *     copyright            : (C) 2002 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_main.php 1.85.3.1 2004/08/23 02:40:20 AlK
 *
 ****************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

//
// CONTRIBUTORS:
// Translation done by Ken Christensen (Dalixam)
// 2003-08-07  AlleyKat - Danish conversion based on Dalixam's 204-dk-file, thx frold 4 help
//

//
// The format of this file is:
//
// ---> $lang['message'] = "text";
//

//setlocale(LC_ALL, "en");
$lang['ENCODING'] = "iso-8859-1";
$lang['DIRECTION'] = "ltr";
$lang['LEFT'] = "left";
$lang['RIGHT'] = "right";
$lang['DATE_FORMAT'] =  "d. M Y"; // This should be changed to the default date format for your language, php date() format

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = "Forum";
$lang['Category'] = "Kategori";
$lang['Topic'] = "Emner";
$lang['Topics'] = "Emner";
$lang['Replies'] = "Svar";
$lang['Views'] = "Visninger";
$lang['Post'] = "Indl�g";
$lang['Posts'] = "Indl�g";
$lang['Posted'] = "Skrevet";
$lang['Username'] = "Brugernavn";
$lang['Password'] = "Kodeord";
$lang['Email'] = "Email";
$lang['Poster'] = "Skribent";
$lang['Author'] = "Forfatter";
$lang['Time'] = "Tid";
$lang['Hours'] = "Timer";
$lang['Message'] = "Besked";

$lang['1_Day'] = "1 dag";
$lang['7_Days'] = "7 dage";
$lang['2_Weeks'] = "2 uger";
$lang['1_Month'] = "1 m�ned";
$lang['3_Months'] = "3 m�neder";
$lang['6_Months'] = "6 m�neder";
$lang['1_Year'] = "1 �r";

$lang['Go'] = "Opdater";
$lang['Jump_to'] = "G� til";
$lang['Submit'] = "Udf�r";
$lang['Reset'] = "Forfra";
$lang['Cancel'] = "Fortryd";
$lang['Preview'] = "Vis Pr�ve";
$lang['Confirm'] = "Bekr�ft";
$lang['Spellcheck'] = "Stavekontrol";
$lang['Yes'] = "Ja";
$lang['No'] = "Nej";
$lang['Enabled'] = "Sl�et til";
$lang['Disabled'] = "Sl�et fra";
$lang['Error'] = "Fejl";

$lang['Next'] = "N�ste";
$lang['Previous'] = "Forrige";
$lang['Goto_page'] = "G� til side";
$lang['Joined'] = "Indmeldt";
$lang['IP_Address'] = "IP-adresse";

$lang['Select_forum'] = "V�lg et forum";
$lang['View_latest_post'] = "Vis sidste indl�g";
$lang['View_newest_post'] = "Vis nyeste indl�g";
$lang['Page_of'] = "Side <b>%d</b> af <b>%d</b>"; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = "ICQ-nummer";
$lang['AIM'] = "AIM-adresse";
$lang['MSNM'] = "MSN Messenger";
$lang['YIM'] = "Yahoo Messenger";

$lang['Forum_Index'] = "%s Forum Indeks";  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = "Skriv nyt emne";
$lang['Reply_to_topic'] = "Besvar indl�gget";
$lang['Reply_with_quote'] = "Besvar, med citat";

$lang['Click_return_topic'] = "Klik %sher%s for at vende tilbage til emnet"; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = "Klik %sher%s for at fors�ge igen";
$lang['Click_return_forum'] = "Klik %sher%s for at vende tilbage til forummet";
$lang['Click_view_message'] = "Klik %sher%s for at se dit indl�g";
$lang['Click_return_modcp'] = "Klik %sher%s for at vende tilbage til forummets Redakt�rside";
$lang['Click_return_group'] = "Klik %sher%s for at vende tilbage til Gruppe information";

$lang['Admin_panel'] = "G� til Administrations-panelet";

$lang['Board_disable'] = "Beklager, dette forum er i �jeblikket ikke tilg�ngeligt. Pr�v igen senere";


//
// Global Header strings
//
$lang['Registered_users'] = "Registrerede brugere";
$lang['Browsing_forum'] = "Andre brugere online i dette forum:";
$lang['Online_users_zero_total'] = "Der er i alt <b>0</b> brugere p� systemet nu: ";
$lang['Online_users_total'] = "Der er i alt <b>%d</b> brugere p� systemet nu: ";
$lang['Online_user_total'] = "Der er <b>%d</b> bruger p� systemet nu: ";
$lang['Reg_users_zero_total'] = "Ingen tilmeldte, ";
$lang['Reg_users_total'] = "%d tilmeldte, ";
$lang['Reg_user_total'] = "%d tilmeldt, ";
$lang['Hidden_users_zero_total'] = "ingen skjulte og ";
$lang['Hidden_users_total'] = "%d skjulte og ";
$lang['Hidden_user_total'] = "%d skjult og ";
$lang['Guest_users_zero_total'] = "ingen g�ster";
$lang['Guest_users_total'] = "%d g�ster";
$lang['Guest_user_total'] = "%d g�st";
$lang['Record_online_users'] = "Flest brugere online p� samme tid var <b>%s</b>, %s"; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = "%sAdministrator%s";
$lang['Mod_online_color'] = "%sRedakt�r%s";

$lang['You_last_visit'] = "Du bes�gte sidst siden %s"; // %s replaced by date/time
$lang['Current_time'] = "Lige nu er det <b>%s</b>"; // %s replaced by time

$lang['Search_new'] = "Vis indl�g siden sidste bes�g";
$lang['Search_your_posts'] = "Vis dine indl�g";
$lang['Search_unanswered'] = "Vis ubesvarede indl�g";

$lang['Register'] = "Tilmeld";
$lang['Profile'] = "Profil";

$lang['Edit_profile'] = "Ret din profil";
$lang['Search'] = "S�g";
$lang['Memberlist'] = "Tilmeldte brugere";
$lang['FAQ'] = "FAQ";
$lang['BBCode_guide'] = "BBKode Oversigt";
$lang['Usergroups'] = "Grupper";
$lang['Last_Post'] = "Sidste indl�g";
$lang['Moderator'] = "Redakt�r";
$lang['Moderators'] = "Redakt�rer";


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = "Vores brugere har i alt skrevet <b>0</b> indl�g"; // Number of posts
$lang['Posted_articles_total'] = "Vores brugere har i alt skrevet <b>%d</b> indl�g"; // Number of posts
$lang['Posted_article_total'] = "Vores brugere har i alt skrevet <b>%d</b> indl�g"; // Number of posts
$lang['Registered_users_zero_total'] = "Der er i alt <b>0</b> tilmeldte brugere"; // # registered users
$lang['Registered_users_total'] = "Der er i alt <b>%d</b> tilmeldte brugere"; // # registered users
$lang['Registered_user_total'] = "Der er i alt <b>%d</b> tilmeldt bruger"; // # registered users
$lang['Newest_user'] = "Den sidst registrerede bruger er <b>%s%s%s</b>"; // a href, username, /a 

$lang['No_new_posts_last_visit'] = "Ingen nye indl�g siden dit sidste bes�g";
$lang['No_new_posts'] = "Ingen nye indl�g";
$lang['New_posts'] = "Nye indl�g";
$lang['New_post'] = "Nye indl�g";
$lang['No_new_posts_hot'] = "Ingen nye indl�g [ Popul�r ]";
$lang['New_posts_hot'] = "Nye indl�g [ Popul�r ]";
$lang['No_new_posts_locked'] = "Ingen nye indl�g [ L�st ]";
$lang['New_posts_locked'] = "Nye indl�g [ L�st ]";
$lang['Forum_is_locked'] = "Forum er l�st";


//
// Login
//
$lang['Enter_password'] = "V�r venlig at indtaste brugernavn og kodeord for at logge ind";
$lang['Login'] = "Login";
$lang['Logout'] = "Logout";

$lang['Forgotten_password'] = 'Jeg har glemt mit kodeord. Send nyt kodeord via email';

$lang['Log_me_in'] = 'Log mig p� automatisk ved hvert bes�g';

$lang['Error_login'] = 'Du har angivet et forkert eller inaktivt brugernavn eller et forkert kodeord';


//
// Index page
//
$lang['Index'] = "Indeks";
$lang['No_Posts'] = "Ingen indl�g";
$lang['No_forums'] = "Dette board har ingen fora";

$lang['Private_Message'] = "Privat Besked";
$lang['Private_Messages'] = "Privat Beskeder";
$lang['Who_is_Online'] = "Hvem er p� nu";

$lang['Mark_all_forums'] = "Marker alle fora som l�st";
$lang['Forums_marked_read'] = "Alle fora er markeret som l�st";


//
// Viewforum
//
$lang['View_forum'] = "Vis Forum";

$lang['Forum_not_exist'] = "Det valgte forum eksisterer ikke";
$lang['Reached_on_error'] = "Denne side er vist ved en fejl";

$lang['Display_topics'] = "Vis ikke emner �ldre end";
$lang['All_Topics'] = "Begyndelsen";

$lang['Topic_Announcement'] = "<b>Bekendtg�relse:</b>";
$lang['Topic_Sticky'] = "<b>Opslag:</b>";
$lang['Topic_Moved'] = "<b>Flyttet:</b>";
$lang['Topic_Poll'] = "<b>[Afstemning]</b>";

$lang['Mark_all_topics'] = "Marker alle indl�g som l�st";
$lang['Topics_marked_read'] = "Alle indl�g til dette forum er blevet markeret som l�st";

$lang['Rules_post_can'] = "Du <b>kan</b> skrive nye indl�g i dette forum";
$lang['Rules_post_cannot'] = "Du <b>kan ikke</b> skrive nye indl�g i dette forum";
$lang['Rules_reply_can'] = "Du <b>kan</b> besvare indl�g i dette forum";
$lang['Rules_reply_cannot'] = "Du <b>kan ikke</b> besvare indl�g i dette forum";
$lang['Rules_edit_can'] = "Du <b>kan</b> rette dine indl�g i dette forum";
$lang['Rules_edit_cannot'] = "Du <b>kan ikke</b> rette dine indl�g i dette forum";
$lang['Rules_delete_can'] = "Du <b>kan</b> slette dine indl�g i dette forum";
$lang['Rules_delete_cannot'] = "Du <b>kan ikke</b> slette dine indl�g i dette forum";
$lang['Rules_vote_can'] = "Du <b>kan</b> stemme p� afstemninger i dette forum";
$lang['Rules_vote_cannot'] = "Du <b>kan ikke</b> stemme p� afstemninger i dette forum";
$lang['Rules_moderate'] = "Du <b>kan</b> %sstyre dette forum%s"; // %s replaced by a href links, do not remove! 

$lang['No_topics_post_one'] = "Der er ingen indl�g i dette forum<br />Klik p� <b>Nyt Emne</b> for at skrive et";


//
// Viewtopic
//
$lang['View_topic'] = "Vis emne";

$lang['Guest'] = 'G�st';
$lang['Post_subject'] = "Emne";
$lang['View_next_topic'] = "Vis n�ste emne";
$lang['View_previous_topic'] = "Vis foreg�ende emne";
$lang['Submit_vote'] = "Stem";
$lang['View_results'] = "Vis resultater";

$lang['No_newer_topics'] = "Der er ingen nyere emner i dette forum";
$lang['No_older_topics'] = "Der er ingen �ldre emner i dette forum";
$lang['Topic_post_not_exist'] = "Indl�gget eller emnet som du �nsker at se, eksisterer ikke";
$lang['No_posts_topic'] = "Der eksisterer ingen indl�g under dette emne";

$lang['Display_posts'] = "Vis ikke emner �ldre end";
$lang['All_Posts'] = "Begyndelsen";
$lang['Newest_First'] = "Nyeste f�rst";
$lang['Oldest_First'] = "�ldste f�rst";

$lang['Back_to_top'] = "Tilbage til toppen";

$lang['Read_profile'] = "Vis brugerens profil"; 
$lang['Send_email'] = "Send email til bruger";
$lang['Visit_website'] = "Bes�g brugerens webside";
$lang['ICQ_status'] = "ICQ Status";
$lang['Edit_delete_post'] = "Ret/Slet dette indl�g";
$lang['View_IP'] = "Vis forfatterens IP";
$lang['Delete_post'] = "Slet dette indl�g";

$lang['wrote'] = "skrev"; // proceeds the username and is followed by the quoted text
$lang['Quote'] = "Citat"; // comes before bbcode quote output.
$lang['Code'] = "Kode"; // comes before bbcode code output.

$lang['Edited_time_total'] = "Sidst rettet af %s den %s, rettet %d gang"; // Last edited by me on 12 Oct 2001, edited 1 time in total
$lang['Edited_times_total'] = "Sidst rettet af %s den %s, rettet i alt %d gange"; // Last edited by me on 12 Oct 2001, edited 2 times in total

$lang['Lock_topic'] = "L�s dette emne";
$lang['Unlock_topic'] = "L�s dette emne op";
$lang['Move_topic'] = "Flyt dette emne";
$lang['Delete_topic'] = "Slet dette emne";
$lang['Split_topic'] = "Del dette emne";

$lang['Stop_watching_topic'] = "Stop med at overv�ge dette emne";
$lang['Start_watching_topic'] = "Overv�g dette emne for svar";
$lang['No_longer_watching'] = "Du overv�ger nu ikke l�ngere dette emne for svar";
$lang['You_are_watching'] = "Du overv�ger nu dette emne for svar";

$lang['Total_votes'] = 'Totale stemmer';

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = "Besked";
$lang['Topic_review'] = "Se Emne";

$lang['No_post_mode'] = "Ingen posttype angivet"; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = "Skriv et nyt Emne";
$lang['Post_a_reply'] = "Svar p� indl�g";
$lang['Post_topic_as'] = "Skriv Emne som";
$lang['Edit_Post'] = "Ret indl�g";
$lang['Options'] = "Muligheder";

$lang['Post_Announcement'] = "Bekendtg�relse";
$lang['Post_Sticky'] = "Opslag";
$lang['Post_Normal'] = "Normal";

$lang['Confirm_delete'] = "Er du sikker p� at du �nsker at slette dette indl�g?";
$lang['Confirm_delete_poll'] = "Er du sikker p� at du �nsker at slette denne afstemning?";

$lang['Flood_Error'] = "Du kan ikke skrive et nyt indl�g endnu; for at undg� misbrug skal der g� en lille tid, v�r venlig at pr�ve igen om lidt";
$lang['Empty_subject'] = "Du skal angive en overskrift n�r du skriver et nyt emne";
$lang['Empty_message'] = "Du skal skrive noget i meddelelsesfeltet, n�r du skriver et indl�g";
$lang['Forum_locked'] = "Dette forum er l�st, du kan ikke skrive nye, svare eller rette indl�g";
$lang['Topic_locked'] = "Dette emne er l�st, du kan ikke rette eller besvare indl�g";
$lang['No_post_id'] = "Du skal v�lge et indl�g som du �nsker at rette";
$lang['No_topic_id'] = "Du skal v�lge et emne som du �nsker at svare p�";
$lang['No_valid_mode'] = "Du kan kun lave nye, besvare, rette eller citere indl�g, pr�v venligst igen";
$lang['No_such_post'] = "Indl�gget findes ikke, pr�v venligst igen";
$lang['Edit_own_posts'] = "Desv�rre, du kan kun rette i dine egne indl�g";
$lang['Delete_own_posts'] = "Desv�rre, du kan kun slette dine egne indl�g";
$lang['Cannot_delete_replied'] = "Desv�rre, du kan ikke slette indl�g som der er besvaret p�";
$lang['Cannot_delete_poll'] = "Desv�rre, du kan ikke slette en aktiv afstemning";
$lang['Empty_poll_title'] = "Du skal angive en overskrift til din afstemning";
$lang['To_few_poll_options'] = "Du skal angive mindst 2 afstemningsmuligheder";
$lang['To_many_poll_options'] = "Du har pr�vet at oprette en afstemning med for mange afstemningsmuligheder";
$lang['Post_has_no_poll'] = "Dette indl�g har ingen afstemning";
$lang['Already_voted'] = 'Du har allerede stemt i denne afstemning';
$lang['No_vote_option'] = 'Du skal v�lge noget at stemme p�.';

$lang['Add_poll'] = "Tilf�j en afstemning";
$lang['Add_poll_explain'] = "Hvis du ikke �nsker at tilf�je en afstemning til dit indl�g, lad da venligst nedenst�ende felter v�re tomme";
$lang['Poll_question'] = "Afstemningssp�rgsm�l";
$lang['Poll_option'] = "Afstemningsmulighed";
$lang['Add_option'] = "Tilf�j denne mulighed";
$lang['Update'] = "Opdater";
$lang['Delete'] = "Slet";                                  
$lang['Poll_for'] = "K�r afstemning i";
$lang['Days'] = "dage"; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = "[Tast 0 eller lad v�re blank, hvis ingen afslutningstid �nskes p� afstemningen]";
$lang['Delete_poll'] = "Slet afstemning";

$lang['Disable_HTML_post'] = "Udf�r ikke HTML i dette indl�g";
$lang['Disable_BBCode_post'] = "Ingen BBKoder i dette indl�g";
$lang['Disable_Smilies_post'] = "Ingen Smilies i dette indl�g";

$lang['HTML_is_ON'] = "HTML er <u>Sl�et til</u>";
$lang['HTML_is_OFF'] = "HTML er <u>Sl�et fra</u>";
$lang['BBCode_is_ON'] = "%sBBKode%s er <u>Sl�et til</u>"; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = "%sBBKode%s er <u>Sl�et fra</u>";
$lang['Smilies_are_ON'] = "Smilies er <u>Sl�et til</u>";
$lang['Smilies_are_OFF'] = "Smilies er <u>Sl�et fra</u>";

$lang['Attach_signature'] = "Tilf�j underskrift (Underskriften kan �ndres i din profil)";
$lang['Notify'] = "Send mail n�r indl�gget besvares";
$lang['Delete_post'] = "Slet dette indl�g";

$lang['Stored'] = "Dit indl�g er blevet tilf�jet";
$lang['Deleted'] = "Dit indl�g er blevet slettet";
$lang['Poll_delete'] = "Dit afstemning er blevet slettet";
$lang['Vote_cast'] = "Din afstemning er blevet noteret";

$lang['Topic_reply_notification'] = "Emnet er besvaret";

$lang['bbcode_b_help'] = "Fed skrift: [b]tekst[/b]  (alt+b)";
$lang['bbcode_i_help'] = "Kursiv skrift: [i]tekst[/i]  (alt+i)";
$lang['bbcode_u_help'] = "Understregning: [u]tekst[/u]  (alt+u)";
$lang['bbcode_q_help'] = "Citat: [quote]tekst[/quote]  (alt+q)";
$lang['bbcode_c_help'] = "Kode display: [code]kode[/code]  (alt+c)";
$lang['bbcode_l_help'] = "Liste: [list]tekst[/list] (alt+l)";
$lang['bbcode_o_help'] = "Nummereret liste: [list=]tekst[/list]  (alt+o)";
$lang['bbcode_p_help'] = "Inds�t billede: [img]http://image_url[/img]  (alt+p)";
$lang['bbcode_w_help'] = "Inds�t URL: [url]http://url[/url] eller [url=http://url]URL tekst[/url]  (alt+w)";
$lang['bbcode_a_help'] = "Luk alle �bne BBkoder";
$lang['bbcode_s_help'] = "Skriftfarve: [color=red]tekst[/color]  PS: du kan f.eks skrive color=#FF0000";
$lang['bbcode_f_help'] = "Skriftst�rrelse: [size=x-small]lille tekst[/size]";

$lang['Emoticons'] = "Smilies";
$lang['More_emoticons'] = "Se flere Smilies";

$lang['Font_color'] = "Skriftfarve";
$lang['color_default'] = "Normal";
$lang['color_dark_red'] = "M�rker�d";
$lang['color_red'] = "R�d";
$lang['color_orange'] = "Orange";
$lang['color_brown'] = "Brun";
$lang['color_yellow'] = "Gul";
$lang['color_green'] = "Gr�n";
$lang['color_olive'] = "Oliven";
$lang['color_cyan'] = "Turkis";
$lang['color_blue'] = "Bl�";
$lang['color_dark_blue'] = "M�rkebl�";
$lang['color_indigo'] = "Indigo";
$lang['color_violet'] = "Violet";
$lang['color_white'] = "Hvid";
$lang['color_black'] = "Sort";

$lang['Font_size'] = "Skriftst�rrelse";
$lang['font_tiny'] = "Meget lille";
$lang['font_small'] = "Lille";
$lang['font_normal'] = "Normal";
$lang['font_large'] = "Stor";
$lang['font_huge'] = "Meget stor";

$lang['Close_Tags'] = "Luk Tags";
$lang['Styles_tip'] = "PS: Du kan �ndre udseende p� den markerede tekst";


//
// Private Messaging
//
$lang['Private_Messaging'] = "Privat besked";

$lang['Login_check_pm'] = "Login for at vise private beskeder";
$lang['New_pms'] = "%d nye beskeder"; // You have 2 new messages
$lang['New_pm'] = "%d ny besked"; // You have 1 new message
$lang['No_new_pm'] = "Ingen nye beskeder";
$lang['Unread_pms'] = "%d ul�ste beskeder";
$lang['Unread_pm'] = "%d ul�st besked";
$lang['No_unread_pm'] = "Ingen ul�ste beskeder";
$lang['You_new_pm'] = "En privat besked ligger i din postkasse";
$lang['You_new_pms'] = "Flere private beskeder ligger i din postkasse";
$lang['You_no_new_pm'] = "Ingen private beskeder i din postkasse";

$lang['Unread_message'] = 'Ul�st besked';
$lang['Read_message'] = 'L�st besked';

$lang['Read_pm'] = 'L�s besked'; 
$lang['Post_new_pm'] = 'Skriv besked'; 
$lang['Post_reply_pm'] = 'Svar p� besked'; 
$lang['Post_quote_pm'] = 'Cit�r besked'; 
$lang['Edit_pm'] = 'Redig�r besked'; 

$lang['Inbox'] = "Indbakke";           
$lang['Outbox'] = "Ikke l�st af modtager";
$lang['Savebox'] = "Gemt post";
$lang['Sentbox'] = "L�st af modtager";
$lang['Flag'] = "Flag";
$lang['Subject'] = "Emne";
$lang['From'] = "Fra";
$lang['To'] = "Til";
$lang['Date'] = "Dato";
$lang['Mark'] = "Marker";
$lang['Sent'] = "Sendt";
$lang['Saved'] = "Gemt";
$lang['Delete_marked'] = "Slet Markerede";
$lang['Delete_all'] = "Slet Alle";
$lang['Save_marked'] = "Gem Markerede"; 
$lang['Save_message'] = "Gem Besked";
$lang['Delete_message'] = "Slet Besked";

$lang['Display_messages'] = "Vis beskeder fra de foreg�ende"; // Followed by number of days/weeks/months
$lang['All_Messages'] = "Alle beskeder";

$lang['No_messages_folder'] = "Du har ingen beskeder i denne folder";

$lang['PM_disabled'] = "Private beskeder er sl�et fra p� dette system";
$lang['Cannot_send_privmsg'] = "Desv�rre, administrator har l�st din adgang til at sende private beskeder";
$lang['No_to_user'] = "Du skal angive et brugernavn for at kunne sende denne besked";
$lang['No_such_user'] = "Beklager, kan ikke finde en bruger med det navn";

$lang['Disable_HTML_pm'] = "Sl� HTML fra i denne besked";
$lang['Disable_BBCode_pm'] = "Sl� BBCode fra i denne besked";
$lang['Disable_Smilies_pm'] = "Sl� Smilies fra i denne besked";

$lang['Message_sent'] = "Din besked er blev sendt";

$lang['Click_return_inbox'] = "Klik %sher%s for at returnere til din indbakke";
$lang['Click_return_index'] = "Klik %sher%s for at returnere til indekset";

$lang['Send_a_new_message'] = "Send en ny privat besked";
$lang['Send_a_reply'] = "Besvar privat besked";
$lang['Edit_message'] = "Ret privat besked";

$lang['Notification_subject'] = "Ny Privat besked er ankommet";

$lang['Find_username'] = "Find en bruger";
$lang['Find'] = "Find";
$lang['No_match'] = "Ingen fundet";

$lang['No_post_id'] = "Intet besked-ID var angivet";
$lang['No_such_folder'] = "folderen eksisterer ikke";
$lang['No_folder'] = "Ingen folder specificeret";

$lang['Mark_all'] = "Marker alle";
$lang['Unmark_all'] = "Afmarker alle";

$lang['Confirm_delete_pm'] = "Er du sikker p� at du �nsker at slette denne besked?";
$lang['Confirm_delete_pms'] = "Er du sikker p� at du �nsker at slette alle markerede beskeder?";

$lang['Inbox_size'] = "Din indbakke er %d%% fuld"; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = "Din Sendt post er %d%% fuld"; 
$lang['Savebox_size'] = "Din Gemt post er %d%% fuld"; 

$lang['Click_view_privmsg'] = "Klik %sher%s for at bes�ge din indbakke";


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = "Viser profil :: %s"; // %s is username 
$lang['About_user'] = "Alt om %s"; // %s is username

$lang['Preferences'] = "Indstillinger";
$lang['Items_required'] = "Felter markeret med en * skal udfyldes med mindre andet er angivet";
$lang['Registration_info'] = "Registreringsinformation";
$lang['Profile_info'] = "Profilinformation";
$lang['Profile_info_warn'] = "Disse informationer vil v�re offentligt tilg�ngelige";
$lang['Avatar_panel'] = "Billed kontrolpanel";
$lang['Avatar_gallery'] = "Billedgalleri";

$lang['Website'] = "Hjemmeside";
$lang['Location'] = "Geografisk sted";
$lang['Contact'] = "Kontakt";
$lang['Email_address'] = "Email adresse";
$lang['Email'] = "Email";
$lang['Send_private_message'] = "Send privat besked";
$lang['Hidden_email'] = "[Skjult]";
$lang['Search_user_posts'] = "S�g efter denne brugers indl�g";
$lang['Interests'] = "Interesser";
$lang['Occupation'] = "Besk�ftigelse"; 
$lang['Poster_rank'] = "Skribents rang";

$lang['Total_posts'] = "Indl�g i alt";
$lang['User_post_pct_stats'] = "%.2f%% af alt"; // 1.25% of total
$lang['User_post_day_stats'] = "%.2f indl�g per dag"; // 1.5 posts per day
$lang['Search_user_posts'] = "Find alle indl�g skrevet af %s"; // Find all posts by username

$lang['No_user_id_specified'] = "Beklager, den bruger eksisterer ikke";
$lang['Wrong_Profile'] = "Du kan kun rette i din egen profil.";

$lang['Only_one_avatar'] = "Kun et slags billede kan angives";
$lang['File_no_data'] = "Filen p� den URL som du angav, indeholder ingen data";
$lang['No_connection_URL'] = "Der kunne ikke skabes forbindelse til den angivne URL";
$lang['Incomplete_URL'] = "Den angivne URL er ikke komplet";
$lang['Wrong_remote_avatar_format'] = "Den angivne URL til billedet er ikke korrekt";
$lang['No_send_account_inactive'] = "Desv�rre, det er ikke muligt at f� informationer om dit kodeord, da kontoen ikke er aktiv. Kontakt venligst forummets administrator for mere information";

$lang['Always_smile'] = "Aktiver altid Smilies";
$lang['Always_html'] = "Tillad altid HTML";
$lang['Always_bbcode'] = "Tillad altid BBkode";
$lang['Always_add_sig'] = "Tilf�j altid min underskrift";
$lang['Always_notify'] = "Send besked, n�r der svares";
$lang['Always_notify_explain'] = "Sender en email n�r der bliver svaret p� et indl�g du har skrevet i. Dette kan �ndres i n�r du skriver et indl�g";

$lang['Board_style'] = "Sidens Grafiske Tema";
$lang['Board_lang'] = "Sidens Sprog";
$lang['No_themes'] = "Ingen Temaer i databasen";
$lang['Timezone'] = "Tidszone (Danmark GMT+1)";
$lang['Date_format'] = "Datoformat";
$lang['Date_format_explain'] = 'Den benyttede syntaks er identisk med PHP <a href=\"http://www.php.net/date\" target=\"_other\">date()</a> funktion';
$lang['Signature'] = "Underskrift";
$lang['Signature_explain'] = "Denne tekst kan blive tilf�jet som underskrift til alle de indl�g som du skriver, der er en begr�nsning p� %d karakterer";
$lang['Public_view_email'] = "Vis altid min Email Adresse";

$lang['Current_password'] = "Nuv�rende kodeord";
$lang['New_password'] = "Nyt kodeord";
$lang['Confirm_password'] = "Bekr�ft kodeord";
$lang['Confirm_password_explain'] = "Du skal bekr�fte dit nuv�rende kodeord, hvis du vil �ndre det eller �ndre din email adresse";
$lang['password_if_changed'] = "Du skal kun angive kodeord hvis du �nsker at skifte til et nyt";
$lang['password_confirm_if_changed'] = "Du skal kun bekr�fte dit kodeord, hvis du har �ndret det ovenfor";

$lang['Avatar'] = "Personligt billede";
$lang['Avatar_explain'] = "Viser et lille billede sammen med dine personlige data i dine indl�g. Kun et billede kan v�re aktivt p� et hvilket som helst tidspunkt, formatet m� maksimalt v�re (%d,%d) (hxb) pixels og ikke st�rre end %dkB.";
$lang['Upload_Avatar_file'] = "Hent Billede fra din maskine";
$lang['Upload_Avatar_URL'] = "Hent billede fra URL";
$lang['Upload_Avatar_URL_explain'] = "Indtaste en URL hvor billedet befinder sig, det vil blive kopieret til denne server.";
$lang['Pick_local_Avatar'] = "V�lg billede fra galleri";
$lang['Link_remote_Avatar'] = "Link til et billede p� anden server";
$lang['Link_remote_Avatar_explain'] = "Indtast en URL til et billede der befinder sig p� en anden server.";
$lang['Avatar_URL'] = "URL til billede";
$lang['Select_from_gallery'] = "V�lg billede fra galleri";
$lang['View_avatar_gallery'] = "Vis galleri";

$lang['Select_avatar'] = "V�lg billede";
$lang['Return_profile'] = "Fortryd billede";
$lang['Select_category'] = "V�lg Kategori";

$lang['Delete_Image'] = "Slet billede";
$lang['Current_Image'] = "Nuv�rende billede";

$lang['Notify_on_privmsg'] = "Giv besked n�r der er ny privat besked";
$lang['Popup_on_privmsg'] = "Pop-op-boks n�r der er ny privat besked";
$lang['Popup_on_privmsg_explain'] = "Nogle browsere �bner muligvis et nyt vindue for at informere dig n�r der ankommer en ny besked"; 
$lang['Hide_user'] = "Skjul min onlinestatus";

$lang['Profile_updated'] = "Din profil er blevet opdateret";
$lang['Profile_updated_inactive'] = "Din profil er blevet opdateret, da der er �ndret vitale oplysninger er din konto blevet deaktiveret. Kontroller venligst din email, for oplysninger om hvordan den aktiveres igen, eller hvis administator aktivering er n�dvendig, vent p� at forummets administrator aktiverer kontoen";

$lang['Password_mismatch'] = "Det nye kodeord, og det felt der indeholde bekr�ftelse af det nye kodeord er ikke ens";
$lang['Current_password_mismatch'] = "Det angivne kodeord er ikke det samme som det der er gemt i vores database";
$lang['Password_long'] = "Dit kodeord m� ikke v�re l�ngere end 32 tegn";
$lang['Too_many_registers'] = 'Du har fors�gt at registrere for mange gange. Pr�v igen senere, tak.';
$lang['Username_taken'] = "Desv�rre, det brugernavn er allerede taget";
$lang['Username_invalid'] = "Desv�rre, det brugernavn indeholder et ulovlig tegn som \"";
$lang['Username_disallowed'] = "Desv�rre, dette brugernavn er ikke tilladt";
$lang['Email_taken'] = "Desv�rre, denne email er allerede registreret til en anden bruger";
$lang['Email_banned'] = "Desv�rre, denne email er blevet bandlyst";
$lang['Email_invalid'] = "Desv�rre, denne email er ikke brugbar";
$lang['Signature_too_long'] = "Din underskrift er for lang";
$lang['Fields_empty'] = "Du skal udfylde de n�dvendige felter";
$lang['Avatar_filetype'] = "Billedfilen skal v�re af fil typen .jpg, .gif eller .png";
$lang['Avatar_filesize'] = "Billedfilens st�rrelse m� ikke overstige %d kB"; // The avatar image file size must be less than 6 kB
$lang['Avatar_imagesize'] = "Billedfilen m� ikke v�re st�rre end (%d,%d) (hxb) pixels";

$lang['Welcome_subject'] = "Velkommen til %s Forum"; // Welcome to my.com forums
$lang['New_account_subject'] = "Ny brugerkonto";
$lang['Account_activated_subject'] = "Konto aktiveret";

$lang['Account_added'] = "Tak for tilmeldingen, din konto er nu blevet oprettet. Du kan nu logge ind med dit brugernavn og kodeord";
$lang['Account_inactive'] = "Din konto er nu oprettet. Dette forum kr�ver dog at din konto aktiveres f�r den kan tages i brug, en aktiveringsn�gle er sendt til din email. Kontroller venligst din email for mere information";
$lang['Account_inactive_admin'] = "Din konto er nu oprettet. Dette forum kr�ver dog at din konto godkendes af en administrator. En email er nu blevet sendt til dem, og du vil blive informeret n�r din konto er aktiveret";
$lang['Account_active'] = "Din konto er nu aktiveret, tak for din tilmelding";
$lang['Account_active_admin'] = "Din konto er nu aktiveret";
$lang['Already_activated'] = 'Din konto er allerede aktiveret'; 
$lang['Reactivate'] = "Genaktiver venligst din konto!";
$lang['COPPA'] = "Din konto er nu oprettet, dog skal den f�rst verificeres, kontroller venligst din mail for yderligere instruktioner.";

$lang['Registration'] = "Tilmeldingsvilk�r";
$lang['Reg_agreement'] = "Administratorer og redakt�rer af dette forum vil pr�ve at fjerne eller rette i indl�g der kan v�re st�dende s� hurtigt som muligt, dog vil det v�re umuligt at genneml�se alle indl�g. Derfor accepterer du at v�re indforst�et med, at alle indl�g i dette forum udtrykker holdninger og meninger af forfatterne af indl�ggene, og ikke administratorer, redakt�rer eller webmastere (bortset fra indl�g skrevet af disse) og derfor kan disse heller ikke holdes ansvarlige.<br /><br />Du vedkender ogs� ikke at skrive indl�g der indeholder sk�ldsord, pornografiske , vulg�re, bagtalene, hadefulde, truende, seksuelt-orienterede eller andre ord/vendinger som strider mod g�ldende lovgivning. S�fremt dette konstateres, kan det f�re til at du �jeblikkeligt og permanent udelukkes fra forummet (din Internet udbyder vil blive orienteret). Din unikke IP adresse logges i alle indl�g der skrives til dette forum, for at forebygge misbrug af enhver slags. Du vedkender ogs� at administrator, redakt�rer og webmastere tilh�rende dette forum har ret til at fjerne, rette eller lukke ethvert emne/indl�g hvorn�r som helst de m�tte finde det n�dvendigt. Som bruger giver du ret til at alle informationer som du har indtastet gemmes i en database. Disse informationer vil ikke blive videregivet til 3. part uden din viden; webmastere, administratorer eller redakt�rer kan ikke blive holdt ansvarlige for eventuelle hackerangreb der m�tte f�re til afsl�ring af disse data.<br /><br />Dette forum bruger cookies til at gemme information p� din lokale harddisk. Disse cookies indeholder ingen af de informationer som du har indtastet om dig selv, de er kun til for at s�rge for at du f�r den nemmeste brugerflade. Din email bliver kun brugt til at sende en verificering af dine tilmeldingsdetaljer og kodeord (og til at sende et nyt kodeord, hvis du skulle glemme dit nuv�rende).<br /><br />Ved at klikke p� nedenst�ende tilmeldingslink accepterer du at v�re indforst�et med disse forhold.";

$lang['Agree_under_13'] = "Jeg er indforst�et med disse vilk�r og er <b>under</b> 13 �r gammel";
$lang['Agree_over_13'] = "Jeg er indforst�et med disse vilk�r og er <b>over</b> 13 �r gammel";
$lang['Agree_not'] = "Jeg er ikke indforst�et med disse vilk�r";

$lang['Wrong_activation'] = "Aktiveringsn�glen som benyttes, passer ikke til den som er gemt i vores database";
$lang['Send_password'] = "Send mig et nyt kodeord"; 
$lang['Password_updated'] = "Et nyt kodeord er blevet genereret; kontroller venligst din email, for information om hvordan du aktiverer det";
$lang['No_email_match'] = "Den angivne email passer ikke til det angivne brugernavn";
$lang['New_password_activation'] = "Aktivering af nyt kodeord";
$lang['Password_activated'] = "Din konto er gen-aktiveret. For at logge ind skal du benytte det kodeord som er sendt til dig i en email";

$lang['Send_email_msg'] = "Send en email besked";
$lang['No_user_specified'] = "Der var ikke angivet noget brugernavn";
$lang['User_prevent_email'] = "Denne bruger �nsker ikke at modtage emails. fors�g istedet at sende som privat besked";
$lang['User_not_exist'] = "Den bruger eksisterer ikke";
$lang['CC_email'] = "Send en kopi af denne email til dig selv";
$lang['Email_message_desc'] = "Denne besked vil blive sendt som ren tekst, skrive derfor ikke HTML eller BBCode. returadressen p� denne mail vil blive sat til din email addresse.";
$lang['Flood_email_limit'] = "Du kan ikke sende endnu en email p� nuv�rende tidspunkt, fors�g venligst igen lidt senere";
$lang['Recipient'] = "Modtager";
$lang['Email_sent'] = "Emailen er nu sendt";
$lang['Send_email'] = "Send email";
$lang['Empty_subject_email'] = "Du skal udfylde en overskrift til emailen";
$lang['Empty_message_email'] = "Du skal udfylde med en besked som du �nsker skal sendes";


//
// Visual confirmation system strings
//
$lang['Confirm_code_wrong'] = 'Den angivne bekr�ftelseskode er forkert';
$lang['Too_many_registers'] = 'Du har overskredet antal registreringsfors�g for denne session. Pr�v venligst igen senere.';
$lang['Confirm_code_impaired'] = 'Hvis du er synshandicappet eller af andre �rsager ikke kan l�se denne kode, s� kontakt forummets %sAdmin%s for hj�lp.';
$lang['Confirm_code'] = 'Bekr�ftelseskode';
$lang['Confirm_code_explain'] = 'Indtast koden pr�cis som du ser den. Der er forskel p� store og sm� bogstaver, og der er en diagonallinie over nul.';


//
// Memberslist
//
$lang['Select_sort_method'] = "V�lg sorteringsmetode";
$lang['Sort'] = "Sorter";
$lang['Sort_Top_Ten'] = "Top Ti Indl�g";
$lang['Sort_Joined'] = "Tilmeldt Dato";
$lang['Sort_Username'] = "Brugernavn";
$lang['Sort_Location'] = "Placering";
$lang['Sort_Posts'] = "Totale Indl�g";
$lang['Sort_Email'] = "Email";
$lang['Sort_Website'] = "Hjemmeside";
$lang['Sort_Ascending'] = "Stigende";
$lang['Sort_Descending'] = "Faldende";
$lang['Order'] = "R�kkef�lge";


//
// Group control panel
//
$lang['Group_Control_Panel'] = "Gruppe Administration";
$lang['Group_member_details'] = "Detaljer om gruppemedlemskab";
$lang['Group_member_join'] = "Tilmeld til en gruppe";

$lang['Group_Information'] = "Gruppe Information";
$lang['Group_name'] = "Gruppe navn";
$lang['Group_description'] = "Gruppebeskrivelse";
$lang['Group_membership'] = "Gruppemedlemskab";
$lang['Group_Members'] = "Gruppe Medlemmer";
$lang['Group_Moderator'] = "Gruppe Redakt�r";
$lang['Pending_members'] = "Afventende Brugere";

$lang['Group_type'] = "Gruppe type";
$lang['Group_open'] = "�ben gruppe";
$lang['Group_closed'] = "Lukket gruppe";
$lang['Group_hidden'] = "Skjult gruppe";

$lang['Current_memberships'] = "Medlem af f�lgende grupper";
$lang['Non_member_groups'] = "Ikke medlem af f�lgende grupper";
$lang['Memberships_pending'] = "Tilmelding afventer";

$lang['No_groups_exist'] = "Der er ingen grupper oprettet";
$lang['Group_not_exist'] = "Den gruppe eksisterer ikke";

$lang['Join_group'] = "Tilf�j gruppen";
$lang['No_group_members'] = "Denne gruppe har ingen medlemmer";
$lang['Group_hidden_members'] = "Denne gruppe er skjult. Du kan ikke f� vist brugerne";
$lang['No_pending_group_members'] = "Denne gruppe har ingen afventende brugere";
$lang['Group_joined'] = "Du er nu tilmeldt denne gruppe<br />Du vil f� besked n�r din tilmelding er blevet godkendt af gruppens redakt�r";
$lang['Group_request'] = "En bruger �nsker at melde sig til din gruppe";
$lang['Group_approved'] = "Din tilmelding er blevet godkendt";
$lang['Group_added'] = "Du er nu tilf�jet til denne brugergruppe";
$lang['Already_member_group'] = "Du er allerede medlem af denne gruppe";
$lang['User_is_member_group'] = "Brugeren er allerede medlem af denne gruppe";
$lang['Group_type_updated'] = "Gruppens type er �ndret";

$lang['Could_not_add_user'] = "Den valgte bruger findes ikke";
$lang['Could_not_anon_user'] = "Du kan ikke g�re brugeren G�st til gruppemedlem";

$lang['Confirm_unsub'] = "Er du sikker p� at du �nsker at melde dig ud af gruppen?";
$lang['Confirm_unsub_pending'] = "Din tilmelding til denne gruppe er endnu ikke blevet godkendt, er du sikker p� du �nsker at framelde dig?";

$lang['Unsub_success'] = "Du er nu meldt ud af denne gruppe.";

$lang['Approve_selected'] = "Godkend Valgte";
$lang['Deny_selected'] = "Afvis valgte";
$lang['Not_logged_in'] = "Du skal v�re logget ind for at tilmelde dig til en gruppe.";
$lang['Remove_selected'] = "Slet Valgte";
$lang['Add_member'] = "Tilf�j Medlem";
$lang['Not_group_moderator'] = "Du er ikke Redakt�r for denne gruppe, derfor kan du ikke udf�re dette.";

$lang['Login_to_join'] = "Du skal logge ind f�r du kan melde dig ind i en gruppe";
$lang['This_open_group'] = "Dette er en �ben gruppe, klik for at opn� medlemskab";
$lang['This_closed_group'] = "Denne gruppe er lukket, der kan ikke tilf�jes nye medlemmer";
$lang['This_hidden_group'] = "Denne gruppe er skjult, automatisk tilf�jelse af brugere er ikke tilladt";
$lang['Member_this_group'] = "Du er medlem af denne gruppe";
$lang['Pending_this_group'] = "Dit medlemskab af denne gruppe er afventende";
$lang['Are_group_moderator'] = "Du er Redakt�r af gruppen";
$lang['None'] = "Ingen";

$lang['Subscribe'] = "Meld ind";
$lang['Unsubscribe'] = "Meld ud";
$lang['View_Information'] = "Vis Information";


//
// Search
//
$lang['Search_query'] = "S�geord";
$lang['Search_options'] = "S�gemuligheder";

$lang['Search_keywords'] = "S�g efter n�gleord";
$lang['Search_keywords_explain'] = "Du kan bruge <u>AND</u> for af definere ord som skal indg� i resultatet, <u>OR</u> for at definere ord som m� indg� i resultatet og  <u>NOT</u> for at definere ord som  ikke m� findes i resultatet. Brug * som et wildcard for ukendte bogstaver";
$lang['Search_author'] = "S�g efter en bestemt forfatter";
$lang['Search_author_explain'] = "Brug * som et wildcard for ukendte bogstaver";

$lang['Search_for_any'] = "S�g efter alle udtryk eller brug indtastet s�geparameter";
$lang['Search_for_all'] = "S�g efter alle udtryk";
$lang['Search_title_msg'] = "S�g i emne- og besked-felterne";
$lang['Search_msg_only'] = "S�g kun i beskedfeltet";

$lang['Return_first'] = "Return�r de f�rste"; // followed by xxx characters in a select box
$lang['characters_posts'] = "karakterer af indl�gget";

$lang['Search_previous'] = "S�g tilbage i tiden"; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = "Sorter efter";
$lang['Sort_Time'] = "Indl�ggets dato";
$lang['Sort_Post_Subject'] = "Indl�ggets overskrift";
$lang['Sort_Topic_Title'] = "Emnets overskrift";
$lang['Sort_Author'] = "Forfatter";
$lang['Sort_Forum'] = "Forum";

$lang['Display_results'] = "Vis resultatet som";
$lang['All_available'] = "Alle";
$lang['No_searchable_forums'] = "Du har ikke tilladelse til at s�ge i alle fora p� dette site";

$lang['No_search_match'] = "Ingen emner eller indl�g passer til dine s�gekriterier";
$lang['Found_search_match'] = "S�gningen fandt %d hit"; // eg. Search found 1 match
$lang['Found_search_matches'] = "S�gningen resulterede i %d hits"; // eg. Search found 24 matches

$lang['Close_window'] = "Luk Vindue";


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = "Beklager, kun %s kan skrive bekendtg�relser i dette forum";
$lang['Sorry_auth_sticky'] = "Beklager, kun %s kan skrive opslag i dette forum";
$lang['Sorry_auth_read'] = "Beklager, kun %s kan l�se emner i dette forum";
$lang['Sorry_auth_post'] = "Beklager, kun %s kan skrive emner i dette forum"; 
$lang['Sorry_auth_reply'] = "Beklager, kun %s kan besvare indl�g i dette forum"; 
$lang['Sorry_auth_edit'] = "Beklager, kun %s kan rette indl�g i dette forum"; 
$lang['Sorry_auth_delete'] = "Beklager, kun %s kan slette indl�g i dette forum"; 
$lang['Sorry_auth_vote'] = "Beklager, kun %s kan stemme p� afstemninger i dette forum"; 

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = "<b>g�stebrugere</b>";
$lang['Auth_Registered_Users'] = "<b>tilmeldte brugere</b>";
$lang['Auth_Users_granted_access'] = "<b>brugere med specielle rettigheder</b>";
$lang['Auth_Moderators'] = "<b>redakt�rer</b>";
$lang['Auth_Administrators'] = "<b>administratorer</b>";

$lang['Not_Moderator'] = "Du er ikke Redakt�r for dette forum";
$lang['Not_Authorised'] = "Ej tilladt";

$lang['You_been_banned'] = "Du er blevet udelukket fra dette forum<br />Kontakt venligst webmaster eller forummets administrator for information";


//
// Viewonline
//
$lang['Reg_users_zero_online'] = "Der er ingen tilmeldte brugere og "; // There ae 0 Registered and
$lang['Reg_users_online'] = "Der er %d tilmeldte brugere og "; // There are 5 Registered and
$lang['Reg_user_online'] = "Der er %d tilmeldt bruger og "; // There are 1 Registered and
$lang['Hidden_users_zero_online'] = "0 skjulte brugere lige nu"; // 6 Hidden users online
$lang['Hidden_users_online'] = "%d skjulte brugere lige nu"; // 6 Hidden users online
$lang['Hidden_user_online'] = "%d skjult bruger lige nu"; // 1 Hidden user online
$lang['Guest_users_online'] = "Der er %d g�stebrugere lige nu"; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = "Der er ingen g�stebrugere lige nu"; // There are 10 Guest users online
$lang['Guest_user_online'] = "Der er %d g�stebruger lige nu"; // There is 1 Guest user online
$lang['No_users_browsing'] = "Der er ingen brugere p� forummet lige nu";

$lang['Online_explain'] = "Disse data er baseret p� brugernes aktivitet de sidste 5 minutter";

$lang['Forum_Location'] = "Forumplacering";
$lang['Last_updated'] = "Sidst opdateret";

$lang['Forum_index'] = "Forum indeks";
$lang['Logging_on'] = "Logger ind";
$lang['Posting_message'] = "Skriver en besked";
$lang['Searching_forums'] = "S�ger blandt fora";
$lang['Viewing_profile'] = "Viser profilen";
$lang['Viewing_online'] = "Viser hvem der er p� nu";
$lang['Viewing_member_list'] = "Viser Tilmeldte brugere";
$lang['Viewing_priv_msgs'] = "Viser Private beskeder";
$lang['Viewing_FAQ'] = "Viser Generelle Sp�rgsm�l";


//
// Moderator Control Panel
//
$lang['Mod_CP'] = "Redakt�r Administration";
$lang['Mod_CP_explain'] = "P� denne side har du mulighed for at �ndre dette forum, du kan Slette, flytte og l�se emnerne, du kan ogs� l�se emnerne op igen.";

$lang['Select'] = "V�lg";
$lang['Delete'] = "Slet";
$lang['Move'] = "Flyt";
$lang['Moved'] = 'Flyttet';
$lang['Lock'] = "L�s";
$lang['Unlock'] = "L�s op";

$lang['Topics_Removed'] = "Det valgte emne er nu slettet";
$lang['Topics_Locked'] = "Det valgte emne er nu l�st";
$lang['Topics_Moved'] = "Det valgte emne er nu flyttet";
$lang['Topics_Unlocked'] = "Det valgte emne er nu l�st op igen";
$lang['No_Topics_Moved'] = "Ingen emner er blevet flyttet";

$lang['Confirm_delete_topic'] = "Er du sikker p� du �nsker at slette de(t) valgte emne(r)?";
$lang['Confirm_lock_topic'] = "Er du sikker p� du �nsker at l�se de(t) valgte emne(r)?";
$lang['Confirm_unlock_topic'] = "Er du sikker p� du �nsker at l�se de(t) valgte emne(r) op?";
$lang['Confirm_move_topic'] = "Er du sikker p� du �nsker at flytte de(t) valgte emne(r)?";

$lang['Move_to_forum'] = "Flyt til forum";
$lang['Leave_shadow_topic'] = "Bevar henvisning til emnet i det gamle forum.";

$lang['Split_Topic'] = "Del et Emne";
$lang['Split_Topic_explain'] = "Ved at bruge nedenst�ende, kan du dele et emne i 2 dele, enten ved at v�lge posterne individuelt eller ved at dele ved et bestemt indl�g";
$lang['Split_title'] = "Ny Emne titel";
$lang['Split_forum'] = "Emnets nye Forum";
$lang['Split_posts'] = "Del de valgte indl�g";
$lang['Split_after'] = "Del fra og med det valgte indl�g";
$lang['Topic_split'] = "Det valgte emne er nu delt i 2";

$lang['Too_many_error'] = "Du har valgt mere end 1 indl�g. Et emne kan kun deles efter �t bestemt indl�g!";

$lang['None_selected'] = "Du har ikke valgt et emne at udf�re denne handling p�. G� venligst tilbage og v�lg et emne.";
$lang['New_forum'] = "Nyt forum";

$lang['This_posts_IP'] = "Dette indl�gs IP";
$lang['Other_IP_this_user'] = "Andre IP som denne bruger ogs� har skrevet indl�g fra";
$lang['Users_this_IP'] = "Brugere som har skrevet indl�g fra denne IP";
$lang['IP_info'] = "IP-information";
$lang['Lookup_IP'] = "Sl� IP op";


//
// Timezones ... for display on each page
//
$lang['All_times'] = "Alle tidspunkter er %s"; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = 'GMT - 12 timer';
$lang['-11'] = 'GMT - 11 timer';
$lang['-10'] = 'GMT - 10 timer';
$lang['-9'] = 'GMT - 9 timer';
$lang['-8'] = 'GMT - 8 timer';
$lang['-7'] = 'GMT - 7 timer';
$lang['-6'] = 'GMT - 6 timer';
$lang['-5'] = 'GMT - 5 timer';
$lang['-4'] = 'GMT - 4 timer';
$lang['-3.5'] = 'GMT - 1.5 timer';
$lang['-3'] = 'GMT - 3 timer';
$lang['-2'] = 'GMT - 2 timer';
$lang['-1'] = 'GMT - 1 time';
$lang['0'] = 'GMT'; 
$lang['1'] = 'CET (Europa, GMT+1)';
$lang['2'] = 'GMT + 2 timer';
$lang['3'] = 'GMT + 3 timer';
$lang['3.5'] = 'GMT + 3.5 timer';
$lang['4'] = 'GMT + 4 timer';
$lang['4.5'] = 'GMT + 4.5 timer';
$lang['5'] = 'GMT + 5 timer';
$lang['5.5'] = 'GMT + 5.5 timer';
$lang['6'] = 'GMT + 6 timer';
$lang['6.5'] = 'GMT + 6.5 timer';
$lang['7'] = 'GMT + 7 timer';
$lang['8'] = 'GMT + 8 timer';
$lang['9'] = 'GMT + 9 timer';
$lang['9.5'] = 'GMT + 9.5 timer';
$lang['10'] = 'GMT + 10 timer';
$lang['11'] = 'GMT + 11 timer';
$lang['12'] = 'GMT + 12 timer';
$lang['13'] = 'GMT + 13 timer';

// These are displayed in the timezone select box
$lang['tz']['-12'] = 'GMT - 12 timer';
$lang['tz']['-11'] = 'GMT - 11 timer';
$lang['tz']['-10'] = 'GMT - 10 timer';
$lang['tz']['-9'] = 'GMT - 9 timer';
$lang['tz']['-8'] = 'GMT - 8 timer';
$lang['tz']['-7'] = 'GMT - 7 timer';
$lang['tz']['-6'] = 'GMT - 6 timer';
$lang['tz']['-5'] = 'GMT - 5 timer';
$lang['tz']['-4'] = 'GMT - 4 timer';
$lang['tz']['-3.5'] = 'GMT - 3.5 timer';
$lang['tz']['-3'] = 'GMT - 3 timer';
$lang['tz']['-2'] = 'GMT - 2 timer';
$lang['tz']['-1'] = 'GMT - 1 time';
$lang['tz']['0'] = 'GMT'; 
$lang['tz']['1'] = 'CET (Central European Time, GMT+1)';
$lang['tz']['2'] = 'GMT + 2 timer';
$lang['tz']['3'] = 'GMT + 3 timer';
$lang['tz']['3.5'] = 'GMT + 3.5 timer';
$lang['tz']['4'] = 'GMT + 4 timer';
$lang['tz']['4.5'] = 'GMT + 4.5 timer';
$lang['tz']['5'] = 'GMT + 5 timer';
$lang['tz']['5.5'] = 'GMT + 5.5 timer';
$lang['tz']['6'] = 'GMT + 6 timer';
$lang['tz']['6.5'] = 'GMT + 6.5 timer';
$lang['tz']['7'] = 'GMT + 7 timer';
$lang['tz']['8'] = 'GMT + 8 timer';
$lang['tz']['9'] = 'GMT + 9 timer';
$lang['tz']['9.5'] = 'GMT + 9.5 timer';
$lang['tz']['10'] = 'GMT + 10 timer';
$lang['tz']['11'] = 'GMT + 11 timer';
$lang['tz']['12'] = 'GMT + 12 timer';
$lang['tz']['13'] = 'GMT + 13 timer';

$lang['datetime']['Sunday'] = "S�ndag";
$lang['datetime']['Monday'] = "Mandag";
$lang['datetime']['Tuesday'] = "Tirsdag";
$lang['datetime']['Wednesday'] = "Onsdag";
$lang['datetime']['Thursday'] = "Torsdag";
$lang['datetime']['Friday'] = "Fredag";
$lang['datetime']['Saturday'] = "L�rdag";
$lang['datetime']['Sun'] = "S�n";
$lang['datetime']['Mon'] = "Man";
$lang['datetime']['Tue'] = "Tirs";
$lang['datetime']['Wed'] = "Ons";
$lang['datetime']['Thu'] = "Tors";
$lang['datetime']['Fri'] = "Fre";
$lang['datetime']['Sat'] = "L�r";
$lang['datetime']['January'] = "Januar";
$lang['datetime']['February'] = "Februar";
$lang['datetime']['March'] = "Marts";
$lang['datetime']['April'] = "April";
$lang['datetime']['May'] = "Maj";
$lang['datetime']['June'] = "Juni";
$lang['datetime']['July'] = "Juli";
$lang['datetime']['August'] = "August";
$lang['datetime']['September'] = "September";
$lang['datetime']['October'] = "Oktober";
$lang['datetime']['November'] = "November";
$lang['datetime']['December'] = "December";
$lang['datetime']['Jan'] = "Jan";
$lang['datetime']['Feb'] = "Feb";
$lang['datetime']['Mar'] = "Mar";
$lang['datetime']['Apr'] = "Apr";
$lang['datetime']['May'] = "Maj";
$lang['datetime']['Jun'] = "Jun";
$lang['datetime']['Jul'] = "Jul";
$lang['datetime']['Aug'] = "Aug";
$lang['datetime']['Sep'] = "Sep";
$lang['datetime']['Oct'] = "Okt";
$lang['datetime']['Nov'] = "Nov";
$lang['datetime']['Dec'] = "Dec";

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = "Information";
$lang['Critical_Information'] = "Kritisk Information";

$lang['General_Error'] = "Generel Fejl";
$lang['Critical_Error'] = "Kritisk Fejl";
$lang['An_error_occured'] = "Der er opst�et en Fejl";
$lang['A_critical_error'] = "Der er opst�et en kritisk Fejl";


//
// That's all Folks!
// -------------------------------------------------

?>
