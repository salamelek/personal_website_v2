<?php
require_once "routes/web.php";

$requestedUri = $_SERVER["REQUEST_URI"];
$requestedUri = strtok($requestedUri, "?");

if (!array_key_exists($requestedUri, $routes)) {
    include __DIR__ . "/views/404.php";
}

include __DIR__ . "/views/" . $routes[$requestedUri];