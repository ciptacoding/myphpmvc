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
}
