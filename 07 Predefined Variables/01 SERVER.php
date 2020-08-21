<?php
// A superglobal is a predefined variable that is always accessible, regardless of scope. 
// You can access the PHP superglobals through any function, class, or file.
// PHP's superglobal variables are $_SERVER, $GLOBALS, $_REQUEST, $_POST, $_GET, $_FILES, $_ENV, $_COOKIE, $_SESSION.

// $_SERVER
// $_SERVER is an array that includes information such as headers, paths, and script locations. 
// The entries in this array are created by the web server.

// List of SERVER's elements:
// $_SERVER['PHP_SELF']
// Returns the filename of the currently executing script
// $_SERVER['SERVER_ADDR']
// Returns the IP address of the host server
// $_SERVER['SERVER_NAME']
// Returns the name of the host server
// $_SERVER['SERVER_SOFTWARE']
// Returns the server identification string (such as Apache/2.2.24)
// $_SERVER['SERVER_PROTOCOL']
// Returns the name and revision of the information protocol (such as HTTP/1.1)
// $_SERVER['REQUEST_METHOD']
// Returns the request method used to access the page (such as POST)
// $_SERVER['REQUEST_TIME']
// Returns the timestamp of the start of the request (such as 1377687496)
// $_SERVER['QUERY_STRING']
// Returns the query string if the page is accessed via a query string
// $_SERVER['HTTP_ACCEPT']
// Returns the Accept header from the current request
// $_SERVER['HTTP_HOST']
// Returns the Host header from the current request
// $_SERVER['HTTP_REFERER']
// Returns the complete URL of the current page
// $_SERVER['HTTPS']
// Is the script queried through a secure HTTP protocol
// $_SERVER['REMOTE_ADDR']
// Returns the IP address from where the user is viewing the current page
// $_SERVER['REMOTE_HOST']
// Returns the Host name from where the user is viewing the current page
// $_SERVER['REMOTE_PORT']
// Returns the port being used on the user's machine to communicate with the web server
// $_SERVER['SCRIPT_FILENAME']
// Returns the absolute pathname of the currently executing script
// $_SERVER['SERVER_ADMIN']
// Returns the value given to the SERVER_ADMIN directive in the web server configuration
// $_SERVER['SERVER_PORT']
// Returns the port on the server machine being used by the web server for communication

echo $_SERVER['SCRIPT_NAME'];
// Outputs the path of the file
echo nl2br ("\n");
echo $_SERVER['HTTP_HOST'];
// Outputs "localhost" if you open it in the browser with AMPPS
// Outputs "" if you open it from an IDE
echo nl2br ("\n");
echo $_SERVER['REQUEST_TIME'];
// Returns the timestamp of the start of the request (such as 1377687496)
?>