<?php

$Row = 3;
$Col = 5;
function spiral($m, $n, &$b) 
{
    $x = 0; 
    $l = 0; 



    while ($x < $m && $l < $n) 
    {
        for ($i = $l; $i < $n; ++$i) 
        { 
            echo $b[$x][$i] . " "; 
        } 
        $x++; 


        for ($i = $x; $i < $m; ++$i) 
        { 
            echo $b[$i][$n - 1];
        }
        $n--;

        if ($x < $m)
        {
            for ($i = $n - 1; $i >= $l; --$i) 
            {
                echo $b[$m - 1][$i]; 
            }
            $m--;
        }

        if ($l < $n)
        {
            for ($i = $m - 1; $i >= $x; --$i)
            {
                echo $b[$i][$l];
            }
            $l++;
        }
    }
}
 
$b = array(array(1, 2, 3, 4, 5, 6), 
           array(7, 8, 9, 10, 11, 12), 
           array(13, 14, 15, 16, 17, 18)); 
  
spiral($Row, $Col, $b);

?>
