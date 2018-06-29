<!DOCTYPE html>
<html>
<head>
	<title>Section D</title>
</head>
<body>

<div>
	1] Factorial
	<br>
	<br>

<?php

	function factorialnumber(){

		echo "Input number (deafult is 5)" ;
		$var = 5;
echo "<br> <br>";
		//counter

		$counter = 2;
		$factorial = 0;
		for ($i=1; $i <= $var; $i++) {
		if ($i == 1){ 
				$factorial = $i + $counter;
}
				

				else if ($i >= 3) {
					$factorial = $factorial + $i;
				}
		}

		echo "Factorial of " . $var . " is : " . $factorial;

		
		

	}



factorialnumber();

?>

</div>

<div>
	2] 

	<br>
	<br>

	<?php  

	function Primenumbers(){

		echo "Enter number (deafault is 5) <br>";

		$n = 5;
		$isprime = true;

		for ($i=2; $i <= $n / 2; ++$i){
			if ($n % $i == 0){
				$isprime = false;
				break;
			}
		}

		if ($isprime){
			echo "This is a Prime Number !";
		}
		else {
			echo "This is Not a Prime Number !";
		}

}


Primenumbers();


	?>



</div>

<br>
<br>


<div>
	
3] Reverse String

<br>
<br>


<?php

function ReverseString (){

echo "Input string : (Deafult is Hello World !) <br>
<br>";

//input string insode of strrev("")..
echo strrev("Hello World !");
}


ReverseString();


?>
</div>

<br>
<br>

<div>
	

4] Sort array function
<br>
<br>

<?php

function SortArray (){

	$variable = array('2', '5', '1', '4', '3' );
	sort($variable);

	for ($i=0; $i < 5; $i++) { 
		echo "$variable[$i] &nbsp";
	}
}


SortArray();
?>

</div>

<br>
<br>

<div>
	
5]Check if string is lowercase.
<br>
<br>



<?php

function check_lowercase_string($string) {
    $chars = '';
    // map all small chars
    for($alpha = 'a'; $alpha != 'aa'; $alpha++) { $small[] = $alpha; }
    $l = 0; // not strlen() :p
    while (@$string[$l] != '') {
        $l++;
    }
    for($i = 0; $i < $l; $i++) { // for each string input piece
        foreach($small as $letter) { // for each mapped letter
            if($string[$i] == $letter) {
                $chars .= $letter; // simple filter
            }
        }
    }

    // if they are still equal in the end then true, if they are not, false
    return ($chars === $string);
}

var_dump(check_lowercase_string('teSt')); // false

?>

</div>
<br>
<br>



<div>
	6] Function Odd or Even.
	<br>
	<br>

	<?php

		function OddorEven(){

			echo "enter number (default is 5) <br> <br>";

			$var = 5;

			if ($var % 2 == 0){
						echo "This is Even !";
			}

			else {
				echo "This is Odd !";
			}

		}


					OddorEven();
	?>



</div>
</body>
</html>