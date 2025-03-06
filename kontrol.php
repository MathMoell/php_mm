<?php
$title = "Wireframes";
$subtitle = "Lorem ipsum dolor sit amet consectetur, lorem ipsum dolor or lorem ipsum dolor sit amet consectetur.";
$version = "Latest Version 2.0.0";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo"></div>
            <div class="nav-links">
                <a href="#">Features</a>
                <a href="#">Pricing</a>
                <a href="#">Sign in</a>
                <a href="#" class="btn">Login</a>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero">
            <img src="https://placehold.co/60x60/4A90E2/FFF" alt="Icon" class="icon">
            <h1><?php echo $title; ?></h1>
            <p><?php echo $subtitle; ?></p>
            <button class="btn">Download Now</button>
            <span class="version"><?php echo $version; ?></span>
        </section>

        <section class="feature">
            <h2>Building websites is a lot easier</h2>
            <div class="placeholder" style="width: 1170px; height: 700px;"></div>
        </section>

        <section class="grid">
            <div class="text-content">
                <h3>Wireframes</h3>
                <p><?php echo $subtitle; ?></p>
                <button class="btn">Download</button>
            </div>
            <div class="placeholder" style="width: 600px; height: 1100px;"></div>
        </section>

        <section class="pricing">
            <div class="price-card">
                <h3>$777</h3>
                <p>Lorem ipsum dolor</p>
                <button class="btn">Buy Now</button>
            </div>
            <div class="price-card">
                <h3>$77</h3>
                <p>Lorem ipsum dolor</p>
                <button class="btn">Buy Now</button>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <img src="https://placehold.co/30x30/4A90E2/FFF" alt="Logo" class="footer-logo">
            </div>
            <div class="footer-section">
                <h4>Features</h4>
                <a href="#">Cool stuff</a>
                <a href="#">Team feature</a>
                <a href="#">Random feature</a>
            </div>
            <div class="footer-section">
                <h4>Resources</h4>
                <a href="#">Resource name</a>
                <a href="#">Another resource</a>
                <a href="#">Final resource</a>
            </div>
            <div class="footer-section">
                <h4>About</h4>
                <a href="#">Team</a>
                <a href="#">Location</a>
                <a href="#">Privacy</a>
            </div>
        </div>
    </footer>
</body>
</html>