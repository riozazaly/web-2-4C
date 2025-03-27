<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container">
    <a class="navbar-brand text-dark" href="#">WEB-2</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto"> <!-- Tambahkan "me-auto" agar menu ke kiri -->
        <li class="nav-item">
          <a class="nav-link text-dark" href="<?= base_url('buku');?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="<?= base_url('penulis');?>">Penulis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="<?= base_url('about');?>">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
