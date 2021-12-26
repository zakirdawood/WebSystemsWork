<!DOCTYPE html>

<html>
<head>
<title>Lab 5 Part I</title>
</head>

<body style="text-align:center; padding-top:15%; color: antiquewhite; background-color:#252540; font-size:1.5em;">

<?php

session_start();  
if (isset($_SESSION['views']))
      $_SESSION['views'] = ($_SESSION['views'] + 1);
else
      $_SESSION['views'] = 1;

echo "Pageviews = ". $_SESSION['views']; 



echo "<br>";
echo "<br>";

$a = $_POST["first"];
$b = $_POST["second"];

if ((is_numeric($a)) && (is_numeric($b))) {
	if (((3 <= $a) && ($a <= 12)) && ((3 <= $b) && ($b <= 12)))
	{
        	for ($x = 1; $x <= $a; $x++) {
                	for ($y = 1; $y <= $b; $y++) {
                        	$t = ($x * $y);
                        	if ($t < 10) {
                                	echo "<div style='font-family: monospace; display:inline-block;'>$t&nbsp;&nbsp;&nbsp;&nbsp;</div>";
                        	} elseif ($t < 100) {
                                	echo "<div style='font-family: monospace; display:inline-block;'>$t&nbsp;&nbsp;&nbsp</div>";
                        	} else {
                                	echo "<div style='font-family: monospace; display:inline-block;'>$t&nbsp;&nbsp;</div>";
                        	}
                	}
                	echo "<br>";
        	}
	}
	else {
		echo "<div style='font-family: monospace;'>Entries must be between 3 and 12</div>";
	}
} 
else {
	echo "<div style='font-family: monospace;'>Entries must be numeric</div>";
}		
?>

</body>

</html>
