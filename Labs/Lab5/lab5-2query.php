<?php include ('dbconnect.php'); ?>

<?php

echo "<br><br>";

$sql = "SELECT * FROM lab5table";
$result = mysqli_query($connect, $sql);
$sql2 = "SELECT * FROM lab5table";
$result2 = mysqli_query($connect, $sql2);
$arrloc = array();
$arrdate = array();
echo "<br><br>";


echo "<!DOCTYPE html>";

echo "<html>
    <head>
        <meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
        <meta http-equiv='Content-type' content='text/html; charset=utf-8'/>
        <title>Zakir Dawood - CPS530 - Lab 4 Part II</title>
    </head>

    <body style='background-color: #E7EFF8; text-align: center; font-family: monospace;'>
        <form action='https://webdev.scs.ryerson.ca/~zmdawood/lab5-2queryresult.php' method='post'>";


echo '<select name="location">';

while ($row = mysqli_fetch_assoc($result)) {
	if ( in_array( $row['location'], $arrloc ) ) {
	}
	else {
		echo '<option value="'.$row['location'].'">'.$row['location'].'</option>';
	}
	array_push($arrloc, $row['location']);
}
echo '</select>';
echo "<br><br>";
echo '<select name="date_taken">';

while ($row = mysqli_fetch_assoc($result2)) {
	if ( in_array( $row['date_taken'], $arrdate ) ) {
        }
        else {
                echo '<option value="'.$row['date_taken'].'">'.$row['date_taken'].'</option>';
        }
        array_push($arrdate, $row['date_taken']);

}

echo '</select>';
echo "<br><br><input type='submit'></form>"


?>
