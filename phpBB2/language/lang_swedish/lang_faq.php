<?php
/***************************************************************************
 *                          lang_faq.php [Swedish]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_faq.php,v 1.1.2.1 2002/05/19 17:32:51 psotfx Exp $
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
// To add an entry to your FAQ simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your FAQ entries, if you absolutely must then escape them ie. \"something\";
//
// The FAQ items will appear on the FAQ page in the same order they are listed in this file
//
 
  
$faq[] = array("--","Inloggnings- och registreringsproblem");
$faq[] = array("Varf�r kan jag inte logga in?", "Har du registrerat dig? Du m�ste registrera dig f�r att kunna logga in. Har du blivit avst�ngd fr�n forumet (i s� fall visas ett meddelande)? Om s� �r fallet b�r du kontakta webbmastern eller forum administrat�ren f�r att f� reda p� varf�r. Om du har registrerat dig och inte �r avst�ngd men �nd� inte kan logga in kontrollera d� ditt anv�ndarnamn och l�senord. Oftast �r det problemet, om inte s� kontakta forum administrat�ren.");
$faq[] = array("Varf�r m�ste jag registera mig?", "Det �r inte s�kert att du beh�ver, det �r upp till forum administrat�ren om du beh�ver registrera dig f�r att skriva ett meddelande. Dock s� ger registreringen dig ytterligare funktioner som inte �r tillg�ngliga f�r g�ster, till exempel avatar bilder, personliga meddelanden, e-post till andra anv�ndare, prenumeration av anv�ndargrupper, etc. Det tar endast n�gra sekunder att registrera sig s� det �r att rekommendera.");
$faq[] = array("Varf�r blir jag automatiskt utloggad?", "Om du inte kryssar i <i>Logga in mig automatiskt</i> n�r jag bes�ker forumet s� kommer du endast att vara inloggad under en begr�nsad tid. Det f�r att f�rhindra att n�gon missbrukar ditt konto. F�r att f�rbli inloggad kryssa i rutan vid inloggningen, det �r dock inte att rekommendera om du l�ser forumet fr�n en offentlig dator, s�som bibliotek, Internetcaf�, skola, etc.");
$faq[] = array("Hur hindrar jag att mitt anv�ndarnamn visas p� Vem �r Online-listan?", "I din profil finns en inst�llning <i>D�lj din online status</i>, om du �ndrar inst�llningen till <i>p�</i>, s� syns du bara f�r forum-administrat�rer och dig sj�lv. Du kommer att r�knas som en dold anv�ndare.");
$faq[] = array("Jag har gl�mt mitt l�senord!", "Ingen panik. �ven om ditt l�senord inte kan l�sas s� kan det �ndras. F�r att g�ra detta g� tillbaka till login sidan och klicka p� <u>Jag har gl�mt mitt l�senord</u>, f�lj instruktioner och du kommer att vara tillbaka online p� nolltid.");
$faq[] = array("Jag har registrerat mig men jag kan inte logga in!", "Kontrollera f�rst att du anv�nder r�tt anv�ndarnamn och l�senord. Om de �r okej s� kan tv� saker intr�ffat. Om COPPA st�d �r aktiverat och om du klickat p� <u>Jag �r under 13 �r</u> n�r du registrerat dig s� m�ste du f�lja instruktionerna du f�tt. Om s� inte �r fallet s� kanske ditt konto beh�ver aktiveras? Vissa forum kr�ver att alla nyregisteringar m�ste aktiveras, antingen av dig sj�lv eller av administrat�ren innan du kan logga in. N�r du registrerade dig s� st�r det angivet om du m�ste aktivera kontot. Om du f�tt ett e-post meddelande s� f�lj instruktionerna i det, om inte s� �r du s�ker p� angett en korrekt e-post addresS? En anledning till att man anv�nder aktivering �r att minska m�jligheten f�r <i>okunniga</i> anv�ndare att missbruka forumet anonymt. Om du �r s�ker p� att e-post adressen �r giltig s� kontakta administrat�ren f�r forumet.");
$faq[] = array("Jag har registrerat mig tidigare men nu kan jag inte logga in l�ngre?!", "De troligaste anledningarna till detta �r; du har angett ett felaktig anv�ndarnamn eller l�senord (l�s e-postmeddelandet du fick n�r du f�rst registrerade dig) eller s� har administrat�ren raderat ditt konto av n�gon anledning. Om det �r det andra fallet s� kanske du inte har skrivit n�got inl�gg? Det �r normalt f�r forum att ibland radera anv�ndare som inte har skrivit n�got f�r att minska storleken p� databasen. F�rs�k registrera dig igen och skriv ett inl�gg i en diskussion.");


$faq[] = array("--","Anv�ndarpreferenser och inst�llningar");
$faq[] = array("Hur �ndrar jag mina inst�llningar?", "Alla dina inst�llningar (om du har registrerat dig) �r lagrade i databasen. F�r att �ndra dom klicka p� Profill�nken (visas oftast h�gst upp p� sidan). Detta l�ter dig �ndra alla dina inst�llningar.");
$faq[] = array("Tiden �r inte r�tt!", "Tiden �r med all s�kerhet korrekt, dock vad du kanske ser �r tid som visas i en annan tidszon �r den du befinner dig i. Om s� �r fallet s� b�r du �ndra dina inst�llningar f�r att tidszonen ska st�mma �verens med din plats, tex. Stockholm, Helsingfors, New York, Sydney, etc. Notera att f�r att �ndra tidszonen, och de flesta inst�llningarna, s� m�ste du vara registrerad. S� om du inte har registrerat dig s� �r det god tid att g�ra det nu, om du urs�ktar ordvitsen!");
$faq[] = array("Jag har �ndrat tidszonen och tiden �r fortfarande fel!", "Om du �r s�ker p� att du har satt tidszonen korrekt och tiden fortfarande �r felaktig s� �r \"Daylight Savings Time\" (eller sommartid som det kallas i Sverige och i andra l�nder) det mest troliga svaret. Forumet �r inte designat f�r att hantera f�r�ndringarna mellan vinter och sommartid s� under sommar m�naderna kan tiden vara en timme fel.");
$faq[] = array("Mitt spr�k finns inte i listan!", "Det mest troliga sk�let f�r detta �r att antingen s� har administrat�ren inte installerat ditt spr�k eller s� har inte n�gon �versatt forumet till ditt spr�k. Fr�ga administrat�rerna om de inte kan installera det spr�k du beh�ver och om det inte finns s� tag g�rna chansen och skapa en ny �vers�ttning. Mer information finns p� phpBB websiten (se l�nken l�ngst ner p� sidorna)");
$faq[] = array("Hur visar jag en bild under mitt anv�ndarnamn?", "Det kan finnas tv� bilder under anv�ndarnamnet n�r man tittar i en tr�d. Den f�rst �r en bild som �r associerat med din rang, oftast �r bilderna i form av stj�rnor eller block som visar hur m�nga inl�gg du har skrivit eller din status i forumet. Under den kan det finns en bild som �r k�nt som en avatar, denna �r i allm�nhet unik eller personlig f�r varje anv�ndare. Det �r upp till forum-administrat�ren att till�ta avatarer och de kan �ven v�lja p� vilket s�tt avatarer g�rs tillg�ngliga f�r anv�ndaren. Om du inte kan anv�nda avatarer i forumet s� �r det ett beslut av administrat�rerna, och du kan fr�ga dom om deras sk�l till detta (vi �r s�kra p� att de �r bra!)");
$faq[] = array("Hur �ndrar jag min rank?", "I normala fall kan du inte �ndra din rang direkt (rang st�r under ditt anv�ndarnamn i �mnen och i din profil beroende p� vilken stil som valts). De flesta forumen anv�nder rang f�r att indikera antalet inl�g du har skrivet och f�r att identifiera vissa anv�ndare, e.g. moderatorer och administrat�rer kan ha en speciell rang. F�rs�k att inte missbruka forumet genom att skriva on�diga inl�gg bara f�r att �ka din rang, administrat�rerna kommer i s�fall att helt enkelt s�nka ditt antal inl�gg.");
$faq[] = array("N�r jag klickar p� e-postl�nken till en anv�ndare s� vill forumet att jag loggar in?", "Tyv�rr kan bara registrerade anv�ndaren skicka e-post till andra anv�ndare vid det inbyggda e-post formul�ret (om administrat�rerna har aktivera denna finess). Detta �r f�r att f�rhindra missbruk av e-postsystemet av anonyma anv�ndare.");


$faq[] = array("--","Problem med inl�gg");
$faq[] = array("Hur skriver jag ett meddelande i ett forum?", "Enkelt, klicka p� den relevanta knappen antingen p� forum eller �mnes sidan. Det �r m�jligt att du beh�ver registrera dig innan du kan skriva ett meddelande, de optioner du kan g�ra visas l�ngst ner p� forum och �mnes sidan (<i>Du kan skapa ett nytt meddelande, Du kan r�sta i omr�stningar, etc<i> listan)");
$faq[] = array("Hur �ndrar jag eller raderar jag ett inl�gg?", "S�vida du inte �r administrat�r eller moderator kan du bara redigera och radera din egna inl�gg. Du kan redigera ett meddelande (ibland bara inom en begr�nsad tid efter det att det skrevs) genom att klicka p� <i>redigera</i> knappen f�r det relevanta meddelandet. Om n�gon redan har besvarat meddelandet kommer det att finnas en f�rklarande text under meddelandet som talar om det har redigerats, detta visar hur m�nga g�nger meddelandet har blivit redigerat. Detta syns enbart om ingen har svarat, det syns inte heller om en moderator eller administrat�r redigerar meddelandet (dock b�r de l�mna ett meddelande som talar om vad de har �ndrat och varf�r). Notera att normala anv�ndare inte kan radera meddelanden n�r n�gon svarat p� det.");
$faq[] = array("Hur l�gger jag till en signatur till mitt meddelande?", "F�r att l�gga till en signatur till ett meddelande m�ste du f�rst skapa en, detta g�r du via din profil. N�r du v�l har skapat din signatur kan du kryssa i <i>L�gg till signatur</i> n�r du skapar meddelandet f�r att l�gga til din signatur. Du kan ocks� l�gga till en signatur automatiskt till alla din meddelanden genom att st�lla in det i din profil (du kan fortfarande hindra din signatur fr�n att l�ggas till genom att kryss av l�gg till signatur rutan n�r du skapar meddelandet)");
$faq[] = array("Hur skapar jag en omr�stning?", "Att skapa en omr�stning �r enkelt, n�r du skapar ett nytt �mne (eller redigerar det f�rsta meddelandet i ett �mne) s� ska det finnas ett <i>L�gg till omr�stning</i> foruml�r under nytt meddelande boxen (om du inte kan se detta s� har du f�rmodligen inte r�ttigheter att skapa nya omr�stningar). Du b�r ange en titel f�r omr�stningen och minst tv� val (f�r att skapa en valm�jlighet ange fr�gan och klicka p� <i>L�gg till nytt val</i> knappen. Du kan ocks� ange en tidsbegr�sning f�r omr�stningen, 0 �r o�ndligt. Det finns en begr�sning p� hur m�nga olika valm�jligheter du kan ha, detta best�ms av forum-administrat�ren.");
$faq[] = array("Hur �ndrar jag en omr�stning?", "Meddelanden och omr�stningar kan enbart redigeras av den som skapat dom, eller av moderatorer eller administrat�rer. F�r att redigera en omr�stning klicka p� f�rsta meddelandet i �mnet (denna �r alltid associerad med omr�stningen). Om ingen har r�stat s� kan anv�ndare radera omr�stningen eller redigera valm�jligheterna. Dock om n�gon har r�stat s� kan bara moderatorer eller administrat�rer redigera eller radera omr�stningen. Detta f�r att f�rhindra folk att rigga omr�stningar genom att �ndra valm�jligheter n�r folk redan har r�stat.");
$faq[] = array("Varf�r kan jag inte komma in i ett forum?", "Vissa forum kan vara begr�nsad till vissa anv�ndare eller grupper. F�r att lista, l�sa, skriva, etc s� m�ste du ha en speciell auktorisation, enbart forum moderatoren eller forum-administrat�rer kan ge denna r�ttigheter, s� du m�ste kontakta dom.");
$faq[] = array("Varf�r kan jag inte r�sta i omr�stningar?", "Enbart registrerad anv�ndare kan r�sta i omr�stningar (f�r att hindra fejkade resultat). Om du �r registrerad och du fortfarande inte kan r�sta s� har du f�rmodligen inte r�ttigheter till att r�sta.");


$faq[] = array("--","Formatteringar och rubrik/�mnes typer");
$faq[] = array("Vad �r BBCode?", "BBCode �r en speciell implementation av HTML, om du kan anv�nda BBCode best�ms av administrat�ren (du kan ocks� hindra anv�ndningen av BBCode i det aktuella meddelandet n�r du skapar det). BBCode i sig �r snarlikt HTML, taggar �r omg�rdade/inneslutna i hakparanteser [ och ] isf &lt; och &gt; och BBCode ger st�rre kontroll �ver hur vad och hur n�gonting visas. F�r mera information om BBCode titta i guiden som kan n�s fr�n nytt meddelande sidan.");
$faq[] = array("Kan jag anv�nda HTML?", "Det beror p� om administrat�ren till�ter dig, de har total kontroll �ver det. Om det �r till�tet kommer du att finna att det bara �r vissa taggar som fungerar. Detta �r en <i>s�kerhets</i> �tg�rd f�r att hindra folk fr�n att missbruka forumet genom att anv�nda taggar som kan f�rst�ra designen eller skapa andra problem. Om HTLM �r till�t s� kan du hindra det i det aktuella meddelandet n�r du skapar det.");
$faq[] = array("Vad �r smileys?", "Smileys, eller Emoticons �r sm� grafiska bilder som kan anv�ndas f�r att uttrycka n�gon typ av k�nsla via en f�rkortning, e.g. :) betyder lycklig, :( betyder ledsen. Hela listan av emoticons kan du hitta via nytt meddelande formul�ret. F�rs�k att inte �veranv�nda smileys, de kan fort f� ett meddelande att bli ol�sbart och en moderator kan best�mma sig f�r att redigera bort dem fr�n meddelandet eller radera hela meddelandet.");
$faq[] = array("Kan jag posta bilder?", "Bilder kan visas i ditt meddelande. Dock finns det f�r tillf�llet ingen funktion f�r att ladda upp bilder till forumet. D�rf�r m�ste du l�nka till en bild som lagras p� en publik webserver, t.ex. <pre>http://www.some-unknown-place.net/my-picture.gif</pre>. Du kan inte l�nka till bilder som lagras p� din lokala PC (s�vida den inte �r en publikt tillg�nglig server) eller till bilder som lagras bakom auktoriserings mekanismer, e.g. hotmail eller yahoo mailkonto, l�senordsskyddade siter, etc. F�r att visa en bild s� anv�nd antingen BBCode [img] taggen eller motsvarande HTML (om det till�ts).");
$faq[] = array("Vad �r Viktiga �mnen/meddelanden?", "Viktiga meddelande inneh�ller oftast viktig information och du b�r l�sa dom s� fort som m�jligt. Viktiga meddelande syns h�gst upp p� varje sida i det forum som de skrivs. Om du kan eller inte kan skriva viktiga meddelande beror p� vilka r�ttigheter som beh�vs, vilka styrs av administrat�rerna.");
$faq[] = array("Vad �r Klistrade �mnen/meddelanden?", "Klistrade �mnen syns under viktiga meddelande och enbart p� f�rsta sidan. De inneh�ller ofta viktig information s� du b�r l�sa dom n�r det �r m�jligt. S�som med viktiga meddelande s� �r det administrat�rerna som best�mmer vilka r�ttigheter som beh�vs f�r att kunna skriva Klistrade �mnen.");
$faq[] = array("Vad �r l�sta �mnen/meddelanden?", "L�sta �mnen skapas av antingen forum moderatorerna eller av forum-administrat�rerna. Du kan inte besvara ett l�st �mne och om den inneh�ller en omr�stning s� stoppas denna automatiskt. �mnen kan l�sas av m�nga sk�l.");


$faq[] = array("--","Anv�ndarniv�er och grupper");
$faq[] = array("Vad �r administrat�rer?", "Administrat�rer �r personer som har den absolut h�gst niv�n av kontroll �ver hela forumet. Dessa personer kan kontrollera alla aspekter av forumets drift vilket inkluderar att s�tta r�ttigheter, bannlysa anv�ndare, skapa anv�ndargrupper eller moderatorer, etc. De har ocks� fulla moderator r�ttigheter i alla forum.");
$faq[] = array("Vad �r moderatorer?", "Moderatorer �r individer (eller grupper av individer) vilkas jobb det �r att sk�ta om de dagliga aktiviterna i forumet. De har r�ttigheter att redigera eller radera meddelanden och l�sa, l�sa upp, flytta, radera och dela rubriker i forumet som de modererar. Generellt s� �r moderaratorer d�r f�r att hindra personer fr�n att <i>komma ifr�n �mnet<i> eller att skriva missbrukande eller anst�tligt material.</i>");
$faq[] = array("Vad �r anv�ndargrupper?", "Anv�ndargrupper �r ett s�tt som forum-administrat�rerna anv�nder f�r att gruppera anv�ndare. Varje anv�ndare kan tillh�ra flera grupper (detta skiljer fr�n de flesta andra forumen) och varje grupp kan tilldelas individuella r�ttigheter. Detta g�r det enkelt f�r administrat�rer att ange flera anv�ndare som moderatorer f�r ett forum eller ge dom �tkomst till ett privat forum, etc.");
$faq[] = array("Hur g�r jag med i en anv�ndargrupp?", "F�r att ansluta dig till en anv�ndargrupp s� klicka p� anv�ndargruppl�nken i sidhuvudet (beroende p� designmallen som anv�nds), du kan d� visa alla anv�ndargrupper. Inte alla grupper �r <i>�ppna</i>, vissa �r st�ngda och vissa kan �ven vara dolda. Om gruppen �r �ppen kan du ans�ka om att f� bli medlem genom att klicka p� l�mplig knapp. Anv�ndargruppens moderator m�ste d� i sin tur bevilja din ans�kan och kan �ven fr�ga varf�r du vill bli medlem. Och tjata inte p� moderatorerna om de nekar dig de har s�kerligen sina sk�l.");
$faq[] = array("Hur blir jag moderator f�r en anv�ndargrupp?", "Anv�ndargrupper skapas initialt av administrat�rerna och de utser ocks� gruppmoderator. Om du �r intresserad av att skapa en anv�ndargrupp s� �r din f�rsta kontakt n�gon av administrat�rerna. Skicka ett personligt meddelande till de.");


$faq[] = array("--","Personliga meddelanden");
$faq[] = array("Jag kan inte skicka personliga meddelanden!", "Det finns tre sk�l till detta; du �r inte registrerad och/eller du har inte logga in, administrat�ren har inaktiverat personliga meddelanden f�r hela forumet eller administrat�rern har stoppat dig fr�n att skicka meddelanden. Om det �r det senare fallet s� fr�ga administrat�ren varf�r.");
$faq[] = array("Jag f�r o�nskade personliga meddelanden!", "I framtiden kommer vi att l�gga till en ignoreralista till det personliga meddelandesystemet. Om du forts�tter att f� o�nskade meddelanden s� prata med en administrat�r, de har m�jligheter att stoppa en anv�ndare fr�n att skicka personliga meddelanden �verhuvudtaget.");
$faq[] = array("Jag har f�tt spam eller anst�tliga e-postmeddelanden fr�n n�gon p� detta forum!", "Vi �r ledsna att h�ra detta. E-postforuml�ret i forumet inneh�ller skydd f�r att f�rs�ka att sp�ra anv�ndare som skickar s�dana e-postmeddelanden. Du b�r e-posta administrat�rerna p� forumet och bifoga en full kopia av e-postmeddelande du fick och det �r mycket viktigt att du bifogar e-posthuvudet (detta inneh�ller detaljerna om vilken anv�ndare som skickat e-postmeddelandet). Administrat�rerna kan d�refter vidta �tg�rder.");

//
// These entries should remain in all languages and for all modifications
//
$faq[] = array("--","phpBB 2 Issues");
$faq[] = array("Who wrote this bulletin board?", "This software (in its unmodified form) is produced, released and is copyright  <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Group</a>. It is made available under the GNU General Public Licence and may be freely distributed, see link for more details");
$faq[] = array("Why isn't X feature available?", "This software was written by and licensed through phpBB Group. If you believe a feature needs to be added then please visit the phpbb.com website and see what phpBB Group have to say. Please do not post feature requests to the board at phpbb.com, the Group uses sourceforge to handle tasking of new features. Please read through the forums and see what, if any, our position may already be for a feature and then follow the procedure given there.");
$faq[] = array("Who do I contact about abusive and/or legal matters related to this board?", "You should contact the administrator of this board. If you cannot find who this you should first contact one of the forum moderators and ask them who you should in turn contact. If still get no response you should contact the owner of the domain (do a whois lookup) or, if this is running on a free service (e.g. yahoo, free.fr, f2s.com, etc.), the management or abuse department of that service. Please note that phpBB Group has absolutely no control and cannot in any way be held liable over how, where or by whom this board is used. It is absolutely pointless contacting phpBB Group in relation to any legal (cease and desist, liable, defamatory comment, etc.) matter not directly related to the phpbb.com website or the discrete software of phpBB itself. If you do email phpBB Group about any third party use of this software then you should expect a terse response or no response at all.");

//
// This ends the FAQ entries
//

?>