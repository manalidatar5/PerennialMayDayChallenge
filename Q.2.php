<?php
function equi($arr, $n)  
{  
    $i; $j;  
    $lsum; 
    $rsum;  

      for ($i = 0; $i < $n; ++$i)  
    {

        $lsum = 0;  
        for ($j = 0; $j < $i; $j++)  
            $lsum += $arr[$j];  
  
        
        $rsum = 0;  
        for ($j = $i + 1; $j < $n; $j++)  
            $rsum += $arr[$j];  
  
        
        if ($lsum == $rsum)  
            return $i;  
    } 

    return -1;  
}  
  
$arr = array( 1, 2, 3, 6, 3, 2, 1 );  
$arr_size = sizeof($arr);  
echo equi($arr, $arr_size);  
 
?>

