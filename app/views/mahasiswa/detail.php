<div class="container mt-5">
  <div class="card" style="width: 18rem">
    <div class="card-body">
      <h5 class="card-title">
        Nama : <?= $data['mhs']['nama']; ?>
      </h5>
      <h6 class="card-subtitle mb-2 text-muted">
        Nim : <?= $data['mhs']['nim']; ?>
      </h6>
      <h6 class="card-text">
        Email : <?= $data['mhs']['email']; ?>
      </h6>
      <h6 class="card-text">
        Program Studi : <?= $data['mhs']['prodi']; ?>
      </h6>
      <a href="<?= base_url; ?>/mahasiswa" class="card-link">Kembali</a>
    </div>
  </div>
</div>