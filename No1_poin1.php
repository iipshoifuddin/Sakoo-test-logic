<?php

function lingkaranBulat($n, $thisNumber)
{
  if($n%2===1)
  {
	  return " 'n' Harus bilangan Bulat ";
	  
  }
  if($thisNumber<0 || $thisNumber>=$n )
  {
	  return "inputan ('$'thisNumber) lebih dari sama dengan 0 dan kurang dari ($ n)";
  }
  
  $index=0;
  for($j=$thisNumber; $j<$n; $j++)
  {
      $array_set[$index]=$j;
      $index++;
  }
  $index2=count($array_set);
  for($k=0; $k<$thisNumber; $k++)
  {
	$array_set[$index2]=$k;
	$index2++;
  }
  
  return $array_set[$n/2];
}  

print_r(lingkaranbulat(10,3));

?>