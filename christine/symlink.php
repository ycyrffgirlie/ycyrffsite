<html>
<head>
</head>
<body>

<?php

$link = '/home/ycyrf718/public_html/lyrics/contact.php';
$target = '/home/ycyrf718/public_html/contact.php';

symlink($target,$link);
echo readlink($link);
?>

</body>
<html>