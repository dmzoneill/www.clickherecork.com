<?


//---config--
$username = 'user';
$password = 'pass';
//a username and password to control access to this page


$this_page = 'http://example.com/web_mirror.php';
//this is the url of this page (used to make all links point to this page)

$url_var_name = 'web_mirror_url';
//this is the variable that contains the page, it should be pretty
//unique so it won't interfere with forms

$tags		= 	array(
				'a',
				'area',
				'base',
				'bgsound',
				'embed',
				'frame',
				'iframe',
				'img',
				'link',
				'param',
				'script',
				'input',
				'applet',
				'td',
				'tr',
				'table'
				);
$attribute	= 	array('href',//<a>
				'href',//<area>
				'href',//<base>
				'src',//<bgsound>
				'src',//<embed>
				'src',//<frame>
				'src',//<iframe>
				'src',//<img>
				'href',//<link>
				'value',//<param>
				'src',//<script>
				'src',//<input>
				'code',//<applet>
				'background',
				'background',
				'background'
				);
//these are the tags and attributes to edit
//do NOT put the <form> tag in, it is done separately



$stop_url = array('param' => //the tag, in this case <param>, param is the key
				array(//now what values are not a url
					'high',
					'low',
					'best',
					'autolow',
					'autohigh',
					'true',
					'false',
					'video/quicktime',
					'myself'
					)
			);
//$stop_url is what values should not be consirded a url
//use this for tags like param that don't nessecarily
//have to have a url, note, all values must be lowercase

$remove_tags = array();
$remove_tags['script'] = 0;//can remove javascript that does not work correct with this script
$remove_tags['noscript'] = -1;//enables the text in the noscript
//$remove_tags['img'] = 1;//can speed up page loads
//$remove_tags is an array of tags to remove completely from the page
//(numbers mean, 1=there is no associated end tag, 0=there is an end tag, delete everything in between too
//-1=same as 0 but leave the stuff in between)

//var key replacements
//some sites (ie yahoo.com) have a period (.) in the key name for the form
//php automatically converts this to an underscore (_) and sends that
//yahoo considers it different and does not accept the form
//the $var_key_replace can be used to tell php to treat
//certain key from a site as whatever you want
$var_key_replace[] = array(
    'regex_host' => '/yahoo.com$/i',//matched against the host
    'regex_full_url' => '//', //matched against the full url (http://site/path)
    //this will be used as the regex for preg_match() [a perl
    //and will be used to determine if this set should be used
    //for this url
    'replace_keys' => array(
        //these are in the form of 'what_php_sees' => 'what_it_should_see',
        '_done' => '.done',
        '_tries' => '.tries',
        '_src' => '.src',
        '_md5' => '.md5',
        '_hash' => '.hash',
        '_js' => '.js',
        '_last' => '.last',
        '_intl' => '.intl',
        '_bypass' => '.bypass',
        '_partner' => '.partner',
        '_u' => '.u',
        '_v' => '.v',
        '_challenge' => '.challenge',
        '_yplus' => '.yplus',
        '_emailCode' => '.emailCode',
        '_ev' => '.ev',
        '_branch' => '.branch',
        '_chkP' => '.chkP',
        '_persistent' => '.persistent',
        '_save' => '.save',
        '_rand' => '.rand',
        '_crumb' => '.crumb',
        '_slogin' => '.slogin',
        '_partner' => '.partner',
        '_intl' => '.intl',
        '_fUpdate' => '.fUpdate',
        '_prelog' => '.prelog',
        '_bid' => '.bid',
        '_aucid' => '.aucid',
        '_scrumb' => '.scrumb'
    )

);

//these attributes will just get deleted from any tag that holds them
$remove_attribute = array();
$remove_attribute[] = 'onsubmit';

//for debugging
$log_all_connections = FALSE;
$log_file = './web_mirror.log';

