<?php



$params = array(
	'key' => $key,
	'q' => $term_p,
	'start' => $start,
	'maxResults' => $results,
	'filter' => false,
	'restrict' => '',
	'safeSearch' => false,
	'lr' => '',
	'ie' => '',
	'oe' => '');
	
$soapclient = new soapclient("http://api.google.com/GoogleSearch.wsdl","wsdl");
$soapoptions = 'urn:GoogleSearch';
$result = $soapclient->call("doGoogleSearch", $params);
$num = "{$result['estimatedTotalResultsCount']}";



if($start>$num){
$beg = "";
}
else {
$beg = "<a href='google.php?start=$end&term=$term_p'>Next 10</a>";
}
if($previous>-1){
$pre = "<a href='google.php?start=$previous&term=$term_p'>Previous 10</a> |";
}
else {
$pre = "";
}




?>