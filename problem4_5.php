<?php
//Problem 4 
echo "Problem 4<br>";
for ($j=1; $j <=10; $j++) { 
	 echo $j;
	 if($j ==10)
	 {
	 	echo " ";
	 }
	 else
	 {
	 	echo "-";
		echo" hello";
	 }
}
echo "<br>";

//Problem 5
echo "Problem 5<br>";
$i = 0;
$sum =0;

//while loops
while ($i<30) {
	echo $i.", ";
	$sum += $i;
 $i++;
}
echo "<br>";
echo "Total sum of 0 to 30 is ".$sum;



?>