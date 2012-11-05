<?php

ini_set('max_execution_time', '40');
//echo ini_get('max_execution_time');

if (file_exists('/includes/connection.php')){
	require('includes/connection.php');
}else{
	require("connection.php");
}

function getfiles(){
$pattern = "/home/ycyrf718/public_html/*";

$files = glob($pattern);
$i = 0;
$counter = 0;

foreach ($files as $file){

	if (!preg_match('/christine/',$file) && !preg_match('/admin/',$file) &&
	!preg_match('/css/',$file) && !preg_match('/dev/',$file)  && !preg_match('/includes/',$file) 
	&& !preg_match('/images/',$file) && !preg_match('/llwybrllaethog/',$file) &&
	!preg_match('/cgi-bin/',$file) && !preg_match('/other/',$file) && !preg_match('/uploads/',$file)
	&& !preg_match('/phplinks/',$file)){
		if (!preg_match('/.shtml/',$file) && !preg_match('/.xml/',$file) &&
		!preg_match('/about/',$file)  && !preg_match('/1.html/',$file) && !preg_match('/.txt/',$file)
		&& !preg_match('/.htc/',$file) && !preg_match('/Sqh40j/',$file) && !preg_match ('/dcc24/',$file)
		&& !preg_match('/.ico/',$file)  && !preg_match('/4048/',$file)  && !preg_match('/2.html/',$file)  
		&& !preg_match('/monotypic/',$file)  && !preg_match('/.jpg/', $file) && !preg_match('/new_guestbook/',$file)
		&& !preg_match('/test/',$file) && !preg_match('/menu/',$file) && !preg_match('/update_me/',$file)
		){
			if (preg_match('/Images/',$file) || preg_match('/games/',$file) ||  preg_match('/interviews/', $file) || preg_match('/lyrics/', $file)
			|| preg_match('/news/', $file) || preg_match('/profiles/',$file)  ||  preg_match('/reviews/', $file)
			|| preg_match('/sound_clips/', $file)
			){				
				$dir[$counter] =$file;
				$counter++;
				//echo 'Hello World! I am not a file';
			}else{
				$cleanerfilespath[$i] = $file;
				$i++;
			}
		}
	}
}

$i = 0;

$pattern = $dir[0];

if (is_dir($pattern)){
	if ($dirhandler = opendir($pattern)){
		while (($file = readdir($dirhandler)) !== false){
			 if ($file != "." && $file != "..") {
			$files[$i] = $pattern.'/'.$file;
			$i++;
			}
		}
		closedir($dirhandler);
	}
}


$pattern = $dir[1];

if (is_dir($pattern)){
	if ($dirhandler = opendir($pattern)){
		while (($file = readdir($dirhandler)) !== false){
		 if ($file != "." && $file != "..") {
			$files[$i] = $pattern.'/'.$file;
			$i++;
			}
		}
		closedir($dirhandler);
	}
}

$pattern = $dir[2];

if (is_dir($pattern)){
	if ($dirhandler = opendir($pattern)){
		while (($file = readdir($dirhandler)) !== false){
		 if ($file != "." && $file != "..") {
			$files[$i] = $pattern.'/'.$file;
			$i++;
			}
		}
		closedir($dirhandler);
	}
}

$pattern = $dir[3];

if (is_dir($pattern)){
	if ($dirhandler = opendir($pattern)){
		while (($file = readdir($dirhandler)) !== false){
		 if ($file != "." && $file != "..") {
			$files[$i] = $pattern.'/'.$file;
			$i++;
			}
		}
		closedir($dirhandler);
	}
}

$pattern = $dir[4];

if (is_dir($pattern)){
	if ($dirhandler = opendir($pattern)){
		while (($file = readdir($dirhandler)) !== false){
		 if ($file != "." && $file != "..") {
			$files[$i] = $pattern.'/'.$file;
			$i++;
			}
		}
		closedir($dirhandler);
	}
}

$pattern = $dir[5];

if (is_dir($pattern)){
	if ($dirhandler = opendir($pattern)){
		while (($file = readdir($dirhandler)) !== false){
		 if ($file != "." && $file != "..") {
			$files[$i] = $pattern.'/'.$file;
			$i++;
			}
		}
		closedir($dirhandler);
	}
}

$pattern = $dir[6];

if (is_dir($pattern)){
	if ($dirhandler = opendir($pattern)){
		while (($file = readdir($dirhandler)) !== false){
		 if ($file != "." && $file != "..") {
			$files[$i] = $pattern.'/'.$file;
			$i++;
			}
		}
		closedir($dirhandler);
	}
}

$pattern = $dir[7];

if (is_dir($pattern)){
	if ($dirhandler = opendir($pattern)){
		while (($file = readdir($dirhandler)) !== false){
		 if ($file != "." && $file != "..") {
			$files[$i] = $pattern.'/'.$file;
			$i++;
			}
		}
		closedir($dirhandler);
	}
}

$i = 0;
$counter = 0;

foreach ($files as $file){
	if (!preg_match('/.db/', $file) && !preg_match('/.jpg/', $file)  && !preg_match('/.JPG/', $file) &&
	!preg_match('/.LOG/', $file)  && !preg_match('/.htaccess/', $file) && !preg_match('/.mp3/', $file) && !preg_match('/.class/', $file) 
	&& !preg_match('/.gif/', $file) && !preg_match('/contact.php/', $file)
	){
		if (preg_match('/site/', $file) || preg_match('/icon/',$file)){
			$dir2 = $file;
			$counter++;
		}else{
			$cleanerfiles1[$i] = $file;
			$i++;
		}
	}
}

$filepaths = array_merge($cleanerfilespath, $cleanerfiles1);
return $filepaths;
}

