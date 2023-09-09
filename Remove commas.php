<?php
$str=("1,234.34");
echo"before replacing<br>";
echo "$str <br>";
$result = str_ireplace("," ," ",$str);
echo"after replacing <br>";
echo "$result";
?>