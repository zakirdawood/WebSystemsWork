<?php include ('dbconnect.php'); ?>

<?php

echo "<br><br>";
$date_taken = $_POST['date_taken'];
$location = $_POST['location'];
$sql = "SELECT * FROM lab5table";
$result = mysqli_query($connect, $sql);
$count = 0;
echo "<br><br>";


echo "<!DOCTYPE html>

<html>
<head>
<title>Lab 5 Part II</title>
</head>";

echo "<body style='text-align:center; color: antiquewhite; background-color:#252540; font-size:1.5em'>";
echo "<h1>Your Query Results</h1><br><br>";
while ($row = mysqli_fetch_assoc($result)) {
	if ($row['location'] == $location) {
		if ($row['date_taken'] == $date_taken) {
			$count = 1;
			$picurl = $row['picture_url'];
			$subject = $row['subject'];
			echo "<img src='$picurl' style='width:60%; object-fit:cover;'>";
			echo "<p>$subject</p>";
		}
	}
}


if ($count == 0) {
	echo "<p>No Matching Image</p>";
}		

echo "</body></html>";
?>
