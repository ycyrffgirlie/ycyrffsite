<?php
require("connection.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
<title> / </title>
<meta name="KEYWORD" content="Y Cyrff, sitemap">
<meta name="DESCRIPTION" content="One of the only website about Y Cyrff. 
Un o y unig we safle am Y Cyrff.">
<meta name="author" content="Christine Black">
<meta name="generator" content="Notepad, Wordpad, SciTE">
<meta http-equiv="Content-Type" content="text/html; charset=Iso-8859-14">
<meta name="rating" content="General">
<link rel="shortcut icon" href="Images/icon/cyrff.ico">
<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>

<body>

<div id="menu">

<ul class="menu">
<li><a href="index.html">Home / <span lang="cy">Gartre</span></a></li>
<li>Band / Band
<ul>
<li><a href="about.html">About / <span lang="cy">Am</span></a></li>
<li><a href="discography.html">Discography / <span lang="cy">Discograff</span></a></li>
</ul>
</li>

<li>Gallery / Oriel
<ul>
<li><a href="sound_clips/index.html">Sound Clips / <span lang="cy">Swn FFeiliau</span></a></li>
<li><a href="Images/index.html">Pictures / <span lang="cy">LLuniau</span></a></li>
</ul>
</li>

<li>Media / Cyfryngau
<ul>
<li><a href="lyrics/index.html">Lyrics / <span lang="cy">Geiriau</span></a></li>
<li><a href="reviews/index.html">Reviews / <span lang="cy">Adolygiadau</span></a></li>
<li><a href="interviews/index..html">Interviews / <span lang="cy">Cyweliadau</span></a></li>
<li><a href="news/index.html">News Articles / <span lang="cy">Erthyglau Newyddion</span></a></li>
</ul>
</li>

<li>Fans / FFanau
<ul>
<li><a href="/games/index.html">Games / <span lang="cy">Gemau</span></a></li>
<li><a href="profiles/index.html">Profiles/ <span lang="cy">Proffeil</span></a></li>
<li><a target="_blank" href="http://pub9.bravenet.com/chat/show.php?usernum=745618418&amp;cpv=1">Chat Room / <span lang="cy">Ystafell Sgwrs</span></a></li>
<li><a target="_blank" href="http://pub9.bravenet.com/forum/show.php?usernum=745618418&amp;cpv=1">Forum / <span lang="cy">FForwn</span></a></li>
<li><a target="_blank" href="http://pub9.bravenet.com/vote/vote.php?usernum=745618418&amp;cpv=1">Vote / <span lang="cy">Pleidlesio</span></a></li>
</ul>
</li>

<li>Other / Arall
<ul>
<li><a href="forsale.html">For Sale / <span lang="cy">Ar Wreth</span></a></li>
<li><a href="download.html">Downloads / <span lang="cy">Lawrlwythi</span></a></li>
<!--<li><a href="translation.html">Translation of song names and album titles</a></li>-->
</ul>
</li>

<li>Web / Gwe
<ul>
<li><a href="links.html">Links / <span lang="cy">Cysyllitiadau</span></a></li>
<li><!--<a href="newguestbook.html">--><a href="guestbook.html">Guestbook / <span lang="cy">Gwestai LLyfr</span></a></li>
<li><a href="sitemap.html">Sitemap / <span lang="cy">Map o we safle</span></a></li>
</ul>
</li>

<li>Me / Fi
<ul>
<li><a href="thankyou.html">Thank You / <span lang="cy">Diolch</span></a></li>
<li><a href="about_me.html">About Me / <span lang="cy">Am Fi</span></a></li>
</ul>
</li>

</ul>

</div>


<div id="content">

<?php

$i = 0;
$names = array();
$websites = array();
$comments = array();
$datesposted = array();
$messageid = array();

$mysqlquery = mysql_query("SELECT * FROM guestbook ORDER BY message_id DESC");
while ($rows = mysql_fetch_array($mysqlquery)){
	$names[$i] = $rows[0];
	$websites[$i] = $rows[1];
	$comments[$i] = $rows[2];
	$datesposted[$i] = $row[3];
	$messageid[$i] = $rows[4];
	
	
	$i++;
}
$noofrows = count($names);

?>
<?php

$i = 0;

while ($i < $noofrows){
	if ($messageid[$i] == 1){
?>
	<p>
	Name: <?php echo $names[$i];?>
	<br>
	Website: <a class="normal" target="_black" href="http://<?php echo $websites[$i];?>"><?php echo $websites[$i];?></a>
	<br>
	Comment: <?php echo $comments[$i];?>
	<!--<br>
	Message Id: <?php echo $messageid[$i];?>-->
	</p>
<?php
	}
	else{
?>
<p>
	Name: <?php echo $names[$i];?>
	<br>
	Website: <a class="normal" target="_black" href="http://<?php echo $websites[$i];?>"><?php echo $websites[$i];?></a>
	<br>
	Comment: <?php echo $comments[$i];?>
	<br>
	Message Id: <?php echo $messageid[$i];?>
	</p>
	<hr>
<?php
	}
	$i++;
}
?>

</div>

</body>

<?php

mysql_close($connection);

?>

</html>