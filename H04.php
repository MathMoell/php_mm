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
        <h1>Harjutus 4</h1>

        <form action="#" method="get">
            <h2>Jagamine</h2>
            Number 1: <input type="number" name="number1" id="number1" /><br>
            Number 2: <input type="number" name="number2" id="number2" /><br>
            <input type="submit" value="Saada" />
            <?php
                if (!empty($_GET["number1"]) && !empty($_GET["number2"])) {
                    $number1 = $_GET['number1'];
                    $number2 = $_GET['number2'];

                    if ($number2 == 0) {
                        echo "Nulliga jagamine ei ole sobilik";
                    } else {
                        $jagamine = $number1 / $number2;
                        echo "Jagamise tulemus on " . $jagamine;
                    }
                } else {
                    echo "Sisesta andmed";
                }
            ?>

            <h2>Kumb on vanem?</h2>
            Vanus 1: <input type="number" name="vanus1" id="vanus1" /><br>
            Vanus 2: <input type="number" name="vanus2" id="vanus2" /><br>
            <input type="submit" value="Saada" />
            <?php
                if (!empty($_GET["vanus1"]) && !empty($_GET["vanus2"])) {
                    $vanus1 = $_GET['vanus1'];
                    $vanus2 = $_GET['vanus2'];

                    if ($vanus1 > $vanus2) {
                        echo "Vanus 1 on vanem";
                    } elseif ($vanus1 < $vanus2) {
                        echo "Vanus 2 on vanem";
                    } else {
                        echo "Nad on sama vanad";
                    }
                } else {
                    echo "Sisesta andmed";
                }
            ?>

            <h2>Ristkülik või ruut</h2>
            Külg 1: <input type="number" name="kylg1" id="kylg1" /><br>
            Külg 2: <input type="number" name="kylg2" id="kylg2" /><br>
            <input type="submit" value="Saada" />
            <?php
                if (!empty($_GET["kylg1"]) && !empty($_GET["kylg2"])) {
                    $kylg1 = $_GET['kylg1'];
                    $kylg2 = $_GET['kylg2'];

                    if ($kylg1 == $kylg2) {
                        echo "See on ruut";
                    } else {
                        echo "See on ristkülik";
                    }
                } else {
                    echo "Sisesta andmed";
                }
            ?>

            <h2>Ristkülik või ruut (pilt)</h2>
            <?php
                if (!empty($_GET['kylg1']) && !empty($_GET['kylg2'])) {
                    $kylg1 = $_GET['kylg1'];
                    $kylg2 = $_GET['kylg2'];

                    if ($kylg1 == $kylg2) {
                        echo "<img src='img/root.png'>";
                    } else {
                        echo "<img src='img/tri.jpeg'>";
                    }
                }
            ?>

            <h2>Juubel</h2>
            Sünniaasta: <input type="number" name="synniaasta" id="synniaasta" /><br>
            <input type="submit" value="Saada" />
            <?php
                if (!empty($_GET["synniaasta"])) {
                    $synniaasta = $_GET['synniaasta'];

                    if ($synniaasta % 5 == 0) {
                        echo "Juubel";
                    } else {
                        echo "Ei ole juubel";
                    }
                } else {
                    echo "Sisesta andmed";
                }
            ?>

            <h2>Hinne</h2>
            Punktid: <input type="number" name="punktid" id="punktid" /><br>
            <input type="submit" value="Saada" />
            <?php
                if (!empty($_GET["punktid"])) {
                    $punktid = $_GET['punktid'];

                    switch (true) {
                        case ($punktid < 5):
                            echo "KASIN!";
                            break;
                        case ($punktid >= 5 && $punktid < 10):
                            echo "TEHTUD!";
                            break;
                        case ($punktid == 10):
                            echo "SUPER!";
                            break;
                    }
                } else {
                    echo "Sisesta oma punktid!";
                }
            ?>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
