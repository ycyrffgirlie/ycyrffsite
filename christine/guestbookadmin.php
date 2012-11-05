<?php
require("connection.php");

/*function post(){

}

function delete(){

$selectedrow =$_POST('selectedrow[]')

if ($selectedrow == 0){
echo $selectedrow." is selected";
}
else{
}
}*/

?>

<html>
<title>Guestbook Admin</title>
<head>
<meta name="author" content="Christine Black">
<meta name="generator" content="SciTE">
<meta http-equiv="Content-Type" content="text/html; charset=Iso-8859-14">
<meta name="rating" content="General">
<link rel="shortcut icon" href="Images/icon/cyrff.ico">
<link rel="stylesheet" type="text/css" href="/css/style.css">
<link rel="stylesheet" type="text/css" href="/css/table.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js">
</script>
<script type="text/javascript">
$(document).ready(function(){
	$("td").click(function(){
		$("p").click(function(){
			$(this).hide();
			$("a").hide();
			$("input[type='hidden']").prop('type','text');
			$("input[name='messageId']").prop('size','4');
		
		})
	})
})
</script>
</head>
<body>

<form action="guestbookadmin.php" method="post">

<?php
$query = mysql_query("SELECT * FROM holding_Guestbook");

echo"<!--I need green and some food before I write anymore of this -->";

echo "<table class=\"admin\">

	<th></th>
	<th class=\"admin\">Name</th>
	<th class=\"admin\">Website</th>
	<th class=\"admin\">Comment</th>
	<th class=\"admin\">Date Posted</th>
	<th class=\"admin\">Message Id</th>";

$i = 0;

while ($rows = mysql_fetch_array($query)){
	echo "<tr>
			<td class=\"admin\"><input type=\"checkbox\" name=\"selectedrow[".$i."}\"></td>
			<td class=\"admin\"><input type=\"hidden\" value=\"".$rows{0}."\">
			<p>".$rows[0]."</p></td>";
			if ($rows[1]== null || $rows[1] ==" "){
				echo "<td class=\"admin\"></td>";
			}
			else{
				?>
				<td class="admin"><input type="hidden" value="<?php echo $rows{1}?>">
			 <a class="normal" href="http://<?php echo $rows[1]?>"><?php echo $rows[1];?></a></td>
			<?php
			}
			echo "<td class=\"admin\">
			<input type=\"hidden\" value=\"".$rows{2}."\">
			<p>".$rows[2]."</p></td>
			<td class=\"admin\"><input type=\"hidden\" value=\"".$rows{3}."\">
			<p>".$rows[3]."</p></td>
			<td class=\"admin\"><input type=\"hidden\" name=\"messageId\" value=\"".$rows{4}."\">
			<p>".$rows[4]."</p></td>
	</tr>"."\n";
	
	$i++;
	
	}

echo "</table>";
	
?>
<!-- Got Cyrff but no green. Putting up my keyboard for the day until green arrives-->
<?php
//Got Cyrff and green. 
?>

<input type="submit" value="delete"><input type="submit" value="post">

</form>

</body>
</html>