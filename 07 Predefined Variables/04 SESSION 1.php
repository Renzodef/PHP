<?php

// Put this file and "04 Session2.php" in the www folder of AMPPS
// Then run AMPPS and open this file in local host
// Click the link and the other file will be opened

// Sessions
// Using a session, you can store information in variables, to be used across multiple pages.
// Information is not stored on the user's computer, as it is with cookies.
// By default, session variables last until the user closes the browser.

// Start a PHP Session
// A session is started using the session_start() function.
// Use the PHP global $_SESSION to set session variables.

// The session_start() function must be the very first thing in your document. Before any HTML tags.
session_start();
$_SESSION['name'] = "John";
// Now, the name session variable is accessible on multiple pages, throughout the entire session.
// All global session variables can be removed manually by using session_unset().
// You can also destroy the session with session_destroy().
?>

<!DOCTYPE html>
<html>
<body>
<a href="04 Session 2.php">Click here</a>
</body>
</html>