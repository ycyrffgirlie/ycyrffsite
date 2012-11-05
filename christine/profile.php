<?
if (file_exists('/includes/connection.php')){
	require('includes/connection.php');
}else{
	require("connection.php");
}

function getprofile($profileid){
	
	$sql = 'SELECT 
			profileid, name, place, website, email, firstheard,favesong, favealbum, comment
			FROM fan_profile 
			WHERE profileid ='.$profileid;
	$query = mysql_query($sql);
	$profileinfo = mysql-fetch_assoc($query);
	
	$output = '<p><span class="">Name/<span lang="cy">Enw:</span></span>&nbsp;'.$profileinfo['name'].'
			<br>
			<b>Location/<span lang="cy">LLe:</span></b>&nbsp;'.$profileinfo['place'].'
			<br>
			<b>Website/<span lang="cy">Gwe safle:</span></b>&nbsp;'.$profileinfo['website'].'
			<br>
			<b>E-mail/<span lang="cy">E-bost:</span></b>&nbsp;'.$profileinfo['email'].'
			<br>
			<b>Where first heard about Cyrff?/<span lang="cy">LLe naethoch chi cyntaf wedi clywed am Y Cyrff?</span></b>&nbsp;'.$profileinfo['firstheard'].'
			<br>
			<b>Favourite Cyrff song/<span lang="cy">Hoff g&acirc;n Cyrff:</span></b>&nbsp;'.$profileinfo['favesong'].'
			<br>
			<b>Favorite Cyrff album/<span lang="cy">Hoff albwn Cyrff:</span></b>&nbsp;'.$profileinfo['favealbum'].'
			<br>
			<b>Other comments/<span lang="cy">Eraill sywl:</span></b>&nbsp;'.$profileinfo['comment'].'
			</p>';
	
	return $output;
}

?>

<?=getprofile(1)?>

<?mysql_close($connection);?>
