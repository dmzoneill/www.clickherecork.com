<?php 

@include("functions.php");
 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title><?php print $language['title']; ?> - <?php print menupages("pagetitle"); ?></title>
<?php 
if($HTTP_COOKIE_VARS["clicksize"]) {
$cssinclude = $HTTP_COOKIE_VARS["clicksize"]; 
}
else {
$cssinclude = 1;
}
?>
<link rel="stylesheet" href="http://www.clickherecork.com/phpBB2/templates/Avalanche/<?php print "css" . $cssinclude .".css"; ?>" type="text/css" />
</head>
<body>
		<?php print $language['redirecting']; ?> 

<script language="JavaScript" type="text/javascript">
        setTimeout ("document.location.href='index.php?pageview=<?php print $pageview; ?>'", 500);
		</script>

