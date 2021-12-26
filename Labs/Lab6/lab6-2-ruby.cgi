#!/usr/local/bin/ruby -w

print "Content-type: text/html\n\n"
require 'cgi'
cgi = CGI.new
city = cgi['city']
city = city.capitalize
province = cgi['province']
province = province.capitalize
country = cgi['country']
country = country.capitalize
population = cgi['population']
picture = cgi['picture']

print <<HERE1
<p style="font-family:monospace;color:#252540;text-align:center;font-size:5em;background-color:antiquewhite;">
#{city}, #{country}</p>
<br><p style="font-family:monospace;color:#252540;text-align:center;font-size:1.5em;">
<strong><u>Extra Information</u></strong><br><br>
<strong>Province:</strong> #{province}
<br><br>
<strong>Population:</strong> #{population}
<br>
</p>
<br><br>
<img src="#{picture}" style="width:100%;object-fit:cover;">
HERE1
