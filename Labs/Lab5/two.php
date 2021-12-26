<?php include ('dbconnect.php'); ?>


<?php
$date_taken = $_POST['date_taken'];
$subject = $_POST['subject'];
$location = $_POST['location'];
$pic_url = $_POST['picurl'];



$sql = "INSERT INTO lab5table (date_taken, subject, location, picture_url) VALUES ($date_taken, '$subject', '$location', '$pic_url')";

if (mysqli_query($connect, $sql)){
        echo "New record created successfully.<br>";
} else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

echo "<br>";
echo $date_taken;
echo "<br>";
echo $subject;
echo "<br>";
echo $location;
echo "<br>";
echo $pic_url;
echo "<br>";
echo "hello";
echo "<br>";
echo "<a href='https://webdev.scs.ryerson.ca/~zmdawood/lab5-2.php'>Link to Main Page</a>";
?>
