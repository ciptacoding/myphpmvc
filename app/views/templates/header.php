<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $data['title']; ?></title>
  <link rel="stylesheet" href="<?= base_url; ?>/css/bootstrap.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container">
      <a class="navbar-brand text-white" href="<?= base_url; ?>">PHP MVC</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a class="nav-link text-white" href="<?= base_url; ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url; ?>/mahasiswa">Mahasiswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url; ?>/about">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>