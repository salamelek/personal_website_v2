<?php
function log_visit() {
    $ip = $_SERVER["REMOTE_ADDR"] ?? "unknown";
    $timestamp = date("Y-m-d H:i:s");
    $uri = $_SERVER["REQUEST_URI"];

    if (str_starts_with($uri, "/favicon.ico")) {
        return;
    }

    $logLine = "$timestamp | $ip | $uri\n";

    file_put_contents(dirname(__DIR__) . "/logs/visits.log", $logLine, FILE_APPEND | LOCK_EX);
}

// log_visit();

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