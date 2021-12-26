#!/usr/bin/python

import cgi, cgitb

form = cgi.FieldStorage()
city = form.getvalue('city')
city = city.upper()
province = form.getvalue('province')
province = province.upper()
country = form.getvalue('country')
country = country.upper()
population = form.getvalue('population')
picture = form.getvalue('picture')
print "Content-type:text/html\n\n"
print "<p style='text-align:center;font-size:5em;color:#252540;background-color:antiquewhite;font-famiky:monospace;'>%s, %s </p>" % (city, country)
print "<p style='font-family:monospace;font-size:1.5em;color:#252540;text-align:center;'><strong><u>Extra Information</strong></u>"
print "<br><br>"
print "<p style='text-align:center;font-family:monospace;font-size:1.5em;color:#252540;'><strong>Province:</strong> %s </p>" % (province)
print "<br>"
print "<p style='text-align:center;font-family:monospace;font-size:1.5em;color:#252540;'><strong>Population:</strong> %s </p>" % (population)
print "<br><br>"
print "<p style='text-align:center;'><img src='"+picture+"' style='border:25px solid #252540;width:80%;object-fit:cover;'></p>"
