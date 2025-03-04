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
            <h1>Harjutus 6</h1>
            <?php

                for ($i = 1; $i <= 100; $i++) {
                    echo $i;
                    if ($i % 10){
                        echo ". ";
                    } else {
                        echo "<br><br>";
                    }
                }

                for ($i = 1; $i <= 10; $i++) {
                    echo "*";
                }

                for ($i = 1; $i <= 10; $i++) {
                    echo "<br>*";
                }

                echo "<br>";
                echo '<form action="#" method="get"> <input type="number" name="ruut" id="ruut"> <input type="submit" value="ruudusta"> </form>';
                for ($i = 1; $i <= $_GET['ruut']; $i++) {
                    echo "<br>";
                    for ($k = 1; $k <= $_GET['ruut']; $k++) {
                        echo "* ";
                    }
                    
                }

                for ($i = 10; $i >= 1; $i--) {
                    if ($i % 2 == 0) {
                        echo "<br>".$i;
                    }
                }
                echo "<br> <br>";

                for ($i = 3; $i <= 100; $i += 3) {
                    echo " ".$i;
                }
                echo "<br><br>";

                $poisid = array("Targo", "Jarmo", "Mathias");
                $tydrukud = array("Jane", "Melanie", "Eve");
                for ($i = 0; $i < count($poisid); $i++) {
                    echo $poisid[$i]." ".$tydrukud[$i]."<br>"; 
                }
                echo "<br><br>";
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