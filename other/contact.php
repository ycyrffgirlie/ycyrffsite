
<?php
$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
//$comments = $_REQUEST["comments"];

$subject = &$name;
$subject = "A comment left by $subject";

$message = $_POST['comments'];
$headers='Content-type: text/html; charset=iso-8859-1';

?>
<html>
<head>
 <title>Contact</title>
</head>
<body>


<?php
mail("ycyrffgroupie@gmail.com", "Subject: $subject", $mesage, "From: $email", $headers); 

echo $subject;
echo $email;
echo $message;
?>
</body>
</html>
