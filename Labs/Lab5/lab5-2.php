<!DOCTYPE html>

<html>
<head>
<title>Lab 5 Part II</title>
</head>

<body style="text-align:center; color: antiquewhite; background-color:#252540; font-size:1.5em;">
<?php echo "<br>";?>
<?php include ('dbconnect.php');?>

<?php
echo "<br>";
// creating a table with 5 fields
$sql = "CREATE TABLE lab5table (
picture_number INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
subject VARCHAR(20) NOT NULL,
location VARCHAR(20) NOT NULL,
date_taken VARCHAR(20) NOT NULL,
picture_url VARCHAR(200) NOT NULL)";

if (mysqli_query($connect, $sql)) {
	echo "new table created successfully.<br>";
}

echo "<br>";
echo "<div style='font-family: monospace; display:inline-block;'><strong>Subject&nbsp;&nbsp;</strong></div>";
echo "<div style='font-family: monospace; display:inline-block;'><strong>Location&nbsp;&nbsp;</div></strong>";
echo "<div style='font-family: monospace; display:inline-block;'><strong>Date Taken</strong></div>";
echo "<br>";
?>

<?php

$sql = "SELECT * FROM lab5table ORDER BY date_taken DESC";
$result = mysqli_query($connect, $sql);
$count = 0;
$sql2 = "SELECT * FROM lab5table ORDER BY date_taken DESC";
$result2 = mysqli_query($connect, $sql2);
$sql3 = "SELECT * FROM lab5table ORDER BY RAND() LIMIT 1";
$result3 = mysqli_query($connect, $sql3);
$total = 0;
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
	echo "<br>";
	$subject = $row["subject"];
	$location = $row["location"];
	$date_taken = $row["date_taken"];
	$picurl = $row["picture_url"];
	$total = $total + 1;
	echo "<div style='font-family: monospace; display:inline-block;'>$subject&nbsp;-</div>";
	echo "<div style='font-family: monospace; display:inline-block;'>&nbsp;$location&nbsp;-</div>";
	echo "<div style='font-family: monospace; display:inline-block;'>&nbsp;$date_taken</div>";
	echo "<br>";
  }
} else {
  echo "No results.";
}


echo "<br>";
echo "Total Number of Entries: ";
echo $total;
echo "<br>";



if (mysqli_num_rows($result2) > 0) {
  while($row = mysqli_fetch_assoc($result2)) {
        echo "<br>";
        $picurl = $row["picture_url"];
	$location2 = $row["location"];
	$subject2 = $row["subject"];
        if ($location2 == 'Ontario') {
                echo "<br>";
                echo "<img style='width:400px;height:300px;' src=$picurl>";
                echo "<p style='font-family: monospace;'>$subject2, $location2</p>";
                $count = 1;
                echo "<br>";
        }
  }
} else {
  echo "No results.";
}


if ($count == 0) {
	echo "No Ontario Records";
}

echo "<br>Random Picture<br>";
if (mysqli_num_rows($result3) > 0) {
  while($row = mysqli_fetch_assoc($result3)) {
        echo "<br>";
        $picurl2 = $row["picture_url"];
        $location3 = $row["location"];
        $subject3 = $row["subject"];
        echo "<br>";
        echo "<img style='width:400px;height:300px;' src=$picurl2>";
        echo "<p style='font-family: monospace;'>$subject3, $location3</p>";
        echo "<br>";
  }
} else {
  echo "No results.";
}

?>

