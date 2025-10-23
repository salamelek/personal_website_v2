<?php
$page_title = "Mucke :)";

// I know it's kind of a wildcard, but I trust that no one, including myself will fuck this up :3
// But just in case: TODO select only image files
$base_url = "/assets/images/cats/";
$cat_images = glob(__DIR__ . "/../assets/images/cats/*.*");

foreach ($cat_images as &$img) {
    $img = $base_url . basename($img);
}
unset($img);

shuffle($cat_images);
?>

<!DOCTYPE html>
<html lang="en">
<?php include "modules/head.php"; ?>
<body>
<?php include "modules/navigation.php"; ?>
<main>
    <div class="main-container">
        <p>
            To res ne bi bila moja spletna stran, če ne bi dodal sekcijo z luškanimi muckami! Tukaj si jih lahko ogledate :D
        </p>
        <p>
            Trenutno je tale prelepa galerija dokaj neurejena, saj delam na tem, da bodo slike lepo postavljene v mozaik. Do takrat pa boste uživali v nekolikšni količini belega prostora med slikami.
        </p>
        <div class="image-mosaic">
            <?php foreach ($cat_images as $img): ?>
                <img src="<?= $img ?>" alt="">
            <?php endforeach; ?>
        </div>
    </div>
</main>
<?php include "modules/footer.php"; ?>
</body>
</html>
