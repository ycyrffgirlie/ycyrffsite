<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
<title></title>
<meta http-equiv="Content-type" content="text/html;charset=iso-5589-14" >
<link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
<h1>Contact us/<span lang="cy">Cysylltu a ni</span></h1>


<?php
echo"<!--Author: Christine A. Black-->";
	if (isset($_POST["name"])){
	$name = $_POST["name"];
	$website = $_POST["website"];
	$email = $_POST["email"];
	$message1 = $_POST["message"];

	//ycyrffgroupie@gmail.com,
	$to ="ycyrffgroupie@gmail.com,llwybrllaethog@gmail.com";
	$subject ="Website / Gwe Safle";
	$message = "<table style=\"Background-color: #000000;\">
	<tr>
		<td style=\"width: 50%;text-align:right\"><p style=\"color: #ffffff;\">Name/<span lang=\"cy\">Enw:</span>&nbsp;</p></td>
		<td style=\"width: 50%;text-align:left\"><p style=\"color: #ffffff;\">".$name."</p></td>
	</tr>
	<tr>
		<td style=\"width: 50%;text-align:right\"><p style=\"color: #ffffff;\">Website/<span lang=\"cy\">Gwe safle:</span>&nbsp;</p></td>
		<td style=\"width: 50%;text-align:left\"><a style=\"color: #ffffff;\" href=\"".$website."\">".$website."</a></td>
	</tr>
	<tr>
		<td style=\"width: 50%;text-align:right\"><p style=\"color: #ffffff;\">E-mail/<span lang=\"cy\">E-bost:</span>&nbsp;</p></td>
		<td style=\"width: 50%;text-align:left\"><a style=\"color: #ffffff;\" href=\"mailto:".$email."\">".$email."</a></td>
	</tr>
	<tr>
		<td style=\"width: 50%;text-align:right\"><p style=\"color: #ffffff;\">Message/<span lang=\"cy\"> Neges:</span></p> </td>
		<td style=\"width: 50%;text-align:left\"><p style=\"color: #ffffff;\">".$message1."</p></td>
	</tr>
</table>";
	
	$headers ='MIME-Version: 1.0'."\r\n";
	$headers .= 'Content-Type: text/html; charset="iso-5589-14"'. "\r\n";
	$headers .='From: '.$email."\r\n";

	mail($to,$subject,$message, $headers);
	
	echo "<p>Thank you, your email has been sent. We will be in touch soon.</p>
		<p>Diolch i chi, eich e-bost wedi cael ei anfon. Byddaf yn cysylltu â chi cyn bo hir</p>";

	}
	else{
	
echo"<p>Please fill the form to contact us. Llenwch y ffurflen i gysylltu â ni.</p>
<br>
<br>
<form name=\"profileForm\" method=\"post\" action=\"contact.php\">
<table>
	<tr>
		<td><p>Name/<span lang=\"cy\">Enw:</span>&nbsp;</p></td>
		<td><input type=\"text\" size=\"20\" name=\"name\"></td>
	</tr>
	<tr>
		<td><p>Website/<span lang=\"cy\">Gwe safle:</span>&nbsp;</p></td>
		<td><input type=\"text\" size=\"20\" name=\"website\"></td>
	</tr>
	<tr>
		<td><p>E-mail/<span lang=\"cy\">E-bost:</span>&nbsp;</p></td>
		<td><input type=\"text\" size=\"20\" name=\"email\"></td>
	</tr>
	<tr>
		<td><p>Message/<span lang=\"cy\"> Neges:</span></p> <br><textarea cols=\"20\" rows=\"5\" name=\"message\"></textarea></td>
	</tr>
</table>

<br>
<br>

<input type=\"submit\" name=\"submit\" value=\"submit\"><input type=\"reset\" name=\"reset\" value=\"reset\">
</form>";
};
?>

</body>

</html>