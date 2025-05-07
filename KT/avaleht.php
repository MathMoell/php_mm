<!DOCTYPE html>
<html lang="et">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MOELL</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light text-dark">

<main class="container my-5">
  <h1 class="text-center mb-4">MOELL blog</h1>

  <?php
  $postitused = glob('posts/*.txt');

  if ($postitused) {
      foreach ($postitused as $postitus) {
          $faili_info = pathinfo($postitus);
          $faili_sisu = file_get_contents($postitus);
          $pealkiri = htmlspecialchars($faili_info['filename']);

          echo "<div class='card mb-4 shadow-sm'>";
          echo "  <div class='card-body'>";
          echo "    <h5 class='card-title'>$pealkiri</h5>";
          echo "    <p class='card-text'>". nl2br(htmlspecialchars($faili_sisu)) ."</p>";
          echo "  </div>";
          echo "</div>";
      }
  } else {
      echo "<p class='text-muted text-center'>Postitusi ei leitud.</p>";
  }
  ?>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
