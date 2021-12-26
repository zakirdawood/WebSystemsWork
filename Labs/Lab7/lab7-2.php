<!DOCTYPE html>

<html>
<head>
<title>Lab 7 Part II</title>
</head>

<body style="text-align:center;color: antiquewhite; background-color:#252540; font-size:1.5em;">

<?php
        $url = 'https://s9.reliastream.com:2199/rpc/meyima03/streaminfo.get';
        $json = file_get_contents($url);
        $data = json_decode($json, true);

        $title = $data->data[0]->track->title;
        $artist = $data->data[0]->track->artist;
        $cover = $data->data[0]->track->imageurl;


	echo "<br>";
        echo "<h1>Currently Playing (JSON)</h1>";
        echo "<br>";
        echo "<p><strong>Title: </strong>";
        echo "$title</p>";
        echo "<br>";
        echo "<p><strong>Artist: </strong>";
        echo "$artist</p>";
        echo "<br>";
        echo "<img src=$cover style='border-radius: 50%; width: 400px; height: 400px;'>";
?>

</body>

</html>

