<div class="container mt-4">
  <!-- flash message -->
  <div class="row">
    <div class="col-lg-6">
      <?php
      Flasher::flash() //panggil class Flasher method flash() 
      ?>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary mb-2 tampilModalTambah" data-toggle="modal" data-target="#formModal">
        Tambah Data Mahasiswa
      </button>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6">
      <form action="<?= base_url; ?>/mahasiswa/cari" method="POST">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Cari Mahasiswa.." name="keyword" id="keyword" autocomplete="off">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6">
      <h3>Daftar Mahasiswa</h3>
      <ul class="list-group">
        <?php foreach ($data['mhs'] as $mhs) : ?>
          <li class="list-group-item">
            <?= $mhs['nama']; ?>
            <a href="<?= base_url; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right ml-2" onclick="return confirm('Yakin?')">Hapus</a>
            <a href="<?= base_url; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-success float-right ml-2 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">Ubah</a>
            <a href="<?= base_url; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right">Detail</a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url; ?>/mahasiswa/tambah" method="post">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama">
          </div>
          <div class="form-group">
            <label for="nim">Nim</label>
            <input type="number" class="form-control" id="nim" name="nim" autocomplete="off" placeholder="Masukan Nim">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email">
          </div>
          <div class="form-group">
            <label for="prodi">Prodi</label>
            <select class="form-control" id="prodi" name="prodi">
              <option value="Sistem Informasi">Sistem Informasi</option>
              <option value="Sistem Komputer">Sistem Komputer</option>
              <option value="Teknologi Informasi">Teknologi Informasi</option>
              <option value="Bisnis Digital">Bisnis Digital</option>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>