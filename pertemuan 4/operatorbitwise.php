<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Operator Penugasan</h1>
<p>
	<?php

	$a= 60;
	$b =13;

	// bitwise AND
	$c= $a & $b;
	echo "$a & $b = $c";
	echo "<br>";

	// bitwise OR
	$c = $a | $b;
	echo "$a | $b = $c";
	echo "<br>";

	// bitwise XOR
	$c = $a ^ $b;
	echo "$a ^ $b = $c";
	echo "<br>";

	// shift left
	$c = $a << $b;
	echo "$a << $b = $c";
	echo "<br>";

	// shift right
	$c = $a >> $b;
	echo "$a >> $b = $c";
	echo "<br>";

	?>
</p>
</body>
</html>