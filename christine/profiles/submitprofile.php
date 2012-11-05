<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
<title>Submit Profile/ Anfon Proffeil</title>
<meta name="KEYWORD" content="Y Cyrff, Submit Profile">
<meta name="DESCRIPTION" content="One of the only website about Y Cyrff. 
Un o y unig we safle am Y Cyrff.">
<meta name="author" content="Christine Black">
<meta name="generator" content="Notepad, Wordpad">
<meta http-equiv="Content-Type" content="text/html; charset=Iso-8859-14">
<meta name="rating" content="General">
<link rel="shortcut icon" href="../Images/icon/cyrff.ico">
<link rel="stylesheet" type="text/css" href="/css/style.css">
<link rel="stylesheet" type="text/css" href="/css/table.css">
<script language="Javascript" type="text/Javascript">
	<!--
	
	function vaildEmail(email) {
		invaildChars =" /:,:";
	if (email== "") {
		return false;
	}
	for (i=0; i<invalidChars.length;
		i++) {
		badChar = invaildChars.charAt(i);
		If (email.indexOf(badChar,0)
		> -1) {
			return false;
		}
	}
	atPos = email.indexOf("@",1)
	if (atPos == -1){
		return false;
	}
	if (email.indexOf("@",atPos+1) > -1){
		return false;
	}
	periodPos = email.indexOf (".",atPos)
	if (periodPos == -1 {
		return false;
	}
	if (periodPos + 3 > email.length) {
		return false;
	}
	return true;
	}

	function submitIt(profileForm) {
		if vaildEmail(profileForm.
		email.value)) {
		alert("Invaild email address");
		profileForm.email.focus();
		profile.email.select();
		return false;
	}
	return true;
//-->
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-31457269-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>

<div id="menu">
<!--It used that the menu was made up of over 60 lines of code.. Now it's 6 lines of code. It isn't that easier for new pages-->
<?php
include("../includes/menu.html");
?>
</div>

<div id="content">

<H1>Submit a Profile/<span lang="cy">Anfon proffeil</span></H1>

<br>
<br>

<?php
	if (isset($_POST["name"])){
	$name = $_POST["name"];
	$location = $_POST["location"];
	$website = $_POST["website"];
	$email = $_POST["email"];
	$heardcyrff = $_POST["heardcyrff"];
	$favesong = $_POST["favesong"];
	$favealbum = $_POST["favesong"];
	$comments = $_POST["comments"];

	$to ="ycyrffgroupie@gmail.com";
	$subject ="Fan profile submitted";
	$message = "<table style=\"Background-color: #800080;\">
	<tr>
		<td style=\"width: 50%;text-align:right\"><p style=\"color: #ffd700;\">Name/<span lang=\"cy\">Enw:</span>&nbsp;</p></td>
		<td style=\"width: 50%;text-align:left\"><p style=\"color: #ffd700;\">".$name."</p></td>
	</tr>
	<tr>
		<td style=\"width: 50%;text-align:right\"><p style=\"color: #ffd700;\">Location/<span lang=\"cy\">LLe:</span>&nbsp;</p></td>
		<td style=\"width: 50%;text-align:left\"><p style=\"color: #ffd700;\">".$location."</p></td>
	</tr>
	<tr>
		<td style=\"width: 50%;text-align:right\"><p style=\"color: #ffd700;\">Website/<span lang=\"cy\">Gwe safle:</span>&nbsp;</p></td>
		<td style=\"width: 50%;text-align:left\"><a style=\"color: #ffd700;\" href=\"".$website."\">".$website."</a></td>
	</tr>
	<tr>
		<td style=\"width: 50%;text-align:right\"><p style=\"color: #ffd700;\">E-mail/<span lang=\"cy\">E-bost:</span>&nbsp;</p></td>
		<td style=\"width: 50%;text-align:left\"><a style=\"color: #ffd700;\" href=\"mailto:".$email."\">".$email."</p></td>
	</tr>
	<tr>
		<td align=\"center\" colspan=\"2\"><p style=\"color: #ffd700;\">Where did you first heard about Y Cyrff/<span lang=\"cy\"> LLe naethoch chi cyntaf wedi clywed am Y Cyrff?</span></p> <br><p style=\"color: #ffd700;\">".$heardcyrff."</p></td>
	</tr>
	<tr>
		<td style=\"width: 50%;text-align:right\"><p style=\"color: #ffd700;\">Favourite Cyrff song/<span lang=\"cy\">Hoff g&acirc;n Cyrff:</span>&nbsp;</p></td>
		<td style=\"width: 50%;text-align:left\"><p style=\"color: #ffd700;\">".$favesong."</p></td>
	</tr>
	<tr>
		<td style=\"width: 50%;text-align:right\"><p style=\"color: #ffd700;\">Favoutite Cyrff album/<span lang=\"cy\">Hoff albwn Cyrff:</span>&nbsp;</p></td>
		<td style=\"width: 50%;text-align:left\"><p style=\"color: #ffd700;\">".$favealbum."</p></td>
	</tr>
	<tr>
		<td align=\"center\" colspan=\"2\"><p style=\"color: #ffd700;\">Other comments/<span lang=\"cy\"> Eraill sywl:</span></p> <br><p style=\"color: #ffd700;\">".$comments."</p></td>
</table>";
	
	$headers ='MIME-Version: 1.0'."\r\n";
	$headers .= 'Content-Type: text/html; charset=\"utf-8\"'. "\r\n";
	$headers .='From: '.$email."\r\n";

	mail($to,$subject,$message, $headers);
	echo "<p>Thank you, your profile has been submitted. I will add your profile soon so come back to check.</p>
		<p>Diolch i chi, eich proffil wedi ei gyflwyno. Byddaf yn ychwanegu eich proffil fuan er mwyn dod yn &ocirc;l i wirio.</p>";
	}
	else{
	
echo"<form onSubmit=\"return submitIt(this)\" name=\"profileForm\" method=\"post\" action=\"submitprofile.php\">
<table>
	<tr>
		<td class=\"50right\"><p>Name/<span lang=\"cy\">Enw:</span>&nbsp;</p></td>
		<td class=\"50left\"><input type=\"text\" size=\"20\" name=\"name\"></td>
	</tr>
	<tr>
		<td class=\"50right\"><p>Location/<span lang=\"cy\">LLe:</span>&nbsp;</p></td>
		<td class=\"50left\"><input type=\"text\" size=\"20\" name=\"location\"></td>
	</tr>
	<tr>
		<td class=\"50right\"><p>Website/<span lang=\"cy\">Gwe safle:</span>&nbsp;</p></td>
		<td class=\"50left\"><input type=\"text\" size=\"20\" name=\"website\"></td>
	</tr>
	<tr>
		<td class=\"50right\"><p>E-mail/<span lang=\"cy\">E-bost:</span>&nbsp;</p></td>
		<td class=\"50left\"><input type=\"text\" size=\"20\" name=\"email\"></td>
	</tr>
	<tr>
		<td align=\"center\" colspan=\"2\"><p>Where did you first heard about Y Cyrff/<span lang=\"cy\"> LLe naethoch chi cyntaf wedi clywed am Y Cyrff?</span></p> <br><textarea cols=\"20\" rows=\"5\" name=\"heardcyrff\"></textarea></td>
	</tr>
	<tr>
		<td class=\"50right\"><p>Favourite Cyrff song/<span lang=\"cy\">Hoff g&acirc;n Cyrff:</span>&nbsp;</p></td>
		<td class=\"50left\"><input type=\"text\" size=\"20\" name=\"favesong\"></td>
	</tr>
	<tr>
		<td class=\"50right\"><p>Favoutite Cyrff album/<span lang=\"cy\">Hoff albwn Cyrff:</span>&nbsp;</p></td>
		<td class=\"50left\"><input type=\"text\" size=\"20\" name=\"favealbum\"></td>
	</tr>
	<tr>
		<td align=\"center\" colspan=\"2\"><p>Other comments/<span lang=\"cy\"> Eraill sywl:</span></p> <br><textarea cols=\"20\" rows=\"5\" name=\"comments\"></textarea></td>
</table>

<br>
<br>

<input type=\"submit\" name=\"submit\" value=\"submit\"><input type=\"reset\" name=\"reset\" value=\"reset\">
</form>";
};
?>
<br>
<br>

<?php

$internal = array ('http://christine.ycyrffgroupie.co.uk/profiles/index.html',
		'http://christine.ycyrffgroupie.co.uk/profiles/',
		'http://www.ycyrffgroupie.co.uk/profiles/index.html',
		'http://www.ycyrffgroupie.co.uk/profiles/',
		'http://dev.ycyrffgroupie.co.uk/profiles/index.html',
		'http://dev.ycyrffgroupie.co.uk/profiles/');
if (in_array($_SERVER[HTTP_REFERER],$internal)){
?>
<p><img src="../images/site/back.jpg" width="156" height="44" alt="Back/Yn ol" onClick="history.back()"></p>
<?php
}else{
?>
<p>
<a href="/profiles"><img src="../images/site/back.jpg" width="156" height="44" alt="Back/Yn ol"></a>
</p>
<?php
}
?>

</div>

<div style="clear: both;">
</div>
<?php include("../includes/footer.php");?>

</body>

</html>