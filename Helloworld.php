<?php

echo 'HelloWorld!'.PHP_EOL;
?>
<?php
$val1=100;
$val2=200;
if($val1<$val2) 
{echo $val1."よりも".$val2."のほうが大きいです。". PHP_EOL;}
elseif ($val1==$val2)
{echo "同じ値です。". PHP_EOL;}
else
{echo "どの条件文にも当てはまりませんでした。" .PHP_EOL;}
?>
