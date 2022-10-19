<?php 
//Problem 1
//Problem 2 of git hub
$array1 = [1,  3, 6, 2, 4];
$size = sizeof($array1);
$array2 = [2,0,4, 1, 2];
for ($i=0; $i <$size; $i++) { 
	echo $array1[$i]."&nbsp";
}
echo "<br>";
for ($i=0; $i <sizeof($array2); $i++) { 
	echo $array2[$i]."&nbsp";
}
// $array3= [];
// for ($i=0; $i <; $i++) { 
// 	 $array3[] = $array1[$i] +$array2[$i];
// 	 echo $array3[$i]."&nbsp";
// }

echo"<br>";
for ($i=0; $i < $size; $i++) { 
  	 // $array3 = $array1;
  	 // $array3[$i]+= $array2[$i];
	$array3[$i] = $array1[$i] + $array2[$i];
  	 echo $array3[$i]."&nbsp";  	 
 }
 echo "<br>";
 for ($i=0; $i < sizeof($array3); $i++) { 
 	echo $array3[$i]."&nbsp"; 
 	 }
 	echo "<br>";
  $unque = array_unique($array3);
  foreach ($unque as $key ) {
   echo "$key ";
  }
 
 
?>
