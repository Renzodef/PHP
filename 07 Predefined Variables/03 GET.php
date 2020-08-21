<!-- Put "03 Form.html" and "03 GETT.php" in the www folder of AMPPS
And open "03 Form.html" in the browser with AMPPS
Compile the form and submit it -->

<!-- GET
Information sent via a form using the GET method is visible to everyone 
(all variable names and values are displayed in the URL).
GET also sets limits on the amount of information that can be sent - about 2000 characters.
However, because the variables are displayed in the URL, 
it is possible to bookmark the page, which can be useful in some situations. -->

<?php
echo "Hi ".$_GET['name'].". ";
echo "You are ".$_GET['age']." years old.";
?>