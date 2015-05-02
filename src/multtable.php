<?php

$min_multiplicand = $_GET["min-multiplicand"];
$max_multiplicand = $_GET["max-multiplicand"];
$min_multiplier = $_GET["min-multiplier"];
$max_multiplier = $_GET["max-multiplier"];

$values = array($min_multiplicand, $max_multiplicand, $min_multiplier, $max_multiplier);
foreach ($values as $value) {
	if(!intval($value))
	{
		echo $value, " value must be an integer\n";
	}
}


if($max_multiplicand < $min_multiplicand)
{
	echo "Minimum, ", $min_multiplicand," larger than maximum.";
}
else
{

	echo "<table style='border: 1px solid black; border-collapse: collapse;' width='600'>";
	
		echo "<tr><th style='border: 1px solid black;'></th>";
	for($j = $min_multiplier; $j <= $max_multiplier; $j++ )
	{
		echo "<th style='border: 1px solid black;'>", $j, "</th>";
	}
		echo "</tr>";
	
	for($i = $min_multiplicand; $i <= $max_multiplicand; $i++)
	{
		echo "<tr><td style='border: 1px solid black;'>", $i,"</td>";
		for($j = $min_multiplier; $j <= $max_multiplier; $j++)
		{
			echo "<td style='border: 1px solid black;'>",$i * $j, "</td>";
		}
		echo "</tr>";
	}
	
	echo "</table>";
}

