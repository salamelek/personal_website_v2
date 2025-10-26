<?php
if (!isset($page_title)) {
    $page_title = "Salamelek's website";
}

if (!isset($page_image)) {
    $page_image = "/favicon.ico";
}

function get_latest_js_modification_time($dir) {
    $latest = 0;

    foreach (glob($dir . "/*.js") as $file) {
        $mtime = filemtime($file);
        
        if ($mtime > $latest) {
            $latest = $mtime;
        }
    }

    return $latest;
}
?>

<head>
    <title><?= $page_title ?></title>
    <link rel="icon" type="image/x-icon" href="<?= $page_image ?>">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="salamelek, Samuel Sluga, Samuel, Sluga">
    <meta name="description" content="Personal website of Samuel Sluga, aka salamelek.">
    <meta name="author" content="Samuel Sluga, salamelek">
    <meta name="robots" content="index, follow">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link rel="stylesheet" href="/assets/styles/style.css?v=<?= filemtime(__DIR__ . "/../assets/styles/style.css") ?>">
    <script type="module" src="/assets/scripts/main.js?v=<?= get_latest_js_modification_time(__DIR__ . "/../assets/scripts"); ?>"></script>
</head>
