<?php
 
// PHP Function to print
// leaders in an array
function printLeaders($arr, $size)
{
	for ($i = 0; $i < $size; $i++)
	{
		for ($j = $i + 1; $j < $size; $j++)
		{
			if ($arr[$i] <=$arr[$j])
				break;
		}
		
		// the loop didn't break
		if ($j == $size)
			echo($arr[$i] . " ");
		}
}

// Driver Code
$arr = array(16, 14, 4, 3, 5, 2);
$n = sizeof($arr);
printLeaders($arr, $n);
	
// This code is contributed
// by Shivi_Aggarwal
 
echo"<br>";
// PHP Function to print
// leaders in an array 
function printLeader(&$arr1, $size)
{
    $max_from_right = $arr1[$size - 1];
  
    // Rightmost element 
    // is always leader 
    echo($max_from_right);
    echo(" ");
      
    for ($i = $size - 2; $i >= 0; $i--)
    {
        if ($max_from_right < $arr1[$i])    
        {         
            $max_from_right = $arr1[$i];
            echo($max_from_right);
            echo(" ");
        }
    } 
}
  
// Driver Code
$arr1 = array(16, 17, 4, 3, 5, 2);
$n1 = sizeof($arr1);
printLeader($arr1, $n1);
  
// This code is contributed 
// by Shivi_Aggarwal




?>