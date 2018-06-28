<!DOCTYPE html>
<html>
<head>
	<title>Section A</title>
</head>
<body>

<h3>
<?php
echo "1.] and 2.]";
$var = "PHP TUTORIAL";

echo "$var <br> <br>";

?>

</h3>

<p>
	<?php

echo "PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.
    PHP is a widely-used, free, and efficient alternative to competitors such as Microsoft's ASP.";



	?>

<br>
<br>

<a href="https://www.w3schools.com/pHP/default.asp">Go to the PHP Tutorial</a>

</p>


<br>

3.]

<h3>Simple Form</h3>

<br>

<br>

<form action="index.php" method="post">
User's Name: <input type="text" name="name"><br>
<input type="submit">
</form>

<br>
<br>

<div>Your data !</div> 
<br>

Displaying Name: <?php echo $_POST["name"]; ?>

<br>

<br>



<?php
echo "4.] <br><br>";
$url = 'https://www.w3resource.com/php-exercises/php-basic-exercises.php';

//print_r(parse_url($url));
echo "Expected Output : <br>";

echo "Scheme : "; echo parse_url($url, PHP_URL_SCHEME) ; echo "<br>";
echo "Host : ";echo parse_url($url, PHP_URL_HOST) ; echo "<br>";;
echo "Path: "; echo parse_url($url, PHP_URL_PATH) ; echo "<br>";;

?>



<p> 5.] 
<br>
<br>







</p>


<p>
	6.]
	<br>
	<br>

	<?php

		echo "Output : <br><br>";

	
		$product = 0;

		 for ($i = 1; $i <= 6; $i++){
		 	for ($y = 1; $y <=6; $y++){
		 		$product = $i * $y;
		 		echo "$product &nbsp";
 		}
 		echo "<br>";
		 	
		 }


	?>

</p>



</body>
</html>