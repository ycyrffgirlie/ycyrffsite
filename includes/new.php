<?php

//$connection = mysql_connect("localhost","ycyrf718_ycyrff","y1986Cyrff") or die(mysql_error());
//mysql_select_db("ycyrf718_cyrff", $connection) or die(mysql_error());
function whatnewen(){
if (file_exists('/includes/connection.php')){
	require('includes/connection.php');
}else{
	require("connection.php");
}
	$sql = 'SELECT `filename`, `title`, `whatnewenglish`, `datelastmodified`, `includedinnew`, `newsortorder`FROM `pages` 
	WHERE `includedinnew`= 1
	ORDER BY `newsortorder` DESC';
	$query = mysql_query($sql);
	
//print_r($newenresults);
	
	$output = '<p>What is new?'."\n";
	$output .= '<br>'."\n";
	$output .= '<br>'."\n";
	

	while($newenresults = mysql_fetch_assoc($query)){
		$output .= '<a class="normal" href="'.$newenresults['filename'].'">'.$newenresults['title'].'</a> - '.$newenresults['whatnewenglish']."\n";
		$output .='<br>'."\n";
		
	}

	
	mysql_close($connection);

	return $output;
}

function whatnewcy(){
if (file_exists('/includes/connection.php')){
	require('includes/connection.php');
}else{
	require("connection.php");
}
	$sql = 'SELECT `filename`, `title`, `whatnewcymraeg`, `datelastmodified`, `includedinnew`, `newsortorder` FROM `pages` 
	WHERE `includedinnew`= 1
	ORDER BY `newsortorder` DESC';
	$query = mysql_query($sql);
//print_r($newenresults);

	$output = '<p>Beth sy newydd?'."\n";
	$output .= '<br>'."\n";
	$output .= '<br>'."\n";
	while($newenresults = mysql_fetch_assoc($query)){
		$output .= '<a class="normal" href="'.$newenresults['filename'].'">'.$newenresults['title'].'</a> - '.$newenresults['whatnewcymraeg']."\n";
		$output .='<br>'."\n";
	}
	
	mysql_close($connection);

	return $output;


}

?>
