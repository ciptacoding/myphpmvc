<?php

class Mahasiswa_model
{
  private $tabel = 'mahasiswa';
  private $db;

  public function __construct()
  {
    $this->db = new Database; //instance class Database, sehingga smua methodnya bisa digunakan
  }

  public function getAllMhs()
  {
    $this->db->query('SELECT * FROM ' . $this->tabel);
    return $this->db->resultSet();
    // method query dan resultSet merupakan hasil dari instance class Database
  }

  public function getDetailMhs($id)
  {
    $this->db->query('SELECT * FROM ' . $this->tabel . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }
}

// array assosiatif
/*  private $mhs = [
    [
      "nama" => "Abel Yoshuara",
      "nim" => "200030182",
      "email" => "abelyhs@gmail.com",
      "prodi" => "Sistem Informasi"
    ],

    [
      "nama" => "Agus Widiatmika",
      "nim" => "200030482",
      "email" => "aguswdtmk@gmail.com",
      "prodi" => "Sistem Informasi"
    ],

    [
      "nama" => "Nyoman Mastra",
      "nim" => "200030582",
      "email" => "nymmastra@gmail.com",
      "prodi" => "Sistem Informasi"
    ],
  ];
*/