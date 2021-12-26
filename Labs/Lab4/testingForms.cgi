#!/usr/bin/perl
use CGI ':standard';
print "Content-type: text/html\n\n";

$firstName = param ('first');
$lastName = param ('last');
$street = param ('street');
$city = param ('city');
$postal = param ('postal');
$province = param ('province');
$gender = param ('gender');
$phone = param ('phone');
$email = param ('email');
$password1 = param ('password');
$i = 0;
$letter = "*";
$password = "";
while ($i < length($password1)) {
$password = $password.$letter;
++$i;
}

print '<head>
        <title>Zakir Dawood - CPS530 - Lab 4 Part II</title>
        <link rel="stylesheet" type="text/css" href="lab4-2.css">
        </head>';


print '<body><br><div id="main"><h1>Your Registration Information</h1></div><br>';
print '<div><div class="sub"><h2>Personal Identification</h2>';
print "<p><strong>Name:</strong> $firstName $lastName</p><br><p><strong>Gender</strong>: $gender</p><br><p><strong>Password:</strong> $password</p></div><br>";
print '<div class="sub"><h2>Address</h2>';
print "<p><strong>Street Address:</strong> $street</p><br><p><strong>City:</strong> $city</p><br>";
if (length($postal) == 6)
{
print "<p><strong>Postal Code:</strong> $postal </p><br>";
}
else
{
print '<p id="incorrect"><strong>Postal Code: Invalid</strong> </p><br>';
}
print "<p><strong>Province:</strong> $province</p></div><br>";
print '<div class="sub"><h2>Contact Details</h2><br>';
if (length($phone) == 10 and $phone !~ /\D/ )
{
print "<p><strong>Phone Number:</strong> $phone</p><br>";
}
else 
{
print '<p id="incorrect"><strong>Phone Number: Invalid</strong> </p><br>';
}
if ( $email =~ /@/ )
{
print "<p><strong>Email:</strong> $email</p><br></div>";
}
else 
{
print '<p id="incorrect"><strong>Email: Invalid</strong></p><br></div>';
}
print "</div>";
print '<br><br><br><footer class="footer-section"><p>Website created by Zakir Dawood for the purpose of CPS530 Fall 2021 Lab.</p></footer></body>';
