<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Lab 6 Part II</title>
</head>

<%
background = Request.QueryString("background")
url = Request.QueryString("url")
If Request.cookies("TimeVisited") = "" Then
Response.cookies("visits") = "First Time"
Else
Response.cookies("visits") = "Not First Visit"
End If
Response.cookies("TimeVisited") = DateAdd("H", +1, Time()) 
Response.Write("<br>")
Response.Write("<body style='text-align:center;font-size:1.5em;font-family:monospace;background-color:" & Request.QueryString("background") & ";background-image:url(" & Request.QueryString("url") & ");'>" & "You visited this site at: " & Request.cookies("TimeVisited") & "<br>First Time?: " & Request.cookies("visits") & "</body>")
%>


</html>