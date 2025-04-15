<?php
if (file_exists('posts.txt')) {
    $postitused = file('posts.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
} else {
    $postitused = [];
}

$bannerid = ['info.jpg', 'matrix.jpg', 'nova.jpg', 'supa.jpg'];
$valitudBanner = $bannerid[array_rand($bannerid)];

if (isset($_GET['page'])) {
    $leht = $_GET['page'];
} else {
    $leht = 'avaleht';
}
?>

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Mathiase Blogi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .banner {
            height: 50vh;
            background-image: url('<?php echo $valitudBanner; ?>');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
            font-weight: bold;
        }
        .sisu {
            min-height: 70vh;
            padding: 2rem;
        }
        .jalus {
            background-color: #f1f1f1;
            text-align: center;
            padding: 1rem;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="?page=avaleht">Mathiase Blogi</a>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="?page=avaleht">Avaleht</a></li>
            <li class="nav-item"><a class="nav-link" href="?page=minust">Minust</a></li>
            <li class="nav-item"><a class="nav-link" href="?page=kontakt">Kontakt</a></li>
            <li class="nav-item"><a class="nav-link" href="?page=admin">Admin</a></li>
        </ul>
    </div>
</nav>

<div class="banner">Mathiase Blogi</div>

<div class="sisu container">
<?php
if ($leht == 'avaleht') {
    echo "<h2>Viimased postitused</h2>";
    $uusimad = array_slice($postitused, 0, 4);
    if (count($uusimad) > 0) {
        foreach ($uusimad as $rida) {
            $osad = explode('|', $rida);
            if (count($osad) == 2) {
                echo "<h4>" . htmlspecialchars($osad[0]) . "</h4>";
                echo "<p>" . htmlspecialchars($osad[1]) . "</p><hr>";
            }
        }
    } else {
        echo "<p>Postitusi pole saadaval.</p>";
    }
    echo "<a href='?page=koik' class='btn btn-primary'>Vaata kõiki postitusi</a>";
}

elseif ($leht == 'minust') {
    echo "<h2>Minust</h2><p>Mina olen Mathias Möll, IT-õpilane. See on minu blogi katsetus PHP ja HTML-iga.</p>";
}

elseif ($leht == 'kontakt') {
    echo "<h2>Kontakt</h2><p>Kirjuta mulle: mathias@skibidi.gg<br>Tel: +372 5555 5555</p>";
}

elseif ($leht == 'admin') {
    echo "<h2>Adminnileht</h2>";
    ?>
    <form method="post" action="admin_handler.php" class="mb-4">
        <div class="mb-3">
            <label for="pealkiri" class="form-label">Pealkiri</label>
            <input type="text" name="title" id="pealkiri" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="sisu" class="form-label">Sisu</label>
            <textarea name="content" id="sisu" rows="3" class="form-control" required></textarea>
        </div>
        <button type="submit" name="action" value="add" class="btn btn-success">Lisa postitus</button>
    </form>
    <h3>Olemasolevad postitused</h3>
    <?php
    foreach ($postitused as $indeks => $rida) {
        $osad = explode('|', $rida);
        if (count($osad) == 2) {
            echo "<div class='border p-3 mb-3'>";
            echo "<strong>" . htmlspecialchars($osad[0]) . "</strong><br>";
            echo "<p>" . htmlspecialchars($osad[1]) . "</p>";
            echo "<form method='post' action='admin_handler.php' style='display:inline-block;'>
                    <input type='hidden' name='index' value='$indeks'>
                    <button type='submit' name='action' value='delete' class='btn btn-danger btn-sm'>Kustuta</button>
                  </form>";
            echo "</div>";
        }
    }
}

elseif ($leht == 'koik') {
    echo "<h2>Kõik postitused</h2>";
    foreach ($postitused as $rida) {
        $osad = explode('|', $rida);
        if (count($osad) == 2) {
            echo "<h4>" . htmlspecialchars($osad[0]) . "</h4>";
            echo "<p>" . htmlspecialchars($osad[1]) . "</p><hr>";
        }
    }
}

else {
    echo "<h2>404</h2><p>Seda lehte ei ole olemas...</p>";
}
?>
</div>

<div class="jalus">
     2025 Mathias Möll
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>