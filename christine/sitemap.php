<html>

<head>
<title>Sitemap</title>
</head>

<body>

<?php
$sitemap ='<?xml version="1.0" encoding="UTF-8"?>'." \n";
$sitemap .='<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'." \n";

if (file_exists('/includes/connection.php')){
	require('includes/connection.php');
}else{
	require("connection.php");
}

$sql = "SELECT filename, datelastmodified FROM pages WHERE filename NOT LIKE '%/images%'
	AND filename NOT LIKE '%/band.html%'
	AND filename NOT LIKE '%/contact.php%'
	AND filename NOT LIKE '%/me.html%'
	AND filename NOT LIKE '%/profiles/submitprofile.php%'
	AND filename NOT LIKE '%/includes/header.php%'";
//echo $sql;
$query = mysql_query($sql);

while ($fileinfo = mysql_fetch_assoc($query)){
		$sitemap .= '		<url>
			<loc>http://www.ycyrffgroupie.co.uk'.$fileinfo['filename'].'</loc>
			<lastmod>'.substr($fileinfo['datelastmodified'],0,-9).'</lastmod>
			</url>'." \n";
}


$sitemap .= '</urlset>';

//echo $sitemap;

unlink('/home/ycyrf718/public_html/sitemap.xml');

$file = fopen('/home/ycyrf718/public_html/sitemap.xml','c');

if ($file){
	fwrite($file, $sitemap);

	fclose($file);
	$message = '<body style="background:#800080;" link="ffd700" alink="ffd700" >
			<p><font color="ffd700">Google sitemap created. It is
			<a style="color: #ffd700;" href="http://www.ycyrffgroupie.co.uk/sitemap.xml">here</a>.</font></p>
			<br>
			<br>
			<p><font color="ffd700">Thanks,
			<br>
			One nutty fan.</font></p>';
}else{
	//echo "<p>Can't create file</p>";
	$message = '<body style="background:#800080;" link="ffd700" alink="ffd700" >
			<p><font color="ffd700">Couldn\'t create the sitemap xml for Google.</font></p>
			<p><font color="ffd700">Please fix it.</font></p>
			<br>
			<br>
			<p><font color="ffd700">Thanks,
			<br>
			One nutty fan.</font></p>';
}

$to = 'ycyrffgroupie@gmail.com';
$subject = 'Sitemap';
$headers ='MIME-Version: 1.0'."\r\n";
$headers .= 'Content-Type: text/html; charset=\"utf-8\"'. "\r\n";
$headers .='From: ycyrffgroupie@gmail.com'. "\r\n";			

mail($to,$subject,$message, $headers);
?>
</body>
