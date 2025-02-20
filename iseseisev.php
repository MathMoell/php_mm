<!doctype html>
<html lang="et">
    <head>
        <title>Iseseisev</title>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <div class="container">
            <h1>Iseseisev</h1>
            
            <p><?php echo 'Juhan Liiv, "Ääremärkused"'; ?></p>

            <h3>Aastaaja pilt vastavalt sünnikuu järgi:</h3>
            <form method="POST">
                <label for="kuu">Sisesta oma sünnikuu (nt jaanuar): </label>
                <input type="text" name="kuu" id="kuu">
                <input type="submit" value="Saada">
            </form>
            <?php
                if (isset($_POST['kuu'])) {
                    $kuu = $_POST['kuu'];
                    switch($kuu) {
                        case 'jaanuar':
                        case 'veebruar':
                        case 'märts':
                            echo '<img src="kevad.jpg" alt="Kevad" style="max-width: 100%"/>';
                            break;
                        case 'aprill':
                        case 'mai':
                        case 'juuni':
                            echo '<img src="suvi.jpg" alt="Suvi" style="max-width: 100%"/>';
                            break;
                        case 'juuli':
                        case 'august':
                        case 'september':
                            echo '<img src="sügis.jpg" alt="Sügis" style="max-width: 100%"/>';
                            break;
                        case 'oktoober':
                        case 'november':
                        case 'detsember':
                            echo '<img src="talv.jpg" alt="Talv" style="max-width: 100%"/>';
                            break;
                        default:
                            echo "Palun sisesta kehtiv kuu.";
                    }
                }
            ?>

            <h3>Veebiaadressi avamine:</h3>
            <form method="POST">
                <label for="url">Sisestage veebiaadress:</label>
                <input type="text" name="url" id="url">
                <input type="submit" value="Mine veebilehele">
            </form>
            <?php
                if (isset($_POST['url'])) {
                    $url = $_POST['url'];
                    echo '<script>window.location.href="' . $url . '"</script>';
                }
            ?>

            <h3>Kapi sobivus ukse kaudu:</h3>
            <form method="POST">
                <label for="pikkus">Kapi pikkus (mm):</label>
                <input type="number" name="pikkus" id="pikkus"><br>
                <label for="laius">Kapi laius (mm):</label>
                <input type="number" name="laius" id="laius"><br>
                <label for="korgus">Kapi kõrgus (mm):</label>
                <input type="number" name="korgus" id="korgus"><br>
                <input type="submit" value="Kontrolli">
            </form>
            <?php
                if (isset($_POST['pikkus']) && isset($_POST['laius']) && isset($_POST['korgus'])) {
                    $pikkus = $_POST['pikkus'];
                    $laius = $_POST['laius'];
                    $korgus = $_POST['korgus'];
                    if ($laius <= 900 && $korgus <= 2000) {
                        echo "Kapp mahub ukse kaudu!";
                    } else {
                        echo "Kapp ei mahu ukse kaudu.";
                    }
                }
            ?>

            <h3>Teisendamine tollidest sentimeetritesse:</h3>
            <form method="POST">
                <label for="tollid">Sisesta mõõt tollides:</label>
                <input type="number" name="tollid" id="tollid" step="0.1">
                <input type="submit" value="Teisenda">
            </form>
            <?php
                if (isset($_POST['tollid'])) {
                    $tollid = $_POST['tollid'];
                    $sentimeetrid = $tollid * 2.54;
                    echo $tollid . " tolli on " . round($sentimeetrid, 2) . " cm.";
                }
            ?>

            <h3>Ohmi seadus - veeboileri kaitse:</h3>
            <form method="POST">
                <label for="voimsus">Sisesta veeboileri võimsus (W):</label>
                <input type="number" name="voimsus" id="voimsus"><br>
                <input type="submit" value="Arvuta kaitse">
            </form>
            <?php
                if (isset($_POST['voimsus'])) {
                    $voimsus = $_POST['voimsus'];
                    $pinge = 220;
                    $voolutugevus = ceil($voimsus / $pinge);
                    echo "Vajalik kaitse: " . $voolutugevus . " amprit.";
                }
            ?>

            <h3>Ruutvõrrand - ax² + bx + c = 0</h3>
            <form method="POST">
                <label for="a">Sisesta a (ruutliige):</label>
                <input type="number" name="a" id="a"><br>
                <label for="b">Sisesta b (lineaarliige):</label>
                <input type="number" name="b" id="b"><br>
                <label for="c">Sisesta c (vabaliige):</label>
                <input type="number" name="c" id="c"><br>
                <input type="submit" value="Arvuta lahendid">
            </form>
            <?php
                if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])) {
                    $a = $_POST['a'];
                    $b = $_POST['b'];
                    $c = $_POST['c'];
                    $discriminant = ($b ** 2) - (4 * $a * $c);
                    if ($discriminant >= 0) {
                        $x1 = (-$b + sqrt($discriminant)) / (2 * $a);
                        $x2 = (-$b - sqrt($discriminant)) / (2 * $a);
                        echo "Lahendid: x1 = " . $x1 . ", x2 = " . $x2;
                    } else {
                        echo "Ruutvõrrandil ei ole reaalarvulisi lahendeid.";
                    }
                }
            ?>

        </div>

        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
