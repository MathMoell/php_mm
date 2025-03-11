<?php
$title = "Veebi disain";
$subtitle = "Lorem ipsum dolor sit amet consectetur, lorem ipsum dolor or lorem ipsum dolor sit amet consectetur.";
$version = "viimane versioon 0.0.1";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo"></div>
            <div class="nav-links">
                <a href="#">Teenused</a>
                <a href="#">Hinnakiri</a>
                <a href="#">Logi sisse</a>
                <a href="#" class="btn">Login</a>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero">
            <img src="https://placehold.co/60x60/4A90E2/FFF" alt="Icon" class="icon">
            <h1><?php echo $title; ?></h1>
            <p><?php echo $subtitle; ?></p>
            <a href="https://www.youtube.com" class="btn" target="_blank">Lae Nüüd</a>
            <span class="version"><?php echo $version; ?></span>
        </section>

        <section class="feature">
            <h2>Veebilehtede tegemine pole kunagi nii kerge olnud</h2>
            <div class="placeholder" style="width: 1170px; height: 700px;">1170 x 700</div>
        </section>

        <section class="grid-layout">
            <div class="grid-item">
                <div class="placeholder" style="width: 600px; height: 1100px;">600 x 1100</div>
            </div>
            <div class="grid-item">
                <h3>Erinevad demod</h3>
                <p><?php echo $subtitle; ?></p>
                <button class="btn">Lae alla</button>
            </div>
        </section>

        <section class="grid-layout reverse">
            <div class="grid-item">
                <h3>Erinevad demod</h3>
                <p><?php echo $subtitle; ?></p>
                <button class="btn">Lae alla</button>
            </div>
            <div class="grid-item">
                <div class="placeholder" style="width: 600px; height: 1100px;">600 x 1100</div>
            </div>
        </section>

        <section class="cta-box">
            <h2>Raha tagasi 100%</h2>
            <p>NB! raha ei saa tagasi peale proovi aega 20 sekundid peale panga kontole laekumist</p>
            <button class="btn">Osta nüüd</button>
        </section>

        <section class="image-grid">
            <div class="row">
                <div class="placeholder" style="width: 200px; height: 150px;">200 x 150</div>
                <div class="placeholder" style="width: 200px; height: 150px;">200 x 150</div>
            </div>
            <div class="row">
                <div class="placeholder" style="width: 200px; height: 150px;">200 x 150</div>
                <div class="placeholder" style="width: 200px; height: 150px;">200 x 150</div>
            </div>
        </section>

        <section class="content-grid">
            <div class="content-row">
                <div class="text-block">
                    <h3>Sinu leht</h3>
                    <p>Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur adipisium.</p>
                    <a href="#" class="read-more">Read More</a>
                </div>
                <div class="text-block">
                    <h3>Imeline desain</h3>
                    <p>Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur adipisium.</p>
                    <a href="#" class="read-more">Read More</a>
                </div>
                <div class="placeholder" style="width: 1170px; height: 700px;">1170 x 700</div>
            </div>
            <div class="content-row">
                <div class="text-block">
                    <h3>Sinu leht</h3>
                    <p>Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur adipisium.</p>
                    <a href="#" class="read-more">Read More</a>
                </div>
                <div class="text-block">
                    <h3>Imeline desain</h3>
                    <p>Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur adipisium.</p>
                    <a href="#" class="read-more">Read More</a>
                </div>
                <div class="placeholder" style="width: 1170px; height: 700px;">1170 x 700</div>
            </div>
        </section>

        <section class="wireframes">
            <h2>Veebi desain</h2>
            <p>Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur adipisium.</p>
            <div class="wireframes-grid">
                <div class="placeholder" style="width: 1170px; height: 700px;">1170 x 700</div>
                <div class="placeholder" style="width: 1170px; height: 700px;">1170 x 700</div>
            </div>
        </section>

        <section class="pricing">
            <div class="price-card">
                <h3>$999</h3>
                <p>Kvaliteetne veebileht</p>
                <ul>
                    <li>Teeme sulle professionaalse lehekülje</li>
                    <li>Rahulolu garanteeritud</li>
                    <li>Muudatuste eest maksate ekstra</li>
                </ul>
                <button class="btn">Osta nüüd</button>
            </div>
            <div class="price-card">
                <h3>$0,01</h3>
                <p>Me müüme su info hiinlastele</p>
                <ul>
                    <li>Me teeme sulle lehe millel pole css ja kogu info õigus läheb otse Shainghaise</li>
                    <li>Sa oled rott</li>
                    <li>Muudatuste eest maksate ekstra</li>
                </ul>
                <button class="btn">Osta nüüd</button>
            </div>
        </section>

        <section class="final-cta">
            <p>Vajuta nuppu allpool et alustada</p>
            <button class="btn">Nupp</button>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <img src="https://placehold.co/30x30/4A90E2/FFF" alt="Logo" class="footer-logo">
            </div>
            <div class="footer-section">
                <h4>Sots meedia</h4>
                <a href="#">Facebook</a>
                <a href="#">Instagram</a>
                <a href="#">MySpace</a>
            </div>
            <div class="footer-section">
                <h4>Info</h4>
                <a href="#">Tiim</a>
                <a href="#">Asukoht</a>
                <a href="#">Turvalisus</a>
            </div>
            <div class="footer-section">
                <h4>Support</h4>
                <a href="#">Never online</a>
                <a href="#">Gmail: Moell@web.gg</a>
                <a href="#">Tel: 5823 4755</a>
            </div>
        </div>
    </footer>
</body>
</html>