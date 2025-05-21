<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

    <style>
      body {
        background-color: #f9f9f4;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
      }

      main {
        flex: 1;
        padding: 2rem 1rem;
      }

      footer {
        background-color: #343a40;
        color: #fff;
        text-align: center;
        padding: 1rem 0;
        margin-top: auto;
      }
    </style>
  </head>

  <body>
    <!-- Include Navbar -->
    <?= $this->include('layout/navbar'); ?>

    <!-- Main Content -->
    <main class="container">
      <?= $this->renderSection('content'); ?>
    </main>

    <footer>
      &copy; <?= date('Y'); ?> Modul 7 Praktikum | Akmallullail Sya'ban
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>