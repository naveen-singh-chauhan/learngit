<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Table</title>
	<style type="text/css">
		

		/*.cell{
			padding: 3px;
			: 12px;
		}*/
	</style>
</head>
<body>
	<table border="1" cellpadding="3px" cellspacing="1px">
			<?php 
			$sum = 1;
for ($i=1; $i <=5; $i++) { 
	echo "<tr>";
	for ($j=1; $j <=10 ; $j++) { 
		  $sum = $i * $j;
		  echo "<td>$i X $j = $sum</td>";
	}
echo "</tr>";
}
echo "<br>";
	?> 
	</table>
</body>
</html>