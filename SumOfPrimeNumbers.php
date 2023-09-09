<?php
$prime = true; 
$sum=0;
for ($i = 2; $i <= 100; $i++) {
    $is_prime = true; 
    for ($j = 2; $j * $j <= $i; $j++) {
        if ($i % $j == 0) {
            $is_prime = false;
            break; 
        }
    }

    if ($is_prime) {
        echo "$i  <br>";
        $sum+=$i;
        
    }
}
echo"the sum is <br> $sum";
?>