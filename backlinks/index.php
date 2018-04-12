<?php
include_once("class_backlink_checker.php");
include_once("config.php");
$msgcolor = "";
$msg = "";
$divdisplay = "none";
$inputurl1 = "";
$inputurl2 = "";
// Example of use:
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputurl1 = $_POST['inputurl1'];
	$inputurl2 = $_POST['inputurl2'];
	
	if(!empty($inputurl1) && !empty($inputurl2)){
		$bl_check = new Backlink_Checker($_POST['inputurl1'], $_POST['inputurl2']); 
		$bl_check->get_contents(); 
		$bl_check->fetch_links(); 
		
		if ( TRUE !== $bl_check->check() ) {
			$divdisplay = "block";	
			$msg = 'Backlink not found.';
			$msgcolor = "#a94442";	
		}else{
			$divdisplay = "block";	
			$msg = 'Backlink found';
			$msgcolor = "#3c763d";	
		}	
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title><?php echo $title ?></title>
<meta name="keywords" content="<?php echo $keywords ?>" />
<meta name="description" content="<?php echo $desc ?>" />
<meta name="author" content="<?php echo $author ?>" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="Content-Language" content="English" />
<link rel="stylesheet" type="text/css" href="./css/websitebasicstyle.css?<?php echo time(); ?>" media="screen" />
</head>

<body>

<div id="wrapper">
	<table>
	<tr>
	<td VALIGN="top">
	<div id="heading"><h1><?php echo $heading ?></h1></div>
	</td>
	<td VALIGN="top" height="70">
	</td>
	</tr>
	</table>
	<div id="body">
	<table>
	<tr>
	<td VALIGN="top" style="width:65%;">
			<div id="left">
			<h2>Importance of Backlinks</h2>
			Backlinks are links that are directed towards your website. Also knows as Inbound links (IBL's). The number of backlinks is an indication of the popularity or importance of that website. Backlinks are important for SEO because some search engines, especially Google, will give more credit to websites that have a good number of quality backlinks, and consider those websites more relevant than others in their results pages for a search query.
			</div>
			<div id="left">
				<div id="lefttitle">
					<h2>Backlinks for your URLs</h2>
				</div>
				<div id="msgdiv" style="display:<?php echo $divdisplay;?>;width:100%;text-align:center;font-size:15px;color:<?php echo $msgcolor;?>"><?php echo $msg;?></div>
			</div>
	</td>
	<td VALIGN="top" style="width:100%;">
			<div id="right">
				<!-- Form block start -->
				<?php
				include("submitform.php");
				?>
				<!-- Form block end -->
			</div>
	</td>
	</tr>
	</table>
	</div>
<?php
include("footer.php");
?>
</body>
</html>