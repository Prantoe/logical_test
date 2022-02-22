<?php

$n =100; 
$i = 1;
for( $i=1; $i < $n; $i++){
      if($i%3==0 && $i%5==0)
      {
            echo "foobar<br>";
      } elseif($i%3==0)
      {
            echo "foo<br>";
      } elseif($i%5==0)
      {
            echo "bar<br>";
      }else
      {
            echo "salah<br>";
      }
}
?>