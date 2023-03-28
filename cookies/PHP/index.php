<?php
if(!isset($_COOKIE["example_cookie"])){
    setcookie(
        name: "example_cookie",
        value: "valor de cookie",
        expires_or_options: 0,
        path: "./php/08_cookies_sesiones_y_modularizacion/cookies/PHP/",
        domain: "localhost",
        secure: false,
        httponly: true
    );
}

echo "Cookie creada";

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

?>