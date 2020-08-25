<!-- Put "02 Form.html" and "02 POST.php" in the www folder of AMPPS
Open "02 Form.html" in the browser with AMPPS
Compile the form and submit it -->

<!-- POST
The two methods for submitting forms are GET and POST.
Information sent from a form via the POST method is invisible to others, 
since all names and/or values are embedded within the body of the HTTP request. 
Also, there are no limits on the amount of information to be sent.
Moreover, POST supports advanced functionality such as support for multi-part 
binary input while uploading files to the server.
However, it is not possible to bookmark the page, as the submitted values are not visible.
POST is the preferred method for sending form data. -->

<?php
echo "Welcome ".$_POST['name'].". ";
echo "Your email adress is: ".$_POST['email'];
?>
