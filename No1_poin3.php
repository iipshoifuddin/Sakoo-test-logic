<?php
function hartaKarun($value1, $weight1, $value2, $weight2, $maxKeranjang)
{
	if($value1>20 || $value1<1 || $value2>20 || $value2<1)
	{
		return "value between 1 - 20";
	}
	if($weight1>20 || $weight1<1 || $weight2>20 || $weight2<1)
	{
		return "Weight between 1 - 20";
	}
	if($maxKeranjang>20 || $maxKeranjang<1)
	{
		return "Max Keranjang between 1 - 20";
	}
	if(($weight1+$weight2)<=$maxKeranjang)
	{
		$jumlah=$value1+$value2;
	}
	elseif($weight1>$weight2)
	{
		$jumlah=$value1;
	}
	elseif($weight2>$weight1)
	{
		$jumlah=$value2;
	}
	else
	{
		return "Item tidak bisa dibawa";
	}
	return $jumlah;
}

print_r(hartaKarun(7, 4, 12, 6, 8));
echo "<br />";
print_r(hartaKarun(8, 8, 1, 1, 9));
?>