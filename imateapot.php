<?php
header("Status: 418 I'm a teapot");

?>
<html>
<?php include 'includes/header.php'; ?>



<body>

<div id="menu">
<!--It used that the menu was made up of over 60 lines of code.. Now it's 6 lines of code. It isn't that easier for new pages-->
<?php
include("includes/menu.html");
?>
</div>

<div id="content">
<h1>I'm a teapot</h1>
<p>The Server is a teapot. The responding entity MAY be short and stout.</p>

</div>
</body>

</html>