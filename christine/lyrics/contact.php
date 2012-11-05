<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
<title>Submit Profile/ Anfon Proffeil</title>
<meta name="KEYWORD" content="Y Cyrff, Submit Profile">
<meta name="DESCRIPTION" content="One of the only website about Y Cyrff. 
Un o y unig we safle am Y Cyrff.">
<meta name="author" content="Christine Black">
<meta name="generator" content="Notepad, Wordpad">
<meta http-equiv="Content-Type" content="text/html; charset=Iso-8859-1">
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
</head>

<body>
<H5>Contact me/<span lang="cy">Cysylltu a fi</span></H5>
<p>Please fill the form to contact the webmistress. Llenwch y ffurflen i gysylltu â'r webmistress.</p>
<br>
<br>

<?php
	if (isset($_POST["name"])){
	$name = $_POST["name"];
	$website = $_POST["website"];
	$email = $_POST["email"];
	$message1 = $_POST["message"];

	$to ="ycyrffgroupie@gmail.com";
	$subject ="Website / Gwe Safle";
	$message = "<table style=\"Background-color: #800080;\">
	<tr>
		<td style=\"width: 50%;text-align:right\"><p style=\"color: #ffd700;\">Name/<span lang=\"cy\">Enw:</span>&nbsp;</p></td>
		<td style=\"width: 50%;text-align:left\"><p style=\"color: #ffd700;\">".$name."</p></td>
	</tr>
	<tr>
		<td style=\"width: 50%;text-align:right\"><p style=\"color: #ffd700;\">Website/<span lang=\"cy\">Gwe safle:</span>&nbsp;</p></td>
		<td style=\"width: 50%;text-align:left\"><a style=\"color: #ffd700;\" href=\"".$website."\">".$website."</a></td>
	</tr>
	<tr>
		<td style=\"width: 50%;text-align:right\"><p style=\"color: #ffd700;\">E-mail/<span lang=\"cy\">E-bost:</span>&nbsp;</p></td>
		<td style=\"width: 50%;text-align:left\"><a style=\"color: #ffd700;\" href=\"mailto:".$email."\">".$email."</a></td>
	</tr>
	<tr>
		<td style=\"width: 50%;text-align:right\"><p style=\"color: #ffd700;\">Message/<span lang=\"cy\"> Neges:</span></p> </td>
		<td style=\"width: 50%;text-align:left\"><p style=\"color: #ffd700;\">".$message1."</p></td>
	</tr>
</table>";
	
	$headers ='MIME-Version: 1.0'."\r\n";
	$headers .= 'Content-Type: text/html; charset=\"utf-8\"'. "\r\n";
	$headers .='From: '.$email."\r\n";

	mail($to,$subject,$message, $headers);
	
	echo "<p>Thank you, your email has been sent. I will be in touch soon.</p>
		<p>Diolch i chi, eich e-bost wedi cael ei anfon. Byddaf yn cysylltu â chi cyn bo hir</p>
		<a class=\"normal\" href=\"javascript:window.close()\">Close</a>";

	}
	else{
	
echo"<form onSubmit=\"return submitIt(this)\" name=\"profileForm\" method=\"post\" action=\"contact.php\">
<table>
	<tr>
		<td class=\"50right\"><p>Name/<span lang=\"cy\">Enw:</span>&nbsp;</p></td>
		<td class=\"50left\"><input type=\"text\" size=\"20\" name=\"name\"></td>
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
		<td align=\"center\" colspan=\"2\"><p>Message/<span lang=\"cy\"> Neges:</span></p> <br><textarea cols=\"20\" rows=\"5\" name=\"message\"></textarea></td>
	</tr>
</table>

<br>
<br>

<input type=\"submit\" name=\"submit\" value=\"submit\"><input type=\"reset\" name=\"reset\" value=\"reset\">
</form>

<a class=\"normal\" href=\"javascript:window.close()\">Close</a>";
};
?>

</div>
</body>

</html>