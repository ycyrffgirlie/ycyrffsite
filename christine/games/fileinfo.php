<?php
/*
if file_exists('/includes/connection.php'){
	require('includes/connection.php');
}else{
	require("connection.php");
}*/

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
			$files[$i] = $file;
			$i++;
		}
		closedir($dirhandler);
	}
}

$i=0;
$counter = 0;

foreach ($files as $file){
	if (!preg_match('/.db/', $file) && !preg_match('/.jpg/', $file)  && !preg_match('/.JPG/', $file) &&
	!preg_match('/.LOG/', $file)  && !preg_match('/.htaccess/', $file)
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

$i = 0;

$pattern = $dir[1];

if (is_dir($pattern)){
	if ($dirhandler = opendir($pattern)){
		while (($file = readdir($dirhandler)) !== false){
			$files[$i] = $file;
			$i++;
		}
		closedir($dirhandler);
	}
}

$pattern = $dir[2];

if (is_dir($pattern)){
	if ($dirhandler = opendir($pattern)){
		while (($file = readdir($dirhandler)) !== false){
			$files[$i] = $file;
			$i++;
		}
		closedir($dirhandler);
	}
}

$pattern = $dir[3];

if (is_dir($pattern)){
	if ($dirhandler = opendir($pattern)){
		while (($file = readdir($dirhandler)) !== false){
			$files[$i] = $file;
			$i++;
		}
		closedir($dirhandler);
	}
}

$pattern = $dir[4];

if (is_dir($pattern)){
	if ($dirhandler = opendir($pattern)){
		while (($file = readdir($dirhandler)) !== false){
			$files[$i] = $file;
			$i++;
		}
		closedir($dirhandler);
	}
}

$pattern = $dir[5];

if (is_dir($pattern)){
	if ($dirhandler = opendir($pattern)){
		while (($file = readdir($dirhandler)) !== false){
			$files[$i] = $file;
			$i++;
		}
		closedir($dirhandler);
	}
}

$pattern = $dir[6];

if (is_dir($pattern)){
	if ($dirhandler = opendir($pattern)){
		while (($file = readdir($dirhandler)) !== false){
			$files[$i] = $file;
			$i++;
		}
		closedir($dirhandler);
	}
}

$pattern = $dir[7];

if (is_dir($pattern)){
	if ($dirhandler = opendir($pattern)){
		while (($file = readdir($dirhandler)) !== false){
			$files[$i] = $file;
			$i++;
		}
		closedir($dirhandler);
	}
}

//$files= array ('index.html', 'new.html');

/*functiom get(){
$i = 0;

	while ($i < count($fies)){
		$file = $files{$i];
		$buffer = file($file);
		//$pathparts = path_info($file);
		
		$filesinfo[$i][hame] =$file;
		/*$filesinfo[$i][title];
		$filesinfo[$i][keywords]
		$filesinfo[$i][description]*/
		/*$filesinfo[$i][datelastmodified] = date('d-m-Y H:i:s',filemtime($file));

		$i++
	}
	return fileinfo;
}

$query =mysqul_query('Select * From pages');

if (!$query){
	$query=mysql_query('CREATE pages');
	$result = mysqll_fetch_array($query);
	
}*/
?>

<html>

<head>
<title>File gathering</title>
</head>

</head>

<body>
<?php

print_r($cleanerfilespath);
echo '<br> <br>';
print_r($dir);
echo '<br><br>';
print_r($cleanerfiles1);
echo '<br><br>';
print_r($files);
?>
<!--
Hidden this code for now 22 August
<table>

	<tr>
		<th>File name</th>
		<th>Page Tile</th>
		<th>Keywords</th>
		<th>Description</th>
		<th>Dat Last Modified</th>
	</tr>
	-->	
<?php
/*

while (4i < $fileinfo){
	echo '<tr class="admin">
				<td class="admin">'.$filesinfo[$i][hame].'</td>
				<td class="admin">'.$filesinfo[$i][title].'</td>
				<td class="admin">'.$filesinfo[$i][keywords].'</td>
				<td class="admin">.'$filesinfo[$i][description].'</td>
				<td class="admin">.'$filesinfo[$i][datelastmodified].'</td>
			</tr>';
)

/*	
fgetss ($handles[$i]);
	
	print_r($filesinfo[i]);
	
**/	
	

/*
Database set up

name 
title
keywords
description
whatnew
darelastmodified
*/
?>
</body>
</html>