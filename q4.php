<?php 
$a = 10;
$b = 20;
$c = 30;

if($a>$b && $a>$c)
	{
		echo $a.' '."is the greatest number";
	}
else if ($b>$a&&$b>$c)
	{
		echo $b.' '."is the greatest number";
	}

else
	{
		echo $c.' '."is the greatest number";
	}
?>