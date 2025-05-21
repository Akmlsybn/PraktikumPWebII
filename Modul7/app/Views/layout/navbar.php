<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">📘 Modul 7</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav align-items-center">
        <?php if (session()->get('logged_in')) : ?>
          <li class="nav-item ms-3">
            <a href="/pages/logout" class="btn btn-outline-light btn-sm">Logout</a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>