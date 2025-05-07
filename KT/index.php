<!DOCTYPE html>
<html lang="et">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MOELL</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>

<?php

$leht = 'Avaleht';
$lubatud = ['Avaleht', 'minust', 'kontakt', 'admin'];

if (!empty($_GET['leht']) && in_array($_GET['leht'], $lubatud)) {
    $leht = $_GET['leht'];
}

$taustad = ["pilt/paradox.jpg", "pilt/nova.jpg", "pilt/matrix.jpg"];
shuffle($taustad);
$taust = $taustad[0];
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php?leht=Avaleht">MOELL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navmenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="index.php?leht=Avaleht">Avaleht</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?leht=minust">Minust</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?leht=kontakt">Kontakt</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?leht=admin">Admin</a></li>
      </ul>
    </div>
  </div>
</nav>

<header class="text-white text-center d-flex align-items-center justify-content-center" style="height: 400px; background: url('<?php echo $taust; ?>') no-repeat center center / cover;">
  <div>
    <h1 class="display-5 fw-semibold">Blogi Minust</h1>
    <p class="lead">Mathias Moell IT23 2025</p>
  </div>
</header>
<main class="container my-5">
  <?php
    $fail = $leht . '.php';
    if (file_exists($fail)) {
        include($fail);
    } else {
        echo '<h2 class="text-center">Lehte pole</h2>';
    }
  ?>
</main>

<footer class="text-center py-4 mt-5 bg-dark text-white">
  <p class="mb-0">MOELL 2025</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>
