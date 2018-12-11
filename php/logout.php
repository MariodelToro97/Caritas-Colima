<?php

session_start();

$_SESSION = array();

//Esta madre es para los cookies, posiblemente no sirva de nada xd
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy();

header("Location: ../Index.html");
?>