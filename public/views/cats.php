<?php
$page_title = "Mucke :)";

$base_url = "/assets/images/cats/";
$cat_images = glob(__DIR__ . "/../assets/images/cats/*.{jpg,jpeg,png,gif,webp}", GLOB_BRACE);


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
            To res ne bi bila moja spletna stran, če ne bi dodal sekcije z luškanimi muckami! Tukaj si jih lahko ogledate :D
        </p>
        <p>
            Trenutno je tale prelepa galerija dokaj neurejena, saj delam na tem, da bodo slike lepo postavljene v mozaik. Do takrat pa boste uživali v nekolikšni količini belega prostora med slikami.
        </p>
        <div class="image-mosaic">
            <?php foreach ($cat_images as $img): ?>
                <img src="<?= $img ?>" alt="" class="rounded-light shadow-light">
            <?php endforeach; ?>
        </div>
    </div>
</main>

<div class="enlarged-image-container hidden">
    <div class="icon-holder pointer-cursor">
        <i class="fa-solid fa-xmark"></i>
    </div>
    <div class="enlarged-image-wrapper shadow-light">
        <img src="" alt="">
        <div class="image-description-container">
            <p>Opisi slik bodo kmalu tukajle!</p>
        </div>
    </div>
</div>

<?php include "modules/footer.php"; ?>
</body>
</html>
