<?php

function pengendaraMalam($n)
{
	if($n<0 || $n>1440)
	{
		return "input between 0 - 1440";
	}
	if($n===1440)
	{
		return "24:00";
	}
	$hour=floor($n/60);
	$minutes=$n%60;
	$d=mktime($hour, $minutes, 00);
	return date("H:i", $d);
	
}

print_r(pengendaraMalam(12));

?>