<?php

function php_error_report($level){
	// error_reporting -- Sets which PHP errors are reported
		switch($level) {
			case 1: 
				error_reporting(E_ERROR | E_WARNING | E_PARSE); 
			break;
			case 2: 
				error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE); 
			break;
			case 3: 
				error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
			break;
			case 4: 
				error_reporting(E_ALL ^ E_NOTICE); 
			break;
			case 5: 
				error_reporting(E_ALL); 
			break;
			default:
   				error_reporting(0);
			break;
		}
}


function apache_error_report($case){
	//ErrorDocument 400 /errors/badreq.html
	//ErrorDocument 401 /errors/noauth.html
	//ErrorDocument 403 /errors/forbid.html
	//ErrorDocument 404 /errors/missing.html
	//ErrorDocument 500 /errors/conferr.html
		switch($case) {
		case 400: 
			
		break;
		case 401: 
			
		break;
		case 403: 
			
		break;
		case 404: 
			 
		break;
		case 500: 
			
		break;
		default:
   			
		break;
}

?>