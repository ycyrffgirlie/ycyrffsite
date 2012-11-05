<html>

<head>
<title>Sitemap</title>
</head>

<body>
&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"&gt;
<?
if (file_exists('/includes/connection.php')){
	require('includes/connection.php');
}else{
	require("connection.php");
}

$sql = "SELECT filename, datelastmodified FROM pages WHERE filename NOT LIKE '%/images%'";
$query = mysql_query($sql);

while ($fileinfo = mysql_fetch_assoc($query)){
		echo '&lt;url&gt;
			&lt;loc&gt;http://www.ycyrffgroupie.co.uk/'.$fileinfo['filename'].'&lt;/loc&gt;
			&lt;lastmod&gt;'.$fileinfo['datelastmodified'].'&lt;/lastmod&gt;
			&lt;/url&gt;'."\n";
}

?>
&lt;/urlset&gt;


</body>