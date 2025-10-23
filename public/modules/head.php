<?php
if (!isset($page_title)) {
    $page_title = "Salamelek's website";
}

if (!isset($page_image)) {
    $page_image = "/favicon.ico";
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

    <link rel="stylesheet" href="/assets/styles/style.css?v=<?= filemtime(__DIR__ . '/../assets/css/style.css') ?>">
    <script type="module" src="/assets/scripts/main.js"></script>
</head>
