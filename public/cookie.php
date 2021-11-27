<?php

setcookie('cookie', 'cookie_value', time() + 24*60*60*7); //set a cookie in our browser.

echo "Your Cookie is Set in Your Browser";

echo '<pre>';
print_r($_COOKIE);     //print our cookie in our browser.

if(isset($_COOKIE))      //isset funtion checks the cookie is set or not.
{
    echo 'Your Cookie is Set';
}
else
{
    echo 'Your Cookie is Not Set';
}

setcookie('cookie', 'cookie value', time() - 24*60*60*7);     // Delete cookie

?>
