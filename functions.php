<?php



if(!$css_size){
	if($HTTP_COOKIE_VARS["clicksize"]){
		$css_size = $HTTP_COOKIE_VARS["clicksize"]; 
	}
	else {
		$css_size = 1; 
		setcookie("clicksize", "$css_size", time() + 3600);
	}
}

else {
		setcookie("clicksize", "$css_size", time() + 3600);
}



 
if(!$lang_act){
	if($HTTP_COOKIE_VARS["clicklang"]){
		$lang_act = $HTTP_COOKIE_VARS["clicklang"]; 
		include("/home/sites/site9/web/languages/$lang_act.php");
	}
	else {
		$lang_act = "english"; 
		setcookie("clicklang", "$lang_act", time() + 3600);
		include("/home/sites/site9/web/languages/$lang_act.php");
	}
}

else {
		setcookie("clicklang", "$lang_act", time() + 3600);
		include("/home/sites/site9/web/languages/$lang_act.php");
}
 

function menupages($option){

global $wkdisgood,$language,$lang_act;

 $menu = array();
 		$menu = array();
		 $menu['0'] = "about|".$language['aboutclickhere'];
		 $menu['1'] = "news|".$language['latestnews'];
		 $menu['2'] = "services|".$language['services'];
		 $menu['3'] = "pricelist|".$language['prices'];
		 $menu['4'] = "map|".$language['location'];
		 $menu['5'] = "contactus|".$language['contactus'];
		 $menu['6'] = "forums|".$language['forumschat'];
		 $menu['7'] = "images|".$language['gallery'];
		
	if($option=="menu"){		 
		 for($i=0;$i<count($menu);$i++){
		 
		 $urls = explode("|",$menu[$i]);
		 if($wkdisgood==$urls[0]){
		 $bg = "<img alt='1' src=\"images/arrows2.gif\" width=\"14\" height=\"15\">";
		 }
		 else {
		 $bg = "<img alt='1' src=\"images/arrows.gif\" width=\"14\" height=\"15\">";
		 }
		 print " <tr>
                <td width=\"23%\" height=\"25\" align=\"center\" valign=\"middle\">$bg</td>
                <td width=\"77%\"><a href=\"index.php?pageview=$urls[0]\" class=\"tab\">$urls[1]</a></td>
              </tr>";
		}

	}
	
	if($option=="pagetitle"){
		for($i=0;$i<count($menu);$i++){
		 
		 $urls = explode("|",$menu[$i]);
		 if($wkdisgood==$urls[0]){
		 return $urls[1];
		 }
		 else {
		 continue;
		 }
		}
	}
}



?>