<?php
$num = 11;
$count = 0;

for($i=1; $i<=$num; $i++)
{
 if($num % $i == 0)
  {	
  	$count++;
  }
 }
 if($count ==0)
 {
 	echo "Composite Number";
 }
 else
 {
 	echo "Prime Number";
 }
?>