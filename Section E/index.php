<!DOCTYPE html>
<html>
<head>
	<title>	Section E</title>
</head>
<body>

<div>

	1]
	<br>
	<br>

<?php

$txt = "The quick brown fox";
$str= preg_replace('/\W\w+\s*(\W*)$/', '$1', $txt);
echo $str

?>


<br>
<br>

</div>

<div>
	
2] 
<br>
<br>

<?php
$string = "the quick brown fox";
$string = preg_replace('/\s+/', '', $string);

echo $string;
?>

<br>
<br>
</div>


<div>
	
3] 
<br>
<br>

<?php

$string1 = "$123,34.00A";
$string1 = preg_replace('/[^0-9]/', '', $string1);

echo $string1;

?>

<br>
<br>
</div>

<div>
	
4] 
<br>
<br>

<?php

$string = 'abcde$ddfd @abcd )der]';
echo 'Old string : '.$string.'<br>';
$newstr = preg_replace("/[^A-Za-z0-9 ]/", '', $string);
echo 'New string : '.$newstr."\n";
?>

<br>
<br>
</div>




</body>
</html>