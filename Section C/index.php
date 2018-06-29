<!DOCTYPE html>
<html>
<head>
	<title>Section C</title>
</head>
<body>

<div>
	1]

	<br>
	<br>

<?php

for ($i=1; $i <= 10 ; $i++) { 
	echo "$i";
	if ($i <= 9) {
		echo "-";
	}
}

echo "<br>";
echo "<br>";
?>


</div>


<div>
	2]
	<br>
	<br>
	<?php
for ($x = 0; $x <= 5; $x++){
	for ($y = 0; $y < $x; $y++){
		echo " * ";
	}
	echo "<br>";

}


for ($x = 5; $x >= 0; $x--){
	for ($y = 0; $y < $x; $y++){
		echo " * ";
	}
	echo "<br>";

}


	?>

</div>


<div>
	
3]
<?php

echo "<table cellpadding = '3px' cellspacing = '0px' border = '1px'>";

$Product = 0;
for ($i=1; $i <= 5; $i++) { 
	echo "<tr>";
	for ($j=0; $j < 5; $j++) { 

		$Product = $i * $j;

	
		echo "<td>";
			echo "$i" . " * " . "$j = " . $Product;
		echo "</td>";



}
	echo "<tr>";
echo "<br>";

}

echo "</table>";


echo "<br>";
echo "<br>";
?>


</div>



<div>
	
4]

<br>
<br>

 <table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
   <!-- cell 270px wide (8 columns x 60px) -->
      <?php
      for($row=1;$row<=8;$row++)
	  {
          echo "<tr>";
          for($col=1;$col<=8;$col++)
		  {
          $total=$row+$col;
          if($total%2==0)
		  {
          echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
          }
		  else
		  {
          echo "<td height=30px width=30px bgcolor=#000000></td>";
          }
          }
          echo "</tr>";
    }
          ?>
  </table>

</div>



<div>
	
	<br>
	<br>
5]

<br>
<br>


<?php

$cols = 10;
$rows = 10;
?>

<?php

echo "<table cellspacing = '0px' cellpadding = '3px' border=\"1\">";

        for ($r =0; $r <= $rows; $r++){

            echo'<tr>';

            for ($c = 0; $c <= $cols; $c++)
                echo '<td>' .$c*$r.'</td>';
           echo '</tr>'; // close tr tag here

        }

  echo"</table>";




  ?>
</div>




<br>
<br>

<div>

6]

<br>
<br>
	
<?php

for ($i=0; $i < 7; $i++) { 
	for ($j=0; $j < 5; $j++) { 

		if ($i != 0 && $i != 6){
			if ($j == 3){
				echo "&nbsp&nbsp&nbsp *";
			}
		}	
		else {	
		echo "*";
}


	}

	echo "<br>";
}


?>




</div>







</body>
</html>