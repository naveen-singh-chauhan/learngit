<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<style>
		.black{
			background-color: black;
		}
		.white{
			background-color: white;
		}
	</style>
</head>
<body>
	<center>
	<table border="1" cellpadding="30px" cellspacing="1px" width="500px" height = "200px">
		<?php 
		 for ($i=0; $i <8 ; $i++) {
		 echo"<tr>"; 
		 	for ($j=0; $j <8 ; $j++) { 
		 	$sum = $i+$j;
		 	if($sum % 2 ==0){
		 		 echo "<td class ='black'> </td>";
		 	}
		 	else{
		 		echo "<td class ='white'> </td>";
		 	}
		 }
		 	 echo "</tr>";
		 }
		?>
	</table>
</center>
</body>
</html>