<?


function getprofile($profileid){
	if (file_exists('/includes/connection.php')){
	require('includes/connection.php');
}else{
	require("connection.php");
}

	$sql = 'SELECT 
			profileid, name, place, website, email, firstheard,favesong, favealbum, comment
			FROM fan_profile 
			WHERE profileid ='.$profileid;
	$query = mysql_query($sql);
	$profileinfo = mysql_fetch_assoc($query);
	
	if ($profileinfo){
	$output = '<p><span class="bold">Name/Enw:</span>&nbsp;'.$profileinfo['name'].'
			<br>
			<span class="bold">Location/<span lang="cy">LLe:</span></span>&nbsp;'.$profileinfo['place'].'
			<br>
			<span class="bold">Website/<span lang="cy">Gwe safle:</span></span>&nbsp;'.$profileinfo['website'].'
			<br>
			<span class="bold">E-mail/<span lang="cy">E-bost:</span></span>&nbsp;'.$profileinfo['email'].'
			<br>
			<span class="bold">Where first heard about Cyrff?/<span lang="cy">LLe naethoch chi cyntaf wedi clywed am Y Cyrff?</span></span>&nbsp;'.$profileinfo['firstheard'].'
			<br>
			<span class="bold">Favourite Cyrff song/<span lang="cy">Hoff g&acirc;n Cyrff:</span></span>&nbsp;'.$profileinfo['favesong'].'
			<br>
			<span class="bold">Favorite Cyrff album/<span lang="cy">Hoff albwn Cyrff:</span></span>&nbsp;'.$profileinfo['favealbum'].'
			<br>
			<span class="bold">Other comments/<span lang="cy">Eraill sywl:</span></span>&nbsp;'.$profileinfo['comment'].'
			</p>';
		}else{
			$output = '<p>This profile doesn\'t exist</p>';
		}
	
	mysql_close($connection);
	return $output;
}

?>


<??>