function getfilesinfo(){
$files = getfiles();
$i = 0;

	while ($i < count($files)){
		$file = $files[$i];
		$buffers[$i] = file($file);
		
		$counter = 0;
		$filesinfo[$i][name] = preg_replace('/\/home\/ycyrf718\/public_html/', '', $file);
		while ($counter < count($buffers[$i])){
			$buffer = $buffers[$i][$counter];
			//foreach ($buffers[$i] as $buffer){
				if (preg_match('/<H1>/',$buffer)){
					$filesinfo[$i][title] = preg_replace ( "'<[^>]+>'U", "",$buffer);
					//$filesinfo[$i][title] = preg_replace('/\<\/H1\>/','',$filesinfo[$i][title]);
					//echo 'You have the title';
				}
				if (preg_match('/<h1>/',$buffer)){
					$filesinfo[$i][title] = preg_replace ( "'<[^>]+>'U", "",$buffer);
					$filesinfo[$i][title] = preg_replace('/\<\/h1\>/','',$filesinfo[$i][title]);
					//echo 'You have the title';
				}
				if (preg_match('/KEYWORD/i', $buffer)){
					$filesinfo[$i][keywords] = preg_replace('/\<meta name="KEYWORD" content="/i', '', $buffer);
					$filesinfo[$i][keywords] = preg_replace('/\"\>/', '', $filesinfo[$i][keywords]);
				}
				
				if (preg_match('/DESCRIPTION/i', $buffer)){
						$filesinfo[$i][description] = preg_replace('/\<meta name="DESCRIPTION" content="/i', '', $buffer);
						$filesinfo[$i][description]  = preg_replace('/\"\>/', '',$filesinfo[$i][description]);
				}
				
				$counter++;
			//}
			

			
		}
		
		$filesinfo[$i][datelastmodified] = date('Y-m-d H:i:s',filemtime($file));

		$i++;
	}
	return $filesinfo;
}

$query = mysql_query("Select * From pages");

