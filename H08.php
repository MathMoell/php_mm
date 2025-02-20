<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutus 8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
    <body>
        <div class="container">
            <h1>Harjutus 8</h1>
            
            <p><?php echo date('d.m.Y G:i', time()); ?></p>
            
            <form action="#" method="get">
                <label for="aasta">Sünniaasta:</label>
                <input type="number" name="aasta" id="aasta" placeholder="Näiteks 2007" />
                <input type="submit" value="Saada" />
            </form>
            <?php
                if (isset($_GET['aasta'])) {
                    $synniaasta = $_GET['aasta'];
                    $vanus = date('Y') - $synniaasta;
                    echo "<p>Sa oled $vanus aastat vanune.</p>";
                }
            ?>

            <?php
                $koolilopp = date_create('2025-06-01');
                $tana = date_create('now');
                $diff = date_diff($tana, $koolilopp);
                echo "<p>Kooliaasta lõpuni on:" . $diff->format('%R%a') . " päeva.</p>";
            ?>


            <?php
                $kuu = date('n');
                if ($kuu >= 3 && $kuu <= 5) {
                    echo "<img src='img/kevad.jpg' alt='kevad' width='300' height='300'>";
                } else if ($kuu >= 6 && $kuu <= 8) {
                    echo "<img src='img/suvi.jpg' alt='suvi' width='300' height='300'>";
                } else if ($kuu >= 9 && $kuu <= 11) {
                    echo "<img src='img/sugis.jpg' alt='sügis' width='300' height='300'>";
                } else {
                    echo "<img src='img/talv.jpg' alt='talv' width='300' height='300'>";
                }
            ?>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>
