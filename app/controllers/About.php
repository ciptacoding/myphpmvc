<?php

class About extends Controller
{
  public function index($nama = 'Cipta', $pekerjaan = 'Mahasiswa', $umur = '21')
  {
    $data['title'] = 'About';
    $data['nama'] = $nama;
    $data['pekerjaan'] = $pekerjaan;
    $data['umur'] = $umur;
    $this->view('templates/header', $data);
    $this->view('about/index', $data);
    $this->view('templates/footer');
  }
  public function page()
  {
    $data['title'] = 'Page';
    $this->view('templates/header', $data);
    $this->view('about/page');
    $this->view('templates/footer');
  }
}
