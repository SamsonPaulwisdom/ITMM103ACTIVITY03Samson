<!DOCTYPE html>
<html>
<head>
	<title>	Section F</title>
</head>
<body>

<div>
1] 
<br>
<br>

<?php
echo "© 2013 PHP Exercises - w3resource <br>"

?>
<br>
<br>

</div>

<div>
2] 
<br>
<br>

<?php
$target_days = mktime(0,0,0,12,31,2013);// modify the birth day 12/31/2013
$today = time();
$diff_days = ($target_days - $today);
$days = (int)($diff_days/86400);
print "Days till next birthday: $days days!"."\n";

?>
<br>
<br>

</div>


<div>
3] 
<br>
<br>

<?php
echo date("Y/m/d") . "<br>";
echo date("y.m.d") . "<br>";
echo date("d-m-y")."<br>";

?>

<br>
<br>

</div>

<div>



	4] 
<br>
<br>

<?php
$dt='2011-01-01';
echo 'Original date : '.$dt."<br>";
$no_days = 40;
$bdate = strtotime("-".$no_days." days", strtotime($dt));
$adate = strtotime("+".$no_days." days", strtotime($dt));
echo 'Before 40 days : '.date("Y-m-d", $bdate)."<br>";
echo 'After  40 days : '.date("Y-m-d", $adate)."<br>";
?>

<br>
<br>

</div>


<div>



	5] 
<br>
<br>

<?php
$bday = new DateTime('13.5.1999'); // Your date of birth
$today = new Datetime(date('m.d.y'));
$diff = $today->diff($bday);
printf(' Your age : %d years, %d month, %d days', $diff->y, $diff->m, $diff->d);
printf("<br>");

?>

<br>
<br>

</div>

<div>



	6] 
<br>
<br>

<?php
function week_between_two_dates($date1, $date2)
{
    $first = DateTime::createFromFormat('m/d/Y', $date1);
    $second = DateTime::createFromFormat('m/d/Y', $date2);
    if($date1 > $date2) return week_between_two_dates($date2, $date1);
    return floor($first->diff($second)->days/7);
}

$dt1 = '1/1/2014';
$dt2 = '12/31/2014';
echo 'Weeks between '.$dt1.' and '. $dt2. ' is '. week_between_two_dates($dt1, $dt2)."<br>";
?>

<br>
<br>

</div>




</body>
</html>