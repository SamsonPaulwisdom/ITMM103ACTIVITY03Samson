<!DOCTYPE html>
<html>
<head>
	<title>	Section G</title>
</head>
<body>


<div>
	1]
	<br>
	<br>

	<?php

		echo "a.)";
		echo strtoupper("Hello WORLD!");

				echo "<br>";

		echo "b.)";
		echo strtolower("Hello WORLD.");

		echo "<br>";
				
		echo "c.)";
		echo strtoupper("Hello WORLD!");


		echo "<br>";
				
		echo "d.)";
		echo strtolower("Hello WORLD.");


	?>
<br>
<br>


</div>


<div>
	2]
	<br>
	<br>

	<?php
$str1= '082307'; 
echo substr(chunk_split($str1, 2, ':'), 0, -1)."\n";
		

	?>
<br>
<br>


</div>

<div>
	3]
	<br>
	<br>

	<?php

		$str1 = 'The quick brown fox jumps over the lazy dog.';
if (strpos($str1,'jumps') !== false) 
 {
    echo 'The specific word is present.';
 }
else
 {
    echo 'The specific word is not present.';
 }

	?>
<br>
<br>


</div>

<div>
	4]
	<br>
	<br>

	<?php

		$path = 'www.example.com/public_html/index.php';
$file_name = substr(strrchr($path, "/"), 1);
echo $file_name."\n"; // "index.php"
	?>
<br>
<br>


</div>

<div>
	5]
	<br>
	<br>

	<?php

		function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
  echo password_generate(7)."\n";

	?>
<br>
<br>


</div>

<div>
	6]
	<br>
	<br>

	<?php
for ($x = ord('a'); $x <= ord('z'); $x++)
 echo chr($x);
 echo "\n"
	?>
<br>
<br>


</div>

</body>
</html>