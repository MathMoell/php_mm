<!doctype html>
<html lang="en">
    <head>
        <title>Harjutus 13</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    </head>

    <body>
        <div class="container">
            <h1>Harjutus 13</h1>

            <form action="" method="post" enctype="multipart/form-data">
                <input type="file" name="minu_fail"><br>
                <input type="submit" value="Lae üles!" />
            </form>

            <?php
                if (isset($_FILES['minu_fail'])) {
                    $failinimi = $_FILES['minu_fail']['name'];
                    $faili_tuup = $_FILES['minu_fail']['type'];
                    $faili_ajutine_nimi = $_FILES['minu_fail']['tmp_name'];
                    $faili_veakood = $_FILES['minu_fail']['error'];

                    $lubatud_tuubid = array('image/jpeg', 'image/jpg');

                    if (in_array($faili_tuup, $lubatud_tuubid)) {
                        if ($faili_veakood === 0) {
                            $faili_nimi = uniqid('', true) . '.' . pathinfo($failinimi, PATHINFO_EXTENSION);
                            $faili_sihtkoht = 'pildid/' . $faili_nimi;

                            if (!is_dir('pildid')) {
                                mkdir('pildid', 0777, true);
                            }

                            if (move_uploaded_file($faili_ajutine_nimi, $faili_sihtkoht)) {
                                echo "Faili üleslaadimine õnnestus!<br>";
                                echo "<a href='" . $faili_sihtkoht . "' target='_blank'>
                                        <img src='" . $faili_sihtkoht . "' class='img-fluid' style='max-width: 200px;'/>
                                      </a>";
                            } else {
                                echo "Tekkis viga faili üleslaadimisel!";
                            }
                        } else {
                            echo "Tekkis viga faili üleslaadimisel!";
                        }
                    } else {
                        echo "Vale failitüüp! Lubatud on ainult JPG või JPEG.";
                    }
                }

                $piltide_kaust = 'pildid/';
                if (is_dir($piltide_kaust)) {
                    $failid = array_diff(scandir($piltide_kaust), array('..', '.'));
                    if (!empty($failid)) {
                        echo "<h2>Üleslaaditud pildid:</h2><div class='row'>";
                        foreach ($failid as $fail) {
                            if (in_array(pathinfo($fail, PATHINFO_EXTENSION), ['jpg', 'jpeg'])) {
                                echo "<div class='col-md-3'>
                                        <a href='" . $piltide_kaust . $fail . "' target='_blank'>
                                            <img src='" . $piltide_kaust . $fail . "' class='img-fluid' style='max-width: 100%; height: auto;'/>
                                        </a>
                                      </div>";
                            }
                        }
                        echo "</div>";
                    } else {
                        echo "Ei leitud ühtegi üleslaaditud pilti.";
                    }
                }
            ?>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>
