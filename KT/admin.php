<!doctype html>
<html lang="et">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-light">

<div class="container my-5">
  <h1 class="mb-4 text-center">Admin panel</h1>


  <div class="card mb-5">
    <div class="card-header bg-primary text-white">Lisa postitus</div>
    <div class="card-body">
      <form method="POST">
        <div class="mb-3">
          <label for="pealkiri" class="form-label">pealkiri</label>
          <input type="text" class="form-control" id="pealkiri" name="pealkiri" required>
        </div>
        <div class="mb-3">
          <label for="sisu" class="form-label">Sisu</label>
          <textarea name="sisu" id="sisu" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" name="lisa" class="btn btn-success">lisa post</button>
      </form>
    </div>
  </div>


  <div class="card mb-5">
    <div class="card-header bg-danger text-white">kustuta postitus</div>
    <div class="card-body">
      <form method="POST">
        <div class="mb-3">
          <label for="kustuta_pealkiri" class="form-label">pealkri</label>
          <input type="text" class="form-control" id="kustuta_pealkiri" name="pealkiri" required>
        </div>
        <button type="submit" name="kustuta" class="btn btn-danger">kustuta</button>
      </form>
    </div>
  </div>


  <div class="card">
    <div class="card-header bg-secondary text-white">valmis postitused</div>
    <div class="card-body">
      <?php
      $posts = glob('posts/*.txt');
      if ($posts) {
          echo "<ul class='list-group'>";
          foreach ($posts as $post) {
              $filename = basename($post, '.txt');
              echo "<li class='list-group-item'>$filename</li>";
          }
          echo "</ul>";
      } else {
          echo "<p class='text-muted'>Postitusi ei ple</p>";
      }
      ?>
    </div>
  </div>

  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      if (isset($_POST['lisa'])) {
          $pealkiri = trim($_POST['pealkiri']);
          $sisu = trim($_POST['sisu']);
          $faili_nimi = "posts/$pealkiri.txt";

          if (!empty($pealkiri) && !empty($sisu)) {
              file_put_contents($faili_nimi, $sisu);
              echo "<div class='alert alert-success mt-4'>Postitus lisatud!</div>";
          }
      }

      if (isset($_POST['kustuta'])) {
          $pealkiri = trim($_POST['pealkiri']);
          $faili_nimi = "posts/$pealkiri.txt";

          if (file_exists($faili_nimi)) {
              unlink($faili_nimi);
              echo "<div class='alert alert-success mt-4'>Postitus kustutatud!</div>";
          } else {
              echo "<div class='alert alert-danger mt-4'>Postitust ei leitud!</div>";
          }
      }
  }
  ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