if (!$query){
	$query= "CREATE TABLE pages(
				filename varchar(1000),
				PRIMARY KEY (filename),
				title varchar(1000),
				keywords varchar(1000),
				descriptionen varchar(1000),
				descriptioncymraeg varchar(1000),
				facebooktitle varchar(1000),
				facebookdescription varchar(1000),
				facebookimage varchar(1000),
				facebookurl varchar(1000),
				whatnewenglish varchar(1000),
				whatnewcymraeg varchar(1000),
				datelastmodified datetime
				)"
				or die(mysql_error());
				
	$createdtable = mysql_query($query);
		
	echo '<p>Table pages created.</p>';
	
	
}
?>

<html>

<head>
<title>File gathering</title>
<meta name="author" content="Christine Black">
<meta name="generator" content="SCiTE">
<meta http-equiv="Content-Type" content="text/html; charset=Iso-8859-14">
<meta name="rating" content="General">
<link rel="stylesheet" type="text/css" href="/css/style.css?v1.3">
<link rel="stylesheet" type="text/css" href="/css/table.css">
</head>


<body>
<?php

$filepaths = getfiles();
$filesinfo = getfilesinfo();
//print_r($filesinfo)
?>

<table class="admin">

	<tr class="admin">
		<th class="admin">File name</th>
		<th class="admin">Page Title</th>
		<th class="admin">Keywords</th>
		<th class="admin">Description</th>
		<th class="admin">Date Last Modified</th>
	</tr>
		
<?php

$i = 0;

while ($i < count($filesinfo)){
	echo '<tr class="admin">
				<td class="admin">'.$filesinfo[$i][name].'</td>
				<td class="admin">'.$filesinfo[$i][title].'</td>
				<td class="admin">'.$filesinfo[$i][keywords].'</td>
				<td class="admin">'.$filesinfo[$i][description].'</td>
				<td class="admin">'.$filesinfo[$i][datelastmodified].'</td>
			</tr>'. "\n";
$filesinfo[$i][keywords] = preg_replace('/\,/','\,', $filesinfo[$i][keywords]);
	$i++;
}

$i = 0;

while ($i < count($filesinfo)){
$numofrows = 0;
$sql = 'SELECT * FROM `pages` WHERE `filename` = "'.$filesinfo[$i][name].'"';
$query = mysql_query($sql) or die(mysql_error());
$numofrows = mysql_num_rows($query);

//echo '<p>'.$sql.'</p>';

if ($numofrows >= 1){
//echo 'Hello world';
	$numofrows2  = 0;
	$sql2 = 'SELECT * FROM pages WHERE filename ="'.$filesinfo[$i][name].'" AND datelastmodified = "'.$filesinfo[$i][datelastmodified].'"';
	$query2  =mysql_query($sql2);
	$numofrows2 = mysql_num_rows($query2);
	//echo '<p>'.$sql2.' has return '.$numofrows2.' number of rows.</p>';
	
	if ($numofrows2 == 0){
		$sql3 = 'UPDATE pages SET datelastmodified = "'.$filesinfo[$i][datelastmodified].'" where filename ="'.$filesinfo[$i][name].'"';
		//echo '<p>'.$sql3.'</p>';
		$query3 = mysql_query($sql3) or die(mysql_error());
		echo '<p>Page '.$filesinfo[$i][name].' has been updated.</p>';
	}
}else{
	$sql4 = "INSERT INTO pages(filename, title, keywords, descriptionen, facebooktitle, facebookdescription, datelastmodified )
					VALUES('".$filesinfo[$i][name]."','".$filesinfo[$i][title]."','".$filesinfo[$i][keywords]."','".$filesinfo[$i][description]."','".$filesinfo[$i][title]."','".$filesinfo[$i][description]."','".$filesinfo[$i][datelastmodified]."')";
$query4 = mysql_query($sql4);
echo '<p>'.$sql4.'</p>';
echo '<p>Page '.$filesinfo[$i][name].' has been added.</p>';
}


$i++;
}

mysql_close($connection);
?>
</body>
</html>