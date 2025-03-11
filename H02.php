<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
    <body>
        <div class="container">
            <h1>Harjutus 2</h1>
            <?php
                $x = 9;
                $y = 4;
                $liitmine = $x + $y;
                $lahutamine = $x - $y;
                $korrutamine = $x * $y;
                $jagamine = $x / $y;
                echo "$x + $y = $liitmine<br>";
                echo "$x - $y = $lahutamine<br>";
                echo "$x * $y = $korrutamine<br>";
                echo "$x / $y = $jagamine<br>";

                $mm = 268;
                $sentimeetriteks = $mm / 10;
                $meetriteks = $mm / 1000;
                $kakskohta1 = sprintf('%0.2f', $sentimeetriteks);
                $kakskohta2 = sprintf('%0.2f', $meetriteks);
                echo "Teisendame mm - cm: $mm / 10 = $kakskohta1<br>";
                echo "Teisendame mm - m: $mm / 1000 = $kakskohta2<br>";

                $a = 7;
                $b = 10.5;
                $c = 25;
                $ümbermoot = $a + $b + $c;
                $pindala = $a * $b;
                $taisarv1 = sprintf('%0.0f', $ümbermoot);
                $taisarv2 = sprintf('%0.0f', $pindala);
                echo "Täisnurkse kolmnurga ümbermõõt on $a + $b + $c = $taisarv1<br>";
                echo "Täisnurkse kolmnurga pindala on $a * $b = $taisarv2<br>";
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