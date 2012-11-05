<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">


<!--Need to query the database first and get the data from db about the currect page.-->
<?php
if (file_exists('/includes/connection.php')){
	require('includes/connection.php');
}else{
	require("connection.php");
}

$filename = $_SERVER['SCRIPT_FILENAME'];
$filename = preg_replace('%/home/ycyrf718/public_html%', '' , $filename);
if (preg_match('%christine%', $filename)){
	$filename = preg_replace('%/christine%','', $filename);
}

$sql = "SELECT * FROM pages WHERE filename ='".$filename."'";
$query = mysql_query($sql) or die(mysql_error());
$fileinfo = mysql_fetch_assoc($query)or die(mysql_error());

?>
<!--Now the db has given us the data, we can start making up the tags-->
<html>

<head>
<title><?=$fileinfo[title]?></title>
<meta name="keyword" content="<?=$fileinfo[keywords]?>">
<meta name="description" content="<?=$fileinfo[descriptionen];?> / <?=$fileinfo[descriptioncymraeg];?>">
<!--For facebook-->
<meta property="og:title" content="<?=$fileinfo[facebooktitle]?>">
<meta property="og:url" content="http://www.ycyrffgroupie.co.uk<?=$fileinfo['filename']?>">
<meta property="og:site_name" content="Y Cyrff Unofficial site" >
<meta property="og:description" content="<?=$fileinfo[facebookdescription]?>">
<!--end facebook-->
<!--If your really need to know-->
<meta name="author" content="Christine Black">
<meta name="generator" content="SCiTE"> <!--An open soucre producct not shitty Microsoft. Anything they do is a virus. I like a Linux to keep me warm at night-->
<!--end need to know section-->
<meta http-equiv="Content-Type" content="text/html; charset=Iso-8859-14">
<meta name="rating" content="General">
<link rel="shortcut icon" href="/images/icon/cyrff.ico">
<link rel="stylesheet" type="text/css" href="/css/style.css?v1.5"><!--IE couldn't get the style the other way. Don't know why.-->
 <?php
if  ($fileinfo[htmlcode]) {
echo $fileinfo[htmlcode];
}
?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-31457269-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<!--At some point in the future, I am going over to html 5. Just waiting for better browser support.
Warning:Some of the code on this page doesn't validate as html4 because it's actually-html 5. Please read the above comment for why 
I haven't gone over to html 5
It did validate about 7 years ago. The codebase is really old.No wonder the aite ia going white.-->

<?php
if ($fileinfo['filename'] == "/includes/header.php"){
	echo '<body>
			<p>Ha You\'ve found me. How did you manage that?</p>
		</body>
		</html>';
}
//echo $aql;
//echo '<body>';
//print_r($fileinfo);

mysql_close($connection);
?>
<!-- Still reading this. It only gets worse.-->
<!--end being in another file-->