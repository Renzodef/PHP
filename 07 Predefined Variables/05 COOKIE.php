<?php

// Open this file in localhost with AMPPS

// Cookies

// Cookies are often used to identify the user. 
// A cookie is a small file that the server embeds on the user's computer. 
// Each time the same computer requests a page through a browser, it will send the cookie, too.
// With PHP, you can both create and retrieve cookie values.

// Create cookies using the setcookie() function:
// setcookie(name, value, expire, path, domain, secure, httponly);

// name: Specifies the cookie's name
// value: Specifies the cookie's value
// expire: Specifies (in seconds) when the cookie is to expire. 
//         The value: time()+86400*30, will set the cookie to expire in 30 days. 
//         If this parameter is omitted or set to 0, the cookie will expire at the end of the session (when the browser closes). 
//         Default is 0.
// path: Specifies the server path of the cookie. 
//         If set to "/", the cookie will be available within the entire domain. 
//         If set to "/php/", the cookie will only be available within the php directory and all sub-directories of php. 
//         The default value is the current directory in which the cookie is being set.
// domain: Specifies the cookie's domain name. 
//         To make the cookie available on all subdomains of example.com, set the domain to "example.com".
// secure: Specifies whether or not the cookie should only be transmitted over a secure, HTTPS connection. 
//         TRUE indicates that the cookie will only be set if a secure connection exists. 
//         Default is FALSE.
// httponly: If set to TRUE, the cookie will be accessible only through the HTTP protocol 
//         (the cookie will not be accessible to scripting languages). 
//         Using httponly helps reduce identity theft using XSS attacks. 
//         Default is FALSE.
// The name parameter is the only one that's required. All of the other parameters are optional.


// The following example creates a cookie named "user" with the value "John". 
// The cookie will expire after 30 days, which is written as 86,400 * 30, in which 86,400 seconds = one day. 
// The '/' means that the cookie is available throughout the entire website.
// We then retrieve the value of the cookie "user" (using the global variable $_COOKIE). 
// We also use the isset() function to find out if the cookie is set.

$value = "John";

// The setcookie() function must appear BEFORE the <html> tag.
// The value of the cookie is automatically encoded when the cookie is sent, 
// and is automatically decoded when it's received. 
// Nevertheless, NEVER store sensitive information in cookies.
setcookie("user", $value, time() + (86400 * 30), '/'); 

// To modify a cookie, just set (again) the cookie using setcookie()
// To delete a cookie, set an expiration date in the past

if(isset($_COOKIE['user'])) {
  echo "Value is: ". $_COOKIE['user'];
}

//Outputs "Value is: John"

?>