//-------Do Not Edit below this line with Knowledge of PHP-------
if (!function_exists('curl_init')){
    die('You Do not have cURL compiled into PHP'
        .'This script requires cURL '
        .'<a href="http://php.net/manual/en/ref.curl.php">Click Here For More Info</a>'
    );
}
//get the url of the page we are retreiving
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	if (isset($_POST[$url_var_name])){
		$url_name = $_POST[$url_var_name];
	}
} else {
	if (isset($_GET[$url_var_name])){
		$url_name = $_GET[$url_var_name];
	}
}

if (!isset($_SERVER['PHP_AUTH_USER'])){
	header('WWW-Authenticate: Basic realm="Web Mirror"');
	header('HTTP/1.0 401 Unauthorized');
	echo '401 ERROR';
	exit();
} elseif ($_SERVER['PHP_AUTH_USER'] != $username || $_SERVER['PHP_AUTH_PW'] != $password){
	header('WWW-Authenticate: Basic realm="Web Mirror"');
	header('HTTP/1.0 401 Unauthorized');
	echo '401 ERROR';
	exit();
}

if (!isset($url_name)){

	//this is the html that is shown when the page is accessed without a url var
	echo <<<EOF
		<html><head><title>Web Mirror Script</title></head><body>
		<table width="800" align="center"><tr><td width="250"><!--Google Ad--></td><td width="300">
		<form action="$this_page" target="page">
			<center>
			URL:<input type="text" name="$url_var_name" size="50" value="http://" /><br />
			<input type="submit" value="Go" /></center>
		</form>
		</td><td width="250"><!--Google Ad--></td></tr></table>
		<iframe width="100%" height="90%" src="$this_page?$url_var_name=" name="page" align="center" />
		</body></html>
EOF;

	exit();
} elseif (empty($url_name)){
	//this is the html that is shown when the page is accessed with an empty url var
	echo <<<EOF
	<html><head><title>Web Mirror Script</title></head><body>
	<center><h1>Welcome!</h1></center>
	<center>
	Yahoo! e-mail should work now (just click &quot;Switch Back To the Old Version&quot; after you login)<br />
	
	</center>
	</body></html>
EOF;

	exit();
}
//<?php //fix my text editor's highlighting
ini_set('session.use_cookies', 1);//make sure sessions use cookies
session_start();//start the session
//$_SESSION = array();
//make the cookie array is there
$cookie_file = tempnam('/tmp', 'web_mirror_cookie');
$cookie_file_new = tempnam('/tmp', 'web_mirror_cookie');
if (isset($_SESSION['cookies'])){
	$fp = fopen ($cookie_file, 'w');
	if (!$fp){
	   die('Unable to Open Temporary Cookie File');
    }
	fwrite($fp, $_SESSION['cookies']);
	fclose($fp);
}
//make sure it is a good url, if not try to correct it
if (preg_match('/^(http|https|ftp):\/\/(.*?)/i',$url_name)){
	$url= $url_name;
} else {
	$url = 'http://'.$url_name;
}
$url_parts = array();
$path_parts = array();
set_location($url);

//incase editing the $_GET/$_POST array won't work
$retreived_vars['POST'] = $_POST;
$retreived_vars['GET'] = $_GET;

