<!DOCTYPE html>
<html>
<head>
	<title>Section B</title>
</head>
<body>

	<p>
		1]

		<br>
		<br>

		<?php

$color = array('white','green','red','blue','black');

		echo "&quot;The memory of that scene for me is like a frame of film forever frozen at that moment: the ". $color[2] . " 
carpet, the " . $color[1] . " lawn, the " . $color[0]. " house, the leaden sky. The new president and his first lady. <br>";

echo "- Richard M. Nixon";
		?>

	</p>


	<p>
		2]

		<br>
		<br>


		<?php

		$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=>"Brussels", "Denmark"=>"Copenhagen", "Finland&"=>"Helsinki","France"=>"Paris&quot", "Slovakia&quot"=>"Bratislava&quot", "Slovenia&quot"=>"Ljubljana&quot", "German"=>"Berlin", "Greece"=>"Athens&quot", "Ireland"=>"Dublin&quot", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin&quot", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria"=>"Vienna", "Poland"=>"Warsaw") ;

			sort($ceu);


		echo "<br><br><br>";


echo "Output : <br>";

foreach($ceu as $x => $x_value) {
    echo "The capital of " . $x . ", is " . $x_value;
    echo "<br>";
}



		?>


	</p>



<p>
	
	3]

	<br>
	<br>

<?php

$myObj = new \stdClass();

$myObj->Title = "The Cuckoos Calling";
$myObj->Author = "Robert Galbraith";
$myObj->Publisher = "Little Brown";

echo "Sample JSON code : <br>";


$myJSON = json_encode($myObj); 
echo $myJSON;

echo "<br>";
echo "<br>";


echo "Title : ". $myObj->Title  . "<br>";
echo "Author : ". $myObj->Author  . "<br>";
echo "Publisher : ". $myObj->Publisher  . "<br>";

echo "<br>";
echo "<br>";
echo "<br>";

?>

</p>


<p>
	
4]

<br>
<br>

<?php

$x = array("1" , "2" , "3" , "4" , "5" );
echo "Original array :<br>";


foreach ($x as $key => $value) {
	echo "$value &nbsp";
}

echo "<br>";
echo "<br>";

echo "After insterting '$' the array is:<br>";
array_push($x, "$");

foreach ($x as $key => $value) {
	echo "$value &nbsp";
}


?>

</p>




<p>
	
5]

<br>
<br>

<?php


echo "a) ascending order sort by value. <br> <br>";

$asd1 = array("Sophia" => "31", "Jacob" => "41", "Willia" => "39", "Ramesh" => "40");

asort($asd1);

foreach ($asd1 as $key => $value) {
	echo "$key = ". $value . "<br>";

}


echo "<br>";
echo "b) ascending order sort by Key. <br> <br>";

$asd2 = array("Sophia" => "31", "Jacob" => "41", "Willia" => "39", "Ramesh" => "40");

ksort($asd2);

foreach ($asd2 as $key => $value) {
	echo "$key = ". $value . "<br>";

}

echo "<br>";

echo "c) descending order sorting by Value. <br> <br>";


$asd3 = array("Sophia" => "31", "Jacob" => "41", "Willia" => "39", "Ramesh" => "40");

arsort($asd3);

foreach ($asd3 as $key => $value) {
	echo "$key = ". $value . "<br>";

}

echo "<br>";


echo "d) descending order sorting by Key. <br> <br>";


$asd4 = array("Sophia" => "31", "Jacob" => "41", "Willia" => "39", "Ramesh" => "40");

krsort($asd4);

foreach ($asd4 as $key => $value) {
	echo "$key = ". $value . "<br>";

}

echo "<br>";

?>


</p>




<p>

6]

<br>
<br>	


<?php


echo "Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72,
65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73 <br> <br>";



$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."<br>
"; 
sort($temp_array);
echo " List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}

echo "<br>";
echo "List of five highest temperatures :";
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}

echo "<br>";
echo "<br>";


?>



</p>

</body>
</html>