<?php
$request = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$request = rtrim($request, "/");

if ($request === "") {
    $request = "index";
}

$path = __DIR__ . "/views/$request.php";

if (file_exists($path)) {
    include $path;
} else {
    include __DIR__ . "/views/404.php";
}