//edit the variables as necessary
foreach ($var_key_replace as $k_a){
    if (preg_match($k_a['regex_host'],$url_parts['host']) && preg_match($k_a['regex_full_url'],$url)){
        //the regex says that we need to replace the keys
        foreach ($retreived_vars as $pg => $pg_a){
            foreach ($pg_a as $pg_key => $pg_value){
                if (array_key_exists($pg_key, $k_a['replace_keys'])){
                    $retreived_vars[$pg][$pg_key] = array('key' => $k_a['replace_keys'][$pg_key], 'value' => $retreived_vars[$pg][$pg_key]);
                }
            }
        }
    
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	//send all post data
	$extra_data = '';
	foreach ($retreived_vars['POST'] as $post_name => $post_data){
		if ($post_name != $url_var_name){
            if (is_array($post_data)){
                if (array_key_exists('key', $post_data) && array_key_exists('value', $post_data)){
                    $extra_data .= urlencode($post_data['key']) . '=' . urlencode($post_data['value']) . '&';
                } else {
                    //for forms that use arrays
                    foreach ($post_data as $p_k => $p_v){
                        $extra_data .= urlencode($post_name.'['.$p_k.']') . '=' . urlencode($p_v) . '&';
                    }
                }
            } else {
                $extra_data .= urlencode($post_name) . '=' . urlencode($post_data) . '&';
            }
		}
	}
} else {
	$extra_data = '?';
	foreach ($retreived_vars['GET'] as $get_name => $get_data){
		if ($get_name != $url_var_name){
			$extra_data .= urlencode($get_name) . '=' . urlencode($get_data) . '&';
		}
	}
	if (strstr($url,'?')){
		$url = str_replace('?',$extra_data, $url);
	} else {
		$url = $url.$extra_data;
	}
	
}
//set some variables for the callback functions
$content_type_header = '';
$location = '';
$page = '';
$data_started = FALSE;
//Start cURL to get the page
debug_log('New Connection - Fields Sent', $extra_data);
debug_log('Cookies File Used', $_SESSION['cookies']);
$curl_handle = curl_init($url);

//set options
curl_setopt($curl_handle, CURLOPT_HEADER, 0);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl_handle, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl_handle, CURLOPT_HEADERFUNCTION, 'read_header');
curl_setopt($curl_handle, CURLOPT_WRITEFUNCTION, 'read_data');
curl_setopt($curl_handle, CURLOPT_COOKIEFILE, $cookie_file);
curl_setopt($curl_handle, CURLOPT_COOKIEJAR, $cookie_file_new);

//send the browser name
curl_setopt($curl_handle,CURLOPT_USERAGENT,$_SERVER['HTTP_USER_AGENT']);//Real Browser
//curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)');//MSIE
//curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Googlebot/2.1 (+http://www.googlebot.com/bot.html)');//googlebot

//add any post data if needed
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	curl_setopt($curl_handle, CURLOPT_POST, 1);
	curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $extra_data);
}
//retrieve the page
curl_exec($curl_handle);
curl_close($curl_handle);

//now save the cookie file and delete it
$fp = fopen($cookie_file_new, 'r');
if (!$fp){
    die('Failed To Read Cookie File');
}
if (!isset($_SESSION['cookies'])){
    $_SESSION['cookies'] = '';
}
$_SESSION['cookies'] = "";
while (!feof($fp)){
    $_SESSION['cookies'] .= fread($fp, 8192);
}
fclose($fp);
unlink($cookie_file);
unlink($cookie_file_new);


//don't go any further if $page is empty, the read_data function did everything
if ($page == '' ){
	die();
}

//update the page url if there was a location header
if ($location != ''){
	set_location($location);
}

//remove all tags in the $remove_tags array
foreach ($remove_tags as $tag => $single_tag){
    if ($single_tag == -1){
        $page = preg_replace("/<$tag.*?>(.*?)<\/$tag>/is", '\1', $page);
        //$page = htmlspecialchars($page);
    } else {
        if ($single_tag){
            $page = preg_replace("/<$tag.*?>/is", '', $page);
        } else {
            $page = preg_replace("/<$tag.*?>.*?<\/$tag>/is", '', $page);
        }
    }
}

if (stristr($content_type_header,'text/html')!==false){
	//cycle through all tags then the <form tag if it is html
	for ($i = 0;$i < sizeof($tags);$i++){
		$page = edit_tags($tags[$i],$attribute[$i],$page);
	}
	$page = edit_forms($page);
	$page = edit_meta_refresh($page);//the meta refreshes may be needed to
	//this will get all/most the css out of the html and edit it
	foreach ($remove_attribute as $remove_me){
	   $page = preg_replace("!$remove_me=\".*?\"!is", '', $page);
	}
	$page = preg_replace_callback('!(<style[^>]*?>)(.*?)(</style>)!is', 'edit_style_tag_callback', $page);
} else {
	//the page is css, not html
	header('Content-type: text/css');
	$page = edit_css($page);
}

