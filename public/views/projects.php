<?php
$page_title = "Projekti";

$project_files = glob(__DIR__ . "/projects/*.php");
?>

<!DOCTYPE html>
<html lang="en">
<?php include "modules/head.php"; ?>
<body>
<?php include "modules/navigation.php"; ?>
<main>
    <div class="main-container">
        <p>
            Tukajle si lahko ogledate moje projekte. Nekateri so bolj vredni od drugih, ampak se bomo delali, da so vsi
            enakovredni in enako relevantni... Wow, to pa se mi že nekam znano sliši!
        </p>
        <p>
            <i>Na vse te projekte lahko kliknite, da kaj več izvedete :></i>
        </p>
        <div class="project-cards-container">
            <a href="projects/vetrna-zaga" class="div-link">
                <div class="project-card">
                    <h2>Vetrna žaga</h2>
                    <hr>
                    <p>
                        Moj prvi (in najbolj ikonični) projekt!
                    </p>
                    <img src="../assets/images/projects/vetrna-zaga/vetrna-zaga.png" alt="" class="project-main-image">
                </div>
            </a>

            <a href="projects/spletna-stran" class="div-link">
                <div class="project-card">
                    <h2>Tale spletna stran</h2>
                    <hr>
                    <p>
                        Tukaj se nahajaš trenutno. Figurativno seveda!
                    </p>
                    <img src="../assets/images/projects/spletna-stran/spletna-rekurzivna.png" alt="" class="project-main-image">
                </div>
            </a>

            <a href="projects/gokart" class="div-link">
                <div class="project-card">
                    <h2>GoKart</h2>
                    <hr>
                    <p>
                        Predelava motorne kosilnice v (zelo performančen) gokart.
                    </p>
                    <img src="../assets/images/projects/gokart/gokart-motor.jpeg" alt="" class="project-main-image">
                </div>
            </a>

            <a href="projects/trading-bot" class="div-link">
                <div class="project-card">
                    <h2>Trading bot</h2>
                    <hr>
                    <p>
                        Moja izvirna (in sijajna) ideja za neskončni denarni dobiček!
                    </p>
                    <img src="../assets/images/projects/trading-bot/stonks-chart.png" alt="" class="project-main-image">
                </div>
            </a>

            <a href="projects/fri-robo-liga" class="div-link">
                <div class="project-card">
                    <h2>FRI Robo Liga</h2>
                    <hr>
                    <p>
                        Legendarni dvoboj titaničnih robotov!!1!
                    </p>
                    <img src="../assets/images/projects/fri-robo-liga/robotek.gif" alt="" class="project-main-image">
                </div>
            </a>
        </div>
    </div>
</main>
<?php include "modules/footer.php"; ?>
</body>
</html>
