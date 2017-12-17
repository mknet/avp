<?php
/**
 * This file loads the SEO content from ASWO.. 
 */
/**
 * Settings
 */
// Ask T. Hoellscher
$customerID = '';
$hashKey = '';
##############################################
if($_GET['eurasinfo']==$customerID) die(phpinfo());
$url = trim($_GET['url']);
$url.= "&cid=" . $customerID . "&seokey=".$hashKey;
$file = "http://www6.euras.com/seo2010/getseo.php?url=".str_replace(' ', '%20' ,$url);	

switch(substr($_GET['url'],-3))
{
	case 'xml': $ftype = 'text/xml';
	break;
	case 'css': $ftype = 'text/css';
	break;
	case 'gif': $ftype = 'image/gif';
	break;
	case 'jpg': $ftype = 'image/jpg';
	break;
	case 'jpeg': $ftype = 'image/jpeg';
	break;
	case 'png': $ftype = 'image/png';
	break;
	default : $ftype = 'text/html';
}

$output = @file_get_contents($file);
if($output=='404')
{
	header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
	die;
}
header('Content-Type: '.$ftype);
echo $output;
?>
