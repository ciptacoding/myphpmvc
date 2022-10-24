<?php

class Mahasiswa extends Controller
{
  public function index()
  {
    $data['title'] = 'Mahasiswa';
    $data['mhs'] = $this->model('Mahasiswa_model')->getAllMhs();
    $this->view('templates/header', $data);
    $this->view('mahasiswa/index', $data);
    $this->view('templates/footer');
  }

  public function detail($id)
  {
    $data['title'] = 'Detail Mahasiswa';
    $data['mhs'] = $this->model('Mahasiswa_model')->getDetailMhs($id);
    $this->view('templates/header', $data);
    $this->view('mahasiswa/detail', $data);
    $this->view('templates/footer');
  }
  public function tambah()
  {
    if ($this->model('Mahasiswa_model')->tambahDataMhs($_POST) > 0) {
      Flasher::setFlash('berhasil', 'ditambah', 'success');
      header('Location: ' . base_url . '/mahasiswa');
      exit;
    } else {
      Flasher::setFlash('gagal', 'ditambah', 'danger');
      header('Location: ' . base_url . '/mahasiswa');
      exit;
    }
  }

  public function hapus($id)
  {
    if ($this->model('Mahasiswa_model')->hapusDataMhs($id) > 0) {
      Flasher::setFlash('berhasil', 'dihapus', 'success');
      header('Location: ' . base_url . '/mahasiswa');
      exit;
    } else {
      Flasher::setFlash('gagal', 'dihapus', 'danger');
      header('Location: ' . base_url . '/mahasiswa');
      exit;
    }
  }

  public function getUbah()
  {
    echo json_encode($this->model('Mahasiswa_model')->getMhsById($_POST['id']));
  }

  public function ubah()
  {
    if ($this->model('Mahasiswa_model')->ubahDataMhs($_POST) > 0) {
      Flasher::setFlash('berhasil', 'diubah', 'success');
      header('Location: ' . base_url . '/mahasiswa');
      exit;
    } else {
      Flasher::setFlash('gagal', 'diubah', 'danger');
      header('Location: ' . base_url . '/mahasiswa');
      exit;
    }
  }

  public function cari()
  {
    $data['title'] = 'Daftar Mahasiswa';
    $data['mhs'] = $this->model('Mahasiswa_model')->cariDataMhs();
    $this->view('templates/header', $data);
    $this->view('mahasiswa/index', $data);
    $this->view('templates/footer');
  }
}
