<?php
if (file_exists('/includes/connection.php')){
	require('includes/connection.php');
}else{
	require("connection.php");
}


//$connection = mysql_connect("localhost","ycyrf718_ycyrff","y1986Cyrff") or die(mysql_error());
//mysql_select_db("ycyrf718_cyrff", $connection) or die(mysql_error());
function whatnewen(){

$sql = 'SELECT `filename`, `title`, `whatnewenglish`, `datelastmodified`, `includedinnew` FROM `pages` WHERE `includedinnew`= 1';
$query = mysql_query($sql);
$newenresults = mysql_fetch_assoc($query);
print_r($newenresults);
/*foreach ($newenresults as $newpage){
	print_r($newpage);
}*/
return $newenresults;
}
mysql_close($connection);
?>
