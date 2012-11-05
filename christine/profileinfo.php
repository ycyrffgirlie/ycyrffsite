<?
if (file_exists('/includes/connection.php')){
	require('includes/connection.php');
}else{
	require("connection.php");
}

function getfiles(){
$pattern = "/home/ycyrf718/public_html/profiles/*";

$files = glob($pattern);
//print_r($files);
$i = 0;
foreach($files as $file){
	if (
	!preg_match('%index.html%',$file) && !preg_match('%profiles/profile.html%',$file) && !preg_match('%.php%',$file)
	){
	$filepaths[$i] = $file;
	$i++;
	}

}
//print_r($filepaths);
return $filepaths;
}

$files = getfiles();
$i = 0;
$id = 1;
while ($i < count($files)){
	$file = $files[$i];
	//echo $file;
	$buffers[$i] = file($file);
	
	$profileinfo[$i]['profileid']  = $id;
	$profileinfo[$i]['filename'] =  preg_replace('/\/home\/ycyrf718\/public_html/', '', $file);;
	
	$counter = 0;
	while ($counter < count($buffers[$i])){
			$buffer = $buffers[$i][$counter];
			
			//echo  $counter.' '.$buffer;
			if (preg_match('%<b>Name/<span lang="cy">Enw</span>%',$buffer)){
				
				$buffer = preg_replace('%<p><b>Name/<span lang="cy">Enw</span>:</b>&nbsp;%','',$buffer);
				$buffer = trim($buffer);
				$profileinfo[$i]['name'] = $buffer;
				//$$profileinfo[$i]['name'] 
			}elseif(preg_match('%<p><b>Name/<span lang="cy">Enw:</span></b>&nbsp;%',$buffer)){
			
				$buffer = preg_replace('%<p><b>Name/<span lang="cy">Enw:</span></b>&nbsp;%','',$buffer);
				$buffer = trim($buffer);
				$profileinfo[$i]['name'] = $buffer;
			}elseif(preg_match('%<b>Name/<span lang="cy">Enw:</span></b>&nbsp;%',$buffer)){
			
				$buffer = preg_replace('%<b>Name/<span lang="cy">Enw:</span></b>&nbsp;%','',$buffer);
				//$buffer = preg_replace();
				$buffer = trim($buffer);
				$profileinfo[$i]['name'] = $buffer;
			}elseif(preg_match('%Name/<span lang="cy">Enw:</span></b>&nbsp;%',$buffer)){
			
				$buffer = preg_replace('%<p>Name/<span lang="cy">Enw:</span></b>&nbsp;%','',$buffer);
				$buffer = trim($buffer);
				$profileinfo[$i]['name'] = $buffer;
			}
			
			if (preg_match('%<b>Location/<span lang="cy">LLe:</span></b>&nbsp;%',$buffer)){
				
				$buffer = preg_replace('%<b>Location/<span lang="cy">LLe:</span></b>&nbsp;%','',$buffer);
				$buffer = trim($buffer);
				$profileinfo[$i]['place'] = $buffer;
			}
			
			if (preg_match('%<b>Website/<span lang="cy">Gwe safle:</span></b>&nbsp;%',$buffer)){
				
				$buffer = preg_replace('%<b>Website/<span lang="cy">Gwe safle:</span></b>&nbsp;%','',$buffer);
				$buffer = trim($buffer);
				$profileinfo[$i]['website'] = $buffer;
			}
			
			if (preg_match('%<b>E-mail/<span lang="cy">E-bost:</span></b>&nbsp;%',$buffer)){
				$buffer = preg_replace('%<b>E-mail/<span lang="cy">E-bost:</span></b>&nbsp;%','',$buffer);
				$buffer = trim($buffer);
				$profileinfo[$i]['email'] = $buffer;
			}
			
			if (preg_match('%<b>Where first heard about Cyrff?/<span lang="cy">LLe naethoch chi cyntaf wedi clywed am Y Cyrff?</span></b>&nbsp;%',$buffer)){
				$buffer = preg_replace('%<b>Where first heard about Cyrff?/<span lang="cy">LLe naethoch chi cyntaf wedi clywed am Y Cyrff?</span></b>&nbsp;%','',$buffer);
				$buffer = trim($buffer);
				$profileinfo[$i]['firstheard'] = $buffer;
			}
			
			if (preg_match('%<b>Favourite Cyrff song/<span lang="cy">Hoff g&acirc;n Cyrff:</span></b>&nbsp;%',$buffer)){
				$buffer = preg_replace('%<b>Favourite Cyrff song/<span lang="cy">Hoff g&acirc;n Cyrff:</span></b>&nbsp;%','',$buffer);
				$buffer = trim($buffer);
				$profileinfo[$i]['favesong'] = $buffer;
			}elseif (preg_match('%<b>Favourite <span lang="cy">Cyrff</span> song/<span lang="cy">Hoff g&acirc;n Cyrff:</span></b>&nbsp;%',$buffer)){
			  $buffer = preg_replace('%<b>Favourite <span lang="cy">Cyrff</span> song/<span lang="cy">Hoff g&acirc;n Cyrff:</span></b>&nbsp;%','',$buffer);
				$buffer = trim($buffer);
				$profileinfo[$i]['favesong'] = $buffer;
			}
			
			if (preg_match('%<b>Favorite Cyrff album/<span lang="cy">Hoff albwn Cyrff:</span></b>&nbsp;%',$buffer)){
				$buffer = preg_replace('%<b>Favorite Cyrff album/<span lang="cy">Hoff albwn Cyrff:</span></b>&nbsp;%','',$buffer);
				$buffer = trim($buffer);
				$profileinfo[$i]['favealbum'] = $buffer;
			}elseif (preg_match('%<b>Favorite <span lang="cy">Cyrff</span> album/<span lang="cy">Hoff albwn Cyrff:</span></b>&nbsp;%',$buffer)){
			$buffer = preg_replace('%<b>Favorite <span lang="cy">Cyrff</span> album/<span lang="cy">Hoff albwn Cyrff:</span></b>&nbsp;%','',$buffer);
				$buffer = trim($buffer);
				$profileinfo[$i]['favealbum'] = $buffer;
			}
			
			if (preg_match('%<b>Other comments/<span lang="cy">Eraill sywl:</span></b>&nbsp;%',$buffer)){
				$buffer = preg_replace('%<b>Other comments/<span lang="cy">Eraill sywl:</span></b>&nbsp;%','',$buffer);
				//$buffer = preg_replace("%\,\%","%\,%",$buffer);
				$buffer = trim($buffer);
				$profileinfo[$i]['comment'] = $buffer;
			}
			
			/*if (preg_match()){
			$profileinfo[$i]
			}*/
			
	
	$counter++;
	}
	$i++;
	$id++;
}


