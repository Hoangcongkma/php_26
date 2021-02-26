<?php
$Name = 'Ngyen tUng duoNg';
$Name = strtolower($Name);
$n = strlen($Name);
$Name{0} = strtoupper($Name{0});
$k = array(); 
for($i = 1; $i < $n; $i++)
{
	if($Name{$i} == ' ')
	{
		$Name{$i+1} = strtoupper($Name{$i+1});
		$i++;
		$k[] = $i; 
	}   
}
if(count($k) > 1)
{

	$ten_dem = substr($Name,$k[0],$k[1]);
	$ten = substr($Name, $k[1]);
}
echo $Name;
echo "<br>";
echo "Tên : ",$ten , ' ';
echo "<br>";
echo 'Tên Đệm : ',$ten_dem , ' ';
echo "<br>";
?>
<!-- explode(separator,string,limit) -->
