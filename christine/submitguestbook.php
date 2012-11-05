<?php
require("connection.php");

$name = $_POST[name];
$website = $_POST[website];
$comment =$_POST[comment];
$posted_date = date('Y-m-d H:i:s'); 

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

If (isset($_POST["name"])){

$mysqlquery = mysql_query("INSERT INTO guestbook(name, website, comment, posted_date) VALUES('$name','$website','$comment','$posted_date')") or die(mysql_error());

echo "<p>Thank you for thecomment. It will added to the guestbook after it has been checked by the  moderator.
	Diolch am y sylw. Bydd yn ychwanegu at y llyfr gwestai ar ôl iddo gael ei wirio gan y safonwr.</p>";
}
else{
?>
<p>To leave a comment in the guestbook, please fill in the form</p>

<form action="submitguestbook.php" method="post">
<table>
<tr>
		<td class="50right"><p>Name/Enw:</p></td>
		<td class="50left"><input type="text" size="20" name="name"></td>
	</tr>
	<tr>
		<td class="50right"><p>Website/Gwe safle:</p></td>
		<td class="50left"><input type="" size="20" name="website"></td>
	`</tr
	<tr>
		<td><p>Comment <br>
		<textarea cols="40" rows="5" name="comment"></textarea>
		</p>
		</td>
	</tr>
<table>
</form>
<input type="submit" name="submit" value="submit"><input type="reset" name="reset" value="reset">
<?php
}
?>

</div>

</body>

<?php

mysql_close($connection);

?>

</html>