//print_r($profileinfo);

$query = mysql_query("Select * From fan_profile");

if (!$query){
	$query= "CREATE TABLE fan_profile(
				profileid varchar(1000),
				PRIMARY KEY (profileid),
				filename varchar(1000),
				name varchar(1000),
				place varchar(1000),
				website varchar(1000),
				email varchar(1000),
				firstheard varchar(1000),
				favesong varchar(1000),
				favealbum varchar(1000),
				comment varchar(1000)				
				)";
				
				
	$createdtable = mysql_query($query);
		
	echo '<p>Table fan_profile created.</p>';
	
	
}

$i = 0;
 while($i < count($profileinfo)){

	$sql = sprintf("INSERT INTO fan_profile(profileid, filename, name, place, website, email, firstheard,favesong, favealbum, comment)
	VALUES(\"%s\",\"%s\",\"%s\",\"%s\",\"%s\",\"%s\",\"%s\",\"%s\",\"%s\",\"%s\")",
	$profileinfo[$i]['profileid'],
	$profileinfo[$i]['filename'],
	mysql_real_escape_string ($profileinfo[$i]['name']),
	mysql_real_escape_string ($profileinfo[$i]['place']) ,
	mysql_real_escape_string ($profileinfo[$i]['website']),
	mysql_real_escape_string ($profileinfo[$i]['email']),
	mysql_real_escape_string ($profileinfo[$i]['firstheard']),
	mysql_real_escape_string ($profileinfo[$i]['favesong']),
	mysql_real_escape_string ($profileinfo[$i]['favealbum']),
	mysql_real_escape_string ($profileinfo[$i]['comment']));
	
	echo $sql.' <br><br>';
	
	$query = mysql_query($sql) or die(mysql_error());
	
	echo '<p>'.$profileinfo[$i]["name"].' \'s profile has been created. </p>';	
	$i++;
}
?>