// send the page to browser
echo $page;



//----------Functions-------------


/*
*---This is the function to edit
*---the html, it will search for a tag and edit it
*/
function edit_tags($tag, $attribute, $html){
	$no_http_pattern ="!(<($tag)\s+[^<>]*?(?<=\s)$attribute\s*=\s*'?\"?)([^<>]*?)('?\"?>|'?\"?\s[^<>]*?>)!is";
	$html = preg_replace_callback($no_http_pattern, 'edit_tags_callback', $html);
	return $html;
}

/*
*--This function will search css and edit the url's
*--in it that are in this form: url(http://example.com/index.html)
*/
function edit_css ($css){
	$pattern = '!(url\s*?\(\s*?\'?"?)(.*?)("?\'?\s*?\))!is';
	$css = preg_replace_callback($pattern, 'edit_css_callback',$css);
	$pattern = '!(import\s*\'?"?\s*)(.*?)(\'?"?\s*;)!is';
	$css = preg_replace_callback($pattern, 'edit_css_callback',$css);
	return $css;	
}

/*
*--This function will encode the url in an attribute
*--to point to the right location it will not add
*--the variable if its to be used for a form
*/
function edit_url($old_url, $form){
	// make some varibles global
	global $this_page;
	global $url_parts;
	global $path_parts;
	global $url_var_name;
	$old_url = str_replace ('&amp;', '&',$old_url);
	$old_url = $old_url;
	if (!preg_match('/^(http(s)?:\/\/|ftp:\/\/)/i', $old_url)){
		if (preg_match('/^\/.*?/i', $old_url)){
			$old_url = $this_page."?$url_var_name="
				.urlencode($url_parts['scheme']
				.'://'.$url_parts['host'].$old_url);
		} else {
			$old_url = $this_page."?$url_var_name="
				. urlencode($url_parts['scheme']
				.'://'.$url_parts['host'].$path_parts['dirname']
				.'/'.$old_url);
		}
	} else {
		$old_url = $this_page."?$url_var_name=". urlencode($old_url);
	}
	/*
	*--should add something like a function here to change
	*--the url's and take out the /blah/../ and 
	*--change it to / (the url's are $old_url)
	*/
	if (!$form){
		return $old_url;
	} else {
		return preg_split("!\?$url_var_name=!",$old_url);
	}
}


/*
*--This is a function to edit the form tag because
*--the url can't be encoded in the action attribute
*/
function edit_forms($html){
	$html = preg_replace_callback("!(<form\s+[^<>]*?action\s*=\s*'?\"?)([^<>]*?)('?\"?>|'?\"?\s[^<>]*?>)!is", 'edit_forms_callback',$html);
	return $html;
}

/*
*--This is the function that will read the headers
*--any location header it finds will be placed in $location
*--any content type header will be placed in $content_type_header
*/
function read_header($ch, $string){
	//headers to find
	global $content_type_header, $location;
	debug_log('Header', $string);
	$length = strlen($string);
	if (stristr($string, 'Location')!==false){
		preg_match('/(^Location:\s*)(.*?)\r\n\s*/i', $string, $match);
		$location = $match[2];
		unset ($match);
	} elseif (stristr($string, 'Content-type')!==false){
		$content_type_header = $string;
	}
	return $length;
}

/*
*--This is the function to read all the data from curl
*--if the page isn't html it will imeditaly start sending it to the browser
*--if the page is html it will store it in the $page varible
*/
function read_data ($ch, $string){
	global $content_type_header,$page,$data_started;
	debug_log('Data Received', $string);
	$length = strlen($string);
	if (preg_match('/text\/(html|css)/i',$content_type_header)){
		$page .= $string;
	} else {
		if (!$data_started){
			header($content_type_header);
			$data_started = TRUE;
		}
		echo $string;
	}
	return $length;
}

/*
*--This function will set the base url for other functions to edit
*--relative url's with
*/
function set_location ($url){
	global $url_parts;
	global $path_parts;
	//read all parts of url  for later use
	//$url_parts['scheme']		= protocol (without ://)
	//$url_parts['host']		= site
	//$path_parts['dirname']	= path
	//$path_parts['basename']	= file (incorrect, has 'blah' append to the end)
	$url_parts = parse_url($url);
	if (isset($url_parts['path'])){
		//the 'blah' is to ensure that pathinfo parses the path correct
		// (directories mess it up)
		$path_parts = pathinfo($url_parts['path'].'blah');
	} else {
		$path_parts['dirname'] = '';
	}
	if ($path_parts['dirname']=='/'){
		$path_parts['dirname'] = '';
	}
	
}

function edit_meta_refresh($html){
    //url/content with be in 4 or 7 (other will be empty)
    $no_http_pattern ="!<meta\s+"
        ."(("
        ."([^<>]*?http-equiv\s*=\s*'?\"?refresh'?\"?\s+"
        ."content\s*=\s*'?\"?)([^<>]*?;\s*[^<>]*?)"
        .")|("
        ."([^<>]*?content\s*=\s*'?\"?)([^<>]*?;\s*[^<>]*?)('?\"?\s+"
        ."http-equiv\s*=\s*'?\"?refresh)"
        ."))"
        ."('?\"?>|'?\"?\s[^<>]*?>)!is";
	return preg_replace_callback($no_http_pattern, 'edit_meta_callback', $html);
}

//functions for preg_replace callback


function edit_tags_callback($matches){
	global $stop_url;
	//if this tag has a stop value and this is it
	//then return the tag untouched
	$matches[2] = strtolower($matches[2]);
	if (isset($stop_url[$matches[2]])){
		if (in_array(strtolower($matches[3]), $stop_url[$matches[2]])){
			return $matches[0];
		}
	}
    $matches[3] = htmlspecialchars(edit_url($matches[3],0));
    return $matches[1].$matches[3].$matches[4];
}

function edit_style_tag_callback($matches){
    $matches[2] = edit_css($matches[2]);
    return $matches[1].$matches[2].$matches[3];
}

function edit_forms_callback($form_match){
    global $url_var_name;
    list ($form_match[2],$url_input) = edit_url($form_match[2],1);
    $input_tag = '<input type="hidden" name="'
		.$url_var_name.'" value="'
		. htmlspecialchars(urldecode($url_input)).'">';
	return $form_match[1].$form_match[2].$form_match[3].$input_tag;
}

function edit_css_callback($matches){
    $matches[2] = edit_url($matches[2],0);
    return $matches[1].$matches[2].$matches[3];
}

function edit_meta_callback($matches){
    //print_r($matches);
    if (!empty($matches[4])){
        //use 3/4/9
        $url_a = explode(';', $matches[4], 2);
        if (sizeof($url_a) == 1){
            //leave it
            $tag = '<meta '.$matches[3].$matches[4].$matches[9];
        } else {
            //edit it
            $url_a[1] = preg_replace('!^URL\s*=\s*!is', '', trim($url_a[1]));
            $tag = '<meta '.$matches[3].$url_a[0].';url='.edit_url($url_a[1]).$matches[9];
        }
    } else {
        //use 6/7/8/9
        $url_a = explode(';', $matches[7], 2);
        if (sizeof($url_a) != 1){
            //leave it
            $tag = '<meta '.$matches[6].$matches[7].$matches[8].$matches[9];
        } else {
            //edit it
            $url_a[1] = preg_replace('!^URL\s*=\s*!is', '', trim($url_a[1]));
            $tag = '<meta '.$matches[6].$url_a[0].';url='.edit_url($url_a[1]).$matches[8].$matches[9];
        }
    }
    return $tag;
}


/*

This is for debugging only

*/
function debug_log($name, $message){
    global $log_all_connections, $log_file;
    if ($log_all_connections){
        $string = "\n\n\n\n\n\n\n\n\n\n---$name--\n\n\n\n\n$message";
        $fp = fopen($log_file, 'a');
        fwrite($fp, $string, strlen($string));
        fclose($fp);
    }
